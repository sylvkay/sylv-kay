<!DOCTYPE html>
<html>
<head>
	<title>Flight</title>
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

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;">Flight Report</h1><br>
<div class="row">
		<div class="col-sm-2">


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

		<div class="col-sm-8" style="padding-left: 20px;padding-right: 20px;box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);padding-top: 30px;padding-bottom:10px;">
			<?php
               $db=mysqli_connect('localhost','root','','airline');
               $query="SELECT * from flight";
               $result=mysqli_query($db,$query);
               if($result)
               {
            ?>
			<table class="table table-striped">
				<tr>
					
					<td>Flight ID</td>
					<td>Plane ID</td>
					<td>Source</td>
					<td>Destination</td>
          <td>Departure Time</td>
          <td>Arrival Time</td>
          <td>Departure Date</td>
          <td>Arrival Date</td>
          <td>Economy Fare</td>
          <td>Business fare</td>
          <td>First Fare</td>
          <td>Total seats</td>
          <td>booked seats</td>
               </tr>
			<?php
               while($rs=mysqli_fetch_assoc($result))
               { 
               	
            ?>
               <tr>
                
                <td><?php echo $rs['flight_id']?></td>
                <td><?php echo $rs['plane_id']?></td>
                <td><?php echo $rs['source']?></td>
                <td><?php echo $rs['destination']?></td>
                <td><?php echo $rs['departure_time']?></td> 
                <td><?php echo $rs['arrival_time']?></td>
                <td><?php echo $rs['dept_date']?></td>
                <td><?php echo $rs['arrival_date']?></td>
                
                <td><?php echo $rs['eco_fare']?></td>
                <td><?php echo $rs['business_fare']?></td>
                <td><?php echo $rs['first_fare']?></td>
                <td><?php echo $rs['total_s']?></td>
                <td><?php echo $rs['booked']?></td>              	
               </tr>
            <?php
               }
            ?>
               </table>

           <?php
           }
           else
           {
			?>
<h1>The are no registered flight Yet</h1>
			<?php
           }
            ?>
           
               
			

		</div>

<div class="col-sm-2">
         
        <div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 5px;">
         <img src="images/chicago.jpg" class="img img-responsive"; style="width:100%; height:150px;">
         <h6 style="text-align: center">south sudan</h6>
         <h3 style="text-align: center"><b>JUBA</b></h3>
		</div>

		<div style="box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 5px;">
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