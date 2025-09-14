<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        if (! Auth::check() || Cart::count() == 0) {
            return redirect()->route('front.home');
        }

        set_page_meta('Checkout');
        $data['platformCharge'] = number_format(Cart::priceTotal() * (config('settings.platform_charge') / 100), 2);

        $data['totalPrice'] = Cart::total() + $data['platformCharge'];

        $data['billingAddress'] = $this->getBillingAddress();

        return view('frontend.checkout', $data);
    }

    public function getBillingAddress()
    {
        return BillingAddress::where('user_id', Auth::id())->first();
    }
}
