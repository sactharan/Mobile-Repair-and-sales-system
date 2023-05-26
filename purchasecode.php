<?php
require "config.php";

if (isset($_POST["submit"])) {
    $p_date = mysqli_real_escape_string($con, $_POST["p_date"]);
    $type = mysqli_real_escape_string($con, $_POST["type"]);
    $existing_supplier = mysqli_real_escape_string($con, $_POST["existing_supplier"]);
    $suppliername = mysqli_real_escape_string($con, $_POST["suppliername"]);
      $total_cost = mysqli_real_escape_string($con, $_POST["total_cost"]);
      $amt_paid = mysqli_real_escape_string($con, $_POST["amt_paid"]);
      $balance = mysqli_real_escape_string($con, $_POST["balance"]);
       $payment = mysqli_real_escape_string($con, $_POST["payment"]);


    $sql = "INSERT INTO purchases (p_date, type, existing_supplier, suppliername,total_cost, amt_paid, balance,payment) VALUES ('{$p_date}','{$type}', '{$existing_supplier}', '{$suppliername}','{$total_cost}', '{$amt_paid}','{$balance}','{$payment}')";

    if ($con->query($sql)) {
        $sid = $con->insert_id;
    
        if (isset($_POST["product_name"]) && is_array($_POST["product_name"])) {
            $product_names = $_POST["product_name"];
            $unit_prices = $_POST["unit_price"];
            $quantities = $_POST["qty"];
            $totals = $_POST["total"];
    
            $sql2 = "INSERT INTO products (purchase_id,product_name,qty, unit_price,total) VALUES ";
    
            $rows = array();
            for ($i = 0; $i < count($_POST["product_name"]); $i++) {
                $pname = mysqli_real_escape_string($con, $_POST["product_name"][$i]);
                $price = mysqli_real_escape_string($con, $_POST["unit_price"][$i]);
                $qty = mysqli_real_escape_string($con, $_POST["qty"][$i]);
                $total = mysqli_real_escape_string($con, $_POST["total"][$i]);
                $rows[] = "('{$sid}', '{$pname}', '{$price}', '{$qty}', '{$total}')";
            }
    
            $sql2 .= implode(", ", $rows); // Concatenate the rows with comma separation
            $sql2 .= ";";
    
            if ($con->query($sql2)) {
                header("Location: purchaseslist.php?success=true");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
            }
        } 
    } else {
        echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
    } 
}

if(isset($_POST['delete_size']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $query = "DELETE FROM purchases WHERE id='$product_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Purchases Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Purchases Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}
?> 