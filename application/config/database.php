<?php
$dbserver='localhost';
$dbuser='root';
$dbname='bodima1';
$dbpass='';

$connection =mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

if(mysqli_connect_error($connection)){
    die.mysqli_connect_errno();
}
?>