<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost","root","","testing");
$response = array();
if($con){
	$sql = "SELECT * FROM test";
	$result = mysqli_query($con,$sql);
	$json_array = array();
	if($result){
		header("Content-Type: JSON");
		$i=0;
		while($row = mysqli_fetch_assoc($result)){
			$json_array[] = $row;
		
		}
		echo json_encode($json_array,JSON_PRETTY_PRINT);
	}
}
?>