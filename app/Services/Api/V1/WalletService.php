<?php

namespace App\Services\Api\V1;


use App\Models\Refund;
use App\Models\Withdraw;
use App\Models\Beneficiary;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Common\WithdrawRequset;
use App\Http\Requests\Common\BeneficiaryRequest;

class WalletService
{
    public $fileService;
    public function __construct(FileService $fileService)
    {
         $this->fileService = $fileService;
    }

   public function beneficiaryStoreOrUpdate($data, $uuid = null)
    {
        try {
            // dd($data, Beneficiary::whereUuid($uuid)->firstOrFail());
            // Upload image
            if (isset($data['image']) && $data['image'] != null) {
                $user_type = auth()->user()->user_type;
                if ($uuid) {
                    $item = Beneficiary::whereUuid($uuid)->firstOrFail();
                    if ($item->image) {
                        $this->fileService->delete($item->image);
                    }
                    $src_path = $this->fileService->upload($data['image'], "beneficary/{$user_type}");
                    $data['image'] = $src_path;
                } else {
                    $src_path = $this->fileService->upload($data['image'], "beneficary/{$user_type}");
                    $data['image'] = $src_path;
                }
            } else {
                unset($data['image']);
            }

            // Save or update
            if ($uuid) {
                return Beneficiary::whereUuid($uuid)->firstOrFail()->update($data);
            } else {
                return Beneficiary::create($data);
            }

        } catch (\Exception $e) {
            throw $e;
        }
    }



    public function getBeneficiaries(
          array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        return Beneficiary::whereUserId(auth()->user()->id)
          ->select($selectedFields)
        ->latest()
        ->with($withRelations)
        ->get();
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
