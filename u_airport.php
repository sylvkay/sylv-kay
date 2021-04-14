<!DOCTYPE html>
<html>
<head>
	<title>airport</title>
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
include_once("admin_header.php");
?>
	<h1 style="text-align: left; color: grey;font-weight: bold;font-style: italic;padding-left: 35px;text-align: center"> Update Airport</h1><br>
	
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
	<label>Enter Airport Id <input type="text" name="u_airport_id" class="form-control"></label>
    <input type="submit" name="btn_u_airport" value="Search" class="btn btn-info"><br>
</form>

<?php
$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['btn_u_airport']))
{
	$airport_id=mysqli_real_escape_string($db,$_POST['u_airport_id']);
	$query="SELECT * FROM airport where airport_id=$airport_id";
	
	$result=mysqli_query($db,$query);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$rs=mysqli_fetch_assoc($result);

		$airport_code=$rs['airport_code'];
			$airport_name=$rs['name'];
				$airport_city=$rs['city'];
					$country=$rs['country'];
				    $search=1;
					
	
						
	
?>

		<?php
		}
		
		else
		{

			?>
				<script>
					alert("airport not found");
				</script>

			<?php
		}
	}
		
		?>


	<form action="" method="post">
		<label>Id</label><input id="airport_id" type="text" name="airport_id" class="form-control" value="<?php if (isset($airport_id)){echo $airport_id;}?>"> <br>
		<label>Code</label><input id="airport_code" type="text" name="airport_code" class="form-control" value="<?php if (isset($airport_code)){echo $airport_code;}?>"> <br>
		<label>Name</label><input id="airport_name" type="text" name="airport_name" class="form-control" value="<?php if (isset($airport_name)){echo $airport_name;}?>"> <br>
		<label>city</label><input id="airport_city" type="text" name="airport_city" class="form-control" value="<?php if (isset($airport_city)){echo $airport_city;}?>"> <br>
		<label>country</label><input id="country" type="text" name="country" class="form-control" value="<?php if (isset($country)){echo $country;}?>"> <br>
		

		<input type="submit" name="u_airport" class="btn btn-primary" value="Update"><br>
	</form>



	<?php
		 if(isset($_POST['u_airport']))
			{
			$airport_id = mysqli_real_escape_string($db,$_POST['airport_id']);
			$airport_code = mysqli_real_escape_string($db,$_POST['airport_code']);
			$airport_name = mysqli_real_escape_string($db,$_POST['airport_name']);
			$airport_city = mysqli_real_escape_string($db,$_POST['airport_city']);
			$country = mysqli_real_escape_string($db,$_POST['country']);
			
				$query2="UPDATE airport SET airport_code='$airport_code',name='$airport_name',city='$airport_city',country='$country' where airport_id=$airport_id";
				
			$result2 = mysqli_query($db,$query2);
		
			if($result2)
			{
				?>
				<script>
					alert("Update successful");
				</script>
				<?php
			}
			else
			{
			     	?>
			     	<script>
			     		alert("Update fail");
			     	</script>
			     	<?php
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