 
 
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin| Add Result </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script>
 
    </script>
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
 <script>
     function subject()
     { sum=0;
        a=document.getElementById("sub1").value;
        b=document.getElementById("sub2").value;
        c=document.getElementById("sub3").value;
        d=document.getElementById("sub4").value;
        e=document.getElementById("sub5").value;
        f=document.getElementById("sub6").value;
        sum= parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f);
         
      
       
        document.getElementById("marks").value=sum;
     }
     </script>

    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            
            <div class="content-wrapper">
                <div class="content-container">
                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Declare Result</h2>
                                </div>
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="teachersignin.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Student Result</li>
                                    </ul>
                                </div>
                             
                            </div>
                             
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                           
                                            <div class="panel-body">
  
                                                <form class="form-horizontal" method="post" action="#">
                                                <div class="form-group">
<label for="date" class="col-sm-2 control-label ">Student Name</label>
<div class="col-sm-10">

<?php
$conn=mysqli_connect("localhost","root","","souravprasad");
$sql= "select * from addstudent";
$result=mysqli_query($conn,$sql);

echo"<select name='name' class='form-control stid' id='studentid' required='required' >
<option>Select Name</option>";
while($row=mysqli_fetch_array($result))
  {
     
   echo"<option>".$row['name']."</option>";
}
echo"</select>";
?>
</div>
</div>


 <div class="form-group">
<label for="default" class="col-sm-2 control-label">Class</label>
 <div class="col-sm-10">
 
<?php

$conn=mysqli_connect("localhost","root","","souravprasad");
$sql= "select * from createstudentclass";
$result=mysqli_query($conn,$sql);
echo" <select name='class' class='form-control clid' id='classid   required='required  >

<option>Select Class</option>";
while($row=mysqli_fetch_array($result))
  {    
   echo"<option>".$row['classno']."</option>";

}
echo"</select>";
?>
</div>
</div>


<div class="form-group">
<label for="default" class="col-sm-2 control-label">Section</label>
 <div class="col-sm-10">
 
<?php
$conn=mysqli_connect("localhost","root","","souravprasad");
$sql= "select * from createstudentclass";
$result=mysqli_query($conn,$sql);
echo" <select name='section' class='form-control clid' id='sectonid   required='required >
<option>Select Section</option>";
while($row=mysqli_fetch_array($result))
  {
     
   echo"<option>".$row['section']."</option>";
}
echo"</select>";
?> 
</div>
 </div>


<div class="form-group">
<label for="date" class="col-sm-2 control-label ">Student Rollid</label>
<div class="col-sm-10">
<?php
$sql= "select * from addstudent";
$result=mysqli_query($conn,$sql);
echo"<select name='rollid' class='form-control stid' id='studentid' required='required' >
<option>Select Rollid</option>";
while($row=mysqli_fetch_array($result))
  {

   echo"<option>".$row['rollid']."</option>";
}
echo"</select>";
?>
 
</div>
</div>

                                                    
<div class="form-group">
<label for="date" class="col-sm-2 control-label">Subjects</label>
<div class="col-sm-10">
<div  id="subject"> 
</div>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Hindi</label>
<div class="col-sm-10">
<div  id="subject"> 
<input type="number" class="form-control" id="sub1" placeholder="Enter Marks out of 100 " autocomplete="off" name="sub1" value=" ">
                               
</div>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">English</label>
<div class="col-sm-10">
<div  id="subject"> 
<input type="number" class="form-control" id="sub2" placeholder="Enter Marks out of 100 " autocomplete="off" name="sub2" value=" ">
</div>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Maths</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="sub3" placeholder="Enter Marks out of 100 " autocomplete="off" name="sub3" value="">
<div  id="subject"> 
</div>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Science</label>
<div class="col-sm-10">
<div  id="subject"> 
<input type="number" class="form-control" id="sub4" placeholder="Enter Marks out of 100 " autocomplete="off" name="sub4" value=" ">
</div>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Social science</label>
<div class="col-sm-10">
<div  id="subject"> 
<input type="number" class="form-control" id="sub5" placeholder="Enter Marks out of 100 " autocomplete="off" name="sub5" value=" ">
</div>
</div>
</div>

 

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Computer</label>
<div class="col-sm-10">
<div  id="subject"> 
<input type="number"  class="form-control" id="sub6" placeholder="Enter Marks out of 100 " autocomplete="off" name="sub6" value=" " >
</div>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Total Marks</label>
<div class="col-sm-10">
<div  id="subject">
<input type="number" name="total" class="form-control clid" id="marks" >
</div>
</div>
</div>


                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" name="sub" id="submit" class="btn btn-primary" onclick="subject()">Declare Result</button>
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
        <script>
        
        </script>
    </body>
</html>
 
<?php
$conn=mysqli_connect("localhost","root","","souravprasad");
  
if(isset($_POST["sub"]))
{
    $c1=$_POST["name"];
    $c2=$_POST["class"];
    $c3=$_POST["section"];
    $c4=$_POST["rollid"];
    
    $m1=$_POST["sub1"];
    $m2=$_POST["sub2"];
    $m3=$_POST["sub3"];
    $m4=$_POST["sub4"];
    $m5=$_POST["sub5"];
    $m6=$_POST["sub6"];
    $c5=$_POST["total"];
     

     
    $sql="insert into subjectmarks(name,class,section,rollid,hindi,eng,maths,science,sst,comp,totalmarks) 
    values('$c1','$c2','$c3','$c4','$m1','$m2','$m3','$m4','$m5','$m6','$c5')";

if(mysqli_query($conn,$sql))
{
    echo"ok";
   
}
else{
    echo" not ok";
    echo mysqli_error($conn);   

}
}
print_r($_POST);
?>
 <!-- <script type="text/javascript">
	alert("successfully added....You may view result")
	window.location.href = "manage-results.php"; 
</script> 

 
 
			 
		 			 
		 