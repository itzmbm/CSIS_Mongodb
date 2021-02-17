<?php
if(isset($_GET['q']) ){
	$q=$_GET['q'];
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$filter=['_id'=>$q];
$query = new MongoDB\Driver\Query($filter); 
if($rows = $mng->executeQuery("csisdb.lecturerdetails", $query)){
   if(!empty($rows)){
   echo "<table id='target' class='table' >";
   echo "<tr style='background-color:#7F7878 ; '>"; 
   echo "<th>ID</th>";
   echo "<th>Name</th>";
   echo "<th>Email</th>";  
   echo "<th>Phone</th>";
   echo "<th>Department</th>";
   echo "<th>Designation</th>";
   echo "<th>Semester</th>";
   echo "<th>Subject</th>";
   echo "</tr>";
foreach($rows as $row){
echo "<tr>";
echo "<td>".$row->_id."</td>";
echo "<td>".$row->name."</td>";
echo "<td>".$row->email."</td>";
echo "<td>".$row->phone."</td>";
echo "<td>".$row->department."</td>";
echo "<td>".$row->designation."</td>";
echo "<td>".$row->semester."</td>";
echo "<td>".$row->subject."</td>";
echo "</tr>";
}
echo "</table>";
 
}
else{
   echo "<table id='target' class='table' >";
   echo "<tr style='background-color:#7F7878 ; '>"; 
   echo "<th>ID</th>";
   echo "<th>Name</th>";
   echo "<th>Email</th>";
   echo "<th>Phone</th>";
   echo "<th>Department</th>";
   echo "<th>Designation</th>";
   echo "<th>Semester</th>";
   echo "<th>Subject</th>";
   echo "</tr>";
   echo "</table>";
   echo "<script>window.alert('NO data found found')</script>";
}
}else{
   echo "<table id='target' class='table' >";
   echo "<tr>"; 
   echo "<th>ID</th>";
   echo "<th>Name</th>";
   echo "<th>Email</th>";
   echo "<th>Phone</th>";
   echo "<th>Department</th>";
   echo "<th>Designation</th>";
   echo "<th>Semester</th>";
   echo "<th>Subject</th>";
   echo "</tr>";
   echo "</table>";
   echo "<script>window.alert('NO data found found')</script>";
}
}
?>