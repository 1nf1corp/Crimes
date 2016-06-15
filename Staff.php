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
        //database connection
        $serverName = "localhost";
        $username = "";
        $password = "";
        $dbName = "";

        $connection=new mysqli($serverName, $username, $password, $dbName);
        if ($connection->connect_error){
            die ("Server Error. Please contact administrator");
        }
        //change to suit your needs
        $createSQL="INSERT INTO `Staff`(`title`, `firstName`, `middleName`, `lastName`, `email`, `role`, `username`, `securityQuestion`, `securityAnswer`, `staffID`, `password`)
VALUES ('$this->title','$this->firstName','$this->middleName','$this->lastName','$this->email','$this->role','$this->username','$this->securityQuestion','$this->securityAnswer','$this->staffID','$this->password')";

        if ($connection->query($createSQL) == TRUE) {
            $result= 1;
        } else {
            $result= 0;
        }
        return $result;

    }

    public function logIn(){
        //database connection
        $serverName = "localhost";
        $username = "";
        $password = "";
        $dbName = "";

        $connection=new mysqli($serverName, $username, $password, $dbName);
        if ($connection->connect_error){
            die ("Server Error. Please contact administrator");
        }
        $loginSql="";
        $result=$connection->query($loginSql);
        if ($result==TRUE){/*Success return staff details*/}else{/*Login Error*/}
    }
}