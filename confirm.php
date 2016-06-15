<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 4:32 PM
 */
session_start();
include_once ('connect.php');
$idArray = $_POST['checked_id'];
foreach ($idArray as $id){
    mysqli_query($connection, "DELETE FROM students WHERE studentID=".$id);
}
$_SESSION['success_message']='Users have been deleted succesfully';
header("Location:index.php");