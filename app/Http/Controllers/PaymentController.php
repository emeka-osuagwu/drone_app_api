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
            
            return redirect('preview/' . $request_data->post_id);
        }
        else
        {
            dd('something is wrong');
        }
    }
}
