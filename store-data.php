<?php
    $con = mysqli_connect('localhost','root','');

    if(!$con){
        echo 'Can not connect to the server!';
    }

    if(!mysqli_select_db($con, 'userdata')){
        echo 'Can not connect to the database!';
    }
    // fetching input data
    $aPerson = $_POST['person'];
    $aNumber = $_POST['number'];
    $aType = $_POST['vehicleType'];
    $aModel = $_POST['vehicleModel'];
    $aYear = $_POST['vehicleYear'];
    $aVin = $_POST['vehicleVin'];
    $aOdo = $_POST['vehicleOdo'];
    $aDate = date("Y/m/d");
    $aDescription = $_POST['description'];
    // inserting data
    $sql = "INSERT INTO info (Name,Number,Cartype,Carmodel,modelYear,Vinnumber,Odometer,Date,Description) VALUES ('$aPerson','$aNumber','$aType','$aModel','$aYear','$aVin','$aOdo','$aDate','$aDescription')";

    if(!mysqli_query($con,$sql)){
        echo 'Not inserted!';
    } else {
        echo '<h1> Data inserted successfully! </h1>';
        echo "<meta http-equiv=Refresh content=3;url=user.html>";
    }
?>