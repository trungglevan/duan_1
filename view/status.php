<?php
$servername = "localhost";
$username = "trungglevan";
$password = "220204Trungg@";
$dbname = "duan_1";
$email_value = $_GET['email'];
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tai_khoan SET kich_hoat=1, vai_tro=0 WHERE email = '$email_value'";
// Prepare statement
$stmt = $conn->prepare($sql);
// execute the query
$stmt->execute();
header("Location: ../");
?>