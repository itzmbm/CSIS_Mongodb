<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
@import "node_modules/bootstrap/scss/bootstrap";</script>
  <style type="text/css">
  .c1{color:"white";
  font-size:7px;}
  .divf{
	         background-color:rgb(91, 52, 52  ,0.8) ;
	         border-radius:25px 22px;
           	border-style:inset outset ;
	      
         	margin-top: 95px; 	 
             width:400px;			
         }
		.divt{
			 background-color:rgb(252, 233, 220 ,0.8) ;
         	margin-top: 65px; 
	border-style:inset outset ;			
             			
         }
    .textbox{
	overflow: hidden;
	color: white;
	font-size: 14px;
	padding:8px 11;
	margin: 8px 11;
	border-color: rgb(224, 37, 54 ,0.0);
	border-bottom: 2px solid white;
	background: rgb(224, 37, 54 ,0.0);	
}
.textbox:hover{
	 box-shadow: 0px  3px rgb(180, 43, 43 ,0.8);
}
.button1:hover{
     box-shadow: 2px 2px 3px 2px #5F0707;	
}
::placeholder{ 
  color: #A4F0E3;
  opacity: 1; 	
}
.button1{
	width:25%;
	padding:5px;
	border-radius:15px;		
    color:white;
    background-color: rgb(196, 25, 25 ,0.9);
    border: transparent;
}
.bodyreg1{
	padding-top: 55px;
  background-image: linear-gradient(to right,#303D3C,#303D3C, #3F7E78,#3F7E78,#B7CAC8);
  color:white;
  font-size:16px;
  font-family:Arial;
}
td{
	
	border-radius:25px 22px;
}
.tdfont{
	 font-family:Monospace ;
}
		</style>
    <?php
    session_start();
    if(isset($_SESSION['usn'])){
     
    }
    else{
      header("location: studentlogin.php");
    }
    ?>
<script>
function getData() {          
if (window.XMLHttpRequest) {
              
xmlhttp = new XMLHttpRequest();}else
{     
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
}
          
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("target").innerHTML = xmlhttp.responseText;
}
}
xmlhttp.open("GET","showdetails.php",true);
xmlhttp.send();
         }

function goback()
{
	location.replace('iadisplay.php');
}
</script>
 </head>
 
 <body style=" background-image: url(images/bgadminmain1.jpg); background-repeat:no-repeat; background-size:cover;" onload="getData()">
	<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">CSIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="studentmainpage.php">Home</a>
      </li>
    </ul>
   
  </div>
</nav>

<center>
 <h4 class="my-2" align="center"style=" font-family:Arial ;width:400px;color :white;background-color:rgb(196, 25, 25 ,0.7) ;border-radius: 15px;"><b style="text-shadow: 3px 2px black;">Internal Assessment Details</b></h4>

<div class="divt" id="target" >


 </div><br><br>
<input type="button" style="margin-top:50px;" class="button1"  onclick="goback()" value="Go back">

</center>
  </body>
  </html>
  
