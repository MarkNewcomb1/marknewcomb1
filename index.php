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
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
          <h4 class="hero-heading">Hi. I'm Mark Newcomb, Full Stack Web Developer.</h4>
<!--           <a class="button button-primary" href="http://getskeleton.com">Try Skeleton</a> -->
<a href="https://primepathlab.com" target="_blank"><img class="u-max-full-width" src="images/primepath-desktop-low.jpg"></a>
        </div>
        <div class="one-half column phones">
          <img class="phone" id="hotrod" src="images/iphone-hotrod-low.png">
          <img class="phone" src="images/iphone-flora-low.png">
        </div>
      </div>
    </div>
  </div>

  <div class="section values">
    <div class="container">
      <div class="row">
        <div class="one-third column value">
          <h2 class="value-multiplier">2</h2>
          <h5 class="value-heading">Years' Experience</h5>
          <p class="value-description">Employed with Web Development companies in Colorado</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier">3</h2>
          <h5 class="value-heading">Formal Certificates</h5>
          <p class="value-description">Professional certificate in Full Stack Web Development (MongoDB, Express, Angular, Node, React), Frontend Bootcamp (HTML5, CSS, Javascript) and Backend Bootcamp (PHP, server-side architectures)</p>
        </div>
        <div class="one-third column value">
          <h2 class="value-multiplier">2</h2>
          <h5 class="value-heading">Cool for Non-Responsive</h5>
          <p class="value-description">Mobile-first web design is my approach, with Photoshop/Illustrator skills and a lifelong musician's artistic sensibilities</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section get-help">
    <div class="container">
      <h3 class="section-heading">View my GitHub or Linkedin</h3>
      <p class="section-description">I've created an PHP-based MVC for collecting flora information in Colorado's wilderness, complete with HTML5 and PHP input validation, Open Weather API, and geolocation. Very little framework; mostly from-scratch code.</p>
      <a class="button button-primary" href="https://github.com/MarkNewcomb1/flora" target="_blank">View the Source</a>
      <a class="button button-primary" href="https://www.linkedin.com/in/marknewcomb1" target="_blank">View My LinkedIn</a>
    </div>
  </div>
    <div class="section get-help react">
    <div class="container">
      <h3 class="section-heading">React.js Music Collection/Search App</h3>
      <p class="section-description">Using the Discogs API, I've created an app that allows you to keep track of your physical media collection. Built with React, Node, Express, jQuery and hand-built CSS; NO Bootstrap!</p>
      <a class="button button-primary" href="https://github.com/MarkNewcomb1/final-project" target="_blank">View the Source</a>
    </div>
  </div>
  <div class="section categories">
    <div class="container">
      <h3 class="section-heading">Of Course, I Know Desktop Too</h3>
      <p class="section-description">I have extensive experience maintaining legacy websites for clients, as well as putting Wordpress sites through server migrations, updates, PHP wrappers, etc.</p>
      <div class="row">
        <div class="one-half column category">
          <a href="http://kspath.com" target="_blank"><img class="u-max-full-width" src="images/kps-desktop-low.jpg"></a>
        </div>
        <div class="one-half column category">
          <a href="#"><img class="u-max-full-width" src="images/marknewcomb1-desktop-low.jpg"></a>
        </div>
      </div>
    </div>
  </div>
  
  <!-------------FORM--------->
  <div class="container">
<form name="contactform" method="post" action="send_form_email.php">
  <div class="row">
    <div class="six columns">
      <label for="exampleEmailInput">Your email</label>
      <input class="u-full-width" required type="email" placeholder="name@example.com" id="exampleEmailInput" name="exampleEmailInput">
    </div>
    <div class="six columns">
      <label for="exampleRecipientInput">Reason for contacting</label>
      <select class="u-full-width" id="exampleRecipientInput" name="exampleRecipientInput">
        <option value="Option 1">Question</option>
        <option value="Option 2">Job Offer</option>
      </select>
    </div>
  </div>
  <label for="exampleMessage">Message</label>
  <textarea class="u-full-width" required placeholder="Hi Mark …" id="exampleMessage" name="exampleMessage"></textarea>
<!--
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
-->
  <input class="button-primary" type="submit" value="Submit">
</form>
  </div><!--end div container for the form----->
  <!--------END FORM---------->
  
  
  
<footer><p>Footer stuff!</p></footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>