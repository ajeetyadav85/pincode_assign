<?php
$_POST['pincode'];
$pincode=$_POST['pincode'];
$pincode_details=file_get_contents('http://postalpincode.in/api/pincode/'.$pincode);
$pincode_details=json_decode($pincode_details);
//echo "<pre>";
//print_r($pincode_details);die();
if(isset($pincode_details->PostOffice['0'])){
	$arr['city']=$pincode_details->PostOffice['1']->Taluk;
	$arr['state']=$pincode_details->PostOffice['1']->State;
	$arr['DeliveryStatus']=$pincode_details->PostOffice['0']->DeliveryStatus;

	//print_r($arr);die();
	echo json_encode($arr);
}else{
	echo 'no';
}
?>