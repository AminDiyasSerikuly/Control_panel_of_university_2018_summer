<?php





 function callback($d,$conn){
  $sql = "SELECT * FROM stuffs where ID=$d";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
            echo "<form  action='query_to_db.php' style='margin-left:;display:block;' method='post' name='form1'>";
            echo  "<table style='width:100%; style=margin-bottom:1%; margin-top:3%; border:2px solid black;'>";
            echo  "<tr>
                   <th >Имя:</th>
                   <th style='width:600px;''><input type='text' name='firstname' value='".$row['Firstname']."' style='width:100%;'  required  ><br></th>
                   </tr>";
            echo "<tr>
                  <th>Фамилия:</th>
                  <th><input type='text' name='lastname' value='".$row["Surname"]."'  required><br></th>
                  </tr>";
            echo "<tr>
                  <th>Отчество:</th>
                  <th><input type='text' name='pathername' value='".$row["Father_name"]."'  required><br></th>
                  </tr>";
            echo "<tr>
                  <th>Подразделение:</th>
                  <th><input type='text' name='subdivision' value='".$row["Father_name"]."'  required><br></th>
                  </tr>";
            echo "<tr>
                  <th>Должность:</th>
                  <th><input type='text' name='respon' value='".$row["Responsobility"]."'  required><br></th>
                  </tr>";
            echo  " <tr style='width:200px;'>
                  <th>Статус:</th>
                  <th>
                    <select style='width:100%; padding:5px;' name='status'  required>
                      <option value=''>".$row["Status"]."</option>
                      <option value='Работает''>Работает</option>
                      <option value='Уволен'>Уволен</option>
                      <option value='Вдекретном отпуске'>В декретном отпуске</option>
                      <option value='Другое'>Другое</option>
                      </select><br>
                  </th>
                  </tr>";

              echo  "<tr>
                    <th>Дата создание:</th>
                    <th><input id='f' type='text' name='Crdate' value='".$row["Date_of_creating"]."' required><br></th>
                  </tr>
                  <tr>
                    <th>Дата удаление:</th>
                    <th><input  id='f' type='text' name='fname' value='".$row["Date_of_creating"]."' required><br></th>
                  </tr>
                  <tr>
                    <th>Дата последнего изменение:</th>
                    <th><input  id='f' type='text' name='fname' value='".$row["Date_of_creating"]."'  required><br></th>
                  </tr>
                  <tr>
                    <th>
                      <input type='text' value='Noid1' name='ID1' style='display:none;'>
                    <input type='text' value='".$row["ID"]."' name='ID' style='display:none;'></th>
                    <th><input  type='submit' value='Update' style='width:30%; margin-top:1%; margin-left:69%;'></th>

                  </tr>

                  ";

            echo "</table>";
          echo "</form>";
      }
  } else {
      echo "0 results";}}

function callback1($d,$conn){
 $sql = "SELECT * FROM technique where ID=$d";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
           echo "<form  action='query_to_db.php' style='display:block;' method='post' name='form2'  >";
           echo  "<table style='width:0%; style=margin-bottom:1%; margin-top:3%; border:2px solid black;'>";
           echo "<tr>
             <th >Шифр:</th>
             <th style='width:600px;'><input type='text' name='Chifer' value='".$row["Cipher"]."' style='width:100%;'  required  ><br></th>
             </tr>
             <tr>
             <th>Наименовение:</th>
             <th><input type='text' name='Name1' value='".$row["Name"]."'  required><br></th>
             </tr>
             <tr>
             <th>Инвентарный номер:</th>
             <th><input type='text' name='inventory_number' value='".$row["inventory_number"]."' required><br></th>
             </tr>
             <tr>
            <th>Категория:</th>
            <th><input type='text' name='Category' value='".$row["Category"]."' required><br></th>
           </tr>
           <tr>
             <th>Ед измерение:</th>
             <th><input type='text' name='unit_measurement' value='".$row["unit_measurement"]."' required><br></th>
           </tr>
           <tr>
             <th>Кол-во:</th>
             <th><input type='text' name='Number' value='".$row["Numberr"]."' required><br></th>
           </tr>
           <tr>
             <th>Цена:</th>
             <th><input type='text' name='Price' value='".$row["Price"]."' required><br></th>
           </tr>
           <tr>
             <th>Сумма:</th>
             <th><input type='text' name='sum' value='".$row["Sum"]."' required><br></th>
           </tr>
           <tr>
             <th>Владелец:</th>
             <th><input type='text' name='Owner' value='".$row["Owner"]."' required><br></th>
           </tr>
           <tr>
             <th>Поставщик:</th>
             <th><input type='text' name='Custumer' value='".$row["Custumer"]."' required><br></th>
           </tr>

           <tr>
             <th>Дата начало владение:</th>
             <th><input id='f' type='text' name='Date_of_beg_using' value='".$row["Date_of_beg_using"]."' required><br></th>
           </tr>
           <tr>
             <th>Дата оканчание владение:</th>
             <th><input  id='f' type='text' name='Date_of_end_using' value='".$row["Date_of_end_using"]."' required><br></th>
           </tr>
           <!-- <tr>
             <th>Дата последнего изменение:</th>
             <th><input  id='f' type='text' name='date_of_cahnging' value=''  required><br></th>
           </tr> -->
           <tr>
             <th><input type='text' value='NoidTec1' name='ID1' style='display:none;'>
               <input type='text' value='".$row["ID"]."' name='ID' style='display:none;'>
             </th>
             <th><input  type='submit' value='Update' style='width:30%; margin-top:1%; margin-left:69%;'></th>


           </tr>";

           echo "</table>";
         echo "</form>";
     }

 } else {
     echo "0 results";
}}
function callback2($d,$conn){
 $sql = "SELECT * FROM category where ID=$d";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
           echo "<form  action='query_to_db.php' style='display:block;' method='post' name='form3'  >";
           echo  "<table style='width:0%; style=margin-bottom:1%; margin-top:3%; border:2px solid black;'>";
           echo "<tr>
             <th >Наименовение:</th>
             <th style='width:600px;'><input type='text' name='Name' value='".$row["Name"]."' style='width:100%;' required  ><br></th>
           </tr>
           <tr>
             <th>Дата создание:</th>
             <th><input type='text' name='Date_of_craeting' value='".$row["Date_of_craeting"]."'  required><br></th>
           </tr>
           <tr>
             <th>Дата удаление:</th>
             <th><input type='text' name='Date_of_deleting' value='".$row["Date_of_deleting"]."' required><br></th>
           </tr>
           <tr>
             <th>Дата последнего изменение:</th>
             <th><input type='text' name='Date_of_cahnging' value='".$row["Date_of_cahnging"]."' required><br></th>
           </tr>
           <tr>
             <tr>
               <th> <input type='text' value='NoidCat1' name='ID1' style='display:none;'>
               <input type='text' value='".$row["ID"]."' name='ID' style='display:none;'>

               </th>
               <th><input  type='submit' value='Update' style='width:30%; margin-top:1%; margin-left:69%;'></th>
               <!-- <input  id='Dateset' type='button' name='' value='Dateset' style='width:10%; margin-left:23.5%; margin-top:1%;'> -->
             </tr>";
        echo "</table>";
        echo "</form>";
}}
else {
    echo "0 results";}}

    function callback3($d,$conn){
     $sql = "SELECT * FROM subdivisions where ID=$d";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
           echo "<form  action='query_to_db.php' style='display:block;' method='post' name='form'  >";
           echo  "<table style='width:0%; style=margin-bottom:1%; margin-top:3%; border:2px solid black;'>";
          echo "<tr>
            <th >Наименовение:</th>
            <th style='width:600px;'><input type='text' name='Name' id = 'lolo1' value='".$row["Name"]."' style='width:100%;'  required  ><br></th>
            </tr>
            <tr>
            <th>Дата создание:</th>
            <th><input type='text' name='Date_of_creating' value='".$row["Date_of_creating"]."'  required><br></th>
            </tr>
            <tr>
            <th>Дата последнего изменение:</th>
            <th><input type='text' name='Date_of_changing' value='".$row["Date_of_changing"]."' required><br></th>
            </tr>
            <tr>
            <th>Выше стоящее подразделение:</th>
            <th>
                <select style='width:100%; padding:5px;' value='".$row["Higher_standing_subdivision"]."' name='Higher_standing_subdivision2'  required>

                </select>
              </th>
               <!-- <input type='text' name='Higher_standing_subdivision1' value='' style='display:'><br> -->
            </tr>
            <tr>
            <th><input type='text' value='".$row["ID"]."' name='ID' style='display:none;'></th>
            <input type='text' value='NoidSub1' name='ID1' style='display:none;'>
            <th><input  type='submit' value='Update' style='width:30%; margin-top:1%; margin-left:69%;'></th>
            <!-- <input  id='Dateset' type='button' name='' value='Dateset' style='width:10%; margin-left:23.5%; margin-top:1%;'> -->
            </tr>";

           echo "</table>";
           echo "</form>";





         }}}

?>
