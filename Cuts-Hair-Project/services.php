<?php
    include "./View/service-header.php"
?>

<?php
    include "./View/service-navbar.php";
?>
    <body>
    
        <!-- Left on the nav bar -->


    <div class="middle-page"><!-- Book a service message -->
        <div class="message">
            <h1 id="service">Book a Service</h1>
        </div>

        <div class="services-section"><!-- Services Section -->

            <center>
                <div class = "service-wrap">
                        <!-- ROW 1 -->
                    <a href="./appointments.php"><div class = "service-card">
                    <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/women-haircut.jpg');"></div>
                        <p>womans haircut</p>
                    </div></a>
                    <a href="./appointments.php"><div class = "service-card">
                    <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/man-haircut.jpg');"></div>
                        <p>mens haircut</p>
                    </div></a>
                        <!-- ROW 2 -->
                    <a href="./appointments.php"><div class = "service-card">
                        <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/child-haircut.jpg');"></div>
                        <p>Childs haircut</p>
                    </div></a>
                    <a href="./appointments.php"><div class = "service-card">
                        <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/coloring.png');"></div>
                        <p>hair coloring</p>
                    </div></a>
                        <!-- ROW 3 -->
                    <a href="./appointments.php"><div class = "service-card">
                    <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/salon-wash.jpg');"></div>
                        <p>wash and dry</p>
                    </div></a>
                    <a href="./appointments.php"><div class = "service-card">
                        <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/styling.jpg');"></div>
                        <p>Hair styling</p>
                    </div></a>
                        <!-- ROW 4 -->
                        <a href="./appointments.php"><div class = "service-card">
                        <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/perm.jpg');"></div>
                        <p>perms</p>
                    </div></a>
                    <a href="./appointments.php"><div class = "service-card">
                        <div class="frame" style="background-image: url('./View/Public/Images/Cuts-Hair-Images/beard-trim.jpg');"></div>
                        <p>facial work</p>
                    </div></a>      
                    
                    </div>
                 </div><!-- service wrap end tag -->
            </center>
        </div>
    </div>  

<?php
    include "./View/footer.php";
?>

    
    
</div>  
</body>
</html>