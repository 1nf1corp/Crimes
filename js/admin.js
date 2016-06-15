/**
 * Created by pta on 6/14/16.
 */

$(document).ready(function () {
    //("#")
});

function addCounty (){
    var countyName=document.forms["addCountiesForm"]['countyName'].value.trim();
    if (countyName.length < 3){
        document.getElementById('countyFeedback').innerHTML="Enter A valid County Name";
    }else{
        document.getElementById('countyFeedback').innerHTML="";
    }
    return false;
}