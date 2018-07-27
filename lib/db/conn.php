<?php

//variable yang bernilai
$dbhost= "localhost";
$dbuser="root";
$dbpass="root123";
$dbname="mytaska";


//untuk menghubungkan variable dgn database

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

$connect = new PDO('mysql:host=localhost;dbname=mytaska', 'root', 'root123');


?>
