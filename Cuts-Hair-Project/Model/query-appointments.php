<?php
class appointment {

  public function __construct($db){
    $this->conn = $db;
  }

  public function addApointments($data)
  {
      //vars
          $Customers = $data["CustomerID"];
          $ServiceID = $data["ServiceID"];
          $EmployeeID = $data["EmployeeID"];
          $Time = $data["Time"];
      //vars

      $query = "INSERT INTO `productsandservices.calledin`
                (CustomerID, ServiceID, EmployeeID,Time)
      VALUES    ('$Customers','$ServiceID','$EmployeeID','$Time');
                ";
      //prepares query statement
      $results = $this->conn->prepare($query);

      //executes statement
      $results->execute();

  }

  function prodRead()
  {
    // selects all products from db
    $query = "SELECT CallID, `people.customers`.FirstName as pcf, `people.customers`.LastName as pcl, `productsandservices.services`.ServiceName, `people.employees`.FirstName as pef, Time
    FROM `productsandservices.calledin`
    INNER JOIN `people.customers` ON `people.customers`.CustomerID = `productsandservices.calledin`.CustomerID
    INNER JOIN `productsandservices.services` ON `productsandservices.services`.ServiceID = `productsandservices.calledin`.ServiceID
    INNER JOIN `people.employees` ON `people.employees`.EmployeeID = `productsandservices.calledin`.EmployeeID
    ORDER BY TIME ASC
    ";

    // Prepares query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    // return values
    return $stmt;
  }
}
?>