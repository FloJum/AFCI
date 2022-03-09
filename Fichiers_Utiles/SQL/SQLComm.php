<?php

// https://waytolearnx.com/2019/09/liste-des-commandes-mysql.html

$host = "localhost";
$user = "root";
$pass = "";
$db = "books";

$conn = mysqli_connect($host,$user,$pass,$db);
$sql = "";

$sql = "SELECT * FROM X WHERE X LIKE X AND X OR X";
$sql = "SELECT * FROM X GROUP BY X HAVING X ORDER BY X (LIMIT 2 OFFSET 1) ";

$sql = "INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...)";
$sql .= "INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...)";

$sql = "DELETE FROM table_name WHERE some_column = some_value ";

$sql = "UPDATE table_name SET column1=value, column2=value2,... WHERE some_column=some_value  ";

$sql = "CREATE DATABASE IF NOT EXISTS myDB";

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";


$sql = "";
$sql = "";
$sql = "";
$sql = "";
$sql = "";
$sql = "";
$sql = "";
$sql = "";
$sql = "";



?>