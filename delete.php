<?php
$configs = include('config.php');


$Deleter1 = $_POST['action'];

echo $Deleter1 ;

 $table = $_POST['table'];
 echo $table;
 

$conn = new mysqli($configs['host'],$configs['username'], $configs['pass'],$configs['database']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM $table WHERE ID=$Deleter1";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

   

 ?>
