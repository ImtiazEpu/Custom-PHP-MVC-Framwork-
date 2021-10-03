<?php

namespace App\Controllers;

use App\Models\Buyer;
use DateTime;
use DateTimeZone;
use Respect\Validation\Validator;

class UserController {

	public function getIndex() {
		view( "home" );
	}

	public function postIndex( ) {


		//Local Timezone
		$dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));

		$validator = new Validator();
		$error       = [];
		$amount      = $_POST['amount'];
		$buyer       = $_POST['buyer'];
		$receipt_id  = $_POST['receipt_id'];
		$items       = $_POST['items'];
		$buyer_email = $_POST['buyer_email'];
		$buyer_ip    = getIPAddress();
		$note        = $_POST['note'];
		$city        = $_POST['city'];
		$phone       = $_POST['phone'];
		$hash_key    = hash( 'sha512', $receipt_id );
		$entry_at    = $dt->format('Y-m-d H:i:s');;
		$entry_by    = $_POST['entry_by'];

		//Validation
		if ( $validator::number()->validate( $amount ) === false ) {
			$error['amount'] = "Amount field allow only number";
		}
		if ( $validator::alnum( ' ' )->length( null, 20 )->validate( $buyer ) === false ) {
			$error['buyer'] = "Buyer field allow only text, spaces and numbers, not more than 20 characters";
		}
		if ( $validator::alpha()->validate( $receipt_id ) === false ) {
			$error['receipt_id'] = "Receipt ID field allow only text";
		}
		if ( $validator::alpha(',' ,' ')->validate( $items ) === false ) {
			$error['items'] = "Items field allow only text";
		}
		if ( $validator::email()->validate( $buyer_email ) === false ) {
			$error['buyer_email'] = "Please Enter a valid email";
		}
		$note = str_word_count( $note );
		if ( $validator::max( 30 )->validate( $note ) === false ) {
			$error['note'] = "Note field allow maximum 30 word";
		}
		if ( $validator::alpha( ' ' )->validate( $city ) === false ) {
			$error['city'] = "City field allow only text and space";
		}
		if ( $validator::phone()->validate( $phone ) === false ) {
			$error['phone'] = "Phone filed allow only valid phone number";
		}
		if ( $validator::number()->validate( $entry_by ) === false ) {
			$error['entry_by'] = "Only number are allow";
		}


		if ( empty( $error ) ) {
			Buyer::create( [
				'amount'      => $amount,
				'buyer'       => $buyer,
				'receipt_id'  => $receipt_id,
				'items'       => $items,
				'buyer_email' => $buyer_email,
				'buyer_ip'    => $buyer_ip,
				'note'        => $note,
				'city'        => $city,
				'phone'       => $phone,
				'hash_key'    => $hash_key,
				'entry_at'    => $entry_at,
				'entry_by'    => $entry_by,
			] );

			$_SESSION['success'] = "Form Successfully Submitted";
			header('Location: /reports');
		}
		$_SESSION['errors'] = $error;
		header('Location: /');
	}
}