<?php

namespace App\Http\Repos;

use App\Model\Payments;

class PaymentRepo
{
	public function getAllPayment()
	{
		return Payments::with('user', 'post')->get();
	}

	public function getPaymentWhere($field, $value)
	{
		return Payments::where($field, $value);
	}

	public function savePaymentInfo($response, $request_data)
	{

		$create = [
			"user_id" 			=> $request_data->user_id,
			"post_id" 			=> $request_data->post_id,
			"card_type" 		=> $response['data']['authorization']['card_type'],
			"customer_id" 		=> $response['data']['customer']['id'],
			"amount_paid" 		=> $response['data']['amount'],
			"payment_type" 		=> $response['data']['authorization']['channel'],
			"customer_code" 	=> $response['data']['customer']['customer_code'],
			"payment_status" 	=> $response['data']['status'],
			"transaction_date" 	=> $response['data']['transaction_date'],
		]; 

		Payments::create($create);
	}
}