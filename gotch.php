<?php
if (!defined("ACCESS")){
    exit("You don't have access to this!");
} 
require_once("db.php");
$al = $db-> prepare("SELECT * FROM {$table} ORDER BY RAND() LIMIT 15");
$al -> execute();
$row = $al -> fetch(PDO::FETCH_ASSOC);

header("Refresh:1"); 


// Burayi istediginize göre degistirin
$items = array(
"title" => $row[$title],
"image" => $base."/assets/img/". $row[$image],
"url" =>  $base,
);



