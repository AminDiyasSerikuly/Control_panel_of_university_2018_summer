<?php

session_start();



$counter =0;
$d = $_POST['idt'];
 if(isset($_POST['action']) && !empty($_POST['action'])) {
      $action1 = ($_POST['action']);

       $_SESSION["setter"] =  $action1;
       if($d == 2){
       $_SESSION["knower"] =  "red";
      }
      if($d == 4){
      $_SESSION["knower"] =  "green";
      }
      if($d == 3){
      $_SESSION["knower"] =  "brown";
      }
      if($d == 1){
      $_SESSION["knower"] =  "yellow";
      }
     // }
     //  $counter++;
  }
// }







?>
