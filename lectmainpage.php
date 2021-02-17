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
	        box-shadow: 2px 2px 3px 2px black;
         	margin-top: 95px; 	 
             width:400px;			
         }
		.divt{
	         background-color:rgb(224, 101, 101 ,0.9) ;
	        box-shadow: 2px 2px 3px 2px black;
         	margin-top: 45px; 	 
             width:250px;			
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
 </head>

 <body style=" background-image: url(images/bgadminmain1.jpg); background-repeat:no-repeat; background-size:cover;">
		<?php
		session_start();
		if(isset($_SESSION['id'])){
		 
		}
		else{
			header("location: lectlogin.php");
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
        <a class="nav-link" href="Lectureria.php">Internal Assessment</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="Lecturerassign.php">Assignment</a>
      </li>
            <li class="nav-item ">
      <a  class="nav-link" href="studentiaagg.php">Student IA Department Wise</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
      </li>
    </ul>
   
  </div>
</nav>
<center>
 <h4 class="my-2" align="center"style=" font-family:Arial ;width:400px;box-shadow: 3px 2px 3px 2px black;color :white;background-color:rgb(196, 25, 25 ,0.7) ;border-radius: 15px;"><b style="text-shadow: 3px 2px black;">Lecturer Dashboard<b></h4>
</center>
  <div class="col-md-10">
<div class="divt" style="height:130px;margin-top:80px;margin-left:400px;">
    				<div class="col-md-12">
    					<div class="row">
    						<div class="col-md-8">
                                <?php
                                 $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                               $cmd = new MongoDB\Driver\Command([
                                          'aggregate' => 'studentdetails',
                                           'pipeline' => [
                                           ['$group'=>['_id'=>null,'total'=>['$sum'=>1]]]],
                                           'cursor'=>new stdclass,]);
                                $res = $mng->executeCommand('csisdb', $cmd);
                                ?>
    							<h5 class="my-2 text-white text-center" style="font-size: 30px;"><?php 
                  foreach($res as $document) {
                         foreach($document as $d){
                          print_r($d);
                         }}?></h5>
    							<h5 class="text-white ">Total</h5>
    							<h5 class="text-white ">Students</h5>
    						</div>
							<div class="col-md-4">
    							<a href="studentdetailsl.php" ><img src="images/studenticon.png" style="border-color: rgb(224, 37, 54 ,0.0);margin-top:-20px;width:100px;opacity: 0.9;height:100px;box-shadow: -2px 2px 2px -2px black;border-radius:55px 55px;" alt="Click here"> </a>
    						</div>
	
    					</div>
    				</div>
    			</div>
		</div>
  </body>
  </html>