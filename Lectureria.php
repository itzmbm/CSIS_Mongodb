
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
@import "node_modules/bootstrap/scss/bootstrap";</script>
<?php
session_start();

    if(isset($_SESSION['id'])){
     
    }
    else{
      header("location: lectlogin.php");
    }
$sub=$_SESSION['subj'];
?>
<style>
  .c1{color:"white";
  font-size:7px;}
  option{
    color:black;
  }
    .iai{
           background-color:rgb(224, 101, 101 ,0.8) ;
           border-radius:25px 22px;
            border-style:inset outset ;
             color: white;
          box-shadow: 2px 2px 3px 2px black;
          margin-top: 95px;    
             width:400px;     
         }
         .sia{
           background-color:rgb(224, 101, 101 ,0.8) ;
           border-radius:25px 22px;
            border-style:inset outset ;
            color: white;
          box-shadow: 2px 2px 3px 2px black;
          margin-top: 95px;    
             width:750px;     
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
.number{
  overflow: hidden;
  color: black;
  font-size: 14px;
  padding:8px 11;
  margin: 8px 11;
  border-color: rgb(224, 37, 54 ,0.0);
  border-bottom: 2px solid white;
  background: rgb(224, 37, 54 ,0.0);  
}
.number:hover{
   box-shadow: 0px  3px rgb(180, 43, 43 ,0.8);
}
.btn:hover{
     box-shadow: 2px 2px 3px 2px #5F0707; 
}
::placeholder{ 
  color: #A4F0E3;
  opacity: 1;   
}
.btn{
  width:100px;
  padding:5px;
  border-radius:15px;   
    color:white;
    background-color: rgb(0.9);
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
  .col
  {
    color:white;
  }
</style>
<script type="text/javascript">
  var ia=function(){
    document.location.href="Lectureria.php";
  }
  var att=function(){
    document.location.href="Lectureratt.php";
  }

</script>
<script >
  function showUser(str)
{
if (str == '') 
{
document.getElementById("id1").innerHTML = "";
return;
} 
else
{ 
if (window.XMLHttpRequest) 
{       
xmlhttp = new XMLHttpRequest();
} else 
{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
             
document.getElementById("id1").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "searchia.php?q="+str, true);
xmlhttp.send();
}
}

function showDet(str)
{
if (str == '') 
{
document.getElementById("ia").innerHTML = "";
return;
} 
else
{ 
if (window.XMLHttpRequest) 
{       
xmlhttp = new XMLHttpRequest();
} else 
{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
             
document.getElementById("ia").innerHTML = this.responseText;
}
};
xmlhttp.open("POST", "Lectureria.php?a="+str, true);
xmlhttp.send();
}
}

</script>
 

<?php

$count=0;
$err1="";
$err2="";
$err3="";
$usn1=0;
$usn="";
$name="";
$subject="";
$sem="";
$ia="";
$aq="";
$ia1="";
$ia2="";
$ia3="";
$aq1="";
$aq2="";

if(isset($_POST['add']))
{
  $usn=$_POST["usn"];
  $usnl=strlen($_POST["usn"]);
  if($usnl!=10)
  {
    $err1="valid usn is of 10 characters";
    $count=1;
  }
  elseif(!preg_match("/1MS[0-9][0-9]MCA[0-9][1-9]/",$usn))
  {
    $err1="enter valid usn ex:1MS19MCA**";
    $count=1;
 }
 $name = $_POST["name"];
 if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
   {
      $err2 = "Only letters and white spaces allowed";
      $count=1;
    }
    $sem=$_POST['sem'];
    if($sem==0)
    {
      $err3="Select a Semester";
      $count=1;
    }
    
    
  if($count==0)
    {
      $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
// Prepare an insert statement
    
    
$usn=$_POST["usn"];
   $subject = $_REQUEST['subject'];
$filter = ['usn' => $usn,'subject'=>$subject];   
$query = new MongoDB\Driver\Query($filter);     
$res = $mng->executeQuery("csisdb.studentia", $query);
foreach($res as $r){}
    if (!isset($r->id)&&!isset($r->subject)) {


$usn = $_REQUEST['usn'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $sem=$_REQUEST['sem'];
    $ia=$_REQUEST['ia'];
    $aq=$_REQUEST['aq'];
    if($ia=='ia1')
    {
      $ia1=$_REQUEST['ian'];
    }
    elseif($ia=='ia2')
    {
      $ia2=$_REQUEST['ian'];
    }
    elseif($ia=='ia3')
    {
      $ia3=$_REQUEST['ian'];
    }
     if($aq=='aq1')
    {
      $aq1=$_REQUEST['aqn'];
    }
   else if($aq=='aq2')
    {
      $aq2=$_REQUEST['aqn'];
    }


    $first=0;
    $second=0;
    if($ia1>=$ia2 && $ia1>=$ia3)
    {
        $first=$ia1;
        if($ia2>=$ia3)
        {
            $second=$ia2;
        }
        else{
            $second=$ia3;
        }
    }
    if($ia2>=$ia1 && $ia2>=$ia3)
    {
        $first=$ia2;
        if($ia1>=$ia3)
        {
            $second=$ia1;
        }
        else{
            $second=$ia3;
        }
    }
    if($ia3>=$ia1 && $ia3>=$ia2)
    {
        $first=$ia3;
        if($ia1>=$ia2)
        {
            $second=$ia1;
        }
        else
        {
            $second=$ia2;
        }
    }

$total=0;
$total=(((int)$first+(int)$second)/2)+(int)$aq1+(int)$aq2;
$bulk = new MongoDB\Driver\BulkWrite; 
         $bulk->insert(['usn'=>$usn, 'name' => $name, 'subject'=> $subject,'sem'=>$sem,'ia1'=>$ia1,'ia2'=>$ia2,'ia3'=>$ia3,'aq1'=>$aq1,'aq2'=>$aq2,'total'=>$total]);   
        if($mng->executeBulkWrite("csisdb.studentia",$bulk)){
    echo "<script>window.alert('New entry updated')</script>";
    

$usn = '';
    $name = '';
    $subject ='';
    $sem='';
    $ia='';
    $ian='';
    $aq='';
    $aqn='';
    $ia1 = '';
    $ia2 = '';
    $ia3 = '';
   $aq1 = '';
   $aq2 = '';
$total='';


}
else
{
  echo "<script>window.alert('New entry not inserted')</script>";
}


} 
else { 
  echo "<script>window.alert('Entry already exists click on update ')</script>";
 }
    
}

  }




if(isset($_POST['update']))
{
  $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $usn=$_POST["usn"];
  $sub=$_POST["subject"];
$filter = ['usn' => $usn,'subject'=>$sub];   
$query = new MongoDB\Driver\Query($filter);     
$res = $mng->executeQuery("csisdb.studentia", $query);
foreach($res as $a){}
    if (!isset($a->usn)&&!isset($a->subject)) {
echo "<script>window.alert('Entry Not found')</script>";
}
else
{
   $usn = $_REQUEST['usn'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $sem=$_REQUEST['sem'];
    $ia=$_REQUEST['ia'];
    $aq=$_REQUEST['aq'];
 $id=$_POST["usn"];
  $sub=$_POST["subject"];
$filter = ['usn' => $usn,'subject'=>$sub];   
$query = new MongoDB\Driver\Query($filter);     
$res = $mng->executeQuery("csisdb.studentia", $query);
    foreach($res as $r){}
if (isset($r->ia1)){
      $ia1=$r->ia1;
    }else{
      $ia1="";
    }
     if (isset($r->ia2)){
      $ia2=$r->ia2;
    }else{
      $ia2="";
    }
     if (isset($r->ia3)){
      $ia3=$r->ia3;
    }else{
      $ia3="";
    }
     if (isset($r->aq1)){
      $aq1=$r->aq1;
    }else{
      $aq1="";
    }
     if (isset($r->aq2)){
      $aq2=$r->aq2;
    }else{
      $aq2="";
    }
    if($ia=='ia1')
    {
      $ia1=$_REQUEST['ian'];
    }
    elseif($ia=='ia2')
    {
      $ia2=$_REQUEST['ian'];
    }
    elseif($ia=='ia3')
    {
      $ia3=$_REQUEST['ian'];
    }
     if($aq=='aq1')
    {
      $aq1=$_REQUEST['aqn'];
    }
   else if($aq=='aq2')
    {
      $aq2=$_REQUEST['aqn'];
    }
  
   $first=0;
    $second=0;
    if($ia1>=$ia2 && $ia1>=$ia3)
    {
        $first=$ia1;
        if($ia2>=$ia3)
        {
            $second=$ia2;
        }
        else{
            $second=$ia3;
        }
    }
    if($ia2>=$ia1 && $ia2>=$ia3)
    {
        $first=$ia2;
        if($ia1>=$ia3)
        {
            $second=$ia1;
        }
        else{
            $second=$ia3;
        }
    }
    if($ia3>=$ia1 && $ia3>=$ia2)
    {
        $first=$ia3;
        if($ia1>=$ia2)
        {
            $second=$ia1;
        }
        else
        {
            $second=$ia2;
        }
    }
    $total=0;
$total=(((int)$first+(int)$second)/2)+(int)$aq1+(int)$aq2;

  $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
            $bulk1 = new MongoDB\Driver\BulkWrite;
     $bulk1->update(['usn'=>$usn,'subject'=>$sub], ['$set'=>['name' => $name, 'subject'=> $subject,'sem'=>$sem,'ia1'=>$ia1,'ia2'=>$ia2,'ia3'=>$ia3,'aq1'=>$aq1,'aq2'=>$aq2,'total'=>$total]]);
  if($mng->executeBulkWrite("csisdb.studentia", $bulk1)){
    echo "<script>window.alert('Entry modified')</script>";
    
  $usn = '';
    $name = '';
    $subject ='';
    $sem='';
    $ia='';
    $ian='';
    $aq='';
    $aqn='';
    $ia1 = '';
    $ia2 = '';
    $ia3 = '';
   $aq1 = '';
   $aq2 = '';
   $total='';
}  
else
{
  echo "<script>window.alert('Entry not modified')</script>";   
}
}
}
  


  
?>
<html>
<head>
  <title>Internal Assessment</title>
</head>
<body style=" background-image: url(images/home1.jpg); background-repeat:no-repeat; background-size:cover;  font-size:16px;font-family:Arial;color:white;">
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="#">CSIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a onclick="att()"class="nav-link" href="lectmainpage.php">Home</a>
      </li>
    </ul>
   
  </div>
</nav>


<div id="ia" >
  <div class="iai" style="margin-left: 50px;margin-top:25px;">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" style="margin-left: 10px;margin-top:5px;" method="post">
    <table >
      <tr align="center"><th colspan="2"  style="font-size:17px; color :white;background-color:rgb(196, 25, 25 ,0.7) ;border-radius: 15px;">Student Details</th></tr>

    <tr>
      <td><label>USN :</label></td><td><input type="textbox" class="textbox" name="usn" id="usn"  value="<?php print $usn; ?>"  maxlength=10 required="" style="text-transform:uppercase"><br><span class="col"><?php echo $err1; ?></span></td></tr>
    <tr>
      <td><label>Name :</label></td><td><input type="textbox" name="name" id="name" class="textbox" value="<?php print $name; ?>" maxlength=30 required=""><br><span class="col"><?php echo $err2; ?></span></td></tr>
    <tr>
      <td><label>Subject :</label></td><td><input type="textbox" name="subject" id="subject" class="textbox" value="<?php echo @$sub;?>"
         maxlength=50  ></td></tr>
      <tr>
        <td><label>Semester :</label></td>
        <td>
          <select name="sem" id="sem" class="textbox" required="">
            <option value="0">Select a sem</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
        <br><span class="col"><?php echo $err3; ?></span>
        </td></tr>
<tr style="height:100px">
        <td><label>IA :</label></td>
        <td>
          <select name="ia" id="ia"  class="textbox">
            <option value="0">Select a IA</option>
          <option value="ia1">IA1</option>
          <option value="ia2">IA2</option>
          <option value="ia3">IA3</option>
        
        </select>
        <br/><br />
        <input type="number" name="ian"  id="ian" class="textbox" min="00" max="30" >
      </td>
    </tr>
        <tr style="height:100px">
        <td ><label>Assignment/Quiz :</label></td>
        <td>
          <select  width="10" name="aq" id="aq"  class="textbox">
            <option value="0" >Select a Assignment/Quiz</option>
          <option value="aq1">AQ1</option>
          <option value="aq2">AQ2</option>
    
        </select>
        <br /><br />
        <input type="number" name="aqn" id="aqn"  class="textbox"  min="00" max="10" >
      </td></tr>
        <tr><td colspan=2>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="add" id="add" value="Add" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" id="update" value="Update"  class="btn btn-warning">&nbsp;&nbsp;<input type="reset" class="btn btn-danger" value="clear" 
   ></td></tr>
</table>
</form>
</div>
<div class="sia" style="
    margin-left: 550px;
    margin-top:-550px;"><center>
    <label>Search :</label><input type="text" id="usns" name="usns" class="textbox" onchange="showUser(this.value)" style="text-transform:uppercase">&nbsp;&nbsp;<input type="submit"  name="search" id="search"  class="btn btn-success" ><br />
</center>
    <div id="id1">

  
 </div>
</div>
</div>
</body>