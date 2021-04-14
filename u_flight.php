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

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;"> Update Flight</h1><br>
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
	<label>Enter flight Id <input type="text" name="u_flight_id" class="form-control"></label>
    <input type="submit" name="btn_u_flight" value="Search" class="btn btn-info"><br>

	<?php
$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['btn_u_flight']))
{
	$flight_id=mysqli_real_escape_string($db,$_POST['u_flight_id']);
	$query="SELECT * FROM flight where flight_id=$flight_id";
	
	$result=mysqli_query($db,$query);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$rs=mysqli_fetch_assoc($result);

		$flight_id=$rs['flight_id'];
			$plane_id=$rs['plane_id'];
				$source=$rs['source'];
					$destination=$rs['destination'];
					$dept_time=$rs['departure_time'];
					$arrival_time=$rs['arrival_time'];
					$dept_date=$rs['dept_date'];
					$arrival_date=$rs['arrival_date'];
					$eco_fare=$rs['eco_fare'];
					$business_fare=$rs['business_fare'];
					$first_fare=$rs['first_fare'];
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
		<label>Flight Id</label><input id="flight_id" type="text" name="flight_id" class="form-control" value="<?php if (isset($flight_id)){echo $flight_id;}?>"> <br>
		<label>Plane Id</label><input id="plane_id" type="text" name="plane_id" class="form-control" value="<?php if (isset($plane_id)){echo $plane_id;}?>"> <br>
		<label>Source</label><input id="source" type="text" name="source" class="form-control" value="<?php if (isset($source)){echo $source;}?>"> <br>
		<label>Destination</label><input id="destination" type="text" name="destination" class="form-control" value="<?php if (isset($destination)){echo $destination;}?>"> <br>
		<label>Dept Time</label><input id="departure_time" type="text" name="dept_time" class="form-control" value="<?php if (isset($dept_time)){echo $dept_time;}?>"> <br>
		<label>Arrival Time</label><input id="arrival_time" type="text" name="arrival_time" class="form-control" value="<?php if (isset($arrival_time)){echo $arrival_time;}?>"> <br>
		
	</div>

		<div class=col-sm-5>

        <label>Dept date</label><input id="dept_date" type="text" name="dept_date" class="form-control" value="<?php if (isset($dept_date)){echo $dept_date;}?>"> <br>
        <label>arrival date</label><input id="arrival_date" type="text" name="arrival_date" class="form-control" value="<?php if (isset($arrival_date)){echo $arrival_date;}?>"> <br>
        <label>eco fare</label><input id="eco_fare" type="text" name="eco_fare" class="form-control" value="<?php if (isset($eco_fare)){echo $eco_fare;}?>"> <br>
        <label>business fare</label><input id="business_fare" type="text" name="business_fare" class="form-control" value="<?php if (isset($business_fare)){echo $business_fare;}?>"> <br>
        <label>first fare</label><input id="first_fare" type="text" name="first_fare" class="form-control" value="<?php if (isset($first_fare)){echo $first_fare;}?>"> <br>



 <input  type="submit" name="u_flight" class="btn btn-success" value="Update">



</div>
</div>


		
		</form>

		<?php
		 if(isset($_POST['u_flight']))
			{
			$flight_id = mysqli_real_escape_string($db,$_POST['flight_id']);
			$plane_id = mysqli_real_escape_string($db,$_POST['plane_id']);
			$source = mysqli_real_escape_string($db,$_POST['source']);
			$destination = mysqli_real_escape_string($db,$_POST['destination']);
			$dept_time = mysqli_real_escape_string($db,$_POST['dept_time']);
			$arrival_time = mysqli_real_escape_string($db,$_POST['arrival_time']);
			$dept_date = mysqli_real_escape_string($db,$_POST['dept_date']);
			$arrival_date = mysqli_real_escape_string($db,$_POST['arrival_date']);
			$eco_fare = mysqli_real_escape_string($db,$_POST['eco_fare']);
			$business_fare = mysqli_real_escape_string($db,$_POST['business_fare']);
			$first_fare = mysqli_real_escape_string($db,$_POST['first_fare']);

			$query2="UPDATE flight SET plane_id=$plane_id,source='$source',destination='$destination',departure_time='$dept_time',arrival_time='$arrival_time',dept_date='$dept_date',arrival_date='$arrival_date',eco_fare=$eco_fare,business_fare=$business_fare,first_fare=$first_fare where flight_id=$flight_id";
			
			$result2 = mysqli_query($db,$query2);
		
			if($result2)
			{
				?>
				<script>
					alert("flight updated Successfully");
				</script>
				<?php
			}
			else
			{
			     	?>
			     	<script>
			     		alert("flight updation failed");
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