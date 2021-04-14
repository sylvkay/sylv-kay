<!DOCTYPE html>
<html>
<head>
	<title>airport</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php
include_once("admin_header.php");
?>
	<h1 style="text-align: left; color: grey;font-weight: bold;font-style: italic;padding-left: 35px;text-align: center">Airport Registration</h1><br>
	
	<div class="row">
		<div class="col-sm-3">
         
         <div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
         <img src="images/bernswitzerland.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">switzerland</h6>
         <h3 style="text-align: center"><b>BERN</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
			<img src="images/china.jpg" class="img img-responsive"; style="width:100%; height:150px;">
			<h6 style="text-align: center">china</h6>
            <h3 style="text-align: center"><b>XIAO</b></h3>
         
		</div>
		</div>

		<div class="col-sm-5" style="padding-left: 20px;padding-right: 20px;box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 55px;padding-top: 30px;padding-bottom:68px;margin-right: 35px;">
	
<form action="" method="post">
	<label>Enter Airport Id <input type="text" name="d_airport_id" class="form-control"></label>
    <input type="button" name="submit" value="delete" class="btn btn-info"><br>


	<form action="" method="post">
		<label>Name</label><input type="text" name="airport_id" class="form-control"> <br>
		<label>code</label><input type="text" name="airport_code" class="form-control"> <br>
		<label>city</label><input type="text" name="airport_city" class="form-control"> <br>
		<label>country</label><input type="text" name="country" class="form-control"> <br>
		

		<input id="login" type="submit" name="save" class="btn btn-primary" value="Save"><br>
	</form>
		</div>

        <div class="col-sm-3">
         
        <div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
         <img src="images/bernswitzerland.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">canada</h6>
         <h3 style="text-align: center"><b>TORONTO</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
			<img src="images/china.jpg" class="img img-responsive"; style="width:100%; height:150px;">
			<h6 style="text-align: center">france</h6>
            <h3 style="text-align: center"><b>PARIS</b></h3>
         
		</div>
		</div>


	</div>
	
	</form>






<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>