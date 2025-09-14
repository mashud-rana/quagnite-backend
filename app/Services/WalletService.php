<?php

namespace App\Services;

use App\Models\Refund;
use App\Models\Withdraw;
use App\Models\Beneficiary;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Common\WithdrawRequset;
use App\Http\Requests\Common\BeneficiaryRequest;

class WalletService
{
    public function __construct()
    {
    }

    public function storeBeneficiary(BeneficiaryRequest $request)
    {
        $data = $request->validated();

        $beneficiary = Beneficiary::create($data);

        return $beneficiary;
    }

    public function storeWithdrawRequest(WithdrawRequset $request)
    {

        DB::transaction(function () use ($request) {

            Withdraw::create([
                'user_id' => auth()->id(),
                'amount' => $request->amount,
                'beneficiary_id' => $request->beneficiary_id,
            ]);

            $user = Auth::user();
            // Update the balance using the decrement method
            $user->decrement('balance', $request->amount);
        }, 5);

        return true;
    }

    public function getBeneficiaries()
    {
        return Beneficiary::whereUserId(auth()->user()->id)->get();
    }

    public function getWithdrawRequests()
    {
        return Withdraw::where('user_id', auth()->id())->with('beneficiary')->latest()->get();
    }

    public function getRefundRequests()
    {
        return Refund::where('user_id', auth()->id())->with('beneficiary')->latest()->get();
    }

    public function getTransactions()
    {
        return Transaction::where('user_id', auth()->id())->latest()->get();
    }

    public function getPendingWithdrawBalance()
    {
        return Withdraw::where('user_id', auth()->id())->pending()->sum('amount');
    }

    public function getPendingRefundBalance()
    {
        return Refund::where('user_id', auth()->id())->pending()->sum('amount');
    }
}
