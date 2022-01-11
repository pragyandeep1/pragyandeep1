<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Freelancer Site</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="../img/favicons/okcl-logo.png">
		<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">

		<!-- Custom styles for this template -->
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	
	  <link href="../css/navbar.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" type="text/css" href="../css/small.css">
	  <link rel="stylesheet" type="text/css" href="../css/style_add_on.css">
	  <link rel="stylesheet" type="text/css" href="../css/style_login.css">

	   <!-- Custom styles for this template -->
	  <link href="../css/carousel.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	    <!-- jquery -->
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<!-- //jquery -->

			<!-- Slick Carousel -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script type="text/javascript" src="../js/scripts.js"></script>
	
</head>
<body>

<!-- <div class="loader-container">
  <div class="loader"></div>
</div> -->

	<header class="mb-2 s3 clearfix">
		<nav class="topnav navbar-expand-md fixed-top navbar-dark bg-primary" id="nav">
		    <div class="container-fluid">
		    		<div class="navbar-header d-flex">
		    			<a class="navbar-brand" href="index.php">
				    			<img src="../img/favicons/okcl-logo.png" alt="logo" class="logo mh-100 mw-100">
				    		</a>
		    			<button class="navbar-toggler" type="button" onclick="myFunction()">
        				<span class="navbar-toggler-icon"></span>
        			<!-- <i class="material-icons">menu</i> -->
      			</button>

      			<!-- <button type="button" id="animated-navicon" class="navbar-toggler" data-toggle="collapse" data-target="#mobile-navbar-collapse" onclick="myFunction()">
      				<span class="sr-only">Toggle navigation</span>
      				<span class="navbar-toggler-icon"></span>
      				<span class="navbar-toggler-icon"></span>
      				<span class="navbar-toggler-icon"></span>
      			</button> -->

		       	<div class="collapse navbar-collapse mx-auto" id="myLinks">
		       		<ul class="navbar-nav ml-auto">
    					<li class="nav-item active" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown"> Jobs</a>
      						<ul class="dropdown-menu">
        						<li> <a class="dropdown-item text-dark" href="#"> Graphic Design Jobs</a>
        							<ul class="submenu dropdown-menu">
        								<li> <a class="dropdown-item text-dark" href="#"> Logo Design Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Web Design Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Banner Design Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> 3D Modeling Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Photoshop Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Illustration Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> 2D Animation Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> 3D Animation Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Graphic Design Jobs</a></li>
        							</ul>
        						</li>
								<li> <a class="dropdown-item text-dark" href="#"> Website Jobs</a>
          							<ul class="submenu dropdown-menu">
							            <li> <a class="dropdown-item text-dark" href="#"> PHP Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Javascript Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> HTML5 Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> CSS Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> ASP.NET Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Wordpress Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> AWS Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> WIX Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Squarespace Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Database Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Shopify Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Magento Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Website Jobs</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Mobile App Development Jobs</a>
              						<ul class="submenu dropdown-menu">
						                <li> <a class="dropdown-item text-dark" href="#"> Android Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> IOS Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Flutter Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> PhoneGap Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Xamarine Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Mobile App Development Jobs</a></li>
									</ul>
								</li>
            					<li> <a class="dropdown-item text-dark" href="#"> Software Development Jobs</a>
            						<ul class="submenu dropdown-menu">
										<li> <a class="dropdown-item text-dark" href="#"> Java Software Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Python Software Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> C# Software Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> C++ Software Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Objective C Software Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Linux Software Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Ruby On RailsSoftware Development Jobs</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Software Development Jobs</a>
										</li>
									</ul>
								</li>
							<li> <a class="dropdown-item text-dark" href="#"> Internet Marketing Jobs</a>
								<ul class="submenu dropdown-menu">
									<li> <a class="dropdown-item text-dark" href="#"> Social Media Marketing Jobs</a></li>
									<li> <a class="dropdown-item text-dark" href="#"> Other Marketing Jobs</a></li>
								</ul>
							</li>
							<li> <a class="dropdown-item text-dark" href="#"> Data Entry Jobs</a></li>
							<li> <a class="dropdown-item text-dark" href="#"> SEO Jobs</a></li>
							<li> <a class="dropdown-item text-dark" href="#"> Writing Jobs</a>
								<ul class="submenu dropdown-menu">
									<li> <a class="dropdown-item text-dark" href="#"> Copy Writing Jobs</a></li>
									<li> <a class="dropdown-item text-dark" href="#"> Article Writing Jobs</a></li>
									<li> <a class="dropdown-item text-dark" href="#"> Ghost Writing Jobs</a></li>
									<li> <a class="dropdown-item text-dark" href="#"> Other Writing Jobs</a></li>
								</ul>
							</li>
							<li> <a class="dropdown-item text-dark" href="#"> Logistics Jobs</a></li>
							<li> <a class="dropdown-item text-dark" href="#"> Legal Jobs</a></li>
							<li> <a class="dropdown-item text-dark" href="#"> Finance Jobs</a></li>
							<li> <a class="dropdown-item text-dark" href="#"> Manufacturing Jobs</a></li>
							<li> <a class="dropdown-item text-dark" href="#"> Other Jobs</a></li>
						</ul>	
					</li>

					<li class="nav-item" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown"> Freelancers</a>
      						<ul class="dropdown-menu">
        						<li> <a class="dropdown-item text-dark" href="#"> Freelance Graphics Designers</a>
        							<ul class="submenu dropdown-menu">
        								<li> <a class="dropdown-item text-dark" href="#"> Photoshop Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Motion Graphics Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Illustrators</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Business Card Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> 3D Animators</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> 2D Animators</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Stationery Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Tattoo Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Fashion Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Packaging Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Brochure Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> T-Shirts Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Graphics Designers</a></li>
        							</ul>
        						</li>
        						<li> <a class="dropdown-item text-dark" href="#"> Freelance Logo Designers</a>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance 3D Graphics Designers</a>
          							<ul class="submenu dropdown-menu">
          								<li> <a class="dropdown-item text-dark" href="#"> 3D Renderers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> 3D Modellers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other 3D Graphics Designers</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Web Designers</a>
          							<ul class="submenu dropdown-menu">
          								<li> <a class="dropdown-item text-dark" href="#"> Wordpress Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Squarespace Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Shoppify Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Magento Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Wix Designers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Web Designers</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Web Developers</a>
          							<ul class="submenu dropdown-menu">
							            <li> <a class="dropdown-item text-dark" href="#"> PHP Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Javascript Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> HTML5 Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> CSS Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> ASP.NET Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Wordpress Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> AWS Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> WIX Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Squarespace Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Database Development Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Shopify Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Magento Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Website Developers</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Mobile App Developers</a>
              						<ul class="submenu dropdown-menu">
						                <li> <a class="dropdown-item text-dark" href="#"> Android Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> IOS Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Flutter Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> PhoneGap Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Xamarine Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Mobile App Developers</a></li>
									</ul>
								</li>
            					<li> <a class="dropdown-item text-dark" href="#"> Freelance Writers</a>
            						<ul class="submenu dropdown-menu">
            							<li> <a class="dropdown-item text-dark" href="#"> Copy Writers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Article Writers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Ghost Writers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Writers</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Lawyers</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Translators</a>
            						<ul class="submenu dropdown-menu">
            							<li> <a class="dropdown-item text-dark" href="#"> Translators in English</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in French</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in Spanish</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in German</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in Russian</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in Portuguese</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in Hindi</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Translators in Other Languages</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Internet Marketing Specialists</a>
            						<ul class="submenu dropdown-menu">
            							<li> <a class="dropdown-item text-dark" href="#"> Social Media Marketing Experts</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Marketing Experts</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Financial Experts</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Virtual Assistants</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Data Entry Operators</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Logistic Experts</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Software Developers</a>
            						<ul class="submenu dropdown-menu">
            							<li> <a class="dropdown-item text-dark" href="#"> Java Software Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Python Software Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> C# Software Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> C++ Software Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Objective C Software Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Linux Software Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Ruby On RailsSoftware Developers</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Other Software Developers</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance Manufacturers</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Freelance SEO Specialists</a></li>
								<li> <a class="dropdown-item text-dark" href="#"> Other Freelancers</a></li>
							</ul>	
					</li>

					<li class="nav-item" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Technology</a>
      						<ul class="dropdown-menu">
        						<li> <a class="dropdown-item text-dark" href="#">Web Technology</a>
									<ul class="submenu dropdown-menu">
										<li> <a class="dropdown-item text-dark" href="#">PHP</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Java Script</a></li>
										<li> <a class="dropdown-item text-dark" href="#">HTML5</a></li>
										<li> <a class="dropdown-item text-dark" href="#">CSS</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Wordpress</a></li>
										<li> <a class="dropdown-item text-dark" href="#">AWS</a></li>
										<li> <a class="dropdown-item text-dark" href="#">WIX</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Squarespace</a></li>
										<li> <a class="dropdown-item text-dark" href="#">MySQL</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Magento</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Other Web Technologies</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#">Mobile Technology</a>
									<ul class="submenu dropdown-menu">
										<li> <a class="dropdown-item text-dark" href="#">Android</a></li>
										<li> <a class="dropdown-item text-dark" href="#">IOS</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Flutter</a></li>
										<li> <a class="dropdown-item text-dark" href="#">PhoneGap</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Xamarine</a></li>
										<li> <a class="dropdown-item text-dark" href="#">Other Mobile Technologies</a></li>
									</ul>
								</li>
								<li> <a class="dropdown-item text-dark" href="#">Other Technologies</a></li>
							</ul>
						</li>

					<li class="nav-item" id="myDropdown">
      						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Design</a>
      						<ul class="dropdown-menu">
        				<li> <a class="dropdown-item text-dark" href="#">Logo Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Web Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Banner Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">3D Modeling</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Photoshop Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Illustration</a></li>
								<li> <a class="dropdown-item text-dark" href="#">2D Animation</a></li>
								<li> <a class="dropdown-item text-dark" href="#">3D Animation</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Motion Graphic Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Business Card Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Tattoo Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Stationery Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Fashion Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Package Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Brochure Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">T-shirt Design</a></li>
								<li> <a class="dropdown-item text-dark" href="#">Other Graphic Design</a></li>
							</ul>
					</li>

					<li class="nav-item" id="myDropdown">
						<a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">Marketing</a>
						<ul class="dropdown-menu">
							<li> <a class="dropdown-item text-dark" href="#"> Engine Marketing</a></li>
							<li> <a class="dropdown-item text-dark" href="#">Content Marketing</a></li>
							<li> <a class="dropdown-item text-dark" href="#">Social Media Marketing</a></li>
							<li> <a class="dropdown-item text-dark" href="#">Email Marketing</a></li>
						</ul>
					</li>
				</ul>
		
					</div>
		 <form class="d-flex mx-auto" style="width: 28vw;right: 8rem;position: relative;top: 0rem;height: 4rem;" action="https://www.google.co.in/search" method="GET">
			   <input class="form-control mt-2" type="search" id="traverse" placeholder="What is in your mind..." aria-label="Search">
			   <button class="btn btn-success mt-2 ms-2 mb-3" type="submit" id="search">Search</button>
		 </form>
		      </div>
		    </div>

		  </nav>
	<!-- nav ends -->

	</header>