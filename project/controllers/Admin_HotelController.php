<?php 
require_once "models/db_config.php";

function getAllInfo()
{
    $query="SELECT * from profile WHERE type='hotel'";
    $result = get($query);
    return $result;

}

function getAllHotelBookInfo()
{
	$query="SELECT * from t_activity WHERE service='hotel' AND status='pending';";
    $result = get($query);
    return $result;
}



?>