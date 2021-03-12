<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_TABLE = "Student";
$DB_NAME = "stacksr_db";

// First check if the database exist or not
// First set DB_CONN without DB name
$DB_CONN = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS);

if (!$DB_CONN)
{
        die("Unable to Create Connection");
}

$SQL = "CREATE DATABASE IF NOT EXISTS $DB_NAME;";

if (!mysqli_query($DB_CONN, $SQL))
{
    die("Unable to Connect to database..!");
}

// Once, database creation is done, again create DB_CONN with DB name
$DB_CONN = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// Now create a table if it doesn't exist
if (!$DB_CONN)
{
        die("Unable to Create Connection to database");
}

$SQL = "CREATE TABLE IF NOT EXISTS Student(
       id INT AUTO_INCREMENT PRIMARY KEY,
       fname VARCHAR(30) NOT NULL,
       lname VARCHAR(30) NOT NULL,
       fatherName VARCHAR(50),
       dob date,
       code INT UNIQUE  NOT NULL,
       image VARCHAR(50),
       countryId INT,
       stateId INT,
       phone VARCHAR(15),
       gender VARCHAR(2),
       registerDate date NOT NULL,
       createDate date NOT NULL DEFAULT CURDATE(),
       modifyDate date NOT NULL DEFAULT CURDATE());";

if (!mysqli_query($DB_CONN, $SQL))
{
    echo "Error Creating table..!";
}
?>
