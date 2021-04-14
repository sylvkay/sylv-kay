<!DOCTYPE html>
<html>
<head>
	<title>flight</title>
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

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;"> Cancel Flight</h1><br>
<div class="row">
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

		<div class="col-sm-5" style="padding-left: 20px;padding-right: 20px;box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 55px;padding-top: 30px;padding-bottom:10px;margin-right: 35px;">

<form action="" method="post">
	<label>Enter booking Id <input type="text" name="del_flight_id" class="form-control"></label>
    <input type="submit" name="btn_del_flight" value="Search" class="btn btn-info"><br>

<?php
$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['btn_del_flight']))
{
	$booking_id=mysqli_real_escape_string($db,$_POST['del_flight_id']);
	$query="SELECT * FROM booking where booking_id=$booking_id";
	
	$result=mysqli_query($db,$query);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$rs=mysqli_fetch_assoc($result);

		$booking_id=$rs['booking_id'];
			$name=$rs['name'];
				$contact=$rs['contact'];
					$email=$rs['email'];
					
					$address=$rs['address'];
					$flight_id=$rs['flight_id'];
					$class=$rs['class'];
					$source=$rs['source'];
					$destination=$rs['destination'];
					$price=$rs['price'];
				    $search=1;
					
	
						
	
?>

		<?php
		}
		
		else
		{

			?>
				<script>
					alert("flight not found");
				</script>

			<?php
		}
	}
		
		?>


	<form action="" method="post">
		<div class="row">
			<div class=col-sm-6>
		<label>Booking Id</label><input id="booking_id" type="text" name="booking_id" class="form-control" value="<?php if (isset($booking_id)){echo $booking_id;}?>"> <br>
		<label>Name</label><input id="name" type="text" name="name" class="form-control" value="<?php if (isset($name)){echo $name;}?>"> <br>
		<label>Contact</label><input id="contact" type="text" name="contact" class="form-control" value="<?php if (isset($contact)){echo $contact;}?>"> <br>
		<label>Email</label><input id="email" type="text" name="email" class="form-control" value="<?php if (isset($email)){echo $email;}?>"> <br>
		<label>Address</label><input id="address" type="text" name="address" class="form-control" value="<?php if (isset($address)){echo $address;}?>"> <br>
		<label>Flight id</label><input id="flight_id" type="text" name="flight_id" class="form-control" value="<?php if (isset($flight_id)){echo $flight_id;}?>"> <br>
		
	</div>

		<div class=col-sm-5>

        <label>Class</label><input id="class" type="text" name="class" class="form-control" value="<?php if (isset($class)){echo $class;}?>"> <br>
        <label>Source</label><input id="source" type="text" name="source" class="form-control" value="<?php if (isset($source)){echo $source;}?>"> <br>
        <label>Destination</label><input id="destination" type="text" name="destination" class="form-control" value="<?php if (isset($destination)){echo $destination;}?>"> <br>
        <label>Fare</label><input id="fare" type="text" name="fare" class="form-control" value="<?php if (isset($price)){echo $price;}?>"> <br>
      <!--  <label>first fare</label><input id="first_fare" type="text" name="first_fare" class="form-control" value="<?php if (isset($first_fare)){echo $first_fare;}?>"> <br> -->



 <input  type="submit" name="cancel_flight" class="btn btn-success" value="Cancel">



</div>
</div>


		
		</form>

		<?php
		 if(isset($_POST['cancel_flight']))
			{
				$booking_id = mysqli_real_escape_string($db,$_POST['booking_id']);
			$name = mysqli_real_escape_string($db,$_POST['name']);
			$contact = mysqli_real_escape_string($db,$_POST['contact']);
			$email = mysqli_real_escape_string($db,$_POST['email']);
			$address = mysqli_real_escape_string($db,$_POST['address']);
			$flight_id = mysqli_real_escape_string($db,$_POST['flight_id']);
			$class = mysqli_real_escape_string($db,$_POST['class']);
			$source = mysqli_real_escape_string($db,$_POST['source']);
			$destination = mysqli_real_escape_string($db,$_POST['destination']);
			$price = mysqli_real_escape_string($db,$_POST['price']);
			# $first_fare = mysqli_real_escanope_string($db,$_POST['first_fare']);#

			$query2="UPDATE booking set cancel='yes' where booking_id=$booking_id";
			$result2 = mysqli_query($db,$query2);
		
			if($result2)
			{
				?>
				<script>
					alert("flight Cancelled Successfully");
				</script>
				<?php
			}
			else
			{
			     	?>
			     	<script>
			     		alert("flight Cancellation failed");
			     	</script>
			     	<?php
			}

			}
	?>

	</div>


<div class="col-sm-3">
         
        <div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
         <img src="images/italy.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">spain</h6>
         <h3 style="text-align: center"><b>BARCELONA</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 20px;">
			<img src="images/new1.jpg" class="img img-responsive"; style="width:100%; height:150px;">
			<h6 style="text-align: center">nigeria</h6>
            <h3 style="text-align: center"><b>LAGOS</b></h3>
         
		</div>
		</div>

	</div>
</form>

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