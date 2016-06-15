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
    private $crimeID;
    private $description;
    private $locationID;
    private $type;
    private $seriousness;
    private $urgency;
    private $staffID="";
    private $allocated="FALSE";
    private $confirmed="FALSE";
    private $confirmerID="";

    public function setCrime($crimeID, $description, $locationID, $type, $seriousness, $urgency){
        $this->crimeID=$crimeID;
        $this->description=$description;
        $this->locationID=$locationID;
        $this->type=$type;
        $this->seriousness=$seriousness;
        $this->urgency=$urgency;
    }

    private function storeCrime(){
        //database connection --> Sample
        $connection=connectFn();
        $insertCrimeSql="";

        if ($connection->query($insertCrimeSql) == TRUE) {
        $result= 1;
    } else {
            $result= 0;
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