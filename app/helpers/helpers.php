<?php
if (!function_exists('view')){
	function view($view = 'home'){
		require_once __DIR__.'/../../views/'.$view.'.php';
	}
}
if (!function_exists('partials_view')){
	function partials_view($view = 'home'){
		require_once __DIR__.'/../../views/partials/'.$view.'.php';
	}
}
