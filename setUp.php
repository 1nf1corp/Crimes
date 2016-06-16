<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 12:15 PM
 */
//require_once "connect.php";

//create database Crimes

$serverName = "localhost";
$username = "root";
$password = "";

$connection=new mysqli($serverName, $username, $password);
if ($connection->connect_error){
    die ("Server Error. Please check username and password".$connection->connect_error);
}

$dbSql="CREATE DATABASE Crimes";
if ($connection->query($dbSql) === TRUE){
    echo "database created successfully<br>";
}else{
    echo "Database creation Error ".$connection->error;
    die();
}

$myDb="Crimes";

//create

$conn=new mysqli($serverName, $username, $password, $myDb);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$staffTableSql="CREATE TABLE Staff(
staffID VARCHAR (10) PRIMARY KEY,
name VARCHAR (50) NOT NULL,
password VARCHAR (64),
locationID VARCHAR (30) NOT NULL,
role VARCHAR (10) NOT NULL,
confirmed VARCHAR (10) DEFAULT 'FALSE'
)";
if ($conn->query($staffTableSql) === TRUE) {
    echo "Table Staff created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$crimeTableSql="CREATE TABLE Crimes(
crimeID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
reporterName VARCHAR (50) NOT NULL,
phoneNumber VARCHAR (20) NOT NULL,
locationID VARCHAR (20) NOT NULL,
desription VARCHAR (2000) NOT NULL,
urgency INT(3) NOT NULL,
seriousness INT(3) NOT NULL,
allocated INT (3),
staffID INT (20),
confirmed INT (3),
confirmerID INT (3)
)";
if ($conn->query($crimeTableSql) === TRUE) {
    echo "Table Crimes created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$countiesTableSql="CREATE TABLE Counties (
countyID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
countyName VARCHAR (20) UNIQUE NOT NULL
)";

if ($conn->query($countiesTableSql) === TRUE) {
    echo "Table Counties created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$districtsTableSql="CREATE TABLE Districts (
districtID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
districtName VARCHAR (20) NOT NULL,
countyID INT(6) NOT NULL
)";

if ($conn->query($districtsTableSql) === TRUE) {
    echo "Table Districts created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$locationsTableSql="CREATE TABLE Locations (
locationID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
locationName VARCHAR (20) NOT NULL,
districtID INT (6) NOT NULL
)";

if ($conn->query($locationsTableSql) === TRUE) {
    echo "Table Locations created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$stationsTableSql="CREATE TABLE Stations (
stationID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
stationName VARCHAR (20) NOT NULL,
locationID VARCHAR (20) NOT NULL
)";

if ($conn->query($stationsTableSql) === TRUE) {
    echo "Table Stations created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();