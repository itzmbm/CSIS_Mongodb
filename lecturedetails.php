<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
@import "node_modules/bootstrap/scss/bootstrap";</script>
</script>
  <style type="text/css">
  .c1{color:"white";
  font-size:7px;}
		form{
	         background-color:rgb(224, 101, 101 ,0.8) ;
	         border-radius:25px 22px;
	        box-shadow: 2px 2px 3px 2px black;
         	margin-top: 95px; 	 
             width:350px;			
         }
		 .divt{
	         background-color:rgb(252, 228, 228,0.8) ;
           	border-style:inset outset ;
	        box-shadow: 2px 2px 3px 2px black;
         	margin-top: 55px; 	 
             width:1200px;			
         }
    .textbox{
	overflow: hidden;
	color: black;
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
  color: white;
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
<script>
function getData() {
	str=document.getElementById("idname").value;           
if (window.XMLHttpRequest) {
              
xmlhttp = new XMLHttpRequest();}else
{     
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
          
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("target").innerHTML = xmlhttp.responseText;
}
}
xmlhttp.open("GET","lectdetails.php?q="+str,true);
xmlhttp.send();
         }
function disp(){
           
if (window.XMLHttpRequest) {
              
xmlhttp = new XMLHttpRequest();}else
{     
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
          
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("target").innerHTML = xmlhttp.responseText;
}
}
xmlhttp.open("GET","lectdetailsonload.php",true);
xmlhttp.send();
}
</script>
		
 </head>
 
 <body onload="disp()" style=" background-image: url(images/bgadmin2.jpg); background-repeat:no-repeat; background-size:cover;  font-size:16px;font-family:Arial;color:white;">
				<?php
		session_start();
		if(isset($_SESSION['email'])){
		 
		}
		else{
			header("location: login1.php");
		}
		?>
	<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">CSIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="adminmainpage.php">Home</a>
      </li>

    </ul>
   
  </div>
</nav>
  <center>
  
  <form>
  <input type="text" class="textbox" name="idname" style="margin-bottom:10px;margin-top:5;" id="idname" placeholder="Enter ID" >
  <input type="button" class="button1" name="search" id="search" value="Search" onclick="getData()">
   </form>
   <br>
   <div id="target" class="divt" > </div>
   </center>

  </body>
  </html>
  
