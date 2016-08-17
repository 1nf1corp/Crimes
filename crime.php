<?php

/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 10:38 AM
 */
require_once "connect.php";
class crime
{
    private $description;
    private $reporterName;
    private $phoneNumber;
    private $stationID;
    private $districtID;
    private $seriousness;
    private $urgency;
    private $attended=0; //0 is not attended, 1 is attended


    public function setCrime($reporterName, $phoneNumber, $stationID, $districtID,  $description, $urgency, $seriousness){
        $this->reporterName=$reporterName;
        $this->phoneNumber=$phoneNumber;
        $this->description=$description;
        $this->stationID=$stationID;
        $this->districtID=$districtID;
        $this->seriousness=$seriousness;
        $this->urgency=$urgency;
    }

    public function storeCrime(){
        $result=0;
        //database connection --> Sample
        $insertCrimeSql="INSERT INTO Crimes (reporterName, phoneNumber, stationID, districtID, description, urgency, seriousness, attended)
VALUES ('$this->reporterName', '$this->phoneNumber', '$this->stationID','$this->districtID',
'$this->description', '$this->urgency', '$this->seriousness', '$this->attended')";
        require_once "connect.php";
        $connection=connectDB();
        if ($connection->query($insertCrimeSql) == TRUE) {
            $result=1;
            //echo "<script>alert('Successfully Reported Crime. We are attending to it');</script>";
    } else {
            echo  $connection->error;
            die();
            //echo "<script>alert('{$connection->error}');</script>";
        }
        return $result;
    }

    public function attendToCrime($crimeID, $staffID){
        //update StaffId and attended to issued
    }
    public function confirmation ($crimeID){
        //update confirmed to true and confirmerID to staffID of confirmer
    }
}