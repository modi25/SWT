<!DOCTYPE html>
<html lang="en">

<head> 
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<meta name="author" content="INSPIRO" /> 
	<meta name="description" content=" You can contact us at anytime by reaching us at 7737-634-978, Online Business solutions Kota Rajasthan "> 
	<meta name="keywords" conten=" Software development company in kota, E-commerece solution, Digital marketing >"
	<!-- Document title --> 
	<title>TWS Technology | Contact Us</title> 
	<!-- Stylesheets & Fonts --> 
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> <link href="css/plugins.css" rel="stylesheet"> <link href="css/style.css" rel="stylesheet"> <link href="css/responsive.css" rel="stylesheet"> 
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117102643-1"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'UA-117102643-1');
</script>
	</head>

<body>	<!-- Wrapper -->
	<div id="wrapper">

		 <!-- Topbar -->
        <?php include "includes/top-header.php" ;?>
        <!-- end: Topbar -->

        <!-- Header -->
       <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->

                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <?php include "includes/header.php" ;?>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

        <!-- Page title -->
        <section id="page-title" data-parallax-image="images/parallax/5.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Contact Us</h1>
                    <span>We appreciate your interest in TWS Technology have a question or want to know something about Online marketing here we are.</span> </div>
                <div class="breadcrumb">
					<ul>
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">Pages</a> </li>
                        <li class="active"><a href="#">Contact Us</a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>TWS is here to provide you all the information you are looking for you answer all your queries.
                            You are just a call away to start your online business journey!
                        </p>
						<small style="background-color:green;color:white"><?php
                        if (isset($_GET['success']) && $_GET['success'] == 'true') {
                        echo "Contact Details Received.Thank you";
                        }
                        ?></small>
                        <small style="background-color:red;color:white"><?php
                        if (isset($_GET['failure']) && $_GET['failure'] == 'true') {
                        echo "Details not saved.Please fill form again";
                        }
                        ?></small>
                        <div class="m-t-30">
                            <form  action="sendmail.php"  method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" aria-required="true" name="fname" class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="email" class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="subject">Your Mobile</label>
                                        <input type="text" name="mobile" class="form-control required" placeholder="Subject...">
                                    </div>
                                </div>
								<div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="subject">Field</label>
                                        <select class="form-control required">
										  <option value="developer">Developer</option>
										  <option value="marketing">Marketing</option>
										  <option value="designing">Designing</option>
										  <option value="business_analyst">Business Analyst</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Resume Upload</label>
                                    <input type="file" name="file" class="form-control required" placeholder="Enter your Message">
                                </div>

                                <!--     <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div>-->
                                
                                
                                <button class="btn btn-default" type="submit" ><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        </div>

                        <!-- Google map sensor -->
                        <div id="map" style="width:100%;height:350px"></div>

                        
                        <!-- Google map sensor -->

                    </div>
                </div>
            </div>
        </section>
        <!-- end: CONTENT -->

        <!-- Footer -->
 <?php include "includes/contact-footer.php" ?>
  <!-- end: Footer -->

    </div>    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

   
<!--Plugins-->
 <script src="js/jquery.js"></script>
 <script src="js/plugins.js"></script>

<!--Template functions-->
 <script src="js/functions.js"></script> 
</body>

</html>
