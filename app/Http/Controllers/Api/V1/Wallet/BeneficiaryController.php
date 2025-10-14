<?php

namespace App\Http\Controllers\Api\V1\Wallet;


use App\Models\Beneficiary;
use App\Traits\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\Api\V1\WalletService;
use App\Traits\PaginatedResourceTrait;
use App\Http\Requests\Api\V1\BeneficiaryRequest;
use App\Http\Resources\Api\V1\BeneficiaryResource;


class BeneficiaryController extends Controller
{
     use ApiResponse, PaginatedResourceTrait;
    public function __construct(protected WalletService $walletService)
    {
    }

    public function index()
    {


        $beneficiaries = $this->walletService->getBeneficiaries(
            withRelations:['user']
        );
        try {
            if (!$beneficiaries) {
                return $this->error('No beneficiaries found', 404);
            }

            return $this->success(BeneficiaryResource::collection($beneficiaries));
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function store(BeneficiaryRequest $request)
    {
        try {
            $data = $request->validated(); // ✅ convert to array
            $beneficiary = $this->walletService->beneficiaryStoreOrUpdate($data);

            return $this->success(new BeneficiaryResource($beneficiary));
        } catch (\Exception $e) {
            logger()->error('User info update failed: ' . $e->getMessage());
            return $this->error('Failed to update user info', 500);
        }
    }

    public function delete($uuid)
    {
        Beneficiary::whereUuid($uuid)->firstOrFail()->delete();

        record_deleted_flash();

        return redirect()->back();
    }
}
