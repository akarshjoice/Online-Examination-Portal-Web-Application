<?php 
session_start();
  if(!isset($_SESSION["userid"]))
		header("index.php");
 $hn='localhost';
 $un='root';
 $pw='';
 $db='exam';
 $conn=new mysqli($hn,$un,$pw,$db);
 if($conn->connect_error)
          die($conn->connect_error);

  
  $_SESSION["submit"]=$_SESSION["submit"]+1;
           $a=$_SESSION['userid'] ;
          

           $query="SELECT * FROM studentinfo WHERE name='$a'";
           $result=$conn -> query($query);
           $j=0;
           $result -> data_seek($j);
           $b=$result -> fetch_assoc()['mark'];
           $b=$b+1;
           $query="UPDATE studentinfo SET mark='$b' WHERE name='$a'";
            $result=$conn -> query($query);

            
         
      

              header("Location: questions.php");


              ?>
