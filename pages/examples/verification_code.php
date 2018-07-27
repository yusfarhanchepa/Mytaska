<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $no_phone = $_POST['no_phone'];

   
	// Authorisation details.
	$username = "bssdddlo@newsusfun.com";
	$hash = "b0eb7c57d9c69d23f6ae7a0c148b4ad7c1d5e06be983062153f8291aff388c0a";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "API Test"; // This is who the message appears to be from.
	$numbers = $no_phone; // A single number or a comma-seperated list of numbers
	$message = "MyTaska: Your Verification code is admin.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);


    echo '<script>window.alert( "Verification has sent!"); window.location=("../examples/sign-up.php"); </script>';

}
?>