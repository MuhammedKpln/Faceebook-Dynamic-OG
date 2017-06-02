<?php
if (!defined("ACCESS")){
    exit("You don't have access to this!");
} 

$user="dbuser";
$pass="dbpass";
try {
    $db = new PDO('mysql:host=localhost;dbname=dbname', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$base = "http://icerde.mcindir.com"
?>
