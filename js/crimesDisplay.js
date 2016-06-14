/**
 * Created by pta on 6/14/16.
 */

$(document).ready(function () {
    $("#showReportBtn").click( function (){
       $("#showReportBtn").hide();
        $("#hideReportBtn").show();
        $("#crimeReportDiv").show();
    });
    $("#hideReportBtn").click( function (){
        $("#showReportBtn").show();
        $("#hideReportBtn").hide();
        $("#crimeReportDiv").hide();
    });
});
