<?php

  
    $usn = strtoupper($_GET['q']);
      session_start();
    $subject=$_SESSION['subj'];

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$filter = ['usn' => $usn,'subject'=>$subject];   
$query = new MongoDB\Driver\Query($filter);   
   
    $rows = $mng->executeQuery("csisdb.studentia", $query);

    echo "<table id='target' class='table ' style='color:white'>
      <tr>
        <th>USN</th>
        <th>Name</th>
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
      echo "<td>" . $r->usn . "</td>";
      echo "<td>" . $r->name . "</td>";
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