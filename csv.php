<?php
// Set headers for CSV file download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="students.csv"');

// Create output stream to write CSV rows
$output = fopen('php://output', 'w');

// Write header row
fputcsv($output, array('id', 'fullname', 'email', 'password', 'gender', 'phone_number'));

$conn = mysqli_connect('localhost', 'root', '', 'crude_operations');
$result = mysqli_query($conn, 'SELECT * FROM crud');


while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}


fclose($output);
?>
