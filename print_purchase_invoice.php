<?php
require("fpdf/fpdf.php");
require("word.php");
require "config.php";

// customer and invoice details
$info = [
    "purchase_no" => "",
    "purchase_date" => "",
    "supplier_name" => "",
    "total_bill_amt" => "",
    "amount_paid" => "",
    "balance" => "",
    "words" => "",
];

// Select Invoice Details From Database
$sql = "SELECT * FROM purchases WHERE id = '{$_GET["id"]}'";
$res = $con->query($sql);
if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();

    $obj = new SriLankanCurrency($row["total_cost"]);

    $info = [
        "purchase_no" => $row["id"],
        "purchase_date" => date("d-m-Y", strtotime($row["p_date"])),
        "supplier_name" => $row["suppliername"],
        "total_bill_amt" => $row["total_cost"],
        "amount_paid" => $row["amt_paid"],
        "balance" => $row["balance"],
        "words" => $obj->get_words(),
    ];
}

// Invoice Products
$products_info = [];

$sql = "SELECT p.product_name, p.qty, p.unit_price, p.total
        FROM products p
        INNER JOIN purchases pu ON p.purchase_id = pu.id
        WHERE pu.id = '{$_GET["id"]}'";

$res = $con->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $products_info[] = [
            "name" => $row["product_name"],
            "qty" => $row["qty"],
            "price" => $row["unit_price"],
            "total" => $row["total"],
        ];
    }
}


class PDF extends FPDF
{
    function Header()
    {
        // Display Company Info
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(50, 10, "Hari Kirshna Mobile Care", 0, 1);
        $this->SetFont('Arial', '', 14);
        $this->Cell(50, 7, "No.17,", 0, 1);
        $this->Cell(50, 7, "Main Street Watagoda.", 0, 1);
        $this->Cell(50, 7, "PH : 0778982452", 0, 1);

        $this->SetY(15);
$this->SetX($this->GetPageWidth() - 70); // Adjust the X position according to your requirements
$this->SetFont('Arial', 'B', 18);
$this->Cell(20, 10, "Purchase Invoice", 0, 1);

        // Display Horizontal line
        $this->Line(0, 48, 210, 48);
    }

    function Body($info, $products_info)
    {
        // Billing Details
        $this->SetY(55);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(50, 10, "Supplier Details: ", 0, 1);
        $this->SetFont('Arial', '', 12);
        $this->Cell(50, 7, $info["purchase_date"], 0, 1);
        $this->Cell(50, 7, $info["supplier_name"], 0, 1);
        $this->Cell(50, 7, $info["total_bill_amt"], 0, 1);

        // Display Invoice no
        $this->SetY(55);
        $this->SetX(-60);
        $this->Cell(50, 7, "Invoice No: " . $info["purchase_no"]);

        // Display Invoice date
        $this->SetY(63);
        $this->SetX(-60);
        $this->Cell(50, 7, "Invoice Date: " . $info["purchase_date"]);

        // Display Table headings
        $this->SetY(95);
        $this->SetX(10);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(80, 9, "DESCRIPTION", 1, 0);
        $this->Cell(40, 9, "PRICE", 1, 0, "C");
        $this->Cell(30, 9, "QTY", 1, 0, "C");
        $this->Cell(40, 9, "TOTAL", 1, 1, "C");
        $this->SetFont('Arial', '', 12);

        // Display table product rows
        foreach ($products_info as $row) {
            $this->Cell(80, 9, $row["name"], "LR", 0);
            $this->Cell(40, 9, $row["price"], "R", 0, "R");
            $this->Cell(30, 9, $row["qty"], "R", 0, "C");
            $this->Cell(40, 9, $row["total"], "R", 1, "R");
        }

        // Display table empty rows
        for ($i = count($products_info); $i < 12; $i++) {
            $this->Cell(80, 9, "", "LR", 0);
            $this->Cell(40, 9, "", "R", 0, "R");
            $this->Cell(30, 9, "", "R", 0, "C");
            $this->Cell(40, 9, "", "R", 1, "R");
        }

        // Display table total row
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(150, 9, "Amount Paid", 1, 0, "R");
        $this->Cell(40, 9, $info["amount_paid"], 1, 1, "R");
        $this->Cell(150, 9, "Balance", 1, 0, "R");
        $this->Cell(40, 9, $info["balance"], 1, 1, "R");
    }

    function Footer()
    {
        // Set footer position
        $this->SetY(-50);
        $this->SetFont('Arial', 'B', 12);
        $this->Ln(15);
        $this->SetFont('Arial', '', 12);
        $this->SetFont('Arial', '', 10);

        // Display Footer Text
        $this->SetY(-15);
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 10, "Thank you. Come Again", 0, 1, "C");
    }
}

// Create A4 Page with Portrait 
$pdf = new PDF("P", "mm", "A4");
$pdf->AddPage();
$pdf->Body($info, $products_info);
$pdf->Output();
?>
