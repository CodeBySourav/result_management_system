<?php
 session_start();
  
?>
 

 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Class</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="viewresult.css">
        
        
    </head>
    <body class="">
        <br>
    <div class="content-wrapper">
                <div class="content-container">
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Update Student Class</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="studentsignin.php"><i class="fa fa-home"></i> Home</a></li>
            							<li>Classes</a></li>
            							<li class="active">Update Class</li>
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
                            <div class="panel-body p-20">

                           

                                <form action="result.php" method="POST">
								
								<div class="form-group">
                                     <label for="default" class="col-sm-2 control-label"> rollid</label>
                                     <input type="number" name="rollid" class="form-control" id="default"  placeholder="Enter Your rolid" autocomplete="off" required="required"  value="<?php echo $_SESSION['rollid'];?>" readonly>
                                </div>
								
                                <div class="form-group">
                                     <label for="default" class="col-sm-2 control-label"> Class</label>
                                     <input type="number" name="class" class="form-control" id="default"  placeholder="Enter Your Class" autocomplete="off" required="required"  >
                                </div>
                                	<div class="form-group">
                                		<label for="rollid">Enter your Section</label>
                                        <input type="text" name="section" class="form-control" id="default" placeholder="Enter Your Section " autocomplete="off"    >
                                	</div>
                               

    
                                    <div class="form-group mt-20">
                                        <div class="">
                                       <button type="submit" href="result.php" class="btn btn-success btn-labeled pull-right" name="search" ><a href="result.php" >Search</a><span class="btn-label btn-label-right"><i class="fa fa-check"></i></span> </button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                        
                                </form>

                                <hr>

                            </div>
                          </div>
                        </div>
                 </div>
            </div>
        </div>
		
</html>