<link rel="stylesheet" href = "./View/Public/CSS/form-grid.css">
<div class="form-div">
    <div class="form-left">
        <form action="" method="POST">
        <input type="text" id="name" name="name" placeholder="Name" required class="form-boxs"><br>
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
        <br>
        <!-- employee -->
        <select name="employee" id="employee" required class="form-boxs">
            <option value="" disabled selected>Select Employee</option>
            <option value="Joy Aveda">Joy Aveda</option>
            <option value="Alanah Dickson">Alanah Dickson</option>
            <option value="Salim Rahman">Salim Rahman</option>
            <option value="Shannen Bassett">Shannen Bassett</option>
            <option value="Hakim Goulding">Hakim Goulding</option>
            <option value="Kush Silva">Kush Silva</option>
        </select>
        <!-- employee -->
    </div>

    <div class="form-center">
        <!-- contains day and time as well as submit button -->
        <input type="time" id="appt" name="appt" min="09:00" max="18:00" required class="form-boxs">
        <br>
        <select name="employee" id="employee" required class="form-boxs">
            <option value="" disabled selected>Select Next Work Day</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
        <br>
        <input type="submit" value="Submit" class="form-button">
        <button class="form-button" >Reset</button>
    </div>
    </form>

    <div class="form-right">
    <h1 style="border-right: solid gray;">Cost Of service</h1><br>

    <h2>Service Cost: $0</h2><br>
    <h2>Tip: $0</h2><br>
    <h2>Total: $0</h2>

    </div>
</div>



