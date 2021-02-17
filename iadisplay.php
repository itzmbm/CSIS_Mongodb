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
          box-shadow: 2px 2px 3px 2px black;
      border-radius: 15px;
          margin-top: 45px; 
  border-style:inset outset ;     
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
  width:15%;
  padding:5px;
  border-radius:15px;   
    color:white;
    background-color: rgb(196, 25, 25 ,1.0);
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
function details()
{
  location.replace('iadetails.php');
}
</script>
 </head>
 
 <body style=" background-image: url(images/bgadminmain1.jpg); background-repeat:no-repeat; background-size:cover;">
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
<?php
      $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

session_start();
    if(isset($_SESSION['usn'])){
     
    }
    else{
      header("location: studentlogin.php");
    }
$usn=$_SESSION['usn'];
?>
<center>
 <h4 class="my-2" align="center" style="height:35px; font-family:Arial ;width:400px;box-shadow: 3px 2px 3px 2px black;color :white;background-color:rgb(196, 25, 25 ,0.7) ;border-radius: 15px;"><b style="text-shadow: 3px 2px black;">Internal Assessment<b></h4>
</center>
  <div class="col-md-10">
      
        <div class="divt" style="height:130px;margin-left:150px; background-color:rgb(224, 101, 101 ,0.9) ;">
            <div class="col-md-12">

                            <?php
                              $filter = ['usn' => $usn,'subject'=>'PHP']; $query = new MongoDB\Driver\Query($filter); 
                              $res = $mng->executeQuery("csisdb.studentia", $query);
                              foreach($res as $r){}
                               if(isset($r->total)){
                                 $v = (int)$r->total;
                               }
                               else{
                                $v=0;
                               }
                                ?>
                <h5 class="text-white text-center" style="margin-top:5px;box-shadow: 3px 2px 3px 2px black;color :white;background-color:rgb(196, 25, 25 ,0.9) ;border-radius: 15px;">Total</h5>
                  <h5 class="my-2  text-center" style="font-size: 40px;color:white;" id="t1"><?php echo $v?></h5>
                  <?php                           
               
                if($v<32){
                echo "<script language='javascript'>document.getElementById('t1').style.color='red';</script>";
                }
                ?>
                <h5 class="text-white text-center"style="font-size:22px;">PHP and Ajax</h5>
                  
                
                </div>

          </div>
        <div class="divt" style="height:130px;margin-top:-130px;margin-left:1000px; background-color:rgb(226, 248, 153 ,0.9) ;">
            
                <div class="col-md-12" >
                                <?php
                              $filter = ['usn' => $usn,'subject'=>'C']; $query = new MongoDB\Driver\Query($filter); 
                              $res = $mng->executeQuery("csisdb.studentia", $query);
                              foreach($res as $r2){}
                               if(isset($r2->total)){
                                 $v2 = (int)$r2->total;
                               }
                               else{
                                $v2=0;
                               }
                                ?>
                <h5 class="text-white text-center" style="margin-top:5px;box-shadow: 3px 2px 3px 2px black;color :white;background-color:rgb(132, 171, 99 ,0.9) ;border-radius: 15px;">Total</h5>
                  <h5 class="my-2 text-center" style="color:white;font-size: 40px;" id="t2"><?php echo $v2;?></h5>
                  <?php                           
                if($v2<32){
                echo "<script language='javascript'>document.getElementById('t2').style.color='red';</script>";
                }
                ?>
                <h5 class="text-white text-center"style="font-size:22px;">C</h5>
                  
                
                </div>
  

          </div>
         <div class="divt" style="height:130px;margin-top:-130px;margin-left:550px;background-color:rgb(166, 242, 211 ,0.9) ;">
                 <div class="col-md-12" >
                                <?php
                              $filter = ['usn' => $usn,'subject'=>'Java'];
                               $query = new MongoDB\Driver\Query($filter); 
                              $res = $mng->executeQuery("csisdb.studentia", $query);
                              foreach($res as $r1){}
                                 if(isset($r1->total)){
                                 $v1 = (int)$r1->total;
                               }
                               else{
                                $v1=0;
                               }
                                ?>
                <h5 class="text-white text-center" style="margin-top:5px;box-shadow: 3px 2px 3px 2px black;color :white;background-color:rgb(54, 120, 93 ,0.9) ;border-radius: 15px;">Total</h5>
                  <h5 class="my-2  text-center" style="font-size: 40px;color:white;" id="t3"><?php echo $v1;?></h5>
                  <?php                           

                if($v1<32){
                echo "<script language='javascript'>document.getElementById('t3').style.color='red';</script>";
                }
                ?>
                <h5 class="text-white text-center"style="font-size:22px;">Java</h5>
    </div>

</div>
</div>
<br>
<center><input type="button"  class="button1"  onclick="details()" value="View in detail">
</center>
  </body>
  </html>
  
