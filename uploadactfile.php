   
 <?php
$target_dir = "C:/xampp/htdocs/Nosqlproject/assignment_files/";
/*$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);*/
$uploadOk = 1;
/*$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);*/
if(isset($_POST["sub"])) {
    $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
    if(isset($check)) {
                echo "<script> 
                 $('input[type=file]').change(function () {
         var filePath1=$('#fileUpload').val();  });
                window.alert(filePath1);
        </script>";
          $filePath = $_FILES["fileToUpload"]['tmp_name'] ;
        $destinationFilePath = "C:/xampp/htdocs/Nosqlproject/assignment_files/".$_FILES["fileToUpload"]["name"];
if(move_uploaded_file($filePath, $destinationFilePath)) {  
    echo "<script>window.alert('File  moved!');</script>";
    $filelink="http://localhost/Nosqlproject/assignment_files/".$_FILES["fileToUpload"]["name"];
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
            $bulk = new MongoDB\Driver\BulkWrite; 
           $bulk->insert(['lecturername'=>$_POST['lname'],'subject'=>$_POST['subj'],'assignmenttitle'=>$_POST['assignt'],'sem'=>$_POST['sem'],'dateofsubmission'=>$_POST['date1'],'assignmentmarks'=>$_POST['marks'],'fileurl'=>$filelink,'formlink'=>$_POST['link']]);   
        if($mng->executeBulkWrite("csisdb.assignment",$bulk)){
        echo "<script>window.alert('New assignment updated');</script>";
        header('location:Lecturerassign.php');
        }
        else{
        echo "<script>window.alert('Error in Entry! Please Retry');</script>";
        }
}  
else {  
    echo "<script>window.alert('File cant  moved!');</script>"; 
     $uploadOk = 1; 
} 

    } else {
        echo "<script>window.alert('');</script>";
         $uploadOk = 0;
    }
}
?>