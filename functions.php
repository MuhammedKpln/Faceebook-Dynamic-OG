<?php
require_once("db.php"); 

function getOyunIsim($pid) {
  global $db;
  
  $al = $db-> prepare("SELECT * FROM oyuncular ORDER BY RAND() LIMIT 1");
  $al -> execute();
  $row = $al -> fetch(PDO::FETCH_ASSOC);
  
  echo $row[$pid];
  return true;
}
function getOyunResim($pid) {
  global $db;
  
  $al = $db-> prepare("SELECT * FROM oyuncular ORDER BY RAND() LIMIT 1");
  $al -> execute();
  $row = $al -> fetch(PDO::FETCH_ASSOC);
  
  echo $row[$pid];
  return true;
}