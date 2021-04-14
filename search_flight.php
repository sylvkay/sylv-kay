<!DOCTYPE html>
<html>
<head>
	<title>SearchFlight</title>
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
include_once("Header.php");
    ?>
    
<div class="row" style="background-image: url('images/chicago.jpg'); color: white;">
<div class="col-sm-1">
</div>


	<div class="col-sm-3"><br>
<form action="" method="post">
	<center>
		<label>Source<input class="form-control" type="text" name="source"></labe>
		<label>Destination<input class="form-control" type="text" name="destination"></label><br>
        <!--<label>Stops<input class="form-control" type="text" name="way"></label><br> -->

		

		<label>T.date<input class="form-control" type="date" name="dept_date" style="width: 210px;"></label><br>
		<label>R.date<input class="form-control" type="date" name="return_date" style="width: 210px;"></label><br>

		<label>Way</label>
        <select class="form-control" name="way" style="width: 100%;">
		<option value="oneway">one</option>
		<option value="roundtrip">round</option>	
		</select><br>

		

 

<input  type="submit" name="search" class="btn btn-success" value="Search">
<input  type="submit" name="clear" class="btn btn-info" value="clear"><br><br>
	</center>

</form>
</div>

<div class="col-sm-7" ><br>
<?php
$db=mysqli_connect('localhost','root','','airline');
if(isset($_POST['search']))
{
            $source = mysqli_real_escape_string($db,$_POST['source']);
            $destination = mysqli_real_escape_string($db,$_POST['destination']);
            $dept_date = mysqli_real_escape_string($db,$_POST['dept_date']);
            $way = mysqli_real_escape_string($db,$_POST['way']);



$query="SELECT * FROM flight where source='$source' and destination='$destination' and dept_date='$dept_date' and way='$way'";

$result=mysqli_query($db,$query);
if($result)
{
    ?>
    <table class="table" style="color:black;background-color: white;opacity: 0.5;box-shadow: 0 4px 12px 0 rgba(255,255,255,0.5);">
          <tr>
                    
          <td>Flight ID</td>
          <td>Plane ID</td>
          <td>Airline</td>
          <td>Source</td>
          <td>Destination</td>
          <td>Departure Time</td>
          <td>Arrival Time</td>
          <td>Departure Date</td>
          <td>Arrival Date</td>
          <td>Economy Fare</td>
          <td>Business fare</td>
          <td>First Fare</td>
               </tr>
            <?php
               while($rs=mysqli_fetch_assoc($result))
               { 
                
            ?>
               <tr>
                
                <td><?php echo $rs['flight_id']?></td>
                <td><?php echo $rs['plane_id']?></td>
                <td><?php echo $rs['airline']?></td>
                <td><?php echo $rs['source']?></td>
                <td><?php echo $rs['destination']?></td>
                <td><?php echo $rs['departure_time']?></td> 
                <td><?php echo $rs['arrival_time']?></td>
                <td><?php echo $rs['dept_date']?></td>
                <td><?php echo $rs['arrival_date']?></td>
                
                <td><?php echo $rs['eco_fare']?></td>
                <td><?php echo $rs['business_fare']?></td>
                <td><?php echo $rs['first_fare']?></td>                 
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
            
}




#search from header
if(isset($_GET['source']))
{
  $source = mysqli_real_escape_string($db,$_GET['source']);
  if (isset($_GET['destination']))
  {
    $destination = mysqli_real_escape_string($db,$_GET['destination']);
  }

            
            

$query="SELECT * FROM flight where source='$source' and destination='$destination'";
//echo $query;
$result=mysqli_query($db,$query);
if($result)
{
    ?>
    <table class="table" style="color:black;background-color: white;opacity: 0.5;box-shadow: 0 4px 12px 0 rgba(255,255,255,0.5);">
          <tr>
                    
          <td>Flight ID</td>
          <td>Plane ID</td>
          <td>Airline</td>
          <td>Source</td>
          <td>Destination</td>
          <td>Departure Time</td>
          <td>Arrival Time</td>
          <td>Departure Date</td>
          <td>Arrival Date</td>
          <td>Economy Fare</td>
          <td>Business fare</td>
          <td>First Fare</td>
               </tr>
            <?php
               while($rs=mysqli_fetch_assoc($result))
               { 
                
            ?>
               <tr>
                
                <td><?php echo $rs['flight_id']?></td>
                <td><?php echo $rs['plane_id']?></td>
                <td><?php echo $rs['airline']?></td>
                <td><?php echo $rs['source']?></td>
                <td><?php echo $rs['destination']?></td>
                <td><?php echo $rs['departure_time']?></td> 
                <td><?php echo $rs['arrival_time']?></td>
                <td><?php echo $rs['dept_date']?></td>
                <td><?php echo $rs['arrival_date']?></td>
                
                <td><?php echo $rs['eco_fare']?></td>
                <td><?php echo $rs['business_fare']?></td>
                <td><?php echo $rs['first_fare']?></td>                 
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
            
}
?>


	
	
</div>

<div class="col-sm-1">
</div>

</div><br>

<div class="row" style="background-image: url('images/air1.jpg');">
	<div class="col-sm-3">
		

</div>

	<div class="col-sm-3">
		<div class="cms-module-section cms-326">
                
                    <center><h3 class="cms-box-header">Trending flight deals</h3></center>
                
               <div class="cms-box">
                <div class="cms-box-main">
                    <ul class="cms-list">
                    	<li class="cms-list-solid">
                    		<span class="cms-txt1">Ahmedabad - Bombay</span><br />
                                Thu, 16 Jun 2018 - 0&nbsp;night<br />
                                <span class="fL">Economy</span>
                                <span class="fR cms-list-pricewrapper">From <span class="price cms-price">&#8358;19,224</span> / per person</span>
                                                              
                        </li>    <br><br>
                    
                    <li class="cms-list-solid">
                    		<span class="cms-txt1">Bangalore - Pune</span><br />
                                Thu, 26 May 2018 - 0&nbsp;night<br />
                                <span class="fL">Economy</span>
                                <span class="fR cms-list-pricewrapper">From <span class="price cms-price">&#8358;19,224</span> / per person</span>
                                                             
                        </li> <br><br>

                        <li class="cms-list-solid">
                    		<span class="cms-txt1">Delhi - Goa</span><br />
                                Thu, 12 Dec 2018 - 0&nbsp;night<br />
                                <span class="fL">Economy</span>
                                <span class="fR cms-list-pricewrapper">From <span class="price cms-price">&#8358;19,224</span> / per person</span>
                                                              
                        </li>  <br><br>

                        
                                                               
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


<div class="col-sm-3">

	<div class="cms-module-section cms-326">
                
                  <center> <h3 class="cms-box-header">Business Class deals</h3> </center>
                
               <div class="cms-box">
                <div class="cms-box-main">
                    <ul class="cms-list">
                    	<li class="cms-list-solid">
                    		<span class="cms-txt1">London - Bombay</span><br />
                                Thu, 26 Nov 2018 - 0&nbsp;night<br />
                                <span class="fL">Business</span>
                                <span class="fR cms-list-pricewrapper">From <span class="price cms-price">&#8358;19,224</span> / per person</span>
                                                              
                        </li>    <br><br>
                    
                    <li class="cms-list-solid">
                    		<span class="cms-txt1">Paris - New York</span><br />
                                Thu, 01 Aug 2018 - 0&nbsp;night<br />
                                <span class="fL">Business</span>
                                <span class="fR cms-list-pricewrapper">From <span class="price cms-price">&#8358;19,224</span> / per person</span>
                                                             
                        </li> <br><br>

                        <li class="cms-list-solid">
                    		<span class="cms-txt1">Lagos - Abuja</span><br />
                                Thu, 26 Oct 2018 - 0&nbsp;night<br />
                                <span class="fL">Business</span>
                                <span class="fR cms-list-pricewrapper">From <span class="price cms-price">&#8358;19,224</span> / per person</span>
                                                              
                        </li>  <br><br>

                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


	<div class="col-sm-3">
		
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

<!-- -->


