<?php
include 'landsearch.php';
if (!isset($_SESSION['already_register'])) {
	echo "<script type='text/javascript'>
	window.alert('you are required to login or register first');
	</script>";
}else{
	echo "<script type='text/javascript'>
	window.location.href='result.php';
	</script>";
}
?>