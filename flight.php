<!DOCTYPE html>
<html>
<head>
	<title>flight</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php
include_once("admin_header.php");
?>

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;">Flight Registration</h1><br>
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
		<div class="row">
			<div class=col-sm-6>
		<label>Plane Id</label>
        <select class="form-control" name="plane_id" style="width: 100%;">
		<?php
               $db=mysqli_connect('localhost','root','','airline');
               $req="SELECT * from plane";
               $result=mysqli_query($db,$req);
               if($result)
               {
              	 while($rs=mysqli_fetch_assoc($result))
              	 { 
              
         ?>
				 <option value="<?php echo $rs['plane_id']?>"><?php echo $rs['plane_id']?></option>
		 <?php
				 }
			   }

		 ?>	
		
		</select><br>

		<label>Destination</label>
        <select class="form-control" name="destination" style="width: 100%;">
		<?php
               $db=mysqli_connect('localhost','root','','airline');
               $req="SELECT * from airport";
               $result=mysqli_query($db,$req);
               if($result)
               {
              	 while($rs=mysqli_fetch_assoc($result))
              	 { 
              
         ?>
				 <option value="<?php echo $rs['airport_code']?>"><?php echo $rs['airport_code']?></option>
		 <?php
				 }
			   }

		 ?>	
		
		</select><br>

		<label>Source</label>
        <select class="form-control" name="source" style="width: 100%;">
		<?php
               $db=mysqli_connect('localhost','root','','airline');
               $req="SELECT * from airport";
               $result=mysqli_query($db,$req);
               if($result)
               {
              	 while($rs=mysqli_fetch_assoc($result))
              	 { 
              
         ?>
				 <option value="<?php echo $rs['airport_code']?>"><?php echo $rs['airport_code']?></option>
		 <?php
				 }
			   }

		 ?>	
		
		</select><br>
		
		<label>Dept date</label><input id="dept_date" type="date" name="dept_date" class="form-control"> <br>
		<label>Dept Time</label><input id="dept_time" type="time" name="dept_time" class="form-control"> <br>
		 <label>Arrival date</label><input id="arrival_date" type="date" name="arrival_date" class="form-control"> <br>
		<label>Arrival Time</label><input id="arrival_time" type="time" name="arrival_time" class="form-control"> <br>

		
	</div>

		<div class=col-sm-5>

        
       
        <label>eco fare</label><input id="eco_fare" type="text" name="eco_fare" class="form-control"> <br>
        <label>business fare</label><input id="business_fare" type="text" name="business_fare" class="form-control"> <br>
        <label>first fare</label><input id="first_fare" type="text" name="first_fare" class="form-control"> <br>
        <label>Way</label>
        <select class="form-control" name="way" style="width: 100%;">
		<option value="oneway">one</option>
		<option value="roundtrip">round</option>	
		</select><br>
		<label>Stop</label><input id="stops" type="text" name="stops" class="form-control"> <br>
		<label>Return Date</label><input id="return_date" type="date" name="return_date" class="form-control"> <br>
        



 <input id="login" type="submit" name="flight_reg" class="btn btn-success" value="Save">



</div>
</div>


		
		</form>

		<?php
		$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['flight_reg']))
{
		if($_SERVER["REQUEST_METHOD"] == "POST") 
		{
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
			$way = mysqli_real_escape_string($db,$_POST['way']);
			$stops = mysqli_real_escape_string($db,$_POST['stops']);
			$return_date = mysqli_real_escape_string($db,$_POST['return_date']);
			$sql2="SELECT * FROM plane where plane_id=$plane_id";
			$result2 = mysqli_query($db,$sql2);
			$rs=mysqli_fetch_assoc($result2);
			$airline=$rs['airline'];
			//echo $airline;

			$sql = "INSERT INTO `flight` (`plane_id`,`source`,`destination`,`departure_time`,`arrival_time`,`dept_date`,`arrival_date`,`eco_fare`,`business_fare`,`first_fare`,`way`,`stops`,`return_date`,`airline`) VALUES ($plane_id,'$source','$destination','$dept_time','$arrival_time','$dept_date','$arrival_date',$eco_fare,$business_fare,$first_fare,'$way','$stops','$return_date','$airline')";
			//echo $sql;
			
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



<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

</body>
</html>