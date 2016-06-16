<?php

/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 10:38 AM
 */
class Staff
{
    private $password;
    private $staffID;
    private $fullName;
    private $stationID;
    private $role; //OCS, OCPD, Officer

    public function setStaff ($password, $staffID, $fullName, $stationID, $role){
        $this->password=$password;
        $this->staffID=$staffID;
        $this->fullName=$fullName;
        $this->stationID=$stationID;
        $this->role=$role;
    }

    public function createAccount(){
        require_once "connect.php";
        $connection=connectDB();
        $signUpSql="INSERT INTO `Staff`(`staffID`, `name`, `password`, `locationID`, `role`) VALUES ('$this->staffID','$this->fullName','$this->password','$this->stationID','$this->role')";
        if ($connection->query($signUpSql) == TRUE) {
            $result= 1;
        } else {
            $result= 0;
        }
        return $result;

    }

    public function logIn($staffID, $password1)
    {
        $data = array();
        require_once "connect.php";
        $connection = connectDB();

        $sql="SELECT staffID, name, locationID, role, confirmed FROM Staff WHERE staffID='$staffID' AND password='$password1'";

        $result = $connection->query($sql);

        if ($result == TRUE) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $data['staffID'] = $row['staffID'];
                $data['name'] = $row['name'];
                $data['locationID'] = $row['locationID'];
                $data['confirmed'] = $row['confirmed'];
            } else {
                die ("<script>alert ('Invalid Username or Password. Please Enter Details again'); window.location.assign('index.html');</script>");
            }
        } else {
            die("Server Error. Please contact administrator".$connection->error);
        }
        return $data;
    }
}