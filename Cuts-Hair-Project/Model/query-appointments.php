<?php
class appointments {

  public function __construct($db){
    $this->conn = $db;
  }

  function prodRead(){
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