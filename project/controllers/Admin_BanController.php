<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteHotelInfo($id){
      $query="DELETE FROM profile WHERE sl=$id;";
     execute($query);
   }
  deleteClientInfo($id);

 header("Location: ../Admin_HotelDetails.php");

?>