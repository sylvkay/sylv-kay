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
		<label>code</label><input type="text" name="airport_code" class="form-control"> <br>
		<label>name</label><input type="text" name="airport_name" class="form-control"> <br>
		<label>city</label><input type="text" name="airport_city" class="form-control"> <br>
		<label>country</label><input type="text" name="airport_country" class="form-control"> <br>
		

		<input id="login" type="submit" name="airport_reg" class="btn btn-primary" value="Save"><br>

	</form>

	<?php
		$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['airport_reg']))
{
		if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$airport_code = mysqli_real_escape_string($db,$_POST['airport_code']);
			$airport_name = mysqli_real_escape_string($db,$_POST['airport_name']);
			$airport_city = mysqli_real_escape_string($db,$_POST['airport_city']);
			$airport_country = mysqli_real_escape_string($db,$_POST['airport_country']);
			
			

			$sql = "INSERT INTO `airport` (`airport_code`,`name`,`city`,`country`) VALUES ('$airport_code','$airport_name','$airport_city','$airport_country')";
			
			$result = mysqli_query($db,$sql);
	
			if($result)
			{
				?>
				<script>
					alert("Registration successful");
				</script>
				<?php
			}
			     else
			     {
			     	?>
			     	<script>
			     		alert("Registration fail");
			     	</script>
			     	<?php
			     }

			}
}		
		?>

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