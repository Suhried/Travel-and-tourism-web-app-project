<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deletePackages($id){
      $query="DELETE FROM create_package WHERE sl=$id;";
     execute($query);
   }
 deletePackages($id);

 header("Location: ../package&place.php");

?>