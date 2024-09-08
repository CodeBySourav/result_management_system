<?php
$conn = mysqli_connect ("localhost","root","","souravprasad");
if (isset ($_POST["sub"]))
{
	$n = $_POST["name"];
	$r = $_POST["rollid"];
	$e = $_POST["email"];
	$g = $_POST["gender"];
	$c = $_POST["class"];
	$cn= $_POST["section"];
	$d = $_POST["dateofbirth"];
	
	$sql = "insert into addstudent (name,rollid,email,gender,class,section,dateofbirth)
	values('$n','$r','$e','$g','$c','$cn','$d')";
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
<script text="text/javascript">
alert ("student added successfully");
window.location.href = "addstudent.php";
</script>
