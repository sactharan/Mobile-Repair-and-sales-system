<?php

require 'config.php';

if (isset($_POST['save_supplier'])) {
    $supplier_code = mysqli_real_escape_string($con, $_POST['supplier_code']);
    $supplier_name = mysqli_real_escape_string($con, $_POST['supplier_name']);
    $supplier_contact = mysqli_real_escape_string($con, $_POST['supplier_contact']);
    $supplier_address = mysqli_real_escape_string($con, $_POST['supplier_address']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
  
    if ($supplier_code == "" || $supplier_name == "" || $supplier_contact == "" || $supplier_address == "" || $status == "") {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
  
    $query = "INSERT INTO suppliers (supplier_code, supplier_name, supplier_contact, supplier_address, status) VALUES ('$supplier_code', '$supplier_name', '$supplier_contact', '$supplier_address', '$status')";
    $query_run = mysqli_query($con, $query);
  
    if ($query_run) {
        // Get the inserted ID
        $insertedId = mysqli_insert_id($con);
      
        // Retrieve the newly inserted row from the database
        $query = "SELECT * FROM suppliers WHERE id = $insertedId";
        $result = mysqli_query($con, $query);
        $newSupplier = mysqli_fetch_assoc($result);
      
        // Prepare the JSON response
        $response = array(
            'status' => 200,
            'message' => 'Supplier added successfully',
            'data' => $newSupplier
        );
      
        echo json_encode($response);
    } else {
        $res = [
            'status' => 500,
            'message' => 'Error occurred while adding the supplier'
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['update_supplier']))
{
    $supplier_id = mysqli_real_escape_string($con, $_POST['supplier_id']);

    $supplier_code = mysqli_real_escape_string($con, $_POST['supplier_code']);
    $supplier_name = mysqli_real_escape_string($con, $_POST['supplier_name']);
    $supplier_contact = mysqli_real_escape_string($con, $_POST['supplier_contact']);
    $supplier_address = mysqli_real_escape_string($con, $_POST['supplier_address']);
    $status = mysqli_real_escape_string($con, $_POST['status']);


    if($supplier_code == NULL ||  $supplier_name == NULL ||  $supplier_contact == NULL ||  $supplier_address == NULL ||  $status == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE suppliers SET supplier_code='$supplier_code',supplier_name='$supplier_name',supplier_contact='$supplier_contact',supplier_address='$supplier_address', status='$status' WHERE id='$supplier_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Supplier Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Supplier Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['supplier_id']))
{
    $supplier_id = mysqli_real_escape_string($con, $_GET['supplier_id']);

    $query = "SELECT * FROM suppliers WHERE id='$supplier_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $supplier = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Supplier Fetch Successfully by id',
            'data' => $supplier
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Supplier Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_size']))
{
    $supplier_id = mysqli_real_escape_string($con, $_POST['supplier_id']);

    $query = "DELETE FROM suppliers WHERE id='$supplier_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Supplier Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Supplier Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>