<?php

namespace App\Http\Repos;

use App\Model\Payments;

class PaymentRepo
{
	public function getAllPayment()
	{
		return Payments::all();
	}
}