<?php
//header('Content-type: application/json');
$k = $_SERVER['REQUEST_METHOD'];
//$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";

if(isset($k))
{

$json = array("status" => 1, "msg" => $_POST['name']);
echo json_encode($json);
}
else{
	$i = 0;



$jsonOutput['meta']['status'] = 'error';
            $jsonOutput['meta']['code'] = '400';
            $jsonOutput['meta']['message'] = $errorMsg;
            $jsonOutput['data'] = '';




	$json = array("status" => 0, "msg" => "post value not");
}
?>