<?php
    class Eater
    {
        public function __construct($db)
        {
            $this->conn = $db;
        }

        public function addEater($data)
        {
            //vars
                $usersName = $data["usersName"];
                $slicesAted = $data["slicesAted"];
                $comments = $data["comments"];
            //vars

            $query = "INSERT INTO pizzatable
                      (name, slices_eaten, comments)
            VALUES    ('$usersName','$slicesAted','$comments');
                      ";

            //prepares query statement
            $results = $this->conn->prepare($query);

            //executes statement
            $results->execute();

        }

    }

?>