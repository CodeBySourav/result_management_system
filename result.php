<?php 
 session_start();
  $conn=mysqli_connect("localhost","root","","souravprasad");
   if(isset($_POST["search"]))
  {
	  $r=$_POST["rollid"];
      $c=$_POST["class"];
      $s=$_POST["section"];
     
      $sql= "select * from subjectmarks where rollid='$r' AND class='$c' AND section='$s'";
      if($result=(mysqli_query($conn,$sql))){
        echo "ok";

      }
      else {
        echo "not ok";
      }
   
      $row=mysqli_fetch_array($result);

      echo "$r ,$c ,$s";
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="result.css">
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
</head>


<body> <div class="content-wrapper">
                <div class="content-container">
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Result</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="viewresult.php"><i class="fa fa-home"></i> Home</a></li>
            							<li>Classes</a></li>
            							<li class="active">Update Class</li>
            						</ul>
                                </div>
                               
                            </div>
                             
                        </div>


                        <h1 class="text-center">Loyola School, Jamshedpur</h1>
                        <h4 class="text-center">Beldih Triangle Rd, Circuit House Area, Northern Town, <br>jamshedpur, jharkhand 831001</h4>
                        <h3 class="text-center"><u>UNDER KOLHAN UNIVERSITY,CHAIBASA</u></h3>
                        <h3 class="text-center1"><u><b>YOUR FINAL RESULT</b></u></h3>
                        <!-- <p>B.Tech 7th Semester Batch 2017-21</p> <p>Examination held in the month of Fwwb 2021</p>
                        <h3>DEPTT.OF COMPUTER SCIENCE AND ENGINEERING</h3> -->
                        <p>Student's name     :<b> <?php echo $row['name'];?></b></p>
                        <p>Institute Roll No. :<b><?php echo $row['rollid'];?></b></p>

<table  border=2>
		<th colspan="2" style="text-align:center">Personal Detalies</th>
		
		
		<tr><td>Roll id</td><td><?php echo $row['rollid'];?></td></tr>
		<tr><td>Name</td><td><?php echo $row['name'];?></td></tr>
		<tr><td>Class</td><td><?php echo $row['class'];?></td></tr>
		<tr><td>Section</td><td><?php echo $row['section'];?></td></tr>
		
		<th style="text-align:center" colspan="2">Marks Details</th>
		<tr><td>Subject name</td><td>Marks</td></tr>
		<tr><td>Hindi</td><td><?php echo $row['hindi'];?></td></tr>
		<tr><td>English</td><td><?php echo $row['eng'];?></td></tr>
		<tr><td>Math</td><td><?php echo $row['maths'];?></td></tr>
		<tr><td>Science</td><td><?php echo $row['science'];?></td></tr>
		<tr><td>Social science</td><td><?php echo $row['sst'];?></td></td>
		<tr><td>Computer</td><td><?php echo $row['comp'];?></td></tr>
		<tr ><td ><b>TOTAL MARKS</b></td><td><?php echo $row['totalmarks'];?></td></tr>
		</table>


        <button class="bt-me">Download</button>
		</body>
		</html>