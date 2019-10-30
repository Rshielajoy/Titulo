<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.modal{
        display:none;
        position:relative;
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
    .modal-content{
        background-color: #fefefe;
        margin:auto;
        padding: 20px;
        border: 1px solid #888;
}
</style>
<body>




<div class="card" style="background-color:#252b37;height:50px;" id="cardTop">
	<img src="./images/profile.png" width="380" height="180" style="position:absolute;top:-65px;right:150px;">
	<p style="color:white;position:absolute;top:10px;right:120px;">JonardTanilon@gmail.com</p>
</div>
<div class="header" style="background-color:#24a787;height:60px;">
	<a href="landsearch.php" style="text-decoration:none;"><img src="./images/titulu.png" width="100" height="60"><h2 style="color:white;font-family:Impact;position:relative;top:-45px;left:75px;width:100px;">ITULO</h2></a>
	
		<input type="submit" name="submit" id="register" value='Register' class="btn" onclick="register()" style="border-radius:20px;background-color:#252b37;color:white;font-weight: bold;right:10px;position:absolute;top:10px;">
		<a href="Logout.php" style="right:10px;position:absolute;top:10px;text-decoration:none;font-weight:bold;" id="Logout">Logout</a>

		<div style="border:1px solid black;height:50px;width:0px;position:absolute;right:100px;top:5px;" id="div"></div>
		<input type="submit" id="login" name="submit" value='Login'  onclick="Login()" class="btn" style="border-radius:20px;background-color:#252b37;color:white;font-weight: bold;right:110px;position:absolute;top:10px;">
</div>
 <div id="myModal" class="modal">
            <CENTER>
	            	<div class="card" style="width:400px;top:-80px;">
	            			<div class="card-header">
							    <h4>Register</h4>
							  </div>
							  <br>
		               		<input type="text" class="form-control" name="gmail" placeholder="Register through Google Account" style="width:300px;">
		               		<br>
		               		<input type="password" class="form-control" name="gmail" placeholder="Type your password" style="width:300px;">
		               		<br>
		               		<input type="password" class="form-control" name="gmail" id="retype" placeholder="Retype your password" style="width:300px;">
		               		<br>
		                <input type="button" class="btn" value="okay" name="close" id="close" style="background-color:#24a787;color:white;width:200px;">
		                <br>
		                
	                </div>
                </CENTER>
        </div>
</body>
</html>
<script type="text/javascript">
	function register(){
		 document.getElementById('myModal').style.display='block';
            var close = document.getElementById('close');
            close.onclick = function(){
                 document.getElementById('myModal').style.display='none';
                 window.location.href='register.php';
            }
	}
	function Logout(){
		window.location.href='./Logout.php';
	}
	function Login(){
		document.getElementById('myModal').style.display='block';
		document.getElementById('retype').style.display='none';
            var close = document.getElementById('close');
            close.onclick = function(){
                 document.getElementById('myModal').style.display='none';
                 window.location.href='register.php';
            }
	}
</script>