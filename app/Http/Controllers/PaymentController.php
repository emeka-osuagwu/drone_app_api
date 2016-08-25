<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $time   =  time() + 3600;
        $path   = '/';
        $data   = json_encode($request->all());
        $domain = env('host'); 

        setcookie("__R_TOKEN", $data, $time, $path, $domain);
       
        return $this->paystackRepo->redirectToGateway();
    }

    public function getPaymentResponse()
    {
        $response           = $this->paystackRepo->handleGatewayCallback();
        $request_data       = json_decode($_COOKIE['__R_TOKEN']);
        $response_data      = $response['data'];

        if ($response['data']['status'] === "success") 
        {
            $this->paymentRepo->savePaymentInfo($response, $request_data);
        }
        else
        {
            dd('something is wrong');
        }
    }
}
