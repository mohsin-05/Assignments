<?php 

require_once("require/connection.php");
require_once("FPDF/fpdf.php");

class PDF extends FPDF{

	public function header(){
		$this->SetFont("Times", "B", 25);
		$this->SetFillColor(5, 145, 252);
		$this->Cell(0, 10, "PDF Book", 1, 1, "C", 1);
		$this->Ln();
	}

	public function Footer(){
		$this->AliasNbPages("{TN}");
		$this->Text(170, 290, "Page ".$this->PageNo()." of {TN}");
	}
}

$query = "SELECT * FROM `books` JOIN `topics` WHERE books.`book_id` = topics.`book_id` AND topics.`book_id` = 3";
$result = mysqli_query($connection, $query);
if ($result->num_rows > 0) {
	$row = mysqli_fetch_assoc($result);
	$pdf = new PDF;
	$pdf->AddPage();
	$pdf->Cell(100, 10, "'".$row['book_name']."'", 0, 0, "L");
	$pdf->SetFont("Times", "I", 15);
	$pdf->Cell(100, 10, $row['book_author'], 0, 0, "C");
	$pdf->SetFont("Times", "B", 15);
	$pdf->Image($row['book_image'], 10, 50, 190, 230, "JPG");

}

$result2 = mysqli_query($connection, $query);
if ($result2->num_rows > 0) {
	$pdf->AddPage();
	$pdf->SetFont("Times", "B", 25);
	$pdf->Cell(0, 10, "Topics", 0, 1, "C");
	$pdf->SetFont("Times", "B", 15);
	$pdf->Ln(10.5);
	$i = 0;
	while ($row = mysqli_fetch_assoc($result2)) {
		$pdf->Ln(8.5);
		$link[] = $pdf->AddLink();
		$pdf->Cell(0, 10, $row['topic_title'], 0, 1, "C", 0, $link[$i]);
		$i++;
	}
}

$result3 = mysqli_query($connection, $query);
if ($result3->num_rows > 0) {
	$i = 0;
	while ($row = mysqli_fetch_assoc($result3)) {
		$pdf->AddPage();
		$pdf->SetLink($link[$i]);
		$pdf->SetFont("Times", "B", 20);
		$pdf->Cell(0, 10, $row['topic_title'], 0, 1, "C");
		$pdf->SetFont("Times", "B", 12);
		$pdf->Ln(8.5);
		$pdf->MultiCell(0, 10, $row['topic_description'], 0, "J", 0);
		$i++;
	}
}

$pdf->Output();

?>