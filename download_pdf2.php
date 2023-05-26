<?php
require('fpdf/fpdf.php');
require('config.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo image
        // $this->Image('', 10, 6, 30);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Title
        $this->Cell(30); // Move to the right
        $this->Cell(0, 10, 'Purchases Sales Report', 0, 0, 'L'); // Title aligned to the right
        // Current date and time
        $this->Cell(-30, 10, 'Date: ' . date('Y-m-d'), 0, 1, 'R'); // Date aligned to the left
        // Line break
        $this->Ln(10);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' of {nb}', 0, 0, 'C');
    }
}

if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];

    $query = "SELECT * FROM purchases WHERE p_date BETWEEN '$start_date' AND '$end_date'";
    $query_run = mysqli_query($con, $query);

    $total_cost = 0;
    $amt_received = 0;
    $balance = 0;

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->SetMargins(20, 20, 20); // left, top, right
    $pdf->SetRightMargin(10); // set the right margin to 10mm
    $pdf->AddPage();

    // Table header
    $pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'Purc ID', 1, 0, 'C');
$pdf->Cell(25, 10, 'Purc Date', 1, 0, 'C');
$pdf->Cell(40, 10, 'Supplier Name', 1, 0, 'C');
$pdf->Cell(30, 10, 'Total Cost', 1, 0, 'C');
$pdf->Cell(35, 10, 'Amt Received', 1, 0, 'C');
$pdf->Cell(30, 10, 'Balance', 1, 1, 'C');

    // Table content
    $pdf->SetFont('Arial', '', 12);
    foreach ($query_run as $row) {
        // add up the total cost from each row
        $total_cost += $row['total_cost'];
        
        // add up the amount received from each row
        $amt_received += $row['amt_paid'];
        
        // add up the balance from each row
        $balance += $row['balance'];
        
        // output the table cell values for this row
        $pdf->Cell(20, 10, $row['id'], 1, 0, 'C');
        $pdf->Cell(25, 10, $row['p_date'], 1, 0, 'C');
        $pdf->Cell(40, 10, $row['suppliername'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['total_cost'], 1, 0, 'C');
        $pdf->Cell(35, 10, $row['amt_paid'], 1, 0, 'C');
        $pdf->Cell(30, 10, $row['balance'], 1, 1, 'C');
    }

    // Summary
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, '', 0, 1);
    $pdf->Cell(0, 10, 'Summary', 0, 0, 'L');
    $pdf->Cell(40, 10, '', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, 'Total Cost:', 1);
    $pdf->Cell(40, 10, $total_cost, 1);
    $pdf->Ln();
    $pdf->Cell(40, 10, 'Amount Received:', 1);
    $pdf->Cell(40, 10, $amt_received, 1);
    $pdf->Ln();
    $pdf->Cell(40, 10, 'Balance:', 1);
    $pdf->Cell(40, 10, $balance, 1);

    $pdf->Output();
}
?>