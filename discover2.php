<?php
include('template.php');
session_start();
if(isset($_SESSION['already_register'])){
	echo "<script type='text/javascript'>
	document.getElementById('login').style.display='none';
	document.getElementById('register').style.display='none';
	document.getElementById('div').style.display='none';
	document.getElementById('cardTop').style.display='block';
	document.getElementById('Logout').style.display='block';
	</script>";
}else{
	echo "<script type='text/javascript'>
	document.getElementById('login').style.display='block';
	document.getElementById('register').style.display='block';
	document.getElementById('div').style.display='block';
	document.getElementById('cardTop').style.display='none';
	document.getElementById('Logout').style.display='none';
	</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Land search</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="./icons/css/all.min.css">
    <script type="text/javascript" src="./libraries/jquery.js"></script>
</head>
<body>
<style type="text/css">
	#inputWithIcon{
	position:relative;
	margin:0px;
}
#inputWithIcon i{
	position: absolute;
	top:4px;
	padding:8px;
	left:17px;
}
.modal2{
        display:none;
        position: fixed;
        z-index:1;
        padding-top:200px;
        left:0;
        top:0;
        width:100%;
        height:100%;
        overflow:auto;
        background-color:rgb(0,0,0);
        background-color:rgba(0,0,0,0.4);
    }
    .modal-content2{
        background-color: #fefefe;
        margin:auto;
        padding: 20px;
        border: 1px solid #888;
</style>
<div style="width:740px;height:400px;position:relative;top:60px;left:50px;" class="card">
	<img src="./images/discover2.PNG" width="750" height="400">
	</div>
	<div style="width:330px;height:500px;left:900px;top:80px;position:absolute;" id="adjust">
		<div class="card" style="width:330px;position:relative;left:30px;">
			  <img class="card-img-top" src="./images/terrain2.PNG" height="150" alt="Card image cap">
			  <div class="card-body">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item" id="Owned">Owned By: ***** ***** ******</li>
				    <li class="list-group-item">Land Area: 104sqm</li>
				    <li class="list-group-item">Amount: P500,000</li>
				    <li class="list-group-item" id="contact">Contact: 09*********</li>
				    <CENTER>
				    <li class="list-group-item"><Input type='button' class='btn' value='Uncover' onclick='Uncover()' style='width:200px;background-color:#24a787;color:white;' /></li>
				  	</CENTER>
				  </ul>
				  <script type="text/javascript">
				  	function goto1(){
				  		window.location.href='discover2.php';
				  	}
				  	function Uncover(){
				  		window.alert('you must pay P50.00 to Uncover the info');

				  	}
				  </script>
			  </div>
			 
	</div>
		<div id="myModal2" class="modal2">
            <CENTER>
	            	 <img src="images/payment.png" style="width:30%;height:50%;">	
	            		<input type="button" id="close2" name="close" class="btn" style="position:relative;background-color:#24a787;color:white;left:-390px;top:160px;" value="continue">
                </CENTER>
        </div>
       	</div>
       	<div class="footer" style="position:relative;top:257px;left:0px;font-family:calibri;background-color:#252b37;color:white;padding:10px 20px;">
Copyright &copy; 2019 Titulo Team Black
</div>
</body>
</html>
<script type="text/javascript">
	document.getElementById('adjust').style.top='150px';
	
     function Uncover(){
     	document.getElementById('myModal2').style.display='block';
            var close = document.getElementById('close2');
            close.onclick = function(){
                 document.getElementById('myModal2').style.display='none';
                 document.getElementById('Owned').innerHTML='Owned By: Abdur Rahim Jumlani';
                 document.getElementById('contact').innerHTML='Contact : 09238876498';
            }
     }
</script>

<!-- land area-->
<!-- contact number-->
<!-- price-->
<!-- personal information-->
<!-- geo map-->
<!-- price-->
<!-- button-->
<!--<input type="button" name="discover2" value="Discover" class="btn" style="width:100px;background-color:#24a787;color:white;position:absolute;left:200px;">-->

