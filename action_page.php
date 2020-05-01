 <?php

include "../../inc/dbinfo.inc";

$comment = "Father, which art in heaven "  .  $_REQUEST["comment"]  .  " in the name of Jesus, Amen" ;
echo $comment;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pray (item)
VALUES ('$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: index.php');
?> 
