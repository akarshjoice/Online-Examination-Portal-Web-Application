<?php
  session_start();
	if(!isset($_SESSION["userid"]))
		header("index.php");
  $_SESSION["submit"]=$_SESSION["submit"]+1;
   header("Location: wrong.php");
 ?>
