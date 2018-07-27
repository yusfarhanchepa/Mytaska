<?php

  //start session in all pages
  if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
  //if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

	// sandbox or live
	define('PPL_MODE', 'sandbox');

	if(PPL_MODE=='sandbox'){
		
		define('PPL_API_USER', 'bisnes_api1.mytaska.com');
		define('PPL_API_PASSWORD', 'QT8C6TRJX4GJQVER');
		define('PPL_API_SIGNATURE', 'AFbtoae17G1snrl8ZQGTOr-6vaYpAKc3uI2K7e3G.Y88T9EIl-J2FPPI');
	}
	else{
		
		define('PPL_API_USER', 'bbisnes_api1.mytaska.com');
		define('PPL_API_PASSWORD', 'QT8C6TRJX4GJQVER');
		define('PPL_API_SIGNATURE', 'AFbtoae17G1snrl8ZQGTOr-6vaYpAKc3uI2K7e3G.Y88T9EIl-J2FPPI');
	}
	
	define('PPL_LANG', 'EN');
	
	define('PPL_LOGO_IMG', 'http://url/to/site/logo.png');
	
	define('PPL_RETURN_URL', 'http://localhost/admin/pages/bayar/process.php');
	define('PPL_CANCEL_URL', 'http://localhost/admin/pages/bayar/cancel_url.php');

	define('PPL_CURRENCY_CODE', 'MYR');
