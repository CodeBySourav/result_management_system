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



<body class="">
        <br>
    <div class="content-wrapper">
                <div class="content-container">
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Update student result</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="manageresult.php"><i class="fa fa-home"></i> Back</a></li>
            							<li><a href="#">update</a></li>
            							<li class="active">student result</li>
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
                            <!-- <div class="panel-body p-20">

                           

                                <form action="#" method="POST">
                                <div class="form-group">
                                     <label for="default" class="col-sm-2 control-label">rollno.</label>
                                     <input type="text" name="sl_no" class="form-control" id="default"  placeholder="Enter class Name" autocomplete="off" required="required"  value="<?php echo @$row['rollid'];?>">
                                
                                <div class="form-group">
                                     <label for="default" class="col-sm-2 control-label">class</label>
                                     <input type="text" name="sl_no" class="form-control" id="default"  placeholder="Enter roll no." autocomplete="off" required="required"  value="<?php echo @$row['class'];?>">
                                
                                  <div class="form-group">
                                     <label for="default" class="col-sm-2 control-label">section</label>
                                     <input type="text" name="sl_no" class="form-control" id="default"  placeholder="Enter section" autocomplete="off" required="required"  value="<?php echo @$row['section'];?>">
                                
                               

    
                                    <div class="form-group mt-20">
                                        <div class="">
                                      
                                            <button type="submit" class="btn btn-success btn-labeled pull-right" name="search">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span> </button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                        
                                </form> -->
<?php
echo $_REQUEST['rollid'];
$name = $_REQUEST['rollid'] ;
$conn=mysqli_connect("localhost","root","","souravprasad");
$sql="SELECT * FROM subjectmarks WHERE rollid=$name ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){


?>
                                <hr>

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
                                                    <h5>Update student result</h5>
                                                </div>
                                            </div>

                                           <div class="panel-body">
                                                <form  action="#" method="POST">
                        
                                                         
                                                		 
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">rollno.</label>
                                                		<div class="">
                                                			<input type="text" name="rollid" class="form-control" required="required" id="success" readonly value="<?php echo @$_REQUEST['rollid'];?>">
                                                            <span class="help-block"> </span>
                                                		</div>
                                                	</div>
                                                        
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">class</label>
                                                        <div class="">
                                                            <input type="text" name="class" class="form-control" required="required" id="success" value="<?php  echo @$row['class'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													 <div class="form-group has-success">
                                                        <label for="success" class="control-label">section</label>
                                                        <div class="">
                                                            <input type="text" name="section" class="form-control" required="required" id="success" value="<?php  echo @$row['section'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>

                                                   <div class="form-group has-success">
                                                        <label for="success" class="control-label">Student Name</label>
                                                        <div class="">
                                                            <input type="text" name="name" class="form-control" required="required" id="success" value="<?php  echo @$row['name'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">	hindi</label>
                                                        <div class="">
                                                            <input type="text" name="hindi" class="form-control" required="required" id="success" value="<?php  echo @$row['hindi'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div> 
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">english</label>
                                                        <div class="">
                                                            <input type="text" name="eng" class="form-control" required="required" id="success" value="<?php  echo @$row['eng'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">maths</label>
                                                        <div class="">
                                                            <input type="text" name="maths" class="form-control" required="required" id="success" value="<?php  echo @$row['maths'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">science</label>
                                                        <div class="">
                                                            <input type="text" name="science" class="form-control" required="required" id="success" value="<?php  echo @$row['science'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">social science</label>
                                                        <div class="">
                                                            <input type="text" name="sst" class="form-control" required="required" id="success" value="<?php  echo @$row['sst'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">computer</label>
                                                        <div class="">
                                                            <input type="text" name="comp" class="form-control" required="required" id="success" value="<?php  echo @$row['comp'];?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">total marks</label>
                                                        <div class="">
                                                            <input type="text" readonly name="tatalmarks" class="form-control" required="required" id="success" value="<?php  echo @$row['totalmarks']; }?>">
                                                            <span class="help-block"></span>
                                                        </div>
                                                    </div>
													
													



                                                   <div class="form-group has-success">
                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled" onclick="call()">update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span> </button> 
                                                    </div>


                                                    
                                                </form>


                                                <?php
                                                 if(isset($_POST["submit"]))
                                                 {
                                                     $rollid=$_POST["rollid"];
                                                     $class=$_POST["class"];
                                                     $section=$_POST["section"];
                                                     $name=$_POST["name"];
                                                     $hindi=$_POST["hindi"];
                                                     $eng=$_POST["eng"];
                                                     $maths=$_POST["maths"];
                                                     $science=$_POST["science"];
                                                     $sst=$_POST["sst"];
                                                     $comp=$_POST["comp"];
                                                     $sum=$hindi+$eng+$maths+$science+$sst+$comp;
                                                     $totalmarks=$sum;

                                                    
                                                     $sql="UPDATE subjectmarks  SET class='$class',section='$section',name='$name',hindi='$hindi',
                                                     eng='$eng',maths='$maths',science='$science',sst='$sst',comp='$comp',totalmarks='$totalmarks' where rollid='$rollid'";

                                                     if(mysqli_query($conn,$sql)){
                                                         echo "ok";

                                                     }
                                                     else{
                                                         echo "not ok";
                                                         echo mysqli_error($conn);
                                                     }


                                                 }
                                                 ?>
