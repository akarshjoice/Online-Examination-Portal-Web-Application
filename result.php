<html>

<style>
.button {
  background-color: #808000; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {font-size: 16px;}

body{
background-color:#808000;
}

</style>
<header><center><h1>RESULT</h1></center></header>
<body>

<?php
$hn='localhost';
 $un='root';
 $pw='';
 $db='exam';
 $conn=new mysqli($hn,$un,$pw,$db);
 if($conn->connect_error)
          die($conn->connect_error);



        session_start();
           $u=$_SESSION['userid'] ;
           $y=$_SESSION['submit'];
           //$z=$_SESSION['count']-1;
	   $query1="SELECT * FROM questions";
           $result1=$conn -> query($query1);
	   $rows=$result1->num_rows;
           $query="SELECT * FROM studentinfo WHERE name='$u'";
           $result=$conn -> query($query);
           $j=0;
           $result -> data_seek($j);
           $b=$result -> fetch_assoc()['mark'];

            echo "<center><p><font size='5'> TOTAL QUESTIONS:".$rows."</font></p></center>";
            echo "<center><p><font size='5'> TOTAL ATTEMPTED:".$y."</font></p></center>";
            echo "<center><p><font size='5'> CORRECT ANS:".$b."</font></p></center>";
            echo "<center><p> <font size='5'>TOTAL MARKS:".$b."</font></p></center>";
		    echo "<br><center><p> <font size='5'>WRONGLY MARKED QUESTIONS"."</font></p></center></br>";
		   

if(isset($_SESSION['incorrect']))
{
    foreach($_SESSION['incorrect'] as $a)
    {
           $query="SELECT * FROM questions WHERE qid='$a'";
           $result=$conn -> query($query);
           $j=0;
           $result -> data_seek($j);
    		$row = $result -> fetch_array(MYSQLI_ASSOC);
            	$c=$row['qid'];
    		$d=$row['que'];
    		$e=$row['ans'];
         echo "<font size='4'><center><p2>".$c."-".$d."</p2></center><font>";
         echo "<center><p>CORRECT ANSWER:-".$e."</p></center>"; 
    }
}



?>
<center><input type="button" value="Logout" onclick="location.href='thankyou.php'"></center>
</body>
</html> 






