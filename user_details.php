<!DOCTYPE html>
<html>
<head>
	<title>User</title>
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

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;">User Details</h1><br>
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
	
	<form action="" method="post" id="userd">
		<label>Name</label><input  type="text" name="name" class="form-control"> <br>
		<label>Contact No</label><input  type="number" name="contact" class="form-control"> <br>
		<script type="text/javascript">
			function (email)
			{
				alert("wrong email address")
			}
		</script>
		<label>Email Address</label><input  type="email" name="email" class="form-control"> <br>
		<label>Address</label><input  type="text" name="address" class="form-control"> <br>

		<label>Class</label>
        <select class="form-control" name="class" style="width: 100%;">
		<option value="economy">Economy</option>
		<option value="business">Business</option>
		<option value="first">First</option>	
		</select><br>

		<label>No of Seats</label>
        <select class="form-control" name="seats" style="width: 100%;">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>	
		</select><br>

		<input type="submit" name="booking" class="btn btn-primary" value="Submit"><br>
		</form>
		<h1 id="book"></h1>

		<?php
		$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['booking']))
{
		if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$name = mysqli_real_escape_string($db,$_POST['name']);
			$contact = mysqli_real_escape_string($db,$_POST['contact']);
			$email = mysqli_real_escape_string($db,$_POST['email']);
			$address = mysqli_real_escape_string($db,$_POST['address']);
			$class = mysqli_real_escape_string($db,$_POST['class']);
			
			$flight = $_GET['flight_id'];
			$query = "SELECT * from flight where  flight_id=$flight";
			$result2 = mysqli_query($db,$query);
			if($row = mysqli_fetch_assoc($result2))
			{
				$source=$row['source'];
				$destination=$row['destination'];
				$flight_id=$row['flight_id'];
				$seats=$_POST['seats'];
				$plane_id=$row['plane_id'];
				$departure_time=$row['departure_time'];
				$arrival_time=$row['arrival_time'];
				$dept_date=$row['dept_date'];
				$arrival_date=$row['arrival_date'];
				$way=$row['way'];
				$stops=$row['stops'];
				$return_date=$row['return_date'];
				$airline=$row['airline'];
				$date=date("Y-m-d");
				$booked=0;
				$query3 = "SELECT * from plane where  plane_id=$plane_id";
			$result3 = mysqli_query($db,$query3);
			$row3 = mysqli_fetch_assoc($result3);
			$total_seats=$row3['economy']+$row3['business']+$row3['first'];
			$booked=$row['booked']+1;
			$t_num=$booked;



				if($class=='economy')
				{
					$fare=$row['eco_fare'];
				}
				elseif($class=='business')
				{
					$fare=$row['business_fare'];
				}
				else
				{
                    $fare=$row['first_fare'];
				}
			}
			$sql1="UPDATE flight SET total_s=$total_seats, booked=$booked where flight_id=$flight";
			$result3 = mysqli_query($db,$sql1);
			
			$sql = "INSERT INTO `booking` (`name`,`contact`,`email`,`address`,`flight_id`,`seats`,`class`,`source`,`destination`,`price`,`b_date`,t_num) VALUES ('$name','$contact','$email','$address',$flight,$seats,'$source','$destination','$class',$fare,'$date',t_num)";


			$result = mysqli_query($db,$sql);
			if($result)
			{
				?>
				<script>
					document.getElementById('userd').style.display='none';
					document.getElementById('book').innerHTML='Booked Successfully';
				</script>
				<a href="print.php?name=<?php echo $name?>&contact=<?php echo $contact?>&email=<?php echo $email?>&address=<?php echo $address?>&class=<?php echo $class?>&source=<?php echo $source?>&destination=<?php echo $destination?>&flight_id=<?php echo $flight_id?>&plane_id=<?php echo $plane_id?>&departure_time=<?php echo $departure_time?>&arrival_time=<?php echo $arrival_time?>&dept_date=<?php echo $dept_date?>&arrival_date=<?php echo $arrival_date?>&way=<?php echo $way?>&stops=<?php echo $stops?>&return_date=<?php echo $return_date?>&tnum=<?php echo $t_num?>&airline=<?php echo $airline?>"><button class="btn btn-info btn-lg">Print Ticket</button></a>
				<?php
			}
			     else
			     {
			     	?>
			     	<script>
			     		alert("Booking failed");
			     	</script>
			     	<?php
			     }

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