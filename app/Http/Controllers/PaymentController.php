<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function getAllPayment()
    {
    	return $this->paymentRepo->getAllPayment()->get();
    }
}
