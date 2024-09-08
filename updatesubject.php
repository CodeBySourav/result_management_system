<?php
$sl_no=$_REQUEST["sl_no"];
$conn=mysqli_connect("localhost","root","","souravprasad");

     
      $sql= "select * from createstudentsubject where sl_no='$sl_no'";

      $result=mysqli_query($conn,$sql);
      $row=@mysqli_fetch_array($result);
  
    
?>
 

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Subject</title>
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
                                    <h2 class="title">Update Subject</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="managestudentsubject.php"><i class="fa fa-home"></i> Back</a></li>
            							<li><a href="manage-subjects.php">Subjects</a></li>
            							<li class="active">Update Subject</li>
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
                                    <h4>Student Result Management System</h4>
                                </div>
                            </div>
                         
                          </div>
                        </div>
                 </div>
            </div>
        </div>

            <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Update Subject</h5>
                                                </div>
                                            </div>

                                           <div class="panel-body">
                                                <form  action="#" method="POST">
                        
                                                         
                                                		 
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Subject Name</label>
                                                		<div class="">
                                                			<input type="text" name="subjectname" class="form-control" required="required" id="success" value="<?php echo @$row['subject_name'];?>">
                                                            <span class="help-block"> </span>
                                                		</div>
                                                	</div>
                                                        
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">SubjectCode</label>
                                                        <div class="">
                                                            <input type="text" name="subjectcode" class="form-control" required="required" id="success" value="<?php  echo @$row['subject_code'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">sl_no</label>
                                                        <div class="">
                                                            <input type="text" name="sl_no" class="form-control" required="required" id="success" value="<?php  echo @$row['sl_no'];?>" readonly>
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>

                                                   <div class="form-group has-success">
                                                        <div class="">
                                                           <button type="submit" name="update" class="btn btn-success btn-labeled" onclick="call()">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span> </button> 
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                             </div>
                     </section>
        </body>
    </html>    

        
         

         

 
     
<?php 
$conn=mysqli_connect("localhost","root","","souravprasad");
if (isset($_POST["update"]))
{

   
    $subjectname=$_POST["subjectname"];
    $subjectcode=$_POST["subjectcode"]; 
	$sl_no=$_POST["sl_no"];
  
    $sql= " update createstudentsubject set subject_name='$subjectname',
    subject_code='$subjectcode'  where  sl_no='$sl_no'  ";
    $sql_run=mysqli_query($conn,$sql);
      if(mysqli_query($conn,$sql))
     {
          echo"ok";

      }
      else{
          echo"not ok";
           echo mysqli_error($conn);
      }
   
} print_r($_POST);

?>
<script>
    function call(){
    alert("Updated Successfully");
    window.location="managestudentsubject.php";
}
    </script>
