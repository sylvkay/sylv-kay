<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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

<h1 style="text-align: left; color: grey; font-weight: bold;font-style: italic;padding-left: 35px; text-align: center;">Ticket Report</h1><br>
<div class="row">
		

		<div class="col-sm-11" style="padding-left: 20px;padding-right: 20px;box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);margin-left: 55px;padding-top: 30px;padding-bottom:10px;margin-right: 35px;">
			<?php
               $db=mysqli_connect('localhost','root','','airline');
               $query="SELECT * from booking";
               $result=mysqli_query($db,$query);
               if($result)
               {
            ?>
			<table class="table table-striped">
				<tr>
					<td>Booking ID</td>
					<td>Name</td>
					<td>Contact</td>
					<td>Email</td>
					<td>Address</td>
          <td>Flight Id</td>
          <td>class</td>
          <td>source</td>
          <td>destination</td>
          <td>price</td>
          <td>cancel</td>
          
      
               </tr>
			<?php
               while($rs=mysqli_fetch_assoc($result))
               { 
               	
            ?>
               <tr>
                <td><?php echo $rs['booking_id']?></td>
                <td><?php echo $rs['name']?></td>
                <td><?php echo $rs['contact']?></td>
                <td><?php echo $rs['email']?></td>
                <td><?php echo $rs['address']?></td> 
                <td><?php echo $rs['flight_id']?></td>
                <td><?php echo $rs['class']?></td>
                <td><?php echo $rs['source']?></td>
                <td><?php echo $rs['destination']?></td>
                <td><?php echo $rs['price']?></td>
                <td><?php echo $rs['cancel']?></td>
                

                            	
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
<h1>The are no registered plane Yet</h1>
			<?php
           }
            ?>
           
               
			

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