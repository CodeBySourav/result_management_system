 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Result Management System | Dashboard</title>
        <link rel="stylesheet" href="csss/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="csss/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="csss/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="csss/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="csss/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="jss/modernizr/modernizr.min.js"></script>
        <link href="csss/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body class="top-navbar-fixed">
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <div class="sidebar-brand" >
                        <span class="align-middle">MAIN CATEGORY</span>
                    </div>
    
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Info
                        </li>
    
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="#">
                                <i class="align-middle" data-feather="sliders"></i> <span
                                    class="align-middle">Dashboard</span>
                            </a>
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="#">
                                <i class="align-middle" data-feather="user"></i> <span class="align-middle">APPEARANCE</span>
                            </a>
                        </li>
    
                        
                        <li class="sidebar-header">
                            Student classes
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="createstudentclass.php">
                                <i class="align-middle" data-feather="square"></i> <span class="align-middle">Create Class</span>
                            </a>
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="managestudentclass.php">
                                <i class="align-middle" data-feather="square"></i> <span class="align-middle">Manage Classes
                            </span>
                            </a>
                        </li>


                        <li class="sidebar-header">
                             Subjects
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="createstudentsubject.php">
                                <i class="align-middle" data-feather="square"></i> <span class="align-middle">Create Subject</span>
                            </a>
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="managestudentsubject.php">
                                <i class="align-middle" data-feather="square"></i> <span class="align-middle">Manage Subject
                            </span>
                            </a>
                        </li>
    
                         
    
    
    
                        <li class="sidebar-header">
                            Students
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="addstudent.php">
                                <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                    class="align-middle">Add Students</span>
                            </a>
                        </li>
    
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="managestudent.php">
                                <i class="align-middle" data-feather="map"></i> <span class="align-middle">Manage Students</span>
                            </a>
                        </li>
                    

                    <li class="sidebar-header">
                        Results
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="addstudentresult.php">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Add Result</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="manageresult.php">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Manage Result</span>
                        </a>
                    </li>
                    <li>
                        <a   class="sidebar-header"  href="changeteacherpassword.php">Admin Change Password</a>
                    </li>
                </ul>
    
    
                </div>
            </nav>
        <div class="main-wrapper">
              
            <div class="content-wrapper">
                <div class="content-container">

                   

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Dashboard</h2>
                                       <a href="teacherlogoutphp.php" class="log">LogOut</a>
                                </div>
                                <!-- /.col-sm-6 -->
                            </div>
                            <!-- /.row -->
                      
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="managestudent.php">


                                            
                                            <span class="name">Registered Users</span>
                                            
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="managestudentsubject.php">

                                            
                                            <span class="name">Subjects Listed</span>
                                            
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="managestudentclass.php">
                                        
                                            
                                            <span class="name">Total classes listed</span>
                                            
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="manageresult.php">
                                      

                                            
                                            <span class="name">Results Declared</span>
                                            
                                        </a>
                                        <!-- /.dashboard-stat -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

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
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Result Management System!");

            });
        </script>
    </body>
</html>
 
