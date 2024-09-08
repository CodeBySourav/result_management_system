<?php
 session_start();
$conn= mysqli_connect("localhost","root","","souravprasad");
if (isset($_POST["sub"]))
{
	$sl= $_POST["sl_no"];
	$r = $_POST["classname"];
	$n = $_POST["classno"];
	$w = $_POST["section"];
	
	
	//$g1= $_POST["r1"];
	//$arr=$_POST["extra"];
	//$extra= implode(",",$arr);
	$sql = "insert into createstudentclass(sl_no,classname,classno,section) values('$sl','$r','$n','$w')";

if (mysqli_query($conn,$sql))
{
	echo "ok";
}
else 
{
	echo "not ok";
	echo mysqli_error($conn);
}
}					
?>
<script type="text/javascript">
	alert("class create successfully....")
	window.location.href = "createstudentclass.php";
</script> 