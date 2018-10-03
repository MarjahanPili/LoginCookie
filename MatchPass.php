<?php
session_start();
$user=array("A","B","C","D","E","pili");
$pass=array("111","222","333","444","555","123");
$flag=0;
$n=$_GET['un'];
$p = $_GET['pass'];



for($i=0;$i<5;$i++)
{
	if($user[$i]==$n)
	{		
	if($pass[$i]==$p)
	{
		$flag=1;
	
		break;
	}		
	}
}
if($flag==0)
{	
  $l_stat="3";
$_SESSION['l_stat']="3";
header("Location: index.php");
}
else
{  
	$l_stat="1";
   $$_SESSION['l_stat']=$l_stat;
	$my_array=array($n, $p);
	$_SESSION['IDP']=$my_array;
	echo "Pass Matched";
	header("Location:login_handeler.php");
}

?>