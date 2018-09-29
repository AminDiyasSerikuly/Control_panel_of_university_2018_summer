<?php

$configs = include('config.php');

$id = $_POST['ID'];
$id1 = $_POST['ID1'];


echo $id;
$conn = new mysqli($configs['host'],$configs['username'], $configs['pass'],$configs['database']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if($id1 == "Noid1"){
  $FirstName = $_POST['firstname'];
  $LastName = $_POST['lastname'];
  $PatherName = $_POST['pathername'];
  $Respon = $_POST['respon'];
  $Status = $_POST['status'];
  $DateCreating = $_POST['Crdate'];

if($id == "Noid"){
  $sql = ("INSERT INTO  stuffs(Surname,Firstname,Father_name,Responsobility,Status,Date_of_creating) values
  ('{$LastName}','{$FirstName}','{$PatherName}','{$Respon}','{$Status}','{$DateCreating}')");
}
else{
    $sql1 = ("UPDATE stuffs SET Surname = '{$LastName}' ,Firstname='{$FirstName}',Father_name='{$PatherName}',
      Responsobility='{$Respon}',Status='{$Status}', Date_of_creating='{$DateCreating}' WHERE $id = ID;");
}}
elseif ($id1 == "NoidTec1") {
  $a = $_POST['Chifer'];
  $b = $_POST['Name1'];
  $c = $_POST['inventory_number'];
  $d = $_POST['Category'];
  $e = $_POST['unit_measurement'];
  $f = $_POST['Number'];
  $g = $_POST['Price'];
  $h = $_POST['sum'];
  $j = $_POST['Owner'];
  $k = $_POST['Custumer'];
  $l = $_POST['Date_of_beg_using'];
  $m= $_POST['Date_of_end_using'];
  if($id == "NoidTec"){
    $sql = ("INSERT INTO  technique(Cipher,Name,inventory_number,Category,unit_measurement,Numberr,	Price,	Sum,Owner,Custumer,Date_of_beg_using,Date_of_end_using) values
    ('{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}','{$h}','{$j}','{$k}','{$l}','{$m}')");
  }
  else{
      $sql1 = ("UPDATE technique SET Cipher = '{$a}' ,Name='{$b}',inventory_number='{$c}',
        Category='{$d}',unit_measurement='{$e}', Numberr='{$f}',
        Price = '{$g}' ,Sum='{$h}',Owner='{$j}',
          Custumer='{$k}',Date_of_beg_using='{$l}', Date_of_end_using='{$m}' WHERE $id = ID;");
  }}
  elseif ($id1 == "NoidCat1") {
    $a = $_POST['Name'];
    $b = $_POST['Date_of_craeting'];
    $c = $_POST['Date_of_deleting'];
    $d = $_POST['Date_of_cahnging'];
    if($id == "NoidCat"){
      $sql = ("INSERT INTO  category(Name,Date_of_craeting,Date_of_deleting,Date_of_cahnging) values
      ('{$a}','{$b}','{$c}','{$d}')");
    }
    else{
         $sql1 = ("UPDATE category SET Name = '{$a}' ,Date_of_craeting='{$b}',Date_of_deleting='{$c}',
          Date_of_cahnging='{$d}' WHERE $id = ID;");
    }

  }


  elseif ($id1 == "NoidSub1") {
    $a = $_POST['Name'];
    $b = $_POST['Date_of_creating'];
    $c = $_POST['Date_of_deleting'];
    $d = $_POST['Date_of_changing'];
    $e = $_POST['Higher_standing_subdivision'];
    if($e == "above_all")
    {
        $e = $a;
    }
    if($id == "NoidSub"){
      $sql = ("INSERT INTO  subdivisions(Name,Date_of_creating,Date_of_changing,Date_of_delating,Higher_standing_subdivision) values
      ('{$a}','{$b}','{$c}','{$d}','{$e}')");
    }
    else{
        $sql1 = ("UPDATE subdivisions SET Name = '{$a}' ,Date_of_craeting='{$b}',Date_of_deleting='{$c}',
          Date_of_cahnging='{$d}' WHERE $id = ID;");
    }

  }
  
  
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





 ?>
