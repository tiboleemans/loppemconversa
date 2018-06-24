<?php

echo $_GET["passInput"];
echo "test";

array(
    "july2018" => "paterleon",
    "august2018" => "paterleon",
    "july2017" => "paterleon", 
    "august2017" => "paterleon" 
);

if($_GET["passInput"] == "paterleon"){
	$response_array['status'] = 'success';
} else {
	$response_array['status'] = 'error';
}

echo json_encode($response_array);

?>