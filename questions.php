<?php
session_start();

if($_SESSION['userid']=='')
	header("index.php");

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
padding:0px;
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
#t{
width:150px;
height:30px;
font-size:15px;
float:right;
padding:3px;
border-style:solid;
border-width:1px;
border-radius:6px;
background-color:lightgreen;
}
#inner{
padding:5px;
border-bottom: 1px inset black;
}
</style>
</head>
<script>
var xyz="<?php echo $_SESSION['tmr'] ?>";
countTimer(xyz);
function countTimer(countDownDate){
// Set the date we're counting down to

var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;


  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML =hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    window.alert("Timeout");
    document.getElementById("demo").innerHTML = "Timeout";
    window.location.href = "/exam/result.php";
  }
}, 1000);

      }
	function fun()
	  {  
	  	 
	  	 if( document.getElementById("a").checked == true && (document.getElementById("ans").innerText.localeCompare("a") == 0))
                           {
                                
                               window.location.href = "/exam/new.php";
                               

                            } 
          else if(document.getElementById("b").checked==true && (document.getElementById("ans").innerText.localeCompare("b") == 0))
                            {    
                            
                             window.location.href = "/exam/new.php";

                              }
          else if(document.getElementById("c").checked==true && (document.getElementById("ans").innerText.localeCompare("c") == 0)) 
           	                {   
                           
                            window.location.href = "/exam/new.php";

           	                }
          else if(document.getElementById("d").checked==true  && (document.getElementById("ans").innerText.localeCompare("d") == 0)) 
           	                {   
                           
                            window.location.href = "/exam/new.php";
                             }
          else if(document.getElementById("a").checked==true || document.getElementById("b").checked==true ||document.getElementById("c").checked==true || document.getElementById("d").checked==true)
                            {
                               window.location.href = "/exam/submit.php";

                            }



        else
            {
             //window.alert(document.getElementById("ans").innerText);
        	window.location.href = "/exam/wrong.php";
             }
       }
	</script>




    <?php
 $hn='localhost';
 $un='root';
 $pw='';
 $db='exam';
 $conn=new mysqli($hn,$un,$pw,$db);
 if($conn->connect_error)
          die($conn->connect_error);
    
     
	$query="SELECT * FROM questions";
    $result=$conn -> query($query);
    $rows=$result->num_rows;

          
             $j=$_SESSION["count"];
	    $k=$j+1;
             $_SESSION["count"]= $_SESSION["count"]+1;

              
            
    		$result -> data_seek($j);
    		$row = $result -> fetch_array(MYSQLI_ASSOC);

  if($j<$rows)
  	     {
    		$a=$row['qid'];
    		$b=$row['que'];
    		$c=$row['op1'];
    		$d=$row['op2'];
    		$e=$row['op3'];
    		$f=$row['op4'];
    		$g=$row['ans'];

         }
   else
   	   {
   	    header("Location: result.php");
   	   }	   
    		   
    		   
    	

    	?>
<body>
<span id="t"> TIME REMAINING:
<span id="demo"></span></span>
	<?php echo "<h1 style=/align:left;/>QUESTION ". $k . "</h1>" ?>





    	<?php echo $a ?> - <?php echo $b ?><br><br> 
 
    		 <table>
		<tr><td><input type="radio" id="a" name="option" > <?php echo $c ?></td><td><input type="radio" id="b" name="option"> <?php echo $d ?> </td></tr>
    		    <tr><td><input type="radio" id="c" name="option" > <?php echo $e ?></td><td><input type="radio" id="d" name="option" ><?php echo $f ?>  </td></tr>
</table>


<p id="ans" hidden><?php echo $g ?></p>

     <input type="button" name="click" onclick="fun()" value="click" >


</body>
</html>
