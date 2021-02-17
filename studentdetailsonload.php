<?php

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$query = new MongoDB\Driver\Query([]);
if($rows = $mng->executeQuery("csisdb.studentdetails", $query)){
	if(!empty($rows)){
	echo "<table id='target' class='table' >";
	echo "<tr style='background-color:#7F7878 ; '>"; 
  echo "<th>USN</th>";
   echo "<th>Name</th>";
   echo "<th>Email</th>";
   echo "<th>Phone</th>";
   echo "<th>Department</th>";
   echo "<th>Gardian Name</th>";
   echo "<th>Semester</th>";
   echo "<th>10th Marks</th>";
   echo "<th>12th Marks</th>";
   echo "</tr>";
foreach($rows as $r){
echo "<tr>";
echo "<td>".$r->_id."</td>";
echo "<td>".$r->name."</td>";
echo "<td>".$r->email."</td>";
echo "<td>".$r->phone."</td>";
echo "<td>".$r->department."</td>";
echo "<td>".$r->Gardian."</td>";
echo "<td>".$r->semester."</td>";
echo "<td>".$r->Marks10."</td>";
echo "<td>".$r->Marks12."</td>";
echo "</tr>";
}
echo "</table>";
 
}
else{
	echo "<table id='target' class='table' >";
	echo "<tr style='background-color:#7F7878 ; '>"; 
    echo "<th>USN</th>";
   echo "<th>Name</th>";
   echo "<th>Email</th>";
   echo "<th>Phone</th>";
   echo "<th>Department</th>";
   echo "<th>Semester</th>";
   echo "<th>Gardian Name</th>";
   echo "<th>10th Marks</th>";
   echo "<th>12th Marks</th>";
   echo "</tr>";
	echo "</table>";
	echo "<script>window.alert('NO data found found')</script>";
}
}else{
	
}

?>