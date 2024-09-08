<?php  //1st session email,rollid
session_start();
				if(isset($_POST['sub'])){
					$connection = mysqli_connect("localhost","root","","souravprasad");
					
					$query = "select * from studentregister where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					$row = mysqli_fetch_assoc($query_run);
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['email'] = $row['email'];
								$_SESSION['rollid'] = $row['rollid'];
								header("Location:studentsignin.php");
							}
							else{
								?>
								<script type="text/javascript">
									alert("Wrong Password");
									window.location.href = "student.php";
								</script> 


								<?php

							}
							//header("Location:studentlogin.php");
						}
						else{
							header("Location:student.php");
						}
					}
				
			?>