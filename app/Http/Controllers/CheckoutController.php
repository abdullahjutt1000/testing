<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function openCheckoutPage(Request $request){
        return view("site.checkout");
    }
}