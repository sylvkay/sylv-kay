<!DOCTYPE html>
<html>
<head>
	<title>plane</title>
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

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;">Delete Plane</h1><br>
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

		<div class="col-sm-5" style="padding-left: 20px;padding-right: 20px;box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 55px;padding-top: 30px;padding-bottom:10px;margin-right: 35px;">

			<form action="" method="post">
	<label>Enter plane Id <input type="text" name="u_plane_id" class="form-control"></label>
    <input type="submit" name="btn_u_plane" value="Search" class="btn btn-info"><br>
</form>
<?php
$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['btn_u_plane']))
{
	$plane_id=mysqli_real_escape_string($db,$_POST['u_plane_id']);
	$query="SELECT * FROM plane where plane_id=$plane_id";
	
	$result=mysqli_query($db,$query);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$rs=mysqli_fetch_assoc($result);

		$plane_brand=$rs['brand'];
			$economy_seats=$rs['economy'];
				$business_seats=$rs['business'];
					$first_seats=$rs['first'];
					$search=1;
					
	
						
	
?>

		<?php
		}
		
		else
		{

			?>
				<script>
					alert("plane not found");
				</script>

			<?php
		}
	}
		
		?>

	<form action="" method="post">

		<label>Plane Id</label><input id="plane_id" type="text" name="plane_id" class="form-control" value="<?php if (isset($plane_id)){echo $plane_id;}?>"> <br>
		<label>Plane Brand</label><input id="plane_brand" type="text" name="plane_brand" class="form-control" value="<?php if (isset($plane_brand)){echo $plane_brand;}?>"> <br>
		<label>Economy Seats</label><input id="economy" type="text" name="economy_seats" class="form-control" value="<?php if (isset($economy_seats)){echo $economy_seats;}?>"> <br>
		<label>Business Seats</label><input id="business" type="text" name="business_seats" class="form-control" value="<?php if (isset($business_seats)){echo $business_seats;}?>"> <br>
		<label>First Seats</label><input id="first" type="text" name="first_seats" class="form-control" value="<?php  if (isset($first_seats)){echo $first_seats;}?>"> <br>

		<input type="submit" name="u_plane" class="btn btn-primary" value="Delete"><br>
		</form>

<?php
		 if(isset($_POST['u_plane']))
			{
			$plane_id = mysqli_real_escape_string($db,$_POST['plane_id']);
			$plane_brand = mysqli_real_escape_string($db,$_POST['plane_brand']);
			$economy_seats = mysqli_real_escape_string($db,$_POST['economy_seats']);
			$business_seats = mysqli_real_escape_string($db,$_POST['business_seats']);
			$first_seats = mysqli_real_escape_string($db,$_POST['first_seats']);
			$query2="DELETE FROM plane where plane_id=$plane_id";
			$result2 = mysqli_query($db,$query2);
		
			if($result2)
			{
				?>
				<script>
					alert("Plane Deleted Successfully");
				</script>
				<?php
			}
			else
			{
			     	?>
			     	<script>
			     		alert("Plane Deletion failed");
			     	</script>
			     	<?php
			}

			}
	?>

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