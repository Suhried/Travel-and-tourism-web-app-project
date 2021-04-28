<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteTravellersRequest($id){
      $query="DELETE FROM requestatour WHERE sl=$id;";
     execute($query);
   }
 deleteTravellersRequest($id);

 header("Location: ../clientrequest.php");

?>