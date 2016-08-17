<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 4:10 PM
 */

require_once "connect.php";
//$staffID="Lily234567";

$staffID=$_POST['staffID'];

$staffIDSql="SELECT name, confirmed FROM Staff where staffID='$staffID'";
$result=$connection->query($staffIDSql);
if ($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $confirmed = $row['confirmed'];
    $name=$row['name'];
    if ($confirmed='FALSE'){
        echo $name; //needs confirmation
    }else{
        echo 2; //already confirmed
    }
}else{
    echo 0;//Doesn't exist or error
}
