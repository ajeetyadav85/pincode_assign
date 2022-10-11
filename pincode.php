<?php 
$pincode=$_POST['pincode'];
$pincode_details=file_get_contents('https://api.postalpincode.in/pincode/'.$pincode);
//echo $pincode_details;
$pincode_details=json_decode($pincode_details);

// echo'<pre>';
// print_r($pincode_details);

if(isset($pincode_details->PostOffice['0'])){
	//$arr['city']=$pincode_details->PostOffice['0']->Taluk;
	$arr['state']=$pincode_details->PostOffice['0']->State;

	//print_r($arr);die();

}else{
	//$arr['state']=$pincode_details->PostOffice['0']->State;

	echo 'no data';
}

?>


