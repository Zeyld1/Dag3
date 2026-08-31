<?php 

$servername = "mysql111.unoeuro.com"; 

$username = "onepieceisreal_dk"; 

$password = "anxGhbrmFB4eRzkc369D"; 

$dbname = "onepieceisreal_dk_db"; 

 

// Create connection 

$conn = new mysqli($servername, $username, $password, $dbname); 

 

// Check connection 

if ($conn->connect_error) { 

  die("Connection failed: " . $conn->connect_error); 

} 

 

// prepare and bind 

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"); 

$stmt->bind_param("sss", $firstname, $lastname, $email); 

 

// set parameters and execute 

$firstname = $_POST["firstname"]; 

$lastname = $_POST["lastname"]; 

$email = $_POST["email"]; 

$stmt->execute(); 

 

echo "New record created successfully"; 

 

$stmt->close(); 

$conn->close(); 

?> 

 