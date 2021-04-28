<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteClientInfo($id){
      $query="DELETE FROM agencydata WHERE sl=$id;";
     execute($query);
   }
 deleteClientInfo($id);

 header("Location: ../Admin_AgencyCtrl.php");

?>