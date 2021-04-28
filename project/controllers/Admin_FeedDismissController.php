
<?php
require_once '../models/db_config.php';

$id=$_GET["id"];
   function dismissFeedBack($id){
      $query="DELETE FROM feedback WHERE sl=$id;";
     execute($query);
   }
 dismissFeedBack($id);

 header("Location: ../Admin_FeedCtrl_Travellers.php");

?>