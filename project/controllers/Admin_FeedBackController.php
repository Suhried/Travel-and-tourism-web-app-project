<?php 
require_once "models/db_config.php";

function getAllTravellersData()
{
	$query="SELECT * from feedback WHERE type='traveller'";
    $result = get($query);
    return $result;
}
function getAllAgenciesData()
{
	$query="SELECT * from feedback WHERE type='agency'";
    $result = get($query);
    return $result;
}

function getAllHotelData()
{
	$query="SELECT * from feedback WHERE type='hotel'";
    $result = get($query);
    return $result;
}

?>