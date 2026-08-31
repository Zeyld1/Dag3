<!DOCTYPE html>
<html>
<body>

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

$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br> fornavn: " . $row["firstname"] . " - efternavn: ??? " . $row["lastname"] . " Email adresse: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>