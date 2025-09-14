<?php

namespace App\Http\Controllers\Teacher\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Common\WithdrawRequset;
use App\Services\WalletService;

class WalletController extends Controller
{
    public function __construct(protected WalletService $walletService) {}

    public function index()
    {
        $user = auth()->user();
        $userBalance = auth()->user()->balance;
        $requests = $this->walletService->getWithdrawRequests();
        $refundRequests = $this->walletService->getRefundRequests();
        $transactions = $this->walletService->getTransactions();
        $beneficiaries = $this->walletService->getBeneficiaries();
        $pendingWithrawBalance = $this->walletService->getPendingWithdrawBalance();
        $pendingRefundBalance = $this->walletService->getPendingRefundBalance();

        set_page_meta('Wallet');
        if ($user->user_type != USER_TYPE_STUDENT) {
            return view('common.wallet.index', [
                'userBalance' => $userBalance,
                'requests' => $requests,
                'transactions' => $transactions,
                'beneficiaries' => $beneficiaries,
                'pendingWithrawBalance' => $pendingWithrawBalance,
            ]);
        } else {
            return view('common.wallet.student', [
                'refundRequests' => $refundRequests,
                'transactions' => $transactions,
                'beneficiaries' => $beneficiaries,
                'pendingRefundBalance' => $pendingRefundBalance,
            ]);
        }

    }

    public function storeWithdrawRequest(WithdrawRequset $request)
    {
        $this->walletService->storeWithdrawRequest($request);

        record_created_flash();

        return redirect()->back();
    }
}
