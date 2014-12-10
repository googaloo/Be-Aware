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

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$loyal = mysqli_real_escape_string($conn, $_POST['loyal']);
$difname = mysqli_real_escape_string($conn, $_POST['difname']);
$email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
$why = mysqli_real_escape_string($conn, $_POST['why']);

// The query
$sql = "INSERT INTO signup (fname, lname, loyal, difname, email, why)
VALUES('$fname', '$lname', '$loyal', '$difname', '$email', '$why')";
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
$msg = "Email: " . $email . "\r\n";
$msg .= "First Name: " . $fname . "\r\n";
$msg .= "Last Name: " . $lname . "\r\n";
$msg .= "Different Name: " . $difname . "\r\n";
$msg .= "Loyal: " . $loyal . "\r\n\r\n";
$msg .= "Message: \r\n";
$msg .= $why;

mail('rustin.l.odom@gmail.com', 'BeAware Signup Form Submitted', $msg);

echo json_encode($data);