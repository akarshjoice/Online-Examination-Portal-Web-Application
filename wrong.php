<?php 
   session_start();
	if(!isset($_SESSION['userid']))
		header("Location: index.php");
     $qid=$_SESSION["count"];
     array_push($_SESSION['incorrect'], $qid);
     header("Location: questions.php");
 ?>     
