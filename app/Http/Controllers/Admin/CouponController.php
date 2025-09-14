<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CouponDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CouponRequest;
use App\Models\Coupon;
use Illuminate\Support\Str;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Coupons|Edit Coupon|Create Coupon|Delete Coupon', ['only' => ['index']]);
        $this->middleware('permission:Create Coupon', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Coupon', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Coupon', ['only' => ['delete']]);
    }

    public function index(CouponDataTable $dataTable)
    {
        set_page_meta('Coupons');

        return $dataTable->render('admin.coupon.index');
    }

    public function create()
    {
        set_page_meta('Add Coupon');

        return view('admin.coupon.create');
    }

    public function edit(string $id)
    {
        $coupon = Coupon::find($id);

        return view('admin.coupon.edit', [
            'coupon' => $coupon,
        ]);
    }

    public function store(CouponRequest $request)
    {
        $coupon = new Coupon;
        $coupon->uuid = Str::uuid()->toString();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->percentage = $request->percentage;
        $coupon->minimum_amount = $request->minimum_amount;
        $coupon->maximum_use_limit = $request->maximum_use_limit;
        $coupon->status = $request->status;
        $coupon->save();

        record_created_flash();

        return back();
    }

    public function update(CouponRequest $request, string $id)
    {
        $coupon = Coupon::find($id);
        $coupon->uuid = Str::uuid()->toString();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->start_date = $request->start_date;
        $coupon->end_date = $request->end_date;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->percentage = $request->percentage;
        $coupon->minimum_amount = $request->minimum_amount;
        $coupon->maximum_use_limit = $request->maximum_use_limit;
        $coupon->status = $request->status;
        $coupon->save();

        record_updated_flash();

        return back();
    }

    public function delete(string $id)
    {
        Coupon::find($id)->delete($id); // delete record

        record_deleted_flash();

        return redirect()->back();
    }
}
