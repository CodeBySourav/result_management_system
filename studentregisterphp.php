<?php
session_start();
$conn= mysqli_connect("localhost","root","","souravprasad");

if (isset($_POST["sub"]))
{
	$r = $_POST["firstname"];
	$n = $_POST["lastname"];
	$w = $_POST["dateofbirth"];
	$g = $_POST["gender"];
	$a = $_POST["address"];
	$p = $_POST["pin"];
	$c = $_POST["class"];
	$s = $_POST["section"];
	$ro = $_POST["rollid"];
	$m = $_POST["mobileno"];
	$file = $_FILES["pic"];
	$e = $_POST["email"];
	$ps = $_POST["password"];
	
	$filename=$file['name'];
	$filepath = $file['tmp_name'];
	$fileerror = $file['error'];
	
	if ($fileerror == 0){
		$destfile = 'upload/'.$filename;
		
		move_uploaded_file($filepath,$destfile);
		
	}
	
	//$g1= $_POST["r1"];
	//$arr=$_POST["extra"];
	//$extra= implode(",",$arr);
	$sql = "insert into studentregister(firstname,lastname,dateofbirth,gender,address,pin,class,section,rollid,mobileno,pic,email,password) 
	values('$r','$n','$w','$g','$a','$p','$c','$s','$ro','$m','$destfile','$e','$ps')";

if (mysqli_query($conn,$sql))
{
	echo "ok";
	
$to=''.$e.'';
$subject='for testing';
$message= " Dear".$r."your Registration is successfull Now you can log in ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers.="from:aouravprasad12345@gmail.com\r\nReply- TO:aouravprasad12345@gmail.com";

$mail_send= mail($to,$subject,$message,$headers);

if($mail_send=true)
{
    echo '<script>
            alert("mail send successfully")
            window.location.href="student.php";
          </script>';
}
else{
    echo "Mail faild";
}
}

else 
{
	echo "not ok";
	echo mysqli_error($conn);
}
}					
?>