<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteClientInfo($id){
      $query="DELETE FROM t_activity WHERE sl=$id;";
     execute($query);
   }
 deleteClientInfo($id);

 header("Location: ../dashboard.php");

?>