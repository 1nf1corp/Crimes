<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 11:16 AM
 */
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "Crimes";

    $connection=new mysqli($serverName, $username, $password, $dbName);

    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }