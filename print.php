<?php
#$id=$_GET['flight_id'];
$name=$_GET['name'];
			$name=$_GET['name'];
			$contact=$_GET['contact'];
			$email=$_GET['email'];
			$address=$_GET['address'];
			$class=$_GET['class'];
			$source=$_GET['source'];
			$destination=$_GET['destination'];
			$flight_id=$_GET['flight_id'];
			$plane_id=$_GET['plane_id'];
			$departure_time=$_GET['departure_time'];
			$arrival_time=$_GET['arrival_time'];
			$dept_date=$_GET['dept_date'];
			$arrival_date=$_GET['arrival_date'];
			$way=$_GET['way'];
			$stops=$_GET['stops'];
			$return_date=$_GET['return_date'];
			$t_num=$_GET['tnum'];
			$airline=$_GET['airline'];


require("fpdf17/fpdf.php");
$pdf= new FPDF(); 
$pdf->AddPage();
$pdf->SetFont("Arial","B","20");

$pdf->Cell(0,10,"Airline Reservation System",1,1,"C");
$pdf->Cell(0,10,"Customer Ticket",1,1,"C");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"AIRLINE : $airline");$pdf->Cell(0,10,"",0,1);
$pdf->Cell(0,10,"Ticket No : ARS 2018 $t_num",0,1,"C");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Seat Number : $t_num");$pdf->Cell(0,10,"",0,1);

$pdf->Cell(0,10,"Personal Information",1,1);$pdf->Cell(0,10,"",0,1);

$pdf->write(5,"Name : $name");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Contact : $contact");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Email address : $email");$pdf->Cell(0,10,"",0,1);$pdf->Cell(0,10,"",0,1);


$pdf->Cell(0,10,"Flight Information",1,1);$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Company : Stones");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"source : $source");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Departure : $dept_date");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Departure Time : $departure_time");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"class : $class");$pdf->Cell(0,10,"",0,1);

$pdf->write(5,"Destination : $destination");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Arrival : $arrival_date");$pdf->Cell(0,10,"",0,1);
$pdf->write(5,"Arrival Time : $arrival_time");$pdf->Cell(0,10,"",0,1);
$pdf->Output();
?>