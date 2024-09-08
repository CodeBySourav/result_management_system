<?php
$conn= mysqli_connect("localhost","root","","souravprasad");
if (isset($_POST["sub"]))
{
	$r = $_POST["firstname"];
	$n = $_POST["lastname"];
	$w = $_POST["dateofbirth"];
	$g = $_POST["gender"];
	$a = $_POST["address"];
	$p = $_POST["pin"];
	$m = $_POST["mobileno"];
	$i = $_POST["pic"];
	$e = $_POST["email"];
	$ps = $_POST["password"];
	
	//$g1= $_POST["r1"];
	//$arr=$_POST["extra"];
	//$extra= implode(",",$arr);
	$sql = "insert into teacherregister(firstname,lastname,dateofbirth,gender,address,pin,mobileno,pic,email,password) values('$r','$n','$w','$g','$a','$p','$m','$i','$e','$ps')";

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
	alert("Registration successfully....You may login now.")
	window.location.href = "teacherregister.php";
</script> 