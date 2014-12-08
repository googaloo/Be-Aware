<?php

$data = array();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'beaware';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data['name'] = mysqli_real_escape_string($conn, $_POST['name']);
$data['email'] = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
$data['message'] = mysqli_real_escape_string($conn, $_POST['message']);

// The query
$sql = "INSERT INTO messages (name, email, message)
VALUES('" . $data['name'] . "', '" . $data['email'] . "', '" . $data['message'] . "')";
// Send the query, return the result
if ( $conn->query($sql) === TRUE ) {
    $data['status'] == 'success';
} else {
    $data['status'] == 'fail';
}
// Close it up
$conn->close();

$data['status'] = 'success';

// Setup for email notification to my email
$msg = "Email: " . $data['email'] . "\r\n";
$msg .= "Message: \r\n";
$msg .= $data['message'];

mail('rustin.l.odom@gmail.com', 'BeAware Contact Form Submitted', $msg);

echo json_encode($data);