<?php
$username = 'root';
$password = '';
$database = 'thi md2';
global $conn;
$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);