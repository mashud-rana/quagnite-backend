<?php

namespace App\Http\Controllers\Teacher\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\BeneficiaryRequest;
use App\Models\Beneficiary;
use App\Services\WalletService;

class BeneficiaryController extends Controller
{
    public function __construct(protected WalletService $walletService)
    {
    }

    public function index()
    {
        $user = auth()->user();
        $beneficiries = $this->walletService->getBeneficiaries();

        return view('common.wallet.beneficiary', compact('beneficiries', 'user'));
    }

    public function store(BeneficiaryRequest $request)
    {
        $this->walletService->storeBeneficiary($request);

        record_created_flash();

        return redirect()->back();
    }

    public function delete($uuid)
    {
        Beneficiary::whereUuid($uuid)->firstOrFail()->delete();

        record_deleted_flash();

        return redirect()->back();
    }
}
