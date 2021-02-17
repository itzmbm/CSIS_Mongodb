<?php
if(isset($_GET['q'])){
$sub=$_GET['q'];



      $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $filter=['subject'=>$sub];
    $query = new MongoDB\Driver\Query($filter);     
    
    $rows = $mng->executeQuery("csisdb.assignment", $query);
	echo "<table id='target'  class='table'>";
	echo "<tr style='background-color:#7F7878 ; '>"; 
	echo "<th>Lecturer Name</th>";
   echo "<th>Subject</th>";
     echo "<th>Assignment Title</th>";
   echo "<th>Semester</th>";
   echo "<th>Last Date of Submission</th>";
     echo "<th>Assignment Marks</th>";
       echo "<th>File URL</th>";
         echo "<th>Upload URL</th>";
   echo "</tr>";
 foreach ($rows as $dbs){
echo "<tr>";
echo "<td>".$dbs->lecturername."</td>";
echo "<td>".$dbs->subject."</td>";
echo "<td>".$dbs->assignmenttitle."</td>";
echo "<td>".$dbs->sem."</td>";
echo "<td>".$dbs->dateofsubmission."</td>";
echo "<td>".$dbs->assignmentmarks."</td>";
echo "<td><a href='".$dbs->fileurl."'>Click here</a></td>";
echo "<td><a href='".$dbs->formlink."'>Upload here</a></td>";
echo "</tr>";
}
echo "</table>"; 


}
?>