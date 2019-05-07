<?php
 $hn='localhost';
 $un='root';
 $pw='';
 $db='exam';
 $conn=new mysqli($hn,$un,$pw,$db);
 if($conn->connect_error)
          die($conn->connect_error);
    
      if($_SERVER["REQUEST_METHOD"]=="POST")
          {
             $a=$_POST['name'];
             $b=$_POST['rollno'];
             $c=$_POST['dob']; 
             $d=$_POST['address'];
             $e=$_POST['cgpax'];
             $f=$_POST['cgpaxii'];
             $g=$_POST['cgpa'];  
             $h=$_POST['yop'];
             $i=$_POST['password'];
             $mark=0;
             if(isset($_POST['adduser']))
             {
              $query="INSERT INTO studentinfo(name,rollno,dob,address,cgpax,cgpaxii,cgpa,yop,password,mark) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$mark')";
             $result=$conn->query($query);

		
                header("Location: index.php");

            }

           }
       ?>
