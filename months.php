<?php  
$months = [
	"January" => "31",
	"February (Leap Year)" => "28",
	"February (Non Leap Year)" => "29",
	"March" => "31",
	"April" => "30",
	"May" => "31",
	"June" => "30",
	"July" => "31",
	"August" => "31",
	"September" => "30",
	"October" => "31",
	"November" => "30",
	"December" => "31"
];
// echo "<pre>";
print_r($months);
// echo "</pre>";
function month(){
	$months = array_map('strtoupper', $months);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MONTHS</title>
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
      <a class="navbar-brand" href="#">months.com</a>
    </div>
   <div class="collapse navbar-collapse" id="humburger">
   	 <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Months</a></li>
      <li><a href="#">weather</a></li> 
      <li><a href="#">regions</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
   </div>
  </div>
</nav>
	<div class="container">
			<div class="jumbotron">
				<h2 style="text-align: center;">please refresh to see different background images </h2>
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<h2 style="text-align: center;">please choose a month</h2>

				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<select name="country">

						<option>
							<?php

							foreach($months as $p => $w):
								echo '<option value="'.$w.'">'.$p.'</option>'; 
							endforeach;
							?>
						</select>
						<input type="submit" name="Submit" value="submit" class="btn btn-success">
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
		<br>
		<br>
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
		<br>
		<br>
		<div class="net">
			<marquee behavior=""diraction=sides"><a href="http://twitter.com/wycliffepepela8" target="blank"><h3>follow me on twitter</h3></a> </marquee>
		</div>
		<br>
		<br>
		<br>
		<div class="container">
			<div class="jumbotron">
				<?php  

		if (isset($_POST['Submit'])){
			print_r($_POST);
			/*$m = $_POST['key'];*/
			$d = $_POST['country'];
			echo "<br>";
			echo "<h2>This month has $d days.</h2>";
			echo "<h2><u>Thanks for your response</u></h2>";
			echo "<br>";
			echo "<br>";
		}
		?>
			</div>
		</div>
		 <footer class="container-fluid text-center">
  <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>powered by wycliffe</a></li>
        </ul>
    <p>copyright &copy;  2018</p>
  </footer>

	</body>
	</html> 

