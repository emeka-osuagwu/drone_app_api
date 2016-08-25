<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getAllPayment()
    {
    	$purchases =  $this->paymentRepo->getAllPayment();
    	return view('dashboard.pages.purchases', compact('purchases'));
    }

    public function makePayment()
    {
        return $this->paystackRepo->handleGatewayCallback();
    }

    

}
