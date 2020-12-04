    <!-- header -->
    <?php
        include "./View/header.php"
    ?>
    <!-- header -->

    <!--Navigation Bar-->
    <?php
        include "./View/navbar.php"
    ?>
    <!--Navigation Bar-->
    
    <div class="mission-statement-grid"><!-- Mission statement -->
    <h1>Haircuts and services<br> at a reasonable price <br>
        with great customer service</h1>
    </div>

    <div style="margin: 0px;" class="navigation"><!-- Navigation section -->
        <center>
            <!-- eww this is gross why was it typed this way  -->
        <a href="services.php"><div class="nav-left">
            <img src="./View/Public/Images/Cuts-Hair-Images/services.jpg" alt="services">
            <p> Services </p>
        </div></a>
        </center>
        <center>
        <a href="employees.php"><div class="nav-middle">
        <img src="./View/Public/Images/Cuts-Hair-Images/stylist.jpg" alt="employees">
            <p> Employees </p>
        </div></a>
        </center>
        <center>
         <a href="appointments.php"><div class="nav-right"> 
           <img src="./View/Public/Images/Cuts-Hair-Images/clock.png" alt="Appointments">
            <p> Appointments </p>
        </center>
        </div></a>
    </div>

    <?php
        include "./View/footer.php"
    ?>
</body>
</html> 