<?php
 $rollid=$_REQUEST["rollid"];
  $conn=mysqli_connect("localhost","root","","souravprasad");
   
      
     
     
      $sql= "select * from addstudent where  rollid='$rollid'";
      $result=mysqli_query($conn,$sql);
      $row=@mysqli_fetch_array($result);
  
    
?>
 

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Student</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

        <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body class="">
        <br>
    <div class="content-wrapper">
                <div class="content-container">
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Update Student Details</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="managestudent.php"><i class="fa fa-home"></i> Back</a></li>
            							<li><a href="#">update</a></li>
            							<li class="active">Student Details</li>
            						</ul>
                                </div>
                               
                            </div>
                             
                        </div>
    
        <div class="main-wrapper">

            <div class="login-bg-color">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Update Student Details</h4>
                                </div>
                            </div>
                           
                          </div>
                        </div>
                 </div>
            </div>
        </div>

<div class="panel-body">
                                              
<form class="form-horizontal" method="POST" action="#">

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Full Name</label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control" id="fullanme" value="<?php echo @$row['name'];?>" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Roll Id</label>
<div class="col-sm-10">
<input type="text" name="rollid" class="form-control" id="rollid" value="<?php  echo @$_REQUEST['rollid'];?>" maxlength="5" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Email id</label>
<div class="col-sm-10">
<input type="email" name="email" class="form-control" id="email" value="<?php echo @$row['email'];?>" required="required" autocomplete="off">
</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">Gender</label>
<div class="col-sm-10">        

<input type="radio" name="gender" value="<?php echo @$row['Gender']; ?>" required="required" >Male  

<input type="radio" name="gender" value="<?php echo @$row['Gender']; ?>" required="required" >Female  

<input type="radio" name="gender" value="<?php echo @$row['Gender']; ?>" required="required" >Other 
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">DOB</label>
<div class="col-sm-10">
<input type="date"  name="dateofbirth" class="form-control" value="<?php echo @$row['dateofbirth']; ?>" id="date">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Class</label>
<div class="col-sm-10">
<input type="text" name="class" class="form-control" id="classname" value="<?php  echo @$row['class'];?>" readonly>
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Section</label>
<div class="col-sm-10">
<input type="text" name="section" class="form-control" id="classname" value="<?php  echo @$row['section'];?>" readonly>
</div>
</div>




                                                   

                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="submit" class="btn btn-primary" onclick="call()">Update</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                    </div>
                </div>
                 
            </div>
            
        </div>
        
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
                                                		 
                                                  

                                                    
        </body>
    </html>    
     
<?php 
$conn=mysqli_connect("localhost","root","","souravprasad"); 
if (isset($_POST["submit"]))
{
    $fullname=$_POST["name"];
    $rollid=$_POST["rollid"];
    $emailid=$_POST["email"];
    $gender=$_POST["gender"];
    $dob=$_POST["dateofbirth"];
   $classname=$_POST["class"];
    $sectionname=$_POST["section"];
    
  
    $sql= " update addstudent set name='$fullname',
    rollid='$rollid', email='$emailid', Gender='$gender',
    dateofbirth='$dob', class=$classname, section='$sectionname' where  rollid='$rollid'  ";
    $sql_run=mysqli_query($conn,$sql);
    //  if(mysqli_query($conn,$sql))
    //  {
    //      echo"ok";

    //  }
    //  else{
    //      echo"not ok";
    //       echo mysqli_error($conn);
    //  }
   
}
 print_r($_POST);
?>
<script>
    function call(){
    alert("Updated Successfully");
    window.location="#";
}
    </script>
