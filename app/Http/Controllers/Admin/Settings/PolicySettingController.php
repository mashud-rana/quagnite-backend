<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicySettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All PolicySettings|Update PolicySettings',
            ['only' => ['privacy', 'termsAndConditions', 'refund', 'cookie']]);
        $this->middleware('permission:Update PolicySettings',
            ['only' => ['privacyUpdate', 'termsAndConditionsUpdate',
                'refundUpdate', 'cookieUpdate']]);
    }

    // Privacy
    public function privacy()
    {
        set_page_meta('Privacy Policy');
        $policy = Policy::select('type', 'description')
            ->whereType(1)->firstOrFail();

        return view('admin.settings.policy.privacy', ['policy' => $policy]);
    }

    public function privacyUpdate(Request $request)
    {
        $this->policyValidation($request);

        Policy::whereType($request->type)->firstOrFail()->update([
            'description' => $request->description,
        ]);

        record_updated_flash();

        return back();
    }

    // Terms and conditions
    public function termsAndConditions()
    {
        set_page_meta('Terms & Conditions');
        $policy = Policy::select('type', 'description')
            ->whereType(2)->firstOrFail();

        return view('admin.settings.policy.terms-conditions',
            ['policy' => $policy]);
    }

    public function termsAndConditionsUpdate(Request $request)
    {
        $this->policyValidation($request);

        Policy::whereType($request->type)->firstOrFail()->update([
            'description' => $request->description,
        ]);

        record_updated_flash();

        return back();
    }

    // Refund
    public function refund()
    {
        set_page_meta('Refund Policy');
        $policy = Policy::select('type', 'description')
            ->whereType(3)->firstOrFail();

        return view('admin.settings.policy.refund', ['policy' => $policy]);
    }

    public function refundUpdate(Request $request)
    {
        $this->policyValidation($request);

        Policy::whereType($request->type)->firstOrFail()->update([
            'description' => $request->description,
        ]);

        record_updated_flash();

        return back();
    }

    // Cookie
    public function cookie()
    {
        set_page_meta('Cookie Policy');
        $policy = Policy::select('type', 'description')
            ->whereType(4)->firstOrFail();

        return view('admin.settings.policy.cookie', ['policy' => $policy]);
    }

    public function cookieUpdate(Request $request)
    {
        $this->policyValidation($request);

        Policy::whereType($request->type)->firstOrFail()->update([
            'description' => $request->description,
        ]);

        record_updated_flash();

        return back();
    }

    // Validation
    public function policyValidation(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'description' => 'required',
        ]);
    }
}
