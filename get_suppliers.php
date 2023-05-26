<?php
// Establish a database connection
require 'config.php';

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve suppliers from the database
$query = "SELECT * FROM suppliers";
$result = mysqli_query($con, $query);

// Fetch the result and store in an array
$suppliers = array();
while ($row = mysqli_fetch_assoc($result)) {
    $suppliers[] = $row;
}

// Close the database connection
mysqli_close($con);

// Return the suppliers as JSON
echo json_encode($suppliers);
?>
