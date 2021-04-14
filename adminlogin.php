			<?php
if(isset($_POST['login']))
         {
$db=mysqli_connect("localhost","root","","airline");
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$query="select * from admin where username='$username' and password='$password'";
$result=mysqli_query($db,$query);
$number=mysqli_num_rows($result);
if ($result);
{
if($number > 0)
{
	?>
	<script type="text/javascript">
		alert("Login successful");
{
		location.href = 'admin.php';
		
		
	}
	</script>
	 <?php

}
else
{
?>
	<script type="text/javascript">
		alert("Login failed");
	</script>
	 <?php
}

}
 }
         ?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
include_once("header.php");
	?>
<div class="container-fluid" style="padding-bottom: 55px;">
		<div class="row">
	    <div class="col-sm-12" style="padding-left: 65px;">

	    	<div id="my-slider" class="carousel slide" data-ride="carousel">
	    		<!-- indicators dot nov -->
<ol class="carousel-indicators">
	<li data-target="#my-slider" data-slide-to="0" class="active"></li> 
	<li data-target="#my-slider" data-slide-to="1"></li>
	<li data-target="#my-slider" data-slide-to="2"></li>
	
</ol>
	    		<!-- wrapper for slides -->
	    		<div class="carousel-inner" role="listbox">
	    			<div class="item active">
	    				<img src="images/airplane1.jpg" alt="plane" style="width: 1500px; height: 350px;">
                         <div class="carousel-caption">
                         	<h1 style="color: black">Airplane</h1>	
                         </div>
	    				
	    			</div>
                        <div class="item">
	    				<img src="images/plane.jpg" alt="port" style="width: 1500px; height: 350px;">
                         <div class="carousel-caption">
                         	<h1>Class</h1>	
                         </div>
	    				
	    			</div>

	    			<div class="item">
	    				<img src="images/airplane2.jpg" alt="plane" style="width: 1500px; height: 350px;">
                         <div class="carousel-caption">
                         	<h1 style="color: black">SkyView</h1>	
                         </div>
	    				
	    			</div>
	    		</div>
			<!--controls or next and prev buttons -->
			<a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
             <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">next</span>
			</a>
		</div><br>
		
            <div class="well">
			<center><p class="text-info"> IN STONES TRAVELS! WE MAKE THE SKY THE BEST PLACE ON EARTH</p></center>	
			</div>

<div class="row">
		<div class="col-sm-3">


			<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
         <img src="images/chicago.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">united states</h6>
         <h3 style="text-align: center"><b>CHICAGO</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
			<img src="images/hongkong.jpg" class="img img-responsive"; style="width:100%; height:150px;">
			<h6 style="text-align: center">china</h6>
            <h3 style="text-align: center"><b>HONG KONG</b></h3>
         
		</div>
		</div>
		<div class="col-sm-3">


			<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
         <img src="images/italy.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">italy</h6>
         <h3 style="text-align: center"><b>ROME</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
			<img src="images/new1.jpg" class="img img-responsive"; style="width:100%; height:150px;">
			<h6 style="text-align: center">united states</h6>
            <h3 style="text-align: center"><b>NEW YORK</b></h3>
         
		</div>
		</div>
		

		
<div class="col-sm-3">
         
        <div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
         <img src="images/chicago.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">south sudan</h6>
         <h3 style="text-align: center"><b>JUBA</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
			<img src="images/hongkong.jpg" class="img img-responsive"; style="width:100%; height:150px;">
			<h6 style="text-align: center">united kingdom</h6>
            <h3 style="text-align: center"><b>LONDON</b></h3>
         
		</div>
		</div>


<!-- Login -->
	
	<div class="col-sm-3">
	<div align="right">
		<div style=" border-top: 100px; width: 300px; height: 300px; border: solid 1px #333333;" align="left">
			<div style="background-color: #333333; color: #fff; padding: 3px; text-align: center"><b>Login</b>
			</div>
	<div style="margin: 30px">

			<form action="" method="post">

			<label>Username</label><input type="text" name="username" class="box"><br><br>
			<label>Password</label><input type="password" name="password" class="box"><br><br>
			<input type="submit" value="submit" name="login" class="btn btn-info"><br><br>

            <div style="font-size: 11px; color: #cc0000; margin-top: 10px"></div>

			</form>




		</div>
	</div>
</div>
	</div>
	


	</div>




<footer>
<div class="row" style="background-color: black;"><br>
		<div class="col-sm-12" style="color: white;">
			 <center>
      	
        <a href="https://www.Twitter.com/sylvkay111" type="button" class="btn btn-twitter" class="fa fa-twitter"> Twitter </a>
        <a href="https://www.Pinterest.com/boladesylvester" type="button" class="btn btn-pinterest" class="fa fa-pinterest"> Pinterest</a>
        <a href="https://www.Facebook.com/sylvkay" type="button" class="btn btn-facebook" class="fa fa-facebook"> Facebook </a>
        <a href="https://www.Instagram.com/sylvkay" type="button" class="btn btn-instagram" class="fa fa-instagram"> Instagram </a><br>

    </center>

			<center><small>&copy; 2018 Sylvkay. All rights reserved </small></center>
			</div>
		</div>
</footer>






		<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>