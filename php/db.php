<?php
try{
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=127.0.0.1;dbname=social', $user, $pass);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
    print_r($ex);
    die();
}
?>
