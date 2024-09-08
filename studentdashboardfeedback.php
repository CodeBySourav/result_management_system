<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="studentdashboardfeedback.css">
		        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>


    </head>
<body>
    <div class="content-wrapper">
                <div class="content-container">
 
                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">FEEDBACK</h2>
                                </div>
                                
                            </div>
                             
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="studentsignin.php"><i class="fa fa-home"></i> Back</a></li>
            							<li>student</li>
            							<li class="active">FEEDBACK</li>
            						</ul>
                                </div>
                               
                            </div>
                             
                        </div>

	
    <section class="contact">
        <div class="content">
            <h2>FEEDBACK</h2>
            <br>
                    
            <div class="contactForm">
                <form action="studentfeedbackphp.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" name="name" required="required">
                        <span>Full  Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="sub" value="send">

                    </div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>