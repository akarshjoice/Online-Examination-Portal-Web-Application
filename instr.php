<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 session_start();
 $_SESSION['tmr']=(time()+20 +0*60 +0*60*60 )*1000;

            header("Location: questions.php");
}
?>   
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="login_style.css">
<style>
body{
background-color:powderblue;
}
.container{
background-color:#f1f1f1;
padding:10px;
width:700px;
height:300px;
margin:auto;
border-style:solid;
border-width:2px;
border-radius:10px;
}
h2{
color:blue;
text-align:center;
overflow:hidden;
margin:0;
}
</style>
<script>
window.alert("Please read the instructions carefully");
</script>
</head>
<body>
<center><h1>Exam Guidelines</h1></center>
<div class="container">
<form action="instr.php" method="post">
<ol>
<li>Make sure you have a good internet connection.</li><br>
<li>The exam must be completed in one sitting</li><br>
<li>You will have 30 minutes to complete the test</li><br>
<li>All questions are Multiple choice</li><br>
<li>Questions will be based on general aptitude and technical skills</li><br>
</ol>
<center><button type="submit">Begin</button></center>
</form>
</div>
</body>
</html>

