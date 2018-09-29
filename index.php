<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>subdivision</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
    <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
    <script src="js/index.js"></script>
  </head>
  <style media="screen">
    a{
      color: black;
    }
    hover:a{
          background-color: lightblue;
    }
    a:active {
    color: yellow;
  }
  table {
    margin-top: 1%;
    margin-bottom: 1%;

}

td, th {
    border: 1px solid black;
    text-align: left;
    font-weight: 200;
    font-size: 14px;
    padding: 2px;
    width:2%;
}
#ol,#olk,#ol1 {
    border: 0.5px solid black;
    text-align: left;
    font-weight: 500;
    font-size: 11px;
    padding: 1px;
}
#ol{
  text-align: center;
  font-weight: 700;
   font-size: 13px;
   width:2%;
   padding: 1px;
}
#olk{

  text-align: center;
  font-weight: 700;
   font-size: 13px;
   width:0.1%;
   padding: 1px;

}

input{
  width:100%;
  padding: 3px;
}
  </style>
  <body>
    <div class="container" style="width:90%;">
      <div class="main_pick" style="width:100%;height:auto;  display:block; border:1px solid black; margin-top:2%; background-color:lightblue;">
          <div class="module_pick" style="width:80%; height:8%;  margin-right:auto; display:inline-block; margin-top:1%;  ">
              <div id="word1" style="width:13%; height:100%; margin-left:0.1%;display:inline-block;  background-color:lightyellow; text-align:center;">
                <h5><a id="pod">Подразделение</a></h5>
              </div>
              <div id="word2" style="width:13%; height:100%; margin-left:0.1%;display:inline-block; background-color:lightyellow; text-align:center;">
                <h5><a id="pod1">Сотрудники</a></h5>
              </div>
              <div id="word3" style="width:13%; height:100%; margin-left:0.1%;display:inline-block;  background-color:lightyellow; text-align:center;">
                <h5><a id="pod2">Категории</a></h5>
              </div>
              <div id="word4" style="width:13%; height:100%; margin-left:0.1%;display:inline-block;  background-color:lightyellow; text-align:center;">
                <h5><a id="pod3">Техника</a></h5>
              </div>

          </div>
          <div id="processing" style="width:2%; margin-left:1%;display:none;">
            <h5 id="proc" style="color:red; font-size:150%;">ds</h5>
          </div>



      <div class="process_area_stuffs" style="width:100%; height:auto;  margin-top:1%; ">
          <div id="chocie_place" style="width:100%; height:100%; ">
                <h5 id="stuffs_preview_word1" style="display:inline-block; vertical-align:top; margin-left:3%;"value =""><a  style="color:black; background-color: lightyellow; font-size:130%;" id ="spw1"> </a></h5>
                <h5 id="stuffs_preview_word2" style="display:inline-block; vertical-align:top; margin-left:3%;" value =""><a  style="color:black; background-color: lightyellow; font-size:130%;" id ="spw2"> </a></h5>
                <div class="Search" style="height:30px;margin-bottom:1%;">
                  <input type="text" name="Search_Area" id="Search_Area" value="" style="width:80%;">
                  <!-- <select class="" name="Search_Select" value="" style="width:13%; height: 100%;"> -->
                  <!-- </select> -->
                </div>


          </div>
          <div id="stuffs_filling_place" style="width:95%;height:auto; background-color:white;  display: inline-block;display:none; vertical-align: top; border-left: 1px solid red;border-right:1px solid red; margin-left: 2.5%;">
            <div class="border" style="width:100%; height:1px;margin-bottom:1%; background-color:red;">
            </div>
            <form  action="query_to_db.php"  method="post" name="form"  >
              <table style="width:0%; border: 2px solid black;" id="table1" >
              <tr>
                <th >Наименовение:</th>
                <th style="width:600px;"><input type="text" name="Name" id = "lolo" value="" style="width:100%;"  required  ><br></th>
              </tr>
              <tr>
                <th>Дата создание:</th>
                <th><input type="text" name="Date_of_creating" value=""  required><br></th>
              </tr>
              <tr>
                <th>Дата последнего изменение:</th>
                <th><input type="text" name="Date_of_changing" value="" required><br></th>
              </tr>
              <tr>
                <th>Выше стоящее подразделение:</th>
                <th>
                    <select style="width:100%; padding:5px;" name="Higher_standing_subdivision"  required>
                      <option name="r"value=""> </option>
                    </select>
                  </th>
                   <!-- <input type="text" name="Higher_standing_subdivision1" value="" style="display:"><br> -->
              </tr>
              <tr>
                <th><input type="text" value="NoidSub" name="ID" style="display:none;"></th>
                <input type="text" value="NoidSub1" name="ID1" style="display:none;">
                <th><input  type="submit" value="Submit" style="width:30%; margin-top:1%; margin-left:69%;"></th>
                <!-- <input  id="Dateset" type="button" name="" value="Dateset" style="width:10%; margin-left:23.5%; margin-top:1%;"> -->
              </tr>
            </table>
            </form>

            <form  action="query_to_db.php"  method="post" name="form1"  >
              <table style="width:0%; border: 2px solid black;" id="table2" >
              <tr>
                <th >Имя:</th>
                <th style="width:600px;"><input type="text" name="firstname" value="" style="width:100%;"  required  ><br></th>
              </tr>
              <tr>
                <th>Фамилия:</th>
                <th><input type="text" name="lastname" value=""  required><br></th>
              </tr>
              <tr>
                <th>Отчество:</th>
                <th><input type="text" name="pathername" value="" required><br></th>
              </tr>
              <tr>
                <th>Подразделение:</th>
                <th><select style="width:100%; padding:5px;" name="subdivision"  required></th>
                  <!-- <option name="r"value=""> </option> -->
                </select>
              </tr>
              <tr>
                <th>Должность:</th>
                <th><input type="text" name="respon" value="" required><br></th>
              </tr>
              <tr style="width:200px;">
                <th>Статус:</th>
                <th >
                    <select style="width:100%; padding:5px;" name="status"  required>
                      <option value=""></option>
                      <option value="Работает">Работает</option>
                      <option value="Уволен">Уволен</option>
                      <option value="Вдекретном отпуске">В декретном отпуске</option>
                      <option value="Другое">Другое</option>
                    </select><br>
                  </th>
              </tr>
              <tr>
                <th>Дата создание:</th>
                <th><input id="f" type="text" name="Crdate" value="" required><br></th>
              </tr>
              <tr>
                <th>Дата удаление:</th>
                <th><input  id="f" type="text" name="fname" value="" required><br></th>
              </tr>
              <tr>
                <th>Дата последнего изменение:</th>
                <th><input  id="f" type="text" name="fname" value=""  required><br></th>
              </tr>
              <tr>
                <th><input type="text" value="Noid" name="ID" style="display:none;"></th>
                <input type="text" value="Noid1" name="ID1" style="display:none;">
                <th><input  type="submit" value="Submit" style="width:30%; margin-top:1%; margin-left:69%;"></th>
                <!-- <input  id="Dateset" type="button" name="" value="Dateset" style="width:10%; margin-left:23.5%; margin-top:1%;"> -->
              </tr>

                </table>
              </form>

  <form  action="query_to_db.php"  method="post" name="form2"   >
              <table style="width:0%; border: 2px solid black;" id="table3">
                <tr>
                  <th >Шифр:</th>
                  <th style="width:600px;"><input type="text" name="Chifer" value="" style="width:100%;"  required  ><br></th>
                </tr>
                <tr>
                  <th>Наименовение:</th>
                  <th><input type="text" name="Name1" value=""  required><br></th>
                </tr>
                <tr>
                  <th>Инвентарный номер:</th>
                  <th><input type="text" name="inventory_number" value="" required><br></th>
                </tr>
                <tr>
                  <th>Категория:</th>
                  <th>
                  <select style="width:100%; padding:5px;" name="Category"  required>
                    <!-- <option name="r"value=""> </option> -->
                  </select>
                  </th>
                </tr>
                <tr>
                  <th>Ед измерение:</th>
                  <th><input type="text" name="unit_measurement" value="" required><br></th>
                </tr>
                <tr>
                  <th>Кол-во:</th>
                  <th><input type="text" name="Number" value="" required><br></th>
                </tr>
                <tr>
                  <th>Цена:</th>
                  <th><input type="text" name="Price" value="" required><br></th>
                </tr>
                <tr>
                  <th>Сумма:</th>
                  <th><input type="text" name="sum" value="" required><br></th>
                </tr>
                <tr>
                  <th>Владелец:</th>
                  <th>
                      <select style="width:100%; padding:5px;" name="Owner"  required>
                        <!-- <option name="r"value=""> </option> -->
                      </select>
                    </th>
                  <!-- <th><input type="text" name="Owner" value="" required><br></th> -->
                </tr>
                <tr>
                  <th>Поставщик:</th>
                  <th>
                      <select style="width:100%; padding:5px;" name="Custumer"  required>
                        <!-- <option name="r"value=""> </option> -->
                      </select>
                    </th
                </tr>

                <tr>
                  <th>Дата начало владение:</th>
                  <th><input id="f" type="text" name="Date_of_beg_using" value="" required><br></th>
                </tr>
                <tr>
                  <th>Дата оканчание владение:</th>
                  <th><input  id="f" type="text" name="Date_of_end_using" value="" required><br></th>
                </tr>
                <!-- <tr>
                  <th>Дата последнего изменение:</th>
                  <th><input  id="f" type="text" name="date_of_cahnging" value=""  required><br></th>
                </tr> -->
                <tr>
                  <th><input type="text" value="NoidTec" name="ID" style="display:none;">
                    <input type="text" value="NoidTec1" name="ID1" style="display:none;">
                  </th>
                  <th><input  type="submit" value="Submit" style="width:30%; margin-top:1%; margin-left:69%;"></th>
                  <!-- <input  id="Dateset" type="button" name="" value="Dateset" style="width:10%; margin-left:23.5%; margin-top:1%;"> -->

                </tr>

                  </table>
              </form>
              <form  action="query_to_db.php"  method="post" name="form3"  >
                <table style="width:0%; border: 2px solid black;" id="table4" >
                <tr>
                  <th >Наименовение:</th>
                  <th style="width:600px;"><input type="text" name="Name" value="" style="width:100%;"  required  ><br></th>
                </tr>
                <tr>
                  <th>Дата создание:</th>
                  <th><input type="text" name="Date_of_craeting" value=""  required><br></th>
                </tr>
                <tr>
                  <th>Дата удаление:</th>
                  <th><input type="text" name="Date_of_deleting" value="" required><br></th>
                </tr>
                <tr>
                  <th>Дата последнего изменение:</th>
                  <th><input type="text" name="Date_of_cahnging" value="" required><br></th>
                </tr>
                <tr>
                  <tr>
                    <th><input type="text" value="NoidCat" name="ID" style="display:none;">
                      <input type="text" value="NoidCat1" name="ID1" style="display:none;">
                    </th>
                    <th><input  type="submit" value="Submit" style="width:30%; margin-top:1%; margin-left:69%;"></th>
                    <!-- <input  id="Dateset" type="button" name="" value="Dateset" style="width:10%; margin-left:23.5%; margin-top:1%;"> -->
                  </tr>
                </table>
              </form>



              <?php
                    include "update.php";
                    $configs = include('config.php');



                    $conn = new mysqli($configs['host'],$configs['username'], $configs['pass'],$configs['database']);



                    echo "<p>".$_SESSION["setter"]."</p>";

                    $var = $_SESSION["setter"];
                    $action = json_decode(stripslashes($var));



                    if($_SESSION["knower"] == "red"){
                      foreach($action as $d)
                      {
                        callback($d,$conn);
                      }}
                    else if($_SESSION["knower"] == "green"){
                      foreach($action as $d)
                      {
                        callback1($d,$conn);
                      }}
                    else if($_SESSION["knower"] == "brown"){
                      foreach($action as $d)
                      {
                        callback2($d,$conn);
                      }}
                    else if($_SESSION["knower"] == "yellow"){
                      foreach($action as $d)
                      {
                        callback3($d,$conn);
                      }}


                 ?>
               </form>

</div>






            <div class="border" style="width:100%; height:1px;margin-bottom:1%; background-color:red;">

            </div>
          </div>
          <div id="stuffs_preview_place" style="width:100%;height:100%; background-color:white;  display:inline-block; vertical-align: top; ">

                <table id="tab" style="display:block;" name="TableLength">
                  <tr id="ol11" >
                  </tr>
                <?php
                include "index_table_filling.php";
                $configs = include('config.php');
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $dbname = "yu_project";
                 $table = "";
                    $conn = new mysqli($configs['host'],$configs['username'], $configs['pass'],$configs['database']);

                    if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 }
                  $SelectedPiece = $_SESSION["SelectedPiece"];
                  if($_SESSION["setter1"] == "stuffs"){
                    $table = "stuffs";
                    $sql = "SELECT * FROM  $table where BINARY(LOWER(FirstName)) LIKE  BINARY(Lower('%$SelectedPiece%'))";
                  }
                  elseif ($_SESSION["setter1"] == "technique") {
                    $table = "technique";
                    $sql = "SELECT * FROM  $table where BINARY Name LIKE BINARY '%$SelectedPiece%'";
                  }
                  elseif ($_SESSION["setter1"] == "category") {
                    $table = "category";
                    $sql = "SELECT * FROM  $table where BINARY Name LIKE BINARY '%$SelectedPiece%'";
                  }
                  elseif ($_SESSION["setter1"] == "subdivisions") {
                    $table = "subdivisions";
                    $sql = "SELECT * FROM  $table where BINARY Name LIKE BINARY '%$SelectedPiece%'";
                  }
                     // $SelectedPiece = $_SESSION["SelectedPiece"];
                     //  $sql = "SELECT * FROM  $table where BINARY Name LIKE BINARY '%$SelectedPiece%'";
                      $result = $conn->query($sql);
                   second($result,$conn,$table);

                ?>

              </table>








              <div class="border" style="width:100%; height:1px;margin-bottom:0.1%;">

              </div>
              <div class="edit" style="width:100%; height:30px; background-color:lightblue;">
                    <div id="editDiv" style="width:70%; height:100%; background-color:yellow;margin-left:30%;">

                          <div id="Word" style="display:inline-block; font-size:14px; margin-left:5%;">
                                <a style="color:grey; font-style:italic;  text-decoration:none;">С отмеччанными:</a>
                          </div>
                          <div id="Edit"  style="display:inline-block; margin-left:3%;" >
                              <a href="#" style="color:blue; font-size:16px;">Изминить</a>
                          </div>
                          <div id="Delete" style="display:inline-block; margin-left:5%; font-size:16px;">
                                <a id="delete" href="#" style="color:red">Удалить</a>
                          </div>
                          <div id="Word" style="display:inline-block; font-size:16px; width:25%; margin-left:7%;">
                              <a style="color:grey; font-style:italic;  text-decoration:none; display:inline-block; "> Отметить все:</a>
                                <input type="checkbox" name="mainchbox" value="" style="display:inline-block; width:10%; ">


                          </div>

                    </div>
              </div>

          </div>



      </div>


    </div>


  </div>


  </body>

</html>
