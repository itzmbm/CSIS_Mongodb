<?php
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
session_start(); 
$usn=$_SESSION['usn'];
$filter=['usn'=>$usn];
$query = new MongoDB\Driver\Query($filter);   
   
    $rows = $mng->executeQuery("csisdb.studentia", $query);

    echo "<table id='target' class='table'  style='color:white;margin-top:0.5px;'>
      <tr style='background-color:#7F7878 ; '>
        <th>Subject</th>
        <th>Sem</th>
        <th>IA1</th>
        <th>IA2</th>
        <th>IA3</th>
        <th>AQ1</th>
        <th>AQ2</th>
        <th>Total</th>
       </tr>";
   foreach ($rows as $r) {
      echo "<tr>";
      echo "<td>" . $r->subject . "</td>";
      echo "<td>" . $r->sem. "</td>";
      echo "<td>" . $r->ia1 . "</td>";
      echo "<td>" . $r->ia2 . "</td>";
      echo "<td>" . $r->ia3 . "</td>";
      echo "<td>" . $r->aq1 . "</td>";
      echo "<td>" . $r->aq2 . "</td>";
      echo "<td>" . $r->total . "</td>";
      echo "</tr>";
    }
    echo "</table>";
     ?>