  

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Class</title>
        <link rel="stylesheet" href="csss/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="csss/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="csss/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="csss/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="csss/main.css" media="screen" >
        <script src="jss/modernizr/modernizr.min.js"></script>

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
                                    <h2 class="title">Manage Students</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="teachersignin.php"><i class="fa fa-home"></i> Home /</a></li>
            							<li>  Students /</li>
            							<li class="active">Manage Students</li>
            						</ul>
                                </div>
                               
                            </div>
                             
                        </div>
<br>
<?php                        
 
$conn=mysqli_connect("localhost","root","","souravprasad");
  
  
$sql= "select * from subjectmarks";
$result=mysqli_query($conn,$sql);
echo" <table border=1 >
<thead>
<tr>
    
    <th>Student Name</th>
    <th>Rollid</th>
    <th>Class </th>
    <th>Section</th>
    
    <th>hindi</th>
  <th>english</th>
  <th>maths</th>
  <th>science</th>
  <th>social science</th>
  <th>computer</th>
  <th>total marks</th>
  <th>update</th>
</tr>
</thead>
<tfoot>
<tr>
 
  <th>Student Name</th>
  <th>Rollid</th>
  <th>Class</th>
  <th>Section</th>
  
  <th>hindi</th>
  <th>english</th>
  <th>maths</th>
  <th>science</th>
  <th>social science</th>
  <th>computer</th>
  <th>total marks</th>
  <th>update</th>
</tr>
</tfoot>";
while($row=mysqli_fetch_array($result))
{
    echo"<tr>
    <td>".$row['name']."</td>
    <td>".$row['rollid']."</td>
    <td>".$row['class']."</td>
    <td>".$row['section']."</td>
    
    <td>".$row['hindi']."</td>
	<td>".$row['eng']."</td>
	<td>".$row['maths']."</td>
	<td>".$row['science']."</td>
	<td>".$row['sst']."</td>
	<td>".$row['comp']."</td>
	<td>".$row['totalmarks']."</td>
	<td><a href='updatestudentresult.php?rollid=".$row['rollid']."'>update</a></td>
    </tr>";
}
echo"</table>";
 ?>
 </html>