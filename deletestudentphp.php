<?php
$conn=mysqli_connect("localhost","root","","souravprasad");
$sql="DELETE FROM addstudent WHERE rollid='".$_REQUEST['rollid']."'";
if (mysqli_query($conn,$sql)){
    echo '<script type="text/javascript">
    alert ("your form is delete success")
    window.location.href = "managestudent.php";
    </script>';
} else {
    echo "Error deleting recod:" .mysqli_error($conn);
}
mysqli_close($conn);
?>

