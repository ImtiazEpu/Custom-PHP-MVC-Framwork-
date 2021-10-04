<?php

namespace App\Controllers;

use App\Models\Buyer;

class ReportController {

	public function index() {
		$buyer = Buyer::all();
		//dd($buyer);
		withData(['buyer_list' => $buyer]);
		view( "report" );
	}

	public function filterData() {
		$buyer = Buyer::where( 'entry_at', '>=', $_POST['from'] )->where( 'entry_at', '<=', $_POST['to'] )->get();
		//dd($buyer);
		withData(['buyer_list' => $buyer]	);
		view( "report" );
	}
}