<?php
    include './db_conn.php';
    include "./View/appointment-table.php";
    //get data

    $sanatizedPOST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    $AppointmentID = trim(htmlentities($sanatizedPOST['AppointmentID']));
    $CustomerID = trim(htmlentities($sanatizedPOST['CustomerID']));
    $ServiceID = trim(htmlentities($sanatizedPOST['ServiceID']));
    $EmployeeID = trim(htmlentities($sanatizedPOST['EmployeeID']));
    $Time = trim(htmlentities($sanatizedPOST['Time'])); //MAYBE NEED TO ADD THOSE TOGETHER OR SOMETING I DONT KNOW, ID:10T    
   
    $appointmentData = 
    [
        "AppointmentID" => $ID,
        "CustomerID" => $CustomerID,
        "ServiceID" => $ServiceID,
        "EmployeeID" => $EmployeeID,
        "Time"=> $Date+$Time
    ];
    $database = new Database();
    $db = $database->connect();

    $app = new appointments($db);
    $app->addApointments($appointmentData); //may not be the right variable/function if it does exist

    $app = new appointments($db);
    $appGet = $app->prodRead();


?>