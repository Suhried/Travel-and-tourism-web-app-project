<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteLocationInfo($id){
      $query="DELETE FROM location_info WHERE sl=$id;";
     execute($query);
   }
 deleteLocationInfo($id);

 header("Location: ../locationinfo.php");

?>