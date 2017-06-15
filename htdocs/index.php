<?php
require_once "../dbConnect.php";
require_once "../mySQL.php";

//$db = fConnectToDatabase($DB_PERMISSION_READ);
echo '<<!DOCTYPE html>
<html>
<head><title></title>
<body>
<H3>Hello World!</H3>
';
//fDvdInsertToDatabase('B01N4N8VYE', 'Resident Evil: The Final Chapther', 14.99);
//fDvdInsertToDatabase('B00AVILCGW', 'Resident Evil', 12.99);
//fDvdActorInsertToDatabase('Milla','Jovoich');
//fDvdActorInsertToDatabase('Ali', 'Larter');
//fDvdActorInsertToDatabase('Bob', 'Hoskins');
//fDvdActorInsertToDatabase('Annabel','Jankel');

$dvdlist = fDvdListFromDatabase();
echo "List of DVDs:<br>";
print_r($dvdlist);
$actors = fDvdActorListFromDatabase();
echo "<br>List of Actors:<br>";
print_r($actors);
