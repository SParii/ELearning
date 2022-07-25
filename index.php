
<!doctype html>
<html lang="en">

<head>
  <?php include 'components/head.html'; ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/egg.js/1.0/egg.min.js"></script>
  <title>Home</title>
</head>

<body>
  <?php include('components/header.php'); ?>
  <!-- <div class="container-fluid" id="main-para"> -->
  <div id="main-para" style="padding-left: 7%; padding-right: 7%;">
    <h2><b> Welcome!</b></h2>
    <br>
    <p>Get started now!</p>
    <br>


    <!-- boxes -->
    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><b>Login </b></h5>
            <p class="card-text">Already a user? Login!</p>
            <a href="login.php" class="btn btn-primary">Login</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><b>Register</b></h5>
            <p class="card-text">Register as new user</p>
            <a href="signup.php" class="btn btn-primary">Signup</a>
          </div>
        </div>
      </div>


      </div>
      <br><br><br><br><br>
    </div>

  </div>


<!-- features -->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <i class="fas fa-check-circle fa-4x icon"></i>

          <h3>Learn anything.</h3>
          <p>Explore any interest or trending topic, take prerequisites, and advance your skills</p>

        </div>
        <div class="col-lg-4">
          <i class="fas fa-bullseye fa-4x icon"></i>

          <h3>Flexible learning</h3>
          <p>Learn at your own pace, move between multiple courses, or switch to a different course</p>

        </div>
        <div class="col-lg-4">
          <i class="fas fa-solid fa-money-bill fa-4x icon"></i>

          <h3>Save money</h3>
          <p>We provide with numerous assignments and quizzes for free of cost</p>

        </div>
      </div>
    </div>

</section>


<!-- courses -->
    <section id="courses">

        <h1>Courses available</h1>
        <br>
        <div class="row">
          <div class="pricing-column col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h3>Languages</h3>
              </div>
              <div class="card-body">
                <h4>Being multilinguistic is the best advantage! Learn different languages with us!</h4>
                <p>Japanese</p>
                <p>English</p>
                <p>French</p>
                <p>Hindi</p>
                <p>German</p>
                <p>Chinese</p>

                <a href="signup.php" class="btn btn-outline-dark btn-lg btn-block">Sign up</a>
              </div>
            </div>

          </div>
          <div class="pricing-column col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h3>Computer Science</h3>
              </div>
              <div class="card-body">

                <h4>Turn into coders with us and be a step ahead in this digital world! Signup now!</h4>
                <p>C</p>
                <p>C++</p>
                <p>Java</p>
                <p>Python</p>
                <p>Html,Css,Javascript</p>
                <p>Data Structures and algorithms</p>
                <a href="signup.php" class="btn btn-outline-dark btn-lg btn-block">Sign up</a>
              </div>
            </div>

          </div>

          <div class="pricing-column col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3>Electronics and Communication</h3>
              </div>
              <div class="card-body">
                <h4>Electronics is clearly the winner of the day! Master this subject with us!</h4>
                <p>Microcontrollers</p>
                <p>Signals and Systems</p>
                <p>Digital communication</p>
                <p>Embedded C</p>
                <p>Information theory and coding</p>
                <a href="signup.php" class="btn btn-outline-dark btn-lg btn-block">Sign up</a>

              </div>
            </div>
          </div>


        </div>
      </section>

      <!-- Call to Action -->

<section id="cta">

  <h3 class="cta-heading">Sign up now to access the above courses.</h3>

  <a href="signup.php" class="btn btn-dark btn-lg download-button">Sign up</a>
  <a href="login.php" class="btn btn-dark btn-lg download-button">Login</a>

</section>


<!-- Testimonials -->


  <section id="testimonials">
    <div id="testimonialSite" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>I found the best Java course at Ikigai. Happy to start my learning journey at such a good platform.</h2>
          <img class="testimonial-image" src="img/test_2.jpg" alt="profile">
          <em>Lara, Bangalore</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Best possible way of teaching languages!</h2>
          <img class="testimonial-image" src="img/test_1.png" alt="profile">
          <em>Ritesh, Pune</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">Mastered all the basics of eletronics in a shortest possible time! Thankyou Ikigai.</h2>
          <img class="testimonial-image" src="img/test_3.jpg" alt="profile">
          <em>John, Mumbai</em>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonialSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonialSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>
</section>

<!-- contact me -->
<section id="contactme">
  <div class="container contact">

			<h2>Contact Us &#9971;</h2>
	<form action="mailto:ikigai970@gmail.com" method="POST" enctype="text/plain">
		<label> Name :-</label>
		<input type="text" name="name" class="form-control" required>

		<label>Email :-</label>
		<input type="email" name="email" class="form-control" required>

		<label>Phone Number :-</label>
		<input type="number" name="phone" class="form-control" required>

		<label> Message :-</label>
		<textarea name="comment" cols="10" rows="5"  class="form-control" required></textarea>
		<input type="submit" class="button">
</form>

</div>
</section>

<!-- Footer -->

  <footer id="footer" class="foot">
     <i class="fab fa-twitter footer-icon"></i>
     <i class="fab fa-facebook footer-icon"></i>
     <i class="fab fa-instagram footer-icon"></i>
     <i class="fas fa-envelope footer-icon"></i>
    <p>© Copyright 2022 Ikigai</p>

  </footer>




</body>

</html>
