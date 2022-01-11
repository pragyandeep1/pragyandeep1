<?php
    if (isset($_POST['registration'])) {
      $user = $_POST['firstname'];
      echo "Welcome " .$user;
    }
?>

<?php
		if (isset($_SESSION['userlogin'])) {
			header("location:login.php");
		}
		if (isset($_GET['logout'])) {
				session_destroy();
				unset($_SESSION);
				header("location: login.php");
		}
?>
<?php include("./views/header.php")?>



<main>

<!-- Carousel starts -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="https://source.unsplash.com/1600x900/?graphics"	class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Graphics Designing</h1>
            <p>Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://source.unsplash.com/1600x900/?android" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Mobile App Development</h1>
            <p>People who are crazy enough to think they can change the world, are the ones who do.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/productive-day-at-home.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Search Engine Optimization</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/mobile-app-development.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>One more for good measure.</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Go Next</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/graphic-design.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>One more for good measure.</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/slides/seo.jpg" class="d-block w-100" alt="slide">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>One more for good measure.</h1>
            <p>If you are working on something that you really care about, the vision pulls you.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="width:5%;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next" style="width:5%;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<!-- Carousel ends -->

<!-- Login Signup buttons -->
<div class="entry d-flex">
  <a href="login.php" class="glossy-button btn btn-danger mt-2 ms-2 mb-3" id="loginBtn">Log In</a>
  <a href="registration.php" class="glossy-button btn btn-success mt-2 ms-1 mb-3 me-1" id="signupBtn">Sign Up</a>
</div>
<!-- //Login Signup buttons -->

	<!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

 <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
			<div class="col-md-12">
					
					<div class="page-wrapper" style="text-align: center;">
						<div class="post-slider">
							<div class="post-wrapper">
								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a1.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p>We compliment you on being such a discerning shopper and appreciate that you have chosen us.</p>
        									<h5>Watson Colombus</h5>
								</div>

								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a2.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p>Our products keep getting better when people see volume of transactions recorded with you.</p>
        									<h5>Collin Webber</h5>
								</div>

								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a3.png"alt="photo" class="bd-placeholder-img rounded-circle mt-2" style="height:6rem; width:6rem;">
											<p>We compliment you on being such a discerning shopper and appreciate that you have chosen us.</p>
        									<h5>Fienna Adolf</h5>
								</div>
								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a4.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p>I wanted to thank you on behalf of all of us for being a valued and faithful customer for years.</p>
        									<h5>Frank Atkinson</h5>
								</div>

								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a5.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p>Thank you for placing your trust in our company and we will provide excellent service.</p>
        									<h5>Senaco Charles</h5>
								</div>

								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a6.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p>Please accept our gratitude for your relationship with us joy and makes what we do worthwhile.</p>
        									<h5>Helena David</h5>
								</div>
								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a7.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p>We compliment you on being such a discerning shopper and appreciate that you have chosen us.</p>
        									<h5>Adam Bernacki</h5>
								</div>

								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a8.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p> Thank you for taking the time to attend our recent event. It was a pleasure to talk with you.</p>
        									<h5>Solomon Sunga </h5>
								</div>

								<div class="post bg-dark text-light px-3 pt-2" style="height: 15rem;">
												<img src="../img/photos/a9.png"alt="photo" class="bd-placeholder-img rounded-circle" style="height:6rem; width:6rem;">
											<p> Thank you for your recent evaluation. We are excited to learn the results of your review of us.</p>
        									<h5>Olivia Davis</h5>
								</div>
            </div>
			</div>
		</div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <!-- Page Wrapper Starts -->
    <div class="page-wrapper" style="overflow: auto;">
        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>

            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="../img/images/img_lights_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info">
                        <h4><a href="#">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_mountains_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info">
                        <h4><a href="#">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Nelson Mandela</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_nature_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info">
                        <h4><a href="#">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_snow_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info">
                        <h4><a href="#">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>
                <div class="post">
                    <img src="../img/images/img_lights_wide.jpg" class="slider-image" alt="image">
                    <div class="post-info">
                        <h4><a href="#">The greatest glory in living lies not in never falling, but in rising every time we fall.</a></h4>
                        <i class="fa fa-user">Awa Melvin</i>
                        &emsp;
                        <i class="fa fa-calendar">2 Dec 2021</i>
                    </div>
                </div>

            </div>
        </div>
        <!-- //Post Slider -->
    </div>
    <!-- Page Wrapper Ends -->


    <hr class="featurette-divider">

    <div class="row featurette" style="overflow: auto;">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="80%" height="80%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
    </div>

    <div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<hr class="featurette-divider">
    

    <!-- /END THE FEATURETTES -->
</div>
</div>
  </div><!-- /.container -->
 <script src="../js/slides.js"></script>
</main>
<?php include("./views/footer.php")?>