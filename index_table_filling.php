<?php




function second($result,$conn,$table){

    $counter =2;
    $counter1 =2;
    $counter3 =2;
    $counter4 =2;

if($table == "stuffs"){
if ($result->num_rows > 0) {
  // echo "<table name='TableLength'>";
  echo  "<tr id=ol1>";
  echo "<th id=ol2>"."ФИО". "</th>".
  "<th id=ol2>"."Подразделение" . "</th>". "<th id=ol2>"."Должность" . "</th>".
  "<th id=ol2>"."Дата Создание". "</th>"."<th id=ol2>"."Дата Последнего Изменение". "</th>".
  "<th id=ol2>"."Статус" . "</th>". "<th id=ol2>"."Edit"."</th>";
  echo "</tr>";
    while($row = $result->fetch_assoc()) {
      "<tr id=ol1>";
        echo "<th id=ol2>". $row["Surname"]. " ". $row["Firstname"]. " " . $row["Father_name"] . "</th>".
        "<th id=ol2>".$row["Firstname"] . "</th>". "<th id=ol2>".$row["Responsobility"] . "</th>".
        "<th id=ol2>".$row["Date_of_creating"] . "</th>"."<th id=ol2>".$row["Date_of_creating"] . "</th>".
        "<th id=ol2>".$row["Status"] . "</th>". "<th id=ol2>" ."<input type=checkbox id=increment name=clickers"."$counter"." value=". $row["ID"]  .">"."</th>";
        echo "</tr>";
         $counter ++;}
         // echo "</table>";

    echo "<input name='sorter' style='display:none;' value='".$counter."'></input>";}
 else {
    echo "0 results";
}}
elseif ($table == "technique") {
  if ($result->num_rows > 0) {
    // echo "<table name='TableLength'>";
    echo  "<tr id=ol1>";
    echo
    "<th id=ol2>"."Шифр" . "</th>". "<th id=ol2>"."Наименовение". "</th>".
    "<th id=ol2>"."Инвентарный номер". "</th>"."<th id=ol2>"."Категория". "</th>".
    "<th id=ol2>". "Единица Измерение". "</th>". "<th id=ol2>". "Кол-во". "</th>".
    "<th id=ol2>"."Цена". "</th>". "<th id=ol2>"."Сумма"."</th>".
    "<th id=ol2>"."Владелец" . "</th>". "<th id=ol2>"."Поставщик". "</th>".
    "<th id=ol2>"."Дата начало владение" . "</th>". "<th id=ol2>"."Дата оканчание владение". "</th>".
    "<th id=ol2>" ."Edit"."</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo  "<tr id=ol1>";
        echo
        "<th id=ol2>".$row["Cipher"] . "</th>". "<th id=ol2>".$row["Name"] . "</th>".
        "<th id=ol2>".$row["inventory_number"] . "</th>"."<th id=ol2>".$row["Category"] . "</th>".
        "<th id=ol2>".$row["unit_measurement"] . "</th>". "<th id=ol2>".$row["Numberr"] . "</th>".
        "<th id=ol2>".$row["Price"] . "</th>". "<th id=ol2>".$row["Sum"] ."</th>".
        "<th id=ol2>".$row["Owner"] . "</th>". "<th id=ol2>".$row["Custumer"] . "</th>".
        "<th id=ol2>".$row["Date_of_beg_using"] . "</th>". "<th id=ol2>".$row["Date_of_end_using"] . "</th>".
        "<th id=ol2>" ."<input type=checkbox id=increment name=clickers"."$counter1"." value=". $row["ID"]  .">"."</th>";
        echo "</tr>";
         $counter1 ++;}
         // echo "</table>";

      echo "<input name='sorter' style='display:none;' value='".$counter1."'></input>";}
   else {
      echo "0 results";
  }}
elseif($table == "category"){
if ($result->num_rows > 0) {
  // echo "<table name='TableLength'>";
  echo  "<tr id=ol1>";
  echo "<th id=ol2>"."Наименование". "</th>".
  "<th id=ol2>"."Дата создание" . "</th>". "<th id=ol2>"."Дата последнего изменение" . "</th>".
  "<th id=ol2>"."Edit"."</th>";
  echo "</tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr id=ol1>";
        echo
        "<th id=ol2>".$row["Name"] . "</th>". "<th id=ol2>".$row["Date_of_craeting"] . "</th>".
        "<th id=ol2>".$row["Date_of_cahnging"] . "</th>".
         "<th id=ol2>" ."<input type=checkbox id=increment name=clickers"."$counter3"." value=". $row["ID"]  .">"."</th>";
        echo "</tr>";
         $counter3 ++;}
         // echo "</table>";
    echo "<input name='sorter' style='display:none;' value='".$counter3."'></input>";}
 else {
    echo "0 results";
}}
elseif($table == "subdivisions"){
if ($result->num_rows > 0) {
  // echo "<table name='TableLength'>";
  echo  "<tr id=ol1>";
  echo "<th id=ol2>"."Наименование". "</th>".
  "<th id=ol2>"."Дата создание" . "</th>". "<th id=ol2>"."Дата последнего изменени" . "</th>".
  "<th id=ol2>"."Выше стоящее подразделения" . "</th>".
  "<th id=ol2>"."Edit"."</th>";
  echo "</tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr id=ol1>";
        echo
        "<th id=ol2>".$row["Name"] . "</th>". "<th id=ol2>".$row["Date_of_creating"] . "</th>".
        "<th id=ol2>".$row["Date_of_changing"] . "</th>"."<th id=ol2>".$row["Higher_standing_subdivision"] . "</th>".
         "<th id=ol2>" ."<input type=checkbox id=increment name=clickers"."$counter4"." value=". $row["ID"]  .">"."</th>";
        echo "</tr>";
         $counter4 ++;}
         // echo "</table>";

    echo "<input name='sorter' style='display:none;' value='".$counter4."'></input>";}
 else {
    echo "0 results";
}}



$conn->close();}







    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "yu_project";
    //
    //    $conn = new mysqli($servername, $username, $password, $dbname);
    //
    //    if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql = "SELECT * FROM technique";
    // $result = $conn->query($sql);
    // $counter1 =2;
    //
    // if ($result->num_rows > 0) {
    //
    //
    //     echo "<p name='sorter1' style='display:none;'>".$counter1. "</p>";
    // } else {
    //     echo "0 results";
    // }$conn->close();
    ?>
