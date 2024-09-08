<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin Create Class</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
		<link rel="stylesheet" type="text/css" href="createstudentclass.css">
         
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            
          <!-----End Top bar>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

<!-- ========== LEFT SIDEBAR ========== -->
                
 <!-- /.left-sidebar -->

                    <div class="main-page" >
                        <div class="container-fluid" id="succWrap">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Create Student Class</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="teachersignin.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Classes</a></li>
            							<li class="active">Create Class</li>
            						</ul>
                                </div>
                               
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section" >
                            <div class="container-fluid" >

                             

                              

                                 

                                                <form action="createstudentclassphp.php" method="post">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">sl_no</label>
                                                		<div class="">
                                                			<input type="text" name="sl_no" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- 1,2,3 etc</span>
                                                		</div>
                                                	</div>
													
													<div class="form-group has-success">
                                                        <label for="success" class="control-label">Class Name</label>
                                                		<div class="">
                                                			<input type="text" name="classname" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">Class Name in Numeric</label>
                                                        <div class="">
                                                            <input type="number" name="classno" required="required" class="form-control" id="success">
                                                            <span class="help-block">Eg- 1,2,4,5 etc</span>
                                                        </div>
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Section</label>
                                                        <div class="">
                                                            <input type="text" name="section" class="form-control" required="required" id="success">
                                                            <span class="help-block">Eg- A,B,C etc</span>
                                                        </div>
                                                    </div>
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="sub" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                </form>

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                               
                               

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
