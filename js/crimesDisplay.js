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
    $("#showCountiesBtn").click(function (){
        $("#showCountiesBtn").hide();
        $("#hideCountiesBtn").show();
        $("#addCountiesDiv").show();
    });
    $("#hideCountiesBtn").click(function (){
        $("#showCountiesBtn").show();
        $("#hideCountiesBtn").hide();
        $("#addCountiesDiv").hide();
    });
    $("#showDistrictsBtn").click(function (){
        $("#showDistrictsBtn").hide();
        $("#hideDistrictBtn").show();
        $("#addDistrictsDiv").show();
    });
    $("#hideDistrictBtn").click(function (){
        $("#showDistrictsBtn").show();
        $("#hideDistrictBtn").hide();
        $("#addDistrictsDiv").hide();
    });

    $("#showLocationsBtn").click(function (){
        $("#showLocationsBtn").hide();
        $("#hideLocationsBtn").show();
        $("#addLocationsDiv").show();
    });
    $("#hideLocationsBtn").click(function (){
        $("#showLocationsBtn").show();
        $("#hideLocationsBtn").hide();
        $("#addLocationsDiv").hide();
    });
    $("#showStationsBtn").click(function (){
        $("#showStationsBtn").hide();
        $("#addStationsDiv").show();
        $("#hideStationsBtn").show();
    });
    $("#hideStationsBtn").click(function (){
        $("#showStationsBtn").show();
        $("#addStationsDiv").hide();
        $("#hideStationsBtn").hide();
    });
    $("#signUpBtnShow").click( function (){
        $("#signUpBtnShow").hide();
        $("#signUpBtnHide").show();
        $("#signUpForm").show();
    });
    $("#signUpBtnHide").click( function (){
        $("#signUpBtnShow").show();
        $("#signUpBtnHide").hide();
        $("#signUpForm").hide();
    });
    $("#showApproveBtn").click( function (){
        $("#showApproveBtn").hide();
        $("#hideApproveBtn").show();
        $("#approveUsersDiv").show();
    });
    $("#hideApproveBtn").click( function (){
        $("#showApproveBtn").show();
        $("#hideApproveBtn").hide();
        $("#approveUsersDiv").hide();
    });

});

