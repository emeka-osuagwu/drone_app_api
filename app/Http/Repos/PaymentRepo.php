<?php

namespace App\Http\Repos;

use App\Model\Payments;

class PaymentRepo
{
	public function getAllPayment()
	{
		return Payments::all();
	}

	public function savePaymentInfo($response, $request_data)
	{
		$create = [
			"user_id" 			=> 1,
			"video_id" 			=> $request_data->video_id,
			"card_type" 		=> $response['data']['authorization']['card_type'],
			"customer_id" 		=> $response['data']['customer']['id'],
			"payment_type" 		=> $response['data']['authorization']['channel'],
			"customer_code" 	=> $response['data']['customer']['customer_code'],
			"payment_status" 	=> $response['data']['status'],
			"transaction_date" 	=> $response['data']['transaction_date'],
		];

		Payments::create($create);
	}
}