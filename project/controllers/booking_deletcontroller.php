<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function deleteBookingInfo($id){
      $query="DELETE FROM masterbooking WHERE sl=$id;";
     execute($query);
   }
 deleteBookingInfo($id);

 header("Location: ../bookinginfo.php");

?>