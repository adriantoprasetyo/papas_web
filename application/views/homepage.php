<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>PapasIde</title>
<!-- for-mobile-apps -->
 <link rel="shortcut icon" href="<?= base_url();?>asset/images/lamp.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="<?= base_url(); ?>asset/css/bootstrap.min.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="<?= base_url(); ?>asset/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="<?= base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<nav class="navbar">
		<div class="container">
			<h1 class="wthree-logo">
				<a href="<?= base_url();?>" id="logoLink"><img src="<?= base_url();?>asset/images/pras-03.png" width="80px" height="80px"><!-- <i class="fa fa-lightbulb-o"></i> --> <span>P</span>apas<span>I</span>de</a>
			</h1>

			<!-- menu -->
			<ul id="menu">
				<li>
					<input id="check02" type="checkbox" name="menu" />
					<label for="check02"><span class="fa fa-bars" aria-hidden="true"></span></label>
					<ul class="submenu">
						<li><a href="index.html" class="active">Home</a></li>
						<li><a href="#about">About Me</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#contact">Contact Me</a></li>
					</ul>
				</li>
			</ul>
			<!-- //menu -->

		</div>
	</nav>
</header>
<!-- //header -->

<!-- banner -->
<div id="home" class="banner-w3pvt d-flex">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 bnr-txt-w3pvt">
				<div class="bnr-w3pvt-txt mt-sm-5">
					<!-- <h6 class="bg-light">Welcome to my page</h6> -->
					<h2>Hello <span>I'm Pras</span></h2>
					<h4>developer - engineer - freelancer</h4>
					<p class="mt-4 text-justify card px-2 ubah-dikit"> Have experience working as Augmented Reality (AR) developer, Backend and Desktop programmer. Recently work as an Embedded Software Engineer using Arduino, Raspberry Pi, and other IoT devices.</p>
					<ul class="social_section_1info mt-4">
						<li class="mb-2"><a href="https://web.facebook.com/adriantoprasetyo"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2"><a href="https://github.com/adriantoprasetyo"><span class="fa fa-github"></span></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/in/adrianto-prasetyo-709861b8/"><span class="fa fa-linkedin"></span></a></li>
						<li class="instagram"><a href="https://www.instagram.com/adriantoprasetyo/"><span class="fa fa-instagram"></span></a></li>
					</ul>
					<a href="#about" class="scroll bnr-btn mr-2">Read more </a>
					<a href="#contact" class="scroll bnr-btn1">Contact Me </a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
	
<!-- about -->
<section class="about" id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="heading text-center pt-3">About Me</h1>
				<div class="about-right">
					<!-- <h4 class="main">Auctor sit amet aliquam vel, ulla amet.</h4>
					<p>Auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit
					aliquet elit.</p> -->
					<div class="row mt-sm-5 mt-4 about-right-inner">
						<div class="col-sm-4 col-6 myphoto-sign text-center">
							<img src="<?= base_url(); ?>asset/images/foto_pras.jpg" alt="" class="img-fluid rounded-circle"/>
							<a href="#contact" class="scroll abt-btn">Hire Me </a>
						</div>
						<div class="col-sm-7 offset-lg-1">
							<h4>Personal Info</h4>
							<p align="justify">Hello, My name is <strong>Adrianto Prasetyo</strong>. I am 1 years experienced <strong>Web Backend Developer</strong>, 1 years experienced <strong>Internet of Things Engineer</strong> and 3 months experienced <strong>Augmented Reality Developer.</strong></p>
							<h4 class="mt-4">Skills & Abilities</h4>
							<div class="progress-one mt-3">
								<h4 class="progress-tittle">Backend Development</h4>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress-one">
								<h4 class="progress-tittle">IoT Engineer</h4>
								<div class="progress">
									<div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="progress-one my-lg-3">
								<h4 class="progress-tittle">AR Development</h4>
								<div class="progress">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <h3 class="position">About Me</h3> -->
		</div>
    </div>
</section>
<!-- //about -->

<!-- services-->
<section class="services pt-5" id="services">
	<div class="container py-lg-5">
		<p class="paragraph">What I do for you</p>
		<h3 class="heading mb-sm-5 mb-4">My Services</h3>
		<div class="row">
			<div class="col-lg-4 col-sm-6 mb-5">
			   <div class="panel panel-default">
				  <div class="panel-thumbnail">
					<img src="<?= base_url(); ?>asset/images/web.svg" alt="" class="img-fluid mx-auto d-block" />
					<h3>01</h3>
					<h4 class="mt-3">App Developer</h4>
					<p class="mt-3">I will be ready to help you create fantastic apps in web, android or desktop.</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-5">
			   <div class="panel panel-default">
				  <div class="panel-thumbnail">
					<img src="<?= base_url(); ?>asset/images/lampu-02.svg" alt="" class="img-fluid mx-auto d-block" />
					<h3>02</h3>
					<h4 class="mt-3">IoT Solution</h4>
					<p class="mt-3">Are you need to build smart home ? or want to create prototype ? fortunately i can help you with that !</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mb-5">
			   <div class="panel panel-default">
				  <div class="panel-thumbnail">
					<img src="<?= base_url(); ?>asset/images/ar-04.png" alt="" class="img-fluid mx-auto d-block" />
					<h3>03</h3>
					<h4 class="mt-3">AR Developer</h4>
					<p class="mt-3">Nowadays marketing strategy have reaching next level, they using Augmented Reality for that ! .</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- quote -->
<section class="quote py-5">
	<div class="container py-lg-5">
		<div class="row">
			<div class="col-lg-8 text-justify">
				<h4>" I am a fast learner and eager to learn anything new, i do love so much about technology especially programming. I have been working as software engineer for one year with speciality in backend."</h4>
				<h5>developer - engineer - freelancer</h5>
			</div>
		</div>
	</div>
</section>
<!-- //quote -->

<!-- Contact -->
<section class="contact py-5" id="contact">
	<div class="container py-lg-5">
		<p class="paragraph">Get in touch with me</p>
		<h3 class="heading mb-sm-5 mb-4">Contact</h3>
		<div class="contact-form">
			<div class="row">
				<div class="col-lg-12">
					<form name="contactform" id="contactform" method="post" action="welcome/form_hire">
						<div class="row">
							<div class="form-group col-md-6 ">
							  <label>Name</label>
							  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
							</div>
							<div class="form-group col-md-6">
							  <label>Email</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group col-md-6">
							  <label>Phone No.</label>
							  <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
							</div>
							<div class="form-group col-md-6">
							  <label>Subject</label>
							  <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
							</div>
							<div class="form-group col-12">
							  <label>Message</label>
							  <textarea name="message" class="form-control" id="message" placeholder="Enter Your Message Here"></textarea>
							</div>				
							<button type="submit" class="btn btn-default">Submit </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Contact -->		
		
<!-- footer -->
<footer class="py-lg-5 py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<h3 class="wthree-logo mt-3">
					<a href="<?= base_url();?>" id="logoLink"><img src="<?= base_url();?>asset/images/pras-03.png" width="80px" height="80px"><!-- <i class="fa fa-lightbulb-o"></i> --> <span>P</span>apas<span>I</span>de</a>
				</h3>
			</div>
			<div class="col-lg-6 my-lg-0 my-4">
				<p><span class="fa mr-2 fa-map-marker"></span>Jl. Pakansari Raya, Bogor, Jawa Barat 16915</p>
				<p class="mt-2"><span class="fa mr-2 fa-envelope"></span><a href="mailto:adriantoprasetyo30@gmail.com">adriantoprasetyo30@gmail.com</a>, <span class="fa ml-3 mr-2 fa-phone"></span>62-822-5801-5981</p>
			</div>
			<div class="col-lg-3 copy-right p-0 text-lg-right">
			
				<p>Follow me on social media</p>
				<ul class="social_section_1info">
					<li class="mb-2"><a href="https://web.facebook.com/adriantoprasetyo"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2"><a href="https://github.com/adriantoprasetyo"><span class="fa fa-github"></span></a></li>
						<li class="linkedin"><a href="https://www.linkedin.com/in/adrianto-prasetyo-709861b8/"><span class="fa fa-linkedin"></span></a></li>
						<li class="instagram"><a href="https://www.instagram.com/adriantoprasetyo/"><span class="fa fa-instagram"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<div class="container">
		<p class="my-2">© 2019 Client. All rights reserved | Design by
			<a href="http://w3layouts.com"> W3layouts.</a>
		</p>
	</div>
</div>
<!-- copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

<script type="text/javascript">
	$(document).ready(function() {

    // process the form
    $('form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name' => $('input[name=name]').val(),
			'email' => $('input[name=email]').val(),
			'phone' => $('input[name=phone]').val(),
			'subject' => $('input[name=subject]').val(),
			'message' => $('input[name=message]').val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'http://papaside.com/welcome/form_hire', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});
</script>

</body>
</html>