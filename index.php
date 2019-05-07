<?php

setCookie("user","demo");
?>

<?php
session_start();

 $hn='localhost';
 $un='root';
 $pw='';
 $db='exam';
 $conn=new mysqli($hn,$un,$pw,$db);
 if($conn->connect_error)
          die($conn->connect_error);



             $_SESSION["count"]=0;
             $_SESSION["incorrect"]=array();
             $_SESSION["submit"]=0;
    
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {   
	$a = $_POST['username'];
	$b = $_POST['password'];
	$query="SELECT * FROM studentinfo WHERE name='$a' AND password='$b'";
    $result=$conn -> query($query);
   $row=$result->num_rows;
  
         if($result->num_rows)
         {
         	 // session_start();	
            $_SESSION['userid'] = $a;
            $query="UPDATE studentinfo SET mark='0' WHERE name='$a'";
            $result=$conn -> query($query);
	 //$_SESSION['tmr']=(time()+20 +0*60 +0*60*60 )*1000;
 
            header("Location: instr.php");
	     }
	     else
	    {
	echo "<script>alert('Incorrect Credentials,Try again')</script>";
	}
     }  
  ?>
<html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Hariharan">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="login_style.css">
<script>
function fun1(){
var x=document.getElementById("p");
if(document.getElementById("c").checked)
{
x.setAttribute("type","text");
}
else
{
x.setAttribute("type","password");
}
}
</script>
<style>
body{
background-color:#394d00;
}
h1{
text-align:center;
color:white;
margin:auto;
padding:75px;
overflow:hidden;
}
.container{
background-color:#4b6600;
padding:10px;
width:300px;
margin:auto;
}
h2{
color:white;
text-align:center;
overflow:hidden;
margin:0;
}
form{
padding:10px;
}
input.l{
margin:5px 0;
width:100%;
box-sizing:border-box;
}
button{
padding:5px;
background-color:lightgreen;
border:none;
margin:5px 0;
width:100%;
cursor:pointer;
}
a:link {
color: blue;
text-decoration:none;
}
button:hover{
background-color:red;
}
</style>
</head>
<body>
<h1>Exam Portal</h1>
<div class="container">
<h2>Login</h2>
<form action="index.php" method="post">
<b>User Id</b><br>
<input type="text" class="l" placeholder="Enter EmailId" name="username" required><br>
<b>Password</b><br>
<input type="password" class="l" id="p" placeholder="Enter Password" name="password" required><br>
<button type="submit"><b>Login<b></button>
Not Registered? <a href="signup.php">Click Here<a><br>
<p><input type="checkbox" id="c" onclick="fun1()">Show password</p>
</form>
</div>
</body>
</html>

