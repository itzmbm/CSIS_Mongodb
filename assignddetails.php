<?php

      $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $query = new MongoDB\Driver\Query([]);     
    
    $rows = $mng->executeQuery("csisdb.assignment", $query);
	echo "<table id='target'  class='table'>";
	echo "<tr>"; 
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



?>