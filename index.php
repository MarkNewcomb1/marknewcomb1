<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Mark Newcomb Portfolio</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
	  $(document).ready(function(){
		  $(".container").hide();
		  $("#preload").show();
			  $(window).on("load", function(){
				 $("#preload").hide();
				 $(".container").fadeIn();
			  });
				$('#hotrod').click(function() {
			window.open('http://hotroddiy.com', '_blank');
		});
				$('#flora-finder').click(function() {
			window.open('https://github.com/MarkNewcomb1/flora', '_blank');
		});		
	  });
  </script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<img id="preload" src="images/preload.GIF" />
<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="section hero">
    <div class="container">
      <div class="row">
        <div class="one-half column">
          <h4 class="hero-heading">Hi. I'm Mark Newcomb, <br>UI Developer.</h4>
          <h4 class="hero-heading">I've worked on household brand websites, administrator tools for DaaS (Directory-as-a-Service), and legal software.</h4>    
          <a href="http://kspath.com" target="_blank"><img class="u-max-full-width" src="images/kps-desktop-low.jpg"></a>              
        </div>
        <div class="one-half column phones">
          <img class="phone" id="hotrod" src="images/iphone-hotrod-low.png">
<!--           <img class="phone" src="images/iphone-flora-low.png"> -->
        </div>
      </div>
    </div>
  </div>

  <div class="section values">
    <div class="container">
      <div class="row">
        <div class="one-third column value">
          <h2 class="value-multiplier">10+</h2>
          <h5 class="value-heading">Years' Experience</h5>
          <p class="value-description">with Software companies in Colorado - REAL work for REAL clients.</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier">4</h2>
          <h5 class="value-heading">Formal Certificates</h5>
          <p class="value-description">in Full Stack Web Development (MongoDB, Express, Angular, Node, React), Frontend Bootcamp (HTML5, SASS/CSS, Javascript), Immersive Web Development (ES6 Modules, React/Vue), and Backend Bootcamp (PHP, server-side architectures)</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier">6</h2>
          <h5 class="value-heading">Global brands</h5>
          <p class="value-description">I've been entrusted to do website builds for, whose names you've seen in stores. Some have been full builds; others have been integration of new features into existing codebases. <br>Either way, I get it done.</p>
        </div>
      </div> <!-- row -->
    </div>
  </div>
  <div class="section get-help flora">
    <div class="container">
      <h3 class="section-heading">View my GitHub or Linkedin</h3>
      <p class="section-description">I've made an app for collecting flora information in Colorado's wilderness, with HTML5 and PHP input validation, Open Weather API, and geolocation. Very little framework - mostly from-scratch code.</p>
      <a class="button button-primary" href="https://github.com/MarkNewcomb1/flora" target="_blank">GitHub source</a>
      <a class="button button-primary" href="https://www.linkedin.com/in/marknewcomb1" target="_blank">LinkedIn</a>
      <img class="u-max-full-width" id="flora-finder" src="images/flora-finder-desktop.jpg">
    </div>
  </div>
    <div class="section get-help categories">
    <div class="container">
      <h3 class="section-heading">React.js Music Collection/Search App</h3>
      <p class="section-description">I've made an app for keeping track of your physical media collection. Built with Discogs API, React, Node, Express, jQuery and hand-built CSS - NO Bootstrap!</p>
      <a class="button button-primary" href="https://github.com/MarkNewcomb1/final-project" target="_blank">GitHub source</a>
      <a class="button button-primary" href="https://www.youtube.com/watch?v=gsKL-Dx6mRc" target="_blank">Demo Video</a>
    </div>
  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>