<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="login_style.css">
<style>
body{
background-color:powderblue;
}
</style>
<script>
function fun()
{
/*var c=document.getElementById("n").value;
if(c!=NULL)
{
	
}*/
var a=document.getElementById("pd").value;
var b=document.getElementById("cpd").value;
if(a==b)
{
	document.getElementById('s').disabled = false;
}

}
</script>
</head>
<body>
	<H1>SIGN UP</H1>
   <form method="POST" action="addtotablestdinfo.php">
	<table>
	<tr><td>NAME:</td><td><input type="text" name="name" id="n" required><br></td></tr>
	<tr><td>ROLL NO:</td><td><input type="text" name="rollno" required><br></td></tr>
    <tr><td>DOB:</td><td><input type="text" name="dob" required><br></td></tr>
    <tr><td>ADDRESS:</td><td><input type="text" name="address" required><br></td></tr>
    <tr><td>CLASS 10 CGPA:</td><td><input type="text" name="cgpax" required><br></td></tr>
   <tr><td>CLASS 12 CGPA:</td><td><input type="text" name="cgpaxii" required><br></td></tr>
    <tr><td>CGPA(Till 5th Semester):</td><td><input type="text" name="cgpa" required><br></td></tr>
    <tr><td>YEAR OF PASSING:</td><td><input type="text" name="yop" required><br></td></tr>
	<tr><td>PASSWORD:</td><td><input type="password" name="password" id="pd" onchange="fun()" required><br></td></tr>
	<tr><td>CONFIRM PASSWORD:</td><td><input type="password" name="cpassword" id="cpd" onchange="fun()" required><br></td></tr>
	</table>
	<input type="Submit" name="adduser" id="s" value="Register" disabled><br>
</form>
	
</div>
</body>
</html>

