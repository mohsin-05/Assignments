<?php
session_start();
require_once("FPDF/fpdf.php");

if (isset($_REQUEST['submit'])) {

	$_SESSION['school'] = $_REQUEST['school'];
	$_SESSION['college'] = $_REQUEST['college'];
	$_SESSION['university'] = $_REQUEST['university'];

	extract($_SESSION);

	$pdf = new FPDF();
	$pdf->AddPage("P", "letter");
	$pdf->setFont("Times", "B", 30);
	$pdf->setFillColor(100, 0, 255);
	$pdf->Cell(0,20,"MY CV",0,1,"C");
	$pdf->setLineWidth(2);
	$pdf->setDrawColor(255, 153, 0);
	$pdf->Line(0, 30, 500, 30);
	$pdf->ln();

	$pdf->setFont("Times", "B", 20);
	$pdf->Cell(0,20,"Personal Information",0,1,"C");
	$pdf->setFont("Times", "B", 10);

	$pdf->setLineWidth(0);
	$pdf->setDrawColor(0, 0, 0);
	$pdf->Cell(100,10,"Fullname: ",1,0,"C",1);
	$pdf->Cell(100,10,$fname,1,1,'C');
	$pdf->Cell(100,10,"Father's Name: ",1,0,"C",1);
	$pdf->Cell(100,10,$father_name,1,1,"C");
	$pdf->Cell(100,10,"Gender: ",1,0,"C",1);
	$pdf->Cell(100,10,$gender,1,1,"C");
	$pdf->Cell(100,10,"Country: ",1,0,"C",1);
	$pdf->Cell(100,10,$country,1,1,"C");

	$pdf->setFont("Times", "B", 20);
	$pdf->Cell(0,20,"Contact Information",0,1,"C");
	$pdf->setFont("Times", "B", 10);

	$pdf->Cell(100,10,"Email: ",1,0,"C",1);
	$pdf->Cell(100,10,$email,1,1,"C");
	$pdf->Cell(100,10,"Contact Number: ",1,0,"C",1);
	$pdf->Cell(100,10,$phone,1,1,"C");
	$pdf->Cell(100,10,"Address: ",1,0,"C",1);
	$pdf->Cell(100,10,$address,1,1,"C");

	$pdf->setFont("Times", "B", 20);
	$pdf->Cell(0,20,"Professional Information",0,1,"C");
	$pdf->setFont("Times", "B", 10);

	$pdf->Cell(100,10,"School: ",1,0,"C",1);
	$pdf->Cell(100,10,$school,1,1,"C");
	$pdf->Cell(100,10,"College: ",1,0,"C",1);
	$pdf->Cell(100,10,$college,1,1,"C");
	$pdf->Cell(100,10,"University: ",1,0,"C",1);
	$pdf->Cell(100,10,$university,1,1,"C");
	$pdf->Output("I", "MyCV");

}

?>

