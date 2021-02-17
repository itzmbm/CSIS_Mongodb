<html>
<head>
<title>Assignment</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
@import "node_modules/bootstrap/scss/bootstrap";</script>
  <style type="text/css">
  .c1{color:"white";
  font-size:7px;}
label{
	color:white;
}
option{
	color:black;
}
    #assign{

           background-color:rgb(224, 101, 101 ,0.8) ;
           border-radius:25px 22px;
            border-style:inset outset ;
          box-shadow: 2px 2px 3px 2px black;
          margin-top: 50px;
          margin-left: 400px;    
             width:525px;     
         }
  .sass{
           background-color:rgb(224, 101, 101 ,0.8) ;
           border-radius:25px 22px;
            border-style:inset outset ;
          box-shadow: 2px 2px 3px 2px black;
          margin-top: -450px;    
             width:500px;     
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
	width:25%;
	padding:5px;
	border-radius:15px;		
    color:white;
    background-color: rgb(196, 25, 25 ,0.9);
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
option{
	color:black;
}
		</style>
 </head>

<body style=" background-image: url(images/bgadminmain1.jpg); background-repeat:no-repeat; background-size:cover;">
		<?php
		session_start();
		if(isset($_SESSION['id'])){
		 
		}
		else{
			header("location: lectlogin.php");
		}
		?>
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
	<div id="assign">
		<form method="post"  style="margin-left: 10px;margin-top:8px;" action='uploadactfile.php' enctype="multipart/form-data">
			<table>
				<tr align="center"><th colspan="2"  style="font-size:17px; color :white;background-color:rgb(196, 25, 25 ,0.7) ;border-radius: 15px;">Assignment Information</th></tr>
				<tr>
					<td><label>Lecturer Name:</label><br/>
						<input type="text" name="lname" id="lname" class="textbox" required="" value="<?php echo $_SESSION['name'];?>" ></td>
				    <td><label>Subject:</label><br/>
						<input type="text" name="subj" id="subj" class="textbox" required="" value="<?php echo  $_SESSION['subj'];?>" ></td>
					</tr>
					<tr>
						<td><label>Assignment Title:</label><br/>
						<input type="text" name="assignt" id="assignt" class="textbox" required=""></td>
						<td><label>Semester :</label><br />
        
          <select name="sem" id="sem" class="textbox"  value="1" >
            <option value="0">Select a sem</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
        <br><span class="col"></span>
        </td>
					</tr>
					<tr>
						<td><label>Last Date of Submission:</label><br/>
						<input type="Date" name="date1" id="date1" class="textbox" required=""></td>
						<td><label>Assignment Marks:</label><br/>
						<input type="number" name="marks" id="marks" class="textbox" required=""></td>
					</tr>
					<tr>
						<td><label>Assignment File(if any):</label><br />
							<input type="file" name="fileToUpload" id="fileToUpload">
						</td>
						<td>
							<LABEL>Link to upload:</LABEL><br />
							<input type="text" name="link" id="link" class="textbox">
						</td>
					</tr>
					<tr align='center'>

						<td colspan="2">
							<br />
						
					<input type="submit" name="sub" id="sub" class="button1">&nbsp;&nbsp;<input type="reset" name="res" id="res" class="button1"></td>
				</tr>
				</table>
			</form>
		</div>
		
