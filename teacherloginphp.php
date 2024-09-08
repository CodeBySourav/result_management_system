<?php
session_start();
				if(isset($_POST['sub'])){
					$connection = mysqli_connect("localhost","root","","souravprasad");
					
					$query = "select * from teacherregister where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					$row = mysqli_fetch_assoc($query_run);
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['firstname'] = $row['firstname'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['rollid'] = $row['rollid'];
								
								
								header("Location:teachersignin.php");
							}
							else{
								?>
								<script type="text/javascript">
									alert("Wrong Password");
									window.location.href = "teacher.php";
								</script> 


								<?php

							}
							//header("Location:studentlogin.php");
						}
						else{
							header("Location:teacher.php");
						}
					}
				
			?>