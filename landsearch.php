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
	document.getElementById('title').style.top='100';
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
    <script type="text/javascript" src="./libraries/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="./icons/css/all.min.css">
</head>
<style type="text/css">
	@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 15s slidy infinite; 
}

</style>
<body>
<div style='position:relative;width:800px;height:400px;top:60px;left:60px;' class="fadeImg">
	<div id="slider">
		<figure>
		<img src="images/titulu.png" width="800" height="400" alt>
		<img src="images/message1.PNG" width="800" height="400" alt>
		<img src="images/terrain2.PNG" width="800" height="400" alt>
		<img src="images/terrain33.PNG" width="800" height="400" alt>
		<img src="images/terrain4.PNG" width="800" height="400" alt>
		</figure>
</div>
</div>
<form>
	<div style="width:400px;height:400px;left:900px;top:160px;position:absolute;background-color:#f6f7f9;" class="card">
		<center>
		<div class="header" style="box-shadow: 1px 2px 4px rgba(0,0,0,.2);padding:10px;" id="header"><h4>Search</h4></div>
		<img src="./images/search.png" width="40" height="40" style="position:absolute;top:5px;left:250px;">
		<br>
		<input type="text" name="address" placeholder="search by area" class="form-control" style="width:300px;">
		<br>
		<input type="button" name="submit" class="btn" onclick="validate()" style="width:200px;background-color:#24a787;color:white" value="submit" >
		<br>
		<script type="text/javascript">
			function validate(){
				window.location.href='validate.php';
			}
		</script>
		<br>
		<h5>Filter</h5><select name="filter">
			<option value="public">public</option>
			<option value="for lease">for lease</option>
			<option value="for sale">for sale</option>
			<option value="Government owned">Government owned</option>
		</select>
		<br>
		<br>
		<img src="./images/LRA.png" width="80" height="80">
		<img src="./images/blockchain.png" width="240" height="40">
		</center>
	</div>
</form>
<div class="footer" style="position:relative;top:157px;font-family:calibri;background-color:#252b37;color:white;padding:10px 20px;">
Copyright &copy; 2019 Titulo Team Black
</div>
</body>
</html>
</script>