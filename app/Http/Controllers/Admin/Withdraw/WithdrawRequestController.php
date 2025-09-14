<?php

namespace App\Http\Controllers\Admin\Withdraw;

use App\DataTables\Admin\WithdrawRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Withdraw Request|Payout Withdraw Request|Show Withdraw Request|Reject Withdraw Request', ['only' => ['index']]);
        $this->middleware('permission:Show Withdraw Request', ['only' => ['show']]);
        $this->middleware('permission:Payout Withdraw Request', ['only' => ['payout', 'payoutStore']]);
        $this->middleware('permission:Reject Withdraw Request', ['only' => ['reject', 'destroy']]);
    }

    public function index(WithdrawRequestDataTable $dataTable)
    {
        set_page_meta('Withdraw Request');

        return $dataTable->render('admin.withdraw.request');
    }

    public function show($id)
    {
        $withdraw = Withdraw::whereId($id)->with('beneficiary')->firstOrFail();
        set_page_meta('Withdraw Request');

        return view('admin.withdraw.show', [
            'withdraw' => $withdraw,
        ]);
    }

    public function payout($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        set_page_meta('Payout');

        return view('admin.withdraw.payout', [
            'withdraw' => $withdraw,
        ]);
    }

    public function payoutStore(Request $request)
    {
        $request->validate([
            'payout_type' => 'required',
            'note' => 'required',
        ]);

        if ($request->payout_type == 'create') {

            DB::transaction(function () use ($request) {

                $withdraw = Withdraw::findOrFail($request->id);
                $withdraw->note = $request->note;
                $withdraw->status = COMPLETE;
                $withdraw->save();

                $withdraw->transactions()->create([
                    'user_id' => $withdraw->user_id,
                    'amount' => $withdraw->amount,
                    'type' => DEBIT,
                ]);
            });

            record_created_flash();

            return back();
        }

        if ($request->payout_type == 'update') {

            $withdraw = Withdraw::findOrFail($request->id);
            $withdraw->note = $request->note;
            $withdraw->save();

            record_updated_flash();

            return back();
        }
    }

    public function reject($id)
    {
        $withdraw = Withdraw::findOrFail($id);

        if ($withdraw->status == REJECT) {

            record_deleted_flash('Already Rejected');

            return back();
        } else {

            DB::transaction(function () use ($withdraw) {

                $withdraw->status = REJECT;
                $withdraw->save();

                $this->restoreUserBalance($withdraw->user_id, $withdraw->amount);
            });
        }

        record_deleted_flash();

        return back();
    }

    public function destroy($id)
    {
        try {
            $withdraw = Withdraw::findOrFail($id);

            if ($withdraw->status == REJECT) {
                $withdraw->delete();
            } else {
                $this->restoreUserBalance($withdraw->user_id, $withdraw->amount);
                $withdraw->delete();
            }
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            return back();
        }
    }

    public function restoreUserBalance($userId, $balance)
    {
        return User::whereId($userId)->increment('balance', $balance);
    }
}
