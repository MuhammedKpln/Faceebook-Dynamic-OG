<?php
$user="root";
$pass="";
try {
    $db = new PDO('mysql:host=localhost;dbname=og', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$base = "http://php-denemelerim-gokdeniz91561402.codeanyapp.com/og"
?>
