<?php
    include './db_conn.php';
    include '../Model/query-appointments.php';
    //get data

    $sanatizedPOST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    // $CallID = trim(htmlentities($sanatizedPOST['CallID']));
    $CustomerID = trim(htmlentities($sanatizedPOST['CustomerID']));
    $ServiceID = trim(htmlentities($sanatizedPOST['ServiceID']));
    $EmployeeID = trim(htmlentities($sanatizedPOST['EmployeeID']));
    // $Time = trim(htmlentities($sanatizedPOST['Time'])); //MAYBE NEED TO ADD THOSE TOGETHER OR SOMETING I DONT KNOW, ID:10T    
    // $Date = trim(htmlentities($sanatizedPOST['Date']));
    $DateTime = trim(htmlentities($sanatizedPOST['DateTime']));
    $appointmentData = 
    [      
        // "CallID" => $CallID,
        "CustomerID" => $CustomerID,
        "ServiceID" => $ServiceID,
        "EmployeeID" => $EmployeeID,
        "Time"=> $DateTime
    ];
    $database = new Database();
    $db = $database->connect();

    $app = new appointment($db);
    $app->addApointments($appointmentData);

    //no matter what
    $appGet = $app->prodRead();
   

    // below I want to update the table
    ?>
    <table>
    <tr>
      <th>Appointment</th>
      <th>FirstName</th>
      <th>LastName</th>
      <th>Service</th>
      <th>Employee</th>
      <th>Time</th>
    </tr>

    <?php  
        while($row = $appGet->fetch(PDO::FETCH_ASSOC))
        {
          echo"
            <tr>
              <td>{$row['CallID']}</td>
              <td>{$row['pcf']}</td>
              <td>{$row['pcl']}</td>
              <td>{$row['ServiceName']}</td>
              <td>{$row['pef']}</td>
              <td>{$row['Time']}</td>
            </tr>
          ";
      }
  ?>
  </table>
   <!-- above I want to update the table -->
 