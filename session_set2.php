<?php

session_start();



$counter =0;
 if(isset($_POST['action2']) && !empty($_POST['action2'])) {
      $action2 = ($_POST['action2']);

       // $action2 = json_decode(stripslashes($_POST['action']));
       // echo ($action);
     // $ar = array("favcolor","favcolor1","favcolor2");
     // foreach($action as $d){
     //   echo $d;
     //  $kol = $ar[$counter];

      // if(!$action){
      //    $action = [];
      //    $_SESSION["setter"] = $action;
      // }
      // else{
       $_SESSION["setter1"] =  $action2;
       $_SESSION["knower"] =  "green";
     // }
     //  $counter++;
  }
// }







?>
