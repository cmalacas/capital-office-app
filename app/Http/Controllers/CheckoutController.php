<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function view() 
    {
        return view('checkout.view');
    }
}
