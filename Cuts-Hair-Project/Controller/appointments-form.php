<link rel="stylesheet" href = "./View/Public/CSS/form-grid.css">
<div class="form-div">
    <div class="form-left">
            <!-- tip and service selection -->
            <!-- <input name="tip" id="tip" type="number" placeholder="Make a tip!" class="form-boxs" min=0> min of 0 becuase we dont wanna pay nobody to use our business  -->
                <select name="service" id="service" required class="form-boxs">
                    <option value="" disabled selected>Select Service</option>
                    <option value="9">Men's Haircut</option>
                    <option value="10">Women's Haircut</option>
                    <option value="11">Child Haircut</option>
                    <option value="12">Hair Color</option>
                    <option value="13">Hair Wash and dry</option>
                    <option value="14">Hair Styling</option>
                    <option value="15">Perms</option>
                    <option value="16">Facial Hair</option>
                </select>
            <!-- name and service selection -->
            <br>
            <!-- employees -->
                <select name="employee" id="employee" required class="form-boxs">
                    <option value="" disabled selected>Select Employee</option>
                    <option value="1">Joy Aveda</option>
                    <option value="2">Alanah Dickson</option>
                    <option value="3">Salim Rahman</option>
                    <option value="4">Shannen Bassett</option>
                    <option value="5">Hakim Goulding</option>
                    <option value="6">Kush Silva</option>
                </select>
            <!-- employees -->
    </div>

    <div class="form-center">
        <!-- contains day and time as well as submit button -->
        <input type="time" id="AppTime" name="AppTime" min="09:00" max="18:00" required class="form-boxs">
        <br>
        <!-- the blow line has a php tag inside the min, its goal is to set the min to today (it do be working as of 9:30 tuesday)  -->
        <input type="date" id="AppDate" name="AppDate" min=
            <?php
                echo date('Y-m-d');
            ?>
        required class="form-boxs">
        <br>
        <!-- <button class ="form-button">Reset</button>
        The above button should just reset the fields 
        <button class="open-button" class ="form-button">Make an Appointment</button> -->
        

        <!-- "Login" popup form -->
    </div>

    <div class="form-right">
    <!-- <h1 style="border-bottom: solid gray;">Cost Of Service</h1><br>
    <h2>Service Cost: $0</h2><br> I dont see this as useful anymore becuase the database is not setup to include tips etc.-->
        <div class="form-boxs" style="height=80%">
            <h1>Customer ID</h1>

            <label for="customer"><b>Enter ID:</b></label>
            <input type="number" id="customer" name="customer" placeholder="1" required>
            <!-- have to make a check to find if this firstname matches 1 in the database, and match it with a customerID -->
            <button type="submit" class="btnLogin" onclick=" //below stuffis whats on click
            newAppointment(document.getElementById('customer').value,document.getElementById('service').value,document.getElementById('employee').value,document.getElementById('AppTime').value,document.getElementById('AppDate').value)">Login</button>
    </div>
    </div>
</div>


