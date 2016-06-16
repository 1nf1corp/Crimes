<?php
require_once "connect.php";
$staffSql="SELECT name, staffID, role ";
$results=$connection->query($staffSql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/crimesDisplay.js"></script>
    <script src="js/admin.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRIMES</a>
        </div>
        <div class="collapse navbar-right navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Benjamin Maimbo</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <!--Approve Signed In users -->
    <button class=" btn btn-primary" id="showApproveBtn"><i class="glyphicon glyphicon-plus-sign"></i> Approve Users</button>
    <button style="display: none"  class=" btn btn-primary" id="hideApproveBtn"><i class="glyphicon glyphicon-minus-sign"></i> Approve Users</button>
    <div class="container-fluid" id="approveUsersDiv">
    </div>
    <br>

    <!--Add Counties-->
    <button class=" btn btn-primary" id="showCountiesBtn"><i class="glyphicon glyphicon-plus-sign"></i> Add Counties</button>
    <button style="display: none" class=" btn btn-primary" id="hideCountiesBtn"><i class="glyphicon glyphicon-minus-sign"></i> Add Counties</button>
    <div class="container-fluid" id="addCountiesDiv" style="display: none">
        <form class="form-horizontal" method="post" id="addCountiesForm" action="addCounty.php">
            <div class="form-group">
                <label class="col-sm-2 control-label">Enter County Name:</label>
                <div class="col-sm-2">
                    <input onkeyup="validateCounty()"  class="form-control" id="countyName" name="countyName" required placeholder="Kitui">
                </div>
                <div class="col-sm-2">
                    <button id="addCountyBtn" type="submit" class="btn btn-primary">Add County</button>
                </div>
                <div class="col-sm-4">
                    <label id="countyFeedback" class="control-label"></label>
                </div>
            </div>
        </form>
    </div>
    <br><br>


    <!--Add Districts-->
    <button class=" btn btn-primary" id="showDistrictsBtn"><i class="glyphicon glyphicon-plus-sign"></i> Add Districts</button>
    <button style="display: none" class=" btn btn-primary" id="hideDistrictBtn"><i class="glyphicon glyphicon-minus-sign"></i> Add District</button>
    <div class="container-fluid" id="addDistrictsDiv" style="display: block">
        <form class="form-horizontal" method="post" id="addDistrictForm">
            <div class="form-group">
                <label class="col-sm-2 control-label">Enter District Name:</label>
                <div class="col-sm-2">
                    <input  class="form-control" id="districtName" name="districtName" required placeholder="Ruiru">
                </div>
                <div class="col-sm-2">
                    <select id="countyName1" name="countyName1" required onkeyup="checkCounty()">
                        <option disabled selected>Select Counties</option>
                        <?php
                        require_once "connect.php";
                        $countiesSql="SELECT * FROM Counties";
                        $result = $connection->query($countiesSql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<option value=". $row['countyID'].">".$row["countyName"]."<option>";
                            }
                        } else {
                            echo "<option disabled>Please Add Counties First</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Add District</button>
                </div>
                <div class="col-sm-4">
                    <label id="county1Feedback" class="control-label"></label>
                </div>
            </div>
        </form>
    </div>
    <br><br>

    <!--Add Locations-->
    <button class=" btn btn-primary" id="showLocationsBtn"><i class="glyphicon glyphicon-plus-sign"></i> Add Locations</button>
    <button style="display: none" class=" btn btn-primary" id="hideLocationsBtn"><i class="glyphicon glyphicon-minus-sign"></i> Add Locations</button>
    <div class="container-fluid" id="addLocationsDiv" style="display: none">
        <form class="form-horizontal" method="post" id="addLocationForm">
            <div class="form-group">
                <label class="col-sm-2 control-label">Enter Location Name:</label>
                <div class="col-sm-2">
                    <input  class="form-control" id="locationName" name="locationName" required placeholder="Katoloni">
                </div>
                <div class="col-sm-2">
                    <select id="locationName" name="locationName" required>
                        <option selected disabled>Select District</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Add Location</button>
                </div>
                <div class="col-sm-4">
                    <label id="countyFeedback" class="control-label"></label>
                </div>
            </div>
        </form>
    </div>
    <br><br>

    <!--Add Counties-->
    <button class=" btn btn-primary" id="showStationsBtn"><i class="glyphicon glyphicon-plus-sign"></i> Add Stations</button>
    <button style="display: none" class=" btn btn-primary" id="hideStationsBtn"><i class="glyphicon glyphicon-minus-sign"></i> Add Stations</button>
    <div class="container-fluid" id="addStationsDiv" style="display: none">
        <form class="form-horizontal" method="post" id="addStationForm">
            <div class="form-group">
                <label class="col-sm-2 control-label">Enter Station Name:</label>
                <div class="col-sm-2">
                    <input  class="form-control" id="stationName" name="stationName" required placeholder="Juja">
                </div>
                <div class="col-sm-2">
                    <select id="locationName" name="locationName" required>
                        <option selected disabled>Select Location</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Add Station</button>
                </div>
                <div class="col-sm-4">
                    <label id="countyFeedback" class="control-label"></label>
                </div>
            </div>
        </form>
    </div>
    <br>

</div>

<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/14/16
 * Time: 1:14 PM
 */