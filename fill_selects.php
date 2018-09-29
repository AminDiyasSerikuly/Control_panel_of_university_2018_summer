<?php
$configs = include('config.php');
$Selector = $_POST["action"];
$table = $_POST["table"];



$conn = new mysqli($configs['host'],$configs['username'], $configs['pass'],$configs['database'] );

$arrayName = array();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $table";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  
if($table == "subdivisions" ){
 while($row = $result->fetch_assoc()){
   $arrayName[] = $row['Name'];
   $arrayName[] = $row['Higher_standing_subdivision'];
 }}
 elseif ($table == "stuffs") {
   while($row = $result->fetch_assoc()){
     $FIO = $row["Firstname"]." ".$row["Surname"]." ".$row["Father_name"];
     $arrayName[] = $FIO;
 }}
 elseif ($table == "category") {
   while($row = $result->fetch_assoc()){
     $arrayName[] = $row["Name"];
 }}
 elseif ($Selector == "for_select_stuffs") {
   while($row = $result->fetch_assoc()){
     $arrayName[] = $row["Higher_standing_subdivision"];
 }}}
 else {
    echo "0 results";
}
$conn->close();

$arrayName =  json_encode($arrayName);


echo $arrayName;










 ?>
