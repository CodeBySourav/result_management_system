
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Manage Classes</title>
        <link rel="stylesheet" href="csss/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="csss/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         <link rel="stylesheet" type="text/css" href="managestudentclass.css">
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper" id="errorWrap.css">

            <!-- ========== TOP NAVBAR ========== -->
    
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">
  

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Manage Classes</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="teachersignin.php"><i class="fa fa-home"></i> Home</a></li>
                                        <li> Classes</li>
            							<li class="active">Manage Classes</li>
            						</ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                             

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>View Classes Info</h5>
                                                </div>
                                            </div>

                                            <div class="panel-body p-20" id="succWrap.css">

                                                <?php                        
 
$conn=mysqli_connect("localhost","root","","souravprasad");
  
  
$sql= "select * from createstudentclass";
$result=mysqli_query($conn,$sql);
echo" <table border=1>
<thead>
<tr>
<th>sl_no</th>
    <th>class name</th>
    
    <th>Classno. </th>
    <th>Section</th>
    
    <th>Action</th>
</tr>
</thead>
<tfoot>
<tr>
<th>sl_no</th>
  <th>class name</th>
  <th>classno.</th>
  <th>section</th>
  
    <th>Action</th>
</tr>
</tfoot>";
while($row=mysqli_fetch_array($result))
{
    echo"<tr>
	<td>".$row['sl_no']."</td>
	<td>".$row['classname']."</td>
    <td>".$row['classno']."</td>
    <td>".$row['section']."</td>
   
    <td> <a href='classupdate.php?sl_no=".$row['sl_no']."'>update</td>
	</tr>";
}
echo"</table>";
 ?>


                                         
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                                               
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

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
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            // $(function($) {
            //     $('#example').DataTable();

            //     $('#example2').DataTable( {
            //         "scrollY":        "300px",
            //         "scrollCollapse": true,
            //         "paging":         false
            //     } );

            //     $('#example3').DataTable();
            // });
        </script>
    </body>
</html>
 

