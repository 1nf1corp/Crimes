/**
 * Created by pta on 6/14/16.
 */

$(document).ready(function () {
    //("#")
});
function validateCounty(){
    var countyName=document.forms["addCountiesForm"]['countyName'].value.trim();
    if (countyName.length < 3){
        document.getElementById('countyFeedback').innerHTML="Enter A valid County Name";
        document.getElementById("addCountyBtn").disabled = true;
    }else{
        document.getElementById('countyFeedback').innerHTML="<i class='glyphicon glyphicon-ok'></i>";
        document.getElementById("addCountyBtn").disabled = false;
    }

}

function  checkCounty(){
    var district=document.forms["addDistrictForm"]['districtName'].value.trim();
    if (district.length <3){
        document.getElementById('county1Feedback').innerHTML="Enter valid district Name";
    }else{
        document.getElementById('county1Feedback').innerHTML="<i class='glyphicon glyphicon-ok'></i>";
    }
}

function approveUser(){
    var staffID=document.forms["approveUserForm"]['staffID_1'].value.trim();

    if (staffID.length>2){
        $("#approveStaffIDLabel").show();
        var data = {staffID: staffID};
        var url="approve.php";

        $.post(url, data, function(response){
            if (response==2){
                document.getElementById('approveStaffIDLabel').innerHTML="Staff Already Approved";
                document.getElementById("approveUserBtn").disabled = false;
            }else if (response==0){
                document.getElementById('approveStaffIDLabel').innerHTML="Invalid Staff ID";
                document.getElementById("approveUserBtn").disabled = false;
            }else{
                document.getElementById('approveStaffIDLabel').innerHTML=response;
                document.getElementById("approveUserBtn").disabled = false;
            }
        });


    }else{
        document.getElementById("approveUserBtn").disabled = false;
        $("#approveStaffIDLabel").hide();
    }
    return false;
}