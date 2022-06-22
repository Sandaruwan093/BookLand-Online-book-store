<?php

	session_start();
	
	include("config.php");
	
	$_SESSION['cid']=null;

    $_SESSION['cn']=null;
	
    $con->query("DELETE FROM cart WHERE id=1")
					 or die($con->error);

	header("Location: home.php");

?>