<?php
session_start();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
	
	<?php 

$x=array();
/*for($i=0;$i<2;$i++)
{
	//$x[$i]=$_SESSION['IDP'][$i];
	
		 if(isset($_SESSION['IDP'][$i]))
		 {
        $x[$i]=$_SESSION['IDP'][$i];
		echo $x[$i]."<br>";
	}
	else
	{

$x[$i]="";
	}
}
*/
if(isset($_SESSION['IDP'][0]))
		 {
        $x[$i]=$_SESSION['IDP'][$i];
		echo $x[0]."<br>";
	}
if(isset($_SESSION['IDP'][1]))
		 {
        $x[$i]=$_SESSION['IDP'][$i];
		echo $x[1]."<br>";
	}

	//echo $_COOKIE['$Login_Stat'];
	//$x[$i]=$_SESSION['IDP'][$i];
	
		 if(isset($_SESSION['l_stat'])){
        $l_stat=$_SESSION['l_stat'];
		
	}
	else
	{

$l_stat=100;
	}
//echo $l_stat;

?>


		
		<form  method="get" action="MatchPass.php">
		
			<table>
			  <tr>
				<td colspan="2" align="center"><h2>LogIn</h2></td>
			  </tr>
			  <tr>
				<td>Username/Email :</td><td> <input type="text" name="un" value="<?php echo  $x[0]; ?>"></td>				  
			  </tr>
			  <tr>
				<td>Password :</td><td><input type="password" name="pass" value="<?php echo  $x[1]; ?>"></td>
			  </tr>
			  <tr>
				  <td align="center"><input type="reset" value="Cancel"></td>
				  <td align="center"><input type="submit" value="Submit"></td>
			  </tr>			
              			  
			  
		  </table>
		  
		</form> 
		
		<?php
if ($l_stat == "3"):
    echo "Password/Username Do not Match";
    echo "...";
	session_destroy();
elseif ($l_stat == "100"):
    
else:
    echo "Sucsessfully Logged Out";
	session_destroy();
endif;
?>
		
	</body>
</html>