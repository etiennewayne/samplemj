<?php

//$postdata = file_get_contents("php://input"); //get all inputted data from form

$lname = $_POST['lastname'];
$fname = $_POST['firstname'];


require_once('connection.php');


try {
  $conn = new PDO("mysql:host=$servername;dbname=testmj", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $rs = $conn->prepare("INSERT INTO users (lastname, firstname) VALUES (:lname, :fname)");

  $rs->execute([
    ':lname' => $lname,
    ':fname' => $fname,
  ]);
  echo "New record created successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



