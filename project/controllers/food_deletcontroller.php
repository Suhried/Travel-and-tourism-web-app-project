<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteFoodPackage($id){
      $query="DELETE FROM meal WHERE sl=$id;";
     execute($query);
   }
 deleteFoodPackage($id);

 header("Location: ../meal.php");

?>