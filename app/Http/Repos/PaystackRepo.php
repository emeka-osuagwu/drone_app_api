<?php

namespace App\Http\Repos;

use Paystack;

class PaystackRepo
{

	public function redirectToGateway()
	{
	    return Paystack::getAuthorizationUrl()->redirectNow();
	}

	public function handleGatewayCallback()
	{
	    return Paystack::getPaymentData();
	}
}