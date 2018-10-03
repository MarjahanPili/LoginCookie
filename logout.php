<?php
session_start();

 session_destroy(); //destroy entire session 

 session_start();
 $s="55";
 $_SESSION['l_stat']=$s;
 header("location:index.php");

?>