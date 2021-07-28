
<?php
    $dns ="mysql:host=localhost;dbname='test';
    $user = 'root';
    $pass ="";
    PDO ;; mysql_ATTR_INIT_COMMAND => "SET NAMES utf8";


try

{

$db = new PDO ($DSN,$USER,$PASS);

$db-> setAttribute(PDO;;ATTR_ERRMODE, PDO;;ERRMODE_EXCEPTION);}

echo"done"

catch (PDOE CEPTION $e){

echo"error_log" . se->getLine();

}