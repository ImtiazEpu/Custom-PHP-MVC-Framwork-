<?php
if ( ! function_exists( 'view' ) ) {
	function view( $view = 'home' ) {
		require_once __DIR__ . '/../../views/' . $view . '.php';
	}
}
if ( ! function_exists( 'partials_view' ) ) {
	function partials_view( $view = 'home' ) {
		require_once __DIR__ . '/../../views/partials/' . $view . '.php';
	}
}

function getIPAddress() {
	$ip = isset( $_SERVER['HTTP_CLIENT_IP'] ) ? $_SERVER['HTTP_CLIENT_IP'] : ( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'] );

	return $ip;
}

if ( ! function_exists( 'dd' ) ) {
	function dd( $data ) {
		echo '<pre>';
		var_dump( $data );
		echo '</pre>';
		die();
	}
}
if ( ! function_exists( 'withData' ) ) {
	function withData( $array ) {
		foreach ( $array as $key => $value ) {
			$_SESSION[ $key ] = $value;
		}
	}
}
