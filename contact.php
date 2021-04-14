<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-social.less">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>

<?php
include_once("Header.php");
	?>

<center><h2>CONTACT US</h2></center><br><br>
<div class="row">
	<div class="col-sm-2">
	</div>

	<div class="col-sm-4" style="background-color: lightgrey; height: 329px;">

<center><h3>GET IN TOUCH</h3></center><br>
<p style="text-align: justify">No:13, Muneshwara layout vidyaranyapura post Bangalore India,560097<br><br>

We Understand that sometimes each person just wants to get away from an everyday routine. Which is why we are making holidays accessible to everyone. Whether its a family holiday, or a spa resort vacation, or a pilgrimage, out team is there to help you make up your mind about your next trip. Contact us regarding any travel related issue or vacation booking. Find your dream vacation in our collection of specially priced packages.</p><br>

<label>Call us: +917022090876</label>
<label>Email us: support@StonesTravels.com</label>
</div>


<div class="col-sm-4" style="background-color: lightgrey; margin-left: 10px;" >
	
	<form action="" method="post" >
     <center><h3>SEND US A MESSAGE</h3></center>
     <center><h5>FILL IN THE FORM BELOW</h5></center>
		<input type="text" name="name" class="form-control" placeholder="Name">
		<script type="text/javascript">
			function (email)
			{
				alert("wrong email address")
			}
		</script>
		<input type="email" name="email" class="form-control" placeholder="E-mail address">
		<input type="number" name="phone" class="form-control" placeholder="Phone no">
		<textarea name="msg" style="width: 480px; height: 89px;"></textarea>
		<input id="login" type="submit" name="contact" value="send" class="btn btn-primary" style="width: 150px;"><br>
	</form><br>

<?php
		$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['contacts']))
{
		if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$name = mysqli_real_escape_string($db,$_POST['name']);
			$email = mysqli_real_escape_string($db,$_POST['email']);
			$phone = mysqli_real_escape_string($db,$_POST['phone']);
			$msg = mysqli_real_escape_string($db,$_POST['msg']);
			
			

			$sql = "INSERT INTO `contacts` (`name`,`email`,`phone`,`msg`) VALUES ('$name','$email',$phone,'$msg')";
			
			
			$result = mysqli_query($db,$sql);
			
	
			if($result)
			{
				?>
				<script>
					alert("Message submitted succesfullly");
				</script>
				<?php
			}
			     else
			     {
			     	?>
			     	<script>
			     		alert("Message failed");
			     	</script>
			     	<?php
			     }

			}
}		
		?>



</div>


<div class="col-sm-2">
</div>
</div>

<div class="row">
	<div class="col-sm-2">
	</div>

	<div class="col-sm-4" style="background-color: lightgrey; margin-top: 10px;">
		<center><h3>OUR OFFICES</h3></center><br>
	<blockquote>
		<h5><b>HEAD OFFICE</b></h5>
		25 Ademola Street, off awolowo road ikoyi,lagos Nigeria<br>+2347069424321<br>
		<h5><b>IKEJA LAGOS</b></h5>
		29 Toyin Street, ikeja, lagos Nigeria<br>+2347062253786<br>
		<h5><b>VICTORIA ISLAND</b></h5>
		234A Muri okunlola street Victoria island,lagos Nigeria<br>+2347039424322<br>
		
	</blockquote>
	
	</div>

	<div class="col-sm-4" style="margin-top: 10px;">
		<img src="images/capture.png" style="width: 505px; height: 363px;">
	</div>
	<div class="col-sm-2">
		
	</div>

</div><br>

<footer>
	<div class="container-fluid">
	<div class="row" style="background-image: url('images/airplane-wallpaper-2.jpg'); height: 250px;">

<div class="col-sm-4">
			
			<br>
			<center>
			<h3>Our Vision:</h3>
			To be most reliable, efficient and strong travel Agent.<br>
			<h3>Our Mission</h3>
			To make travels and tourism industry to the high level by rendering world class services to our clients.
            </center>
			</div>

		<div class="col-sm-4">

			<br>
          <center><h3>OUR PARTNERS</h3></center>

      <center>
       <img src="images/downl.png" class="img-circle" style="width: 100px;">
       <img src="images/downlo.png" class="img-circle" style="width: 100px;">
       <img src="images/downloa.png" class="img-circle" style="width: 100px;">
       </center>
</div>

<div class="col-sm-4">

	<br>
	<center><h3>Follow us<h3></center>

      <center>
      	
        <a href="https://www.Twitter.com/sylvkay111" type="button" class="btn btn-twitter" class="fa fa-twitter"> Twitter </a>
        <a href="https://www.Pinterest.com/boladesylvester" type="button" class="btn btn-pinterest" class="fa fa-pinterest"> Pinterest</a>
        <a href="https://www.Facebook.com/sylvkay" type="button" class="btn btn-facebook" class="fa fa-facebook"> Facebook </a>
        <a href="https://www.Instagram.com/sylvkay" type="button" class="btn btn-instagram" class="fa fa-instagram"> Instagram </a><br>

    </center>

</div>
</div>
<div class="row">
		<div class=col-sm-12>
			<center><small>&copy; 2018 Sylvkay. All rights reserved</small></center>
			</div>
</footer>
