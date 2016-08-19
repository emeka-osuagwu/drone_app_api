<?php

namespace App\Http\Repos;

use Payments;

class PaymentRepo
{

	public function getAllPayment()
	{
		return Payments::all();
	}
}