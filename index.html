<!DOCTYPE html>
<html>
<head>
	<title>Pincode Assignment</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body>



  <style type="text/css">
   .table > thead > tr > th {

    border-bottom: 1px solid #dddddd !important;
  }

</style>
<!-- =========================Preloader =============================================== -->

<script>

  window.onload=function(){

    document.getElementById('loader').style.display="none";
    document.getElementById('frmPincode').style.display="block";

  }
</script>


<div id="loader" style="position: absolute;top: 50%;left: 45%;">
  <img src="https://cdn.dribbble.com/users/1787505/screenshots/7300251/media/a351d9e0236c03a539181b95faced9e0.gif" height="50px">
</div>

<!-- ==================================================================================== -->


<div class="container-fluid" id="frmPincode" style="background-color: #3BB78F;">
	<form method="POST" id="form" >
    <div class="col-md-12" style="height: 130px;margin-top: 10px;">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
         <span style="color: #fff !important">INDIAN PINCODE SEARCH :</span><input type="text"  name="pincode" id="pincode" maxlength="6" minlength="6" placeholder="Enter Pincode" onkeydown="validation()" style="height:40px;width: 300px;">
         

         <a type="button" href="javascript:void(0)"  class="btn btn-primary" value="Search" onclick="getpincode_details()"> Check</a>
         <br>
         <p id="text" style="font-size: 16px;font-weight: bold;"></p>

       </div>
     </div>

   </div>
 </form>
 <p>There is no details of courier company and state code in this api</p>
 <hr style="border:1px solid #dddddd !important;">

 <table class="table">
  <thead>
    <tr style="color: #000;">
      <th scope="col">#</th>
      <th scope="col">PINCODE</th>
      <th scope="col">COURIER COMPANY</th>
      <th scope="col">CITY NAME</th>
      <th scope="col">STATE NAME</th>
      <th scope="col">STATE CODE</th>
      <th scope="col">COD</th>

    </tr>
  </thead>
  <tbody>
    <tr style="color:#fff !important">
      <th scope="row">1</th>
      <td id=""></td>
      <td id="courier_name"></td>
      <td id="city"></td>
      <td id="state"></td>
      <td id="state_code"></td>
      <td id="cod"></td>
    </tr>
    
    
  </tbody>
</table>

</div>



<script src="assets/js/jquery-3.6.js"></script>

<script src="assets/js/bootstrap.min.js"></script>


</body>
</html>
<!-- ========For Validation ======================= -->
<script>


  function validation(){
    var form=document.getElementById('form');
    var pincode=document.getElementById('pincode').value;
    var text=document.getElementById('text');
    var pattern=/[0-9]/;

    // if (pincode.match(pattern)) {
    //     text.innerHTML="Valid Pincode";
    //     text.style.color="green";
    // }
    if(pincode.length == 6 && pincode.match(pattern) ){

      text.innerHTML="Valid Pincode";
      text.style.color="green";
      

    }else{

      text.innerHTML="Invalid Pincode";
      text.style.color="red";

      
    }
    if (pincode=="") {
      text.innerHTML="Please enter the pincode";
    }
  }

</script>

<!-- ======To fetch pincode details============== -->
<script>
  function getpincode_details(){
    var pincode=jQuery('#pincode').val();

    if(pincode.length!=6){
      alert('Pincode Must be of 6 digit');
    }
     // if (pincode=='') {
     //  jQuery('#state').val('');
     //     jQuery('#city').val('');
     // }
     

     else{
      jQuery.ajax({
        url:'get.php',
        type:'post',
        data:'pincode='+pincode,
        success: function(result){
          //console.log(result);

          var pincode_data=$.parseJSON(result);
          console.log(pincode_data);
          jQuery('#pincode').html(pincode_data.pincode);
          jQuery('#cod').html(pincode_data.DeliveryStatus);
          
          jQuery('#state').html(pincode_data.state);
          jQuery('#city').html(pincode_data.city);
          

        }
        
      });
    }
  }
</script>


