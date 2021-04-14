<!DOCTYPE html>
<html lang="en">
<head>
	<title>AdminFrontpage</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

	
	
	<style>
td{
	font-weight:bold;font-size:16px;font-family:'arial black',algerian,helvetica,monospace;text-align:center;text-decoration: underline;text-transform: capitalize;
}



 	</style>

  
</head>
<body>
<div class="container-fluid">
<div class="jumbotron">
	<div class="row"> 
		<div class="col-sm-6">
  			<h2 style="font-weight: bolder;padding-left: 90px;">STONES TRAVELS & TOURS</h2>
  			<p style="padding-left: 90px;">Making the sky the best place on Earth.</p>
		</div>
	<div class="col-sm-6">
		<img src="images/logo.png" style="height: 100px;width: 350px; float: right;z-index: 10;" class="img-circle img-responsive" alt="sylvester kay">
	</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Airport<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">add airport</a></li>
            <li><a href="#">update airport</a></li>
            <li><a href="#">delete airport</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plane<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">add plane</a></li>
            <li><a href="#">update plane</a></li>
            <li><a href="#">delete plane</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">flight<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">add flight</a></li>
            <li><a href="#">update flight</a></li>
            <li><a href="#">delete flight</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">air report</a></li>
            <li><a href="#">plane report</a></li>
            <li><a href="#">flight report</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
</div>

</div>
		<div class="container-fluid" style="padding-bottom: 55px;">
		<div class="row">
	    <div class="col-sm-12" style="padding-left: 65px;">

	    	<div id="my-slider" class="carousel slide" data-ride="carousel">
	    		<!-- indicators dot nov -->
<ol class="carousel-indicators">
	<li data-target="#my-slider" data-slide-to="0" class="active"></li> 
	<li data-target="#my-slider" data-slide-to="1"></li>
	
</ol>
	    		<!-- wrapper for slides -->
	    		<div class="carousel-inner" role="listbox">
	    			<div class="item active">
	    				<img src="images/air1.jpg" alt="plane" style="width: 1500px; height: 350px;">
                         <div class="carousel-caption">
                         	<h1>airplanes</h1>	
                         </div>
	    				
	    			</div>
                        <div class="item">
	    				<img src="images/air2.jpg" alt="port" style="width: 1500px; height: 350px;">
                         <div class="carousel-caption">
                         	<h1>airport</h1>	
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
		</div>
	

	<div class="row" style="padding-top: 50px;padding-right: 50px;padding-left: 50px;">
		<div class="col-sm-3" style="border-right: solid 1px gray;">
	<table class="table table-striped">
		<tr> 
			<td>
			Search for flight
			</td>
		</tr>
		<tr>
			<td>Reservation</td>
			</tr>
		<tr>
			<td>Best Price</td>
		</tr>
		<tr>
			<td>Book your ticket</td>
		</tr>
		<tr>
			<td>Rate our application</td>
		</tr>
	</table>
</div>
<div class="col-sm-6" style="text-align: center;font-weight: bold;font-family: 'arial black';font-size: 20px;"> 
Welcome to Stones Travels & Tours LTD
</div>

<div class="col-sm-3" style="border-left: solid 1px gray;">
	<form action="admin.php" method="post">
		<p>Login</p>
		<input id="username" type="username" name="username" class="form-control" placeholder="Username"> <br><br>
		<input id="user_pass" type="password" name="password" class="form-control" placeholder="Password"> <br><br>
		<input id="login" type="submit" name="login"><br>
		
			<a href="password">forgot password?</a><br>
		    <a href="registration">Register</a>
         </form>
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
	echo "login successful";

}
else{
echo "login failed";}
}
 }
         ?>

     </div>
         <script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>