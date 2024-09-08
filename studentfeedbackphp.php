<?php
$conn= mysqli_connect("localhost","root","","souravprasad");
if (isset ($_POST["sub"]))
{
$n=$_POST["name"]	;
$e=$_POST["email"];
$m=$_POST["message"];


$sql = "insert into studentfeedback(name,email,message) values('$n','$e','$m')";


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
	alert("feedback submit successfully.....")
	window.location.href = "studentsignin.php";
</script> 