<?php
class appointments {

  public function __construct($db){
    $this->conn = $db;
  }

  function prodRead(){
    // selects all products from db
    $query = "SELECT CallID, `people.customers`.FirstName, `people.customers`.LastName, `productsandservices.services`.ServiceName, `people.employees`.FirstName, Time
    FROM `productsandservices.calledin`
    INNER JOIN `people.customers` ON `people.customers`.CustomerID = `productsandservices.calledin`.CustomerID
    INNER JOIN `productsandservices.services` ON `productsandservices.services`.ServiceID = `productsandservices.calledin`.ServiceID
    INNER JOIN `people.employees` ON `people.employees`.EmployeeID = `productsandservices.calledin`.EmployeeID
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