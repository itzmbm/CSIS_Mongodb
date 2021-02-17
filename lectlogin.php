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
           	border-style:inset outset ;
	        box-shadow: 2px 2px 3px 2px black;
         	margin-top: 95px; 	 
             width:400px;			
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
				<script>
		function cancel(){
			location.replace('homeblog.html');
		}
		</script>
 </head>
 <body style=" background-image: url(images/bgadmin2.jpg); background-repeat:no-repeat; background-size:cover;  font-size:16px;font-family:Arial;color:white;">
<?php
  $id="";
  $pass="";
	$vid="";
	$vp="";
	$eerr="";
	$perr="";
	$res=true;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {    
	   if(empty($_POST["id"]))
	  {
         $eerr = "Email is required";
		 $res=false;
	  }
  elseif(empty($_POST["password"])){
			  $eerr="Password is required";
			  $res=false;	 
	 }  
	 if($res){    
  	$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  	$filter=['_id'=>$_POST['id'],'password'=>$_POST["password"]];
    $query = new MongoDB\Driver\Query($filter); 
    $rows = $mng->executeQuery("csisdb.lecturerdetails", $query);

    foreach($rows as $ele){
    	$vid=$ele->_id;
    	$vp=$ele->password;
      $name=$ele->name;
    	$subj=$ele->subject;
      $sem=$ele->semester;
    }
    if(isset($ele->subject)){

		session_start();
				$_SESSION['id']=$vid;
        $_SESSION['name']=$name;
				$_SESSION['subj']=$subj;
        $_SESSION['sem']=$sem;
				header("location:lectmainpage.php");
	}
	else{
      echo "<script> window.alert('Invalid id or password');</script>";
   }
   }
  }
  ?>

	<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">CSIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 
    </ul>
   
  </div>
</nav>
  <center>
  <form method='post'  class="t1"  action='#'>
  <table cellspacing="3px" cellpadding="10px" style="margin-top: 10px;">
  <tr align="center"><th colspan="3"  style="font-size:17px; color :white;background-color:rgb(196, 25, 25 ,0.7) ;border-radius: 15px;">Lecturer Login</th></tr>
  	<tr>
  		<td>ID:<br></td><td><input type="text" class="textbox" name="id"><br><span class="c1">*<?php echo $eerr;?></span></td></tr>
    <tr><td>Password:<br></td><td><input type="password" class="textbox" name="password"><br><span class="c1">*<?php echo $perr;?></span></td></tr>
  <tr><td colspan='3' align="center">
  <input type="submit" name="sub" value="Login"  class="button1" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button" name="cancle" value="Cancel"  class="button1" onclick="cancel()" ></td></tr>
  </table>
   </form>
   </center>

  </body>
  </html>
  
