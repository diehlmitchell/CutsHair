<?php
    include "./View/appointments-header.php";
    include "./View/appointments-navbar.php";
    include "./Controller/db_conn.php";
    include "./Model/query-appointments.php";
    
    $database = new Database();
    $db = $database->connect();
    
    $app = new appointments($db);
    $appGet = $app->prodRead();

?>

<div class="mission-statement-grid"><!-- Mission statement -->
    <h1 style="font-size: 45px;">Make an appointment up to a week in advance</h1>
</div>

<!-- Table for middle page -->
    <?php

        include "./View/appointment-table.php";
    ?>
<!-- Table for middle page -->


<!-- Form code -->
    <?php
        include "./Controller/appointments-form.php";
    ?>
<!-- Form code -->

<?php
    include "./View/footer.php";
?>

<!--
note to me for tuesday: don't forget to call your bank silly :)
also your goal is to add database functionality first and foremost because you will not be able to do those things later on,
and do things such as cookie clicker at home because you can do them without connecting to the server 
-->

</body>
</html> 


