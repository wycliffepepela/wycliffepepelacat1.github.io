<!DOCTYPE html>
<html>
<head>
	<title>transportation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#humburger">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">travel.com</a>
			</div>
			<div class="collapse navbar-collapse" id="humburger">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Travel</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<marquee behavior=""diraction=sides"><a href="http://twitter.com/wycliffepepela8" target="blank"><h3>follow me on twitter</h3></a> </marquee>	
	<br>	
	<div class="container">
		<div class="jumbotron">
			<h2 style="text-align: center;">please refresh to see different background images </h2>
			<?php 
	$quotes =[
		['Author' => 'wycliffe','text'=> 'everyone has a plan ,until ,they get punched in the mouth '],
		['Author' => 'wangila','text'=> "dont't let anyone get comfortable disrespecting you "],
		['Author' => 'samantha','text'=> 'Comfort is the thief of progress  '],
		['Author' => 'jowi','text'=> 'life is all aout making an impact not making income  '],
		['Author' => 'Pepela','text'=> 'If you can create technology you can change the world  ']
		]; 
		$quote = $quotes[rand(0 ,(count($quotes)-1))];
		$quoteAuthor =$quote['Author'];
		$quotetext = $quote['text'];
		 ?>
<blockquote>
	<?php echo "<h3 style='text-align: center;'> &quot" . $quotetext . "&quot </h3>"; ?>
	<?php echo "<h4 style='text-align: center;'><i> -" . $quoteAuthor ."</i></h4>"; ?>
</blockquote>
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">

						<h2 style="text-align: center;">How Are You Traveling?</h2>

						<?php
						if (!isset($_POST['submit'])){
							$travel=array(
								"Automobile",
								"Jet",
								"Ferry",
								"Subway"
							);

							?>
							<p>Travel takes many forms, whether across town, across the country, or
							around the world. Here is a list of some common modes of transportation:</p>
							<ul>
								<?php
								foreach ($travel as $t){
									echo "<li>$t</li>"; 
								}
								?>
							</ul>
							<form method="post" action="transport.php">
								<p>Please add your favorite, local, or even imaginary modes of travel 
								to the list, separated by commas:</p>
								<input type="text" name="added" size="80" />
								<p />
								<?php
								foreach ($travel as $t){
									echo "<input type='hidden' name='travel[]'' value='$t' />";
								}
								?>
								<input type="submit" name="submit" value="Go" class="btn btn-success" />
							</form>

							<?php
						}else{
							$travel=($_POST['travel']);
							$added=explode(',',$_POST['added']);
							array_splice($travel, count($travel), 0, $added);
							echo "<p>Here is the list with your additions:</p><ul>";
							foreach($travel as $t){

								echo "<li>".trim($t)."</li>";  
							}
							echo"</ul>";                         

							?>
							<p>Add more?</p>
							<form method="post" action="yourfile.php">
								<input type="text" name="added" size="80" />
								<p />
								<?php
								foreach ($travel as $t){
									echo "<input type='hidden' name='travel[]' value='$t' />'";
								}
								?>
								<input type="submit" name="submit" value="Go" class="btn btn-danger" />
							</form>
							<?php
						}
						?>
						<?php 
	$images =[
		['img' =>'<style>body{background-image: url(img/1.jpg) ;}</style>'],
		['img' => "<style>body{background-image: url(img/2.jpg);}</style>"],
		['img' => '<style>body{background-image: url(img/3.jpg) ;}</style>'],
		['img' =>'<style>body{background-image: url(img/4.jpg) ;}</style>'],
		['img' => '<style>body{background-image: url(img/5.jpg) ;}</style>']
		]; 
		$imga = $images[rand(0 ,(count($images)-1))];
		$bgimage =$imga['img'];
		echo "$bgimage";
		 ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<marquee behavior=""diraction=sides"><a href="http://twitter.com/wycliffepepela8" target="blank"><h3>follow me on twitter</h3></a> </marquee>
	<section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3 style="text-align: center;"><b><u>pictorial</u></b></h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/wet.jpg" class="img-fluid img-responsive" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/wet1.jpg" class="img-fluid img-responsive" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/wet.jpg" class="img-fluid img-responsive" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/wet1.jpg" class="img-fluid img-responsive" alt="">
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact ME</h3>
          <p>You can contact us in the following details bellow.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Webuye,Bungoma, Kenya</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+254707954632</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">Wycliffepepelacrash@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->



	<footer class="container-fluid text-center">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span>powered by wycliffe</a></li>
		</ul>
		<p>copyright &copy;  2018</p>
	</footer>

</body>
</html>