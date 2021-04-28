<?php 
require_once "models/db_config.php";

function getAllTravellersAcc()
{
	$query="SELECT sl,name,email,type,status from profile WHERE type='traveller'";
    $result = get($query);
    return $result;
}

function getAllAgenciesAcc()
{
	$query="SELECT sl,name,email,type,status from profile WHERE type='agency'";
    $result = get($query);
    return $result;
}

function getAllHotelsAcc()
{
	$query="SELECT sl,name,email,type,status from profile WHERE type='hotel'";
    $result = get($query);
    return $result;
}

?>
