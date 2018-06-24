<?php

$passBySessions = array(
    "july2018" => "juli2018",
    "august2018" => "augustus2018",
    "july2017" => "juli2017", 
    "august2017" => "augustus2017" 
);

$session = $_GET["session"];
$password = $_GET["pass"];
$req_pass = $passBySessions[$session];

if( $req_pass == $password){
	$response_array['status'] = 'success';
} else {
	$response_array['status'] = 'error';
}

echo json_encode($response_array);

?>