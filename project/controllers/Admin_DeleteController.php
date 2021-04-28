
<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteClientInfo($id){
      $query="DELETE FROM profile WHERE sl=$id;";
     execute($query);
   }
 deleteClientInfo($id);

 header("Location: ../Admin_ClientsCtrl.php");

?>