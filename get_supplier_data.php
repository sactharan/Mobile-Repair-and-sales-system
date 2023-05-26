<?php
require 'config.php';

// Check if the supplier_name parameter is present
if (isset($_POST['supplier_name'])) {
    $supplierName = $_POST['supplier_name'];

    // Prepare a SELECT query to retrieve the supplier's data based on the name
    $query = "SELECT * FROM suppliers WHERE supplier_name = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 's', $supplierName);
    mysqli_stmt_execute($stmt);

    // Fetch the supplier's data
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        // Return the supplier's data as a JSON response
        $response = [
            'status' => 200,
            'data' => $row
        ];
        echo json_encode($response);
        exit;
    }
}

// If the supplier's data is not found or the parameter is missing, return an error response
$response = [
    'status' => 404,
    'message' => 'Supplier data not found.'
];
echo json_encode($response);
exit;
?>