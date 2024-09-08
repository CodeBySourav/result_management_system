<?php
$conn= mysqli_connect("localhost","root","","souravprasad");
if (isset ($_POST["sub"]))
{
	$sl = $_POST["sl_no"];
	$sn = $_POST["subject_name"];
	$sc = $_POST["subject_code"];
	
	
	$sql = "insert into createstudentsubject(sl_no,subject_name,subject_code) values('$sl','$sn','$sc')";
	
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
	alert("create subject successfully....")
	window.location.href = "createstudentsubject.php";
</script> 