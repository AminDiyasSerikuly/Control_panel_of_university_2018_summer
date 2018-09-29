<?php
session_start();

if(isset($_POST['action']) && !empty($_POST['action'])) {
     $action1 = ($_POST['action']);
     $selecPiece = ($_POST['table']);
     $_SESSION["setter1"] = ($_POST['action']);
     if(strlen($selecPiece) == 0){
     $_SESSION["SelectedPiece"] =  "";
   }
     elseif (strlen($selecPiece) > 0) {
     $_SESSION["SelectedPiece"] =  $selecPiece;

     }
}


 ?>
