<?php
session_start();
   $connection = mysqli_connect("localhost","root","","souravprasad");
					
					$query = "select * from studentregister where email  = '$_SESSION[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$fisrtname= $row['firstname'];
						$lastname= $row['lastname'];
						$address= $row['address'];
						$rollid = $row['rollid'];
						$class = $row['class'];
						$section= $row['section'];
						$gender = $row['gender'];
						$email = $row['email'];
						$mobileno = $row['mobileno'];
						$pic = $row['pic'];
						
					}
										
?>
		

<html>
    <head>
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

		<link rel="stylesheet" href="csss/bootstrap.css">
		
		<script src="jss/jquery.js"></script>
		
		<script src="jss/bootstrap"> </script>
		
		<link rel="stylesheet" type="text/css" href="studentloginprofile.css">
    
	</head>
    
	<body>
	<div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Profile</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="studentsignin.php"><i class="fa fa-home"></i>Back to dashboard  /</a></li>
            							<li><a >  Profile </a></li>
											
            						</ul>
                                </div>
                               
                            </div>
	
	
		
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="<?php echo $pic ?>" alt="student dp">
            <h3><?php echo $fisrtname?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Roll ID:</strong><?php echo $rollid ?></p>
            <p class="mb-0"><strong class="pr-1">Class:</strong><?php echo $class?></p>
			<p class="mb-0"><strong class="pr-1">Section:</strong><?php echo $section?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">First Name</th>
                <td width="2%">:</td>
                <td><?php echo $fisrtname?> </td>
              </tr>
			  
              <tr>
                <th width="30%">Last Name	</th>
                <td width="2%">:</td>
                <td><?php echo $lastname ?></td>
              </tr>
			  
              <tr>
                <tr>
                    <th width="30%">Roll</th>
                    <td width="2%">:</td>
                    <td><?php echo $rollid ?></td>
                  </tr>
				  
				  <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $gender ?></td>
              </tr>
			  
              <tr>
                <th width="30%">Mail Id</th>
                <td width="2%">:</td>
                <td><?php echo $email?></td>
              </tr>
			  
              <tr>
                <th width="30%">Address</Address></th>
                <td width="2%">:</td>
                <td><?php echo $address?></td>
              </tr>
			  
              <tr>
                <th width="30%">contact No.</th>
                <td width="2%">:</td>
                <td><?php echo $mobileno ?></td>
              </tr>
			  
            </table>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

    </body>
</html>