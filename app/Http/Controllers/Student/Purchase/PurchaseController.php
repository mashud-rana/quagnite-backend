<?php

namespace App\Http\Controllers\Student\Purchase;

use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function index()
    {
        set_page_meta('Purchase');

        return view('student.purchase.index');
    }
}
