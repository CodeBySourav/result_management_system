<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="studentregister.css">
</head>
<body>
	
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form action="studentregisterphp.php" method="POST" enctype="multipart/form-data">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" name="firstname" id="fname" required>
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" name="lastname" id="lname" required>
					</div>
				</div>
				
				<div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="male" class="input_radio" checked>
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="female" class="input_radio">
								<span>Female</span>
							</label>
						</li>
					</ul>
				</div>
				
				<div class="input_wrap">
				<label for="date">Date of Birth</label>
				<input name="dateofbirth" type="date" required>
				</div>
				
				<div class="input_wrap">
					<label for="address">Address</label>
					<input type="text" name="address" id="address" required>
				</div>
				<div class="input_wrap">
					<label for="pincode">Pincode</label>
					<input type="text" name="pin" id="pincode" required >
				</div>
				<div class="input_wrap">
					<label for="state">Class</label>
					<input type="number" name="class" id="state" required>
				</div>
				<div class="input_wrap">
					<label for="state">Section</label>
					<input type="text" name="section" id="state" required>
				</div>
				<div class="input_wrap">
					<label for="state">Roll ID</label>
					<input type="number" name="rollid" id="state" required>
				</div>

				<div class="input_wrap">
					<label for="Mnum">Mobile No.</label>
					<input type="text" name="mobileno" id="Mnum" required>
				</div>
				<div class="input_wrap">
					<label for="img">Image Upload</label>
					<input type="file" name="pic" id="img" required>
				</div>
				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="text" name="email" id="email" required>
				</div>
				<div class="input_wrap">
					<label for="email">Password</label>
					<input type="password" name="password" id="email" required>
				</div>

				<div class="input_wrap">
					<input type="submit" name="sub" value="Register Now" class="submit_btn">
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>