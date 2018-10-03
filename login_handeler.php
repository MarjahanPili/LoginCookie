<?php
session_start();
	echo "Welcome ".$_SESSION['IDP'][0];
	$link_address="logout.php";
	echo "<a href='$link_address'>Logout</a>";
?>