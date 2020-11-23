<?php
class Product {

  public function __construct($db){
    $this->conn = $db;
  }

  function prodRead(){
    // selects all products from db
    $query = "SELECT * FROM `productsandservices.calledin`";

    // Prepares query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    // return values
    return $stmt;
  }
}
?>