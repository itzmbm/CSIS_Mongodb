                              <?php
                                $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
                               $cmd = new MongoDB\Driver\Command([
                                          'aggregate' => 'studentdetails',
                                           'pipeline' => [
                                           ['$lookup'=>['from'=>'studentia','localField'=> '_id','foreignField'=>'usn','as'=>'Data']]],
                                           'cursor'=>new stdclass,]);
                                $res = $mng->executeCommand('csisdb', $cmd);
                    echo "<table id='target'  class='table'>";
                    echo "<tr style='background-color:#7F7878 ; '>"; 
                    echo "<th>Usn</th>";
                    echo "<th>Name</th>";
                    echo "<th>Department</th>";
                    echo "<th>Java</th>";
                    echo "<th>C</th>";
                    echo "<th>PHP</th>";
                    echo "</tr>";
                   
                   foreach($res as $document) {
                    echo "<tr><td>".$document->_id."</td>";
                    echo "<td>".$document->name."</td>";
                    echo "<td>".$document->department."</td>";
                      for ($i=0; $i <sizeof($document->Data) ; $i++) { 
                      echo "<td>".$document->Data[$i]->total."</td>";
                      }     
                      echo "</tr>";
                        }?>