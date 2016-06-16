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
    var countyName=document.forms["addDistrictForm"]['countyName1'].value.trim();
    document.getElementById('county1Feedback').innerHTML=countyName;
}