<?php
 $sl_no=$_REQUEST["sl_no"];
  $conn=mysqli_connect("localhost","root","","souravprasad");
  
  
	  
      $sql= "select * from createstudentclass where sl_no='$sl_no' ";
      $result=mysqli_query($conn,$sql);
      $row=@mysqli_fetch_array($result);
  
    
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
                                    <h2 class="title">Update Student Class</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="managestudentclass.php"><i class="fa fa-home"></i>Back</a></li>
            							<li><a href="manage-classes.php">Classes</a></li>
            							<li class="active">Update Class</li>
            						</ul>
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
                                                    <h5>Update Student Class</h5>
                                                </div>
                                            </div>

                                           <div class="panel-body">
                                                <form  action="#" method="POST">
                                                
                                                         <div class="form-group has-success">
                                                        <label for="success" class="control-label">sl_no</label>
                                                		<div class="">
                                                			<input type="text" name="sl_no" class="form-control" required="required" id="success" value="<?php echo @$_REQUEST['sl_no'];?>" readonly>
                                                            <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                		</div>
                                                	</div>
                                                		 
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Class Name</label>
                                                		<div class="">
                                                			<input type="text" name="classname" class="form-control" required="required" id="success" value="<?php echo @$row['classname'];?>">
                                                            <span class="help-block">Eg- Third, Fouth,Sixth etc</span>
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">Class Name in Numeric</label>
                                                        <div class="">
                                                            <input type="number" name="classnamenumeric" required="required" class="form-control" id="success" value="<?php echo @$row['classno'];?>">
                                                            <span class="help-block">Eg- 1,2,4,5 etc</span>
                                                        </div>
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Section</label>
                                                        <div class="">
                                                            <input type="text" name="section" class="form-control" required="required" id="success" value="<?php  echo @$row['section'];?>">
                                                            <span class="help-block">Eg- A,B,C etc</span>
                                                        </div>
                                                    </div>

                                                   <div class="form-group has-success">
                                                        <div class="">
                                                           <button type="submit" name="update" class="btn btn-success btn-labeled" onclick="call()">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>  
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
    
    $sl_no =$_POST["sl_no"];
    $classname=$_POST["classname"];
    $classnumber=$_POST["classnamenumeric"];
    $classsection=$_POST["section"]; 
	
  
    $sql= " update createstudentclass set classname='$classname',
    classno=$classnumber, section='$classsection' where  sl_no='$sl_no'  ";
    
     $sql_run=mysqli_query($conn,$sql);
     
//          if(mysqli_query($conn,$sql))
//   {
//            echo"ok"; 
      
//      }
//      else{
//           echo"not ok";
//          echo mysqli_error($conn);
//     }
   

// print_r($_POST);
}
?>
<script>
    function call(){
    alert("Updated Successfully");
    window.location="managestudentclass.php";
}
    </script>
 

