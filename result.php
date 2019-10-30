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
	document.getElementById('tit').style.display='none';
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
#icon{
	position:relative;
	left:-20px;
}
</style>
<div style="width:800px;height:570px;top:10px;left:20px;overflow:auto;padding:15px;position:relative;">
	<div style="width: 100%; display: block">
			<div class="card" style="width:330px; display: block; float: right">
			  <img class="card-img-top" src="./images/terrain4.PNG" alt="Card image cap">
			  <div class="card-body">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item"><i class="fas fa-map-marker-alt" id="icon"></i>Emily Homes,Cabantian Davao City</li>
				    <li class="list-group-item"><i class="fas fa-user" id="icon"></i>***** ***** *******</li>
				    <li class="list-group-item"><i class="fas fa-info" id="icon"></i>For sale
				    	<input type="button" name="discover2" value="Discover" class="btn" style="width:100px;background-color:#24a787;color:white;position:absolute;left:200px;">
				    </li>
				  </ul>
			  </div>
			</div>
			<script>
				function gotoDiscover1(){
					window.location.href='discover1.php';
				}
			</script>
			<div class="card" style="width:330px;position:relative;left:30px;">
			  <img class="card-img-top" src="./images/terrain2.PNG" alt="Card image cap">
			  <div class="card-body">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item"><i class="fas fa-map-marker-alt" id="icon"></i>Country-homes,Cabantian Davao City</li>
				    <li class="list-group-item"><i class="fas fa-user" id="icon"></i>***** ***** *******</li>
				    <li class="list-group-item"><i class="fas fa-info" id="icon"></i>For sale
				    	<input type="button" name="discover2" value="Discover" onclick="goto1()" class="btn" style="width:100px;background-color:#24a787;color:white;position:absolute;left:200px;">
				    </li>
				  </ul>
				  <script type="text/javascript">
				  	function goto1(){
				  		window.location.href='discover2.php';
				  	}
				  </script>
			  </div>
			</div>
			<br>
			<div class="card" style="width:330px;position:relative;left:30px;">
			  <img class="card-img-top" src="./images/terrain33.PNG" alt="Card image cap">
			  <div class="card-body">
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item"><i class="fas fa-map-marker-alt" id="icon"></i>Amakan,Cabantian Davao City</li>
				    <li class="list-group-item"><i class="fas fa-user" id="icon"></i>***** ***** *******</li>
				    <li class="list-group-item"><i class="fas fa-info" id="icon"></i>For sale
				    	<input type="button" name="discover2" value="Discover" class="btn" style="width:100px;background-color:#24a787;color:white;position:absolute;left:200px;">
				    </li>
				  </ul>
			  </div>
			</div>
	</div>
	</div>
	<br>
<form action='result.php' method="post">
	<div style="width:400px;height:400px;left:900px;top:80px;position:absolute;background-color:#f6f7f9;" class="card" id="adjust">
		<center>
		<div class="header" style="box-shadow: 1px 2px 4px rgba(0,0,0,.2);padding:8px;" id="header"><h4>Search</h4></div>
		<img src="./images/search.png" width="40" height="40" style="position:absolute;top:5px;left:250px;">
		<br>
		<br>
		<input type="text" name="address" placeholder="search by area" class="form-control" style="width:300px;">
		<br>
		<input type="submit" name="submit" class="btn" style="width:200px;background-color:#24a787;color:white" value="submit" >
		
		<h5>Filter</h5><select name="filter">
			<option value="public">public</option>
			<option value="for lease">for lease</option>
			<option value="for sale">for sale</option>
			<option value="Government owned">Government owned</option>
		</select>
		</center>
	</div> 
</form>
<div class="footer" style="position:relative;top:157px;font-family:calibri;background-color:#252b37;color:white;padding:10px 20px;">
Copyright &copy; 2019 Titulo Team Black
</div>
</body>
</html>
<script type="text/javascript">
	document.getElementById('adjust').style.top='150px';
</script>
