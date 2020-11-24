<link rel="stylesheet" href = "./View/Public/CSS/form-grid.css">
<div class="form-div">
    <div class="form-left">
        <form action="" method="POST">
        
            <!-- tip and service selection -->
            <input name="tip" id="tip" type="number" placeholder="Make a tip!" class="form-boxs" min=0> <!-- min of 0 becuase we dont wanna pay nobody to use our business  -->
                <select name="service" id="service" required class="form-boxs">
                    <option value="" disabled selected>Select Service</option>
                    <option value="Men's Haircut">Men's Haircut</option>
                    <option value="Women's Haircut">Women's Haircut</option>
                    <option value="Child Haircut">Child Haircut</option>
                    <option value="Hair Color">Hair Color</option>
                    <option value="Hair Wash and dry">Hair Wash and dry</option>
                    <option value="Hair Styling">Hair Styling</option>
                    <option value="Perms">Perms</option>
                    <option value="Facial Hair">Facial Hair</option>
                </select>
            <!-- name and service selection -->
            <br>
            <!-- employees -->
                <select name="employee" id="employee" required class="form-boxs">
                    <option value="" disabled selected>Select Employee</option>
                    <option value="Joy Aveda">Joy Aveda</option>
                    <option value="Alanah Dickson">Alanah Dickson</option>
                    <option value="Salim Rahman">Salim Rahman</option>
                    <option value="Shannen Bassett">Shannen Bassett</option>
                    <option value="Hakim Goulding">Hakim Goulding</option>
                    <option value="Kush Silva">Kush Silva</option>
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
        <input type="submit" value="Submit" class="form-button">
        <button class="open-button" class ="form-button" onclick="openForm()">Login</button>

        <!-- "Login" popup form -->
        <div class="form-popup" id="myForm">
        <form action="" class="form-container">
            <h1>Login</h1>

            <label for="customer"><b>Who are you?</b></label>
            <input type="text" id="customer" name="customer">


            <button type="submit" class="btnLogin">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
        </div>


    </div>
    </form>

    <div class="form-right">
    <h1 style="border-bottom: solid gray;">Cost Of Service</h1><br>

    <h2>Service Cost: $0</h2><br>
    <h2>Tip: $0</h2><br>
    <h2 style="margin-bottom: 25px;">Total: $0</h2>

    </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


