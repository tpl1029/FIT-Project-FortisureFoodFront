<?php
    // Header and Navbar
    include './View/header.php';
    include './View/navbar.php';
    // Header and Navbar
?>
        
        <!-- Rewards Details -->
            <div class="info-grid">
                <div class="info-header">
                    <h1> Join Our Rewards Program Today! </h1>
                    <p class="info-bronze"> Our Bronze level is $10 a month and entitles the card holder to 5% off of all purchases.</p>
                    <img src="./View/Public/Images/bronze-card.jpg" class="card-bronze">
                    <p class="info-silver"> Our Silver level is $20 a month and entitles the card holder to 10% off of all purchases and a chance to win free groceries for a year.</p>
                    <img src="./View/Public/Images/silver-card.jpg" class="card-silver">
                    <p class="info-gold"> Our Gold level is $30 a month and entitles the card holder to 15% off of all purchases, a chance to win free groceries for a year, and free home delivery.</p>
                    <img src="./View/Public/Images/gold-card.jpg" class="card-gold">
                </div>

            </div>
        <!-- Rewards Details -->

        <!-- Form -->
            <div class="form-grid">
                <h1 class="form-message"> Sign Up Below</h1>
                <form class="form-content" action=""  >
                    <label>First Name:</label><br>
                    <input type="text" class="form-control" placeholder="John">
                    <label>Last Name:</label><br>
                    <input type="text" class="form-control" placeholder="Smith">
                    <label>Address:</label><br>
                    <input type="text" class="form-control" placeholder="123 Generic St.">
                    <label>City:</label><br>
                    <input type="text" class="form-control">
                    <label>State:</label><br>
                    <!-- <div class="custom-select"> -->
                    <select class="form-control">
                        <option> Ohio </option>
                        <option> Pennsylvania </option>
                        <option> Michigan </option>
                        <option> Kentucky </option>
                        <option> Indiana </option>
                    </select> <br>
                    <!-- </div> -->
                    <label>Zip:</label><br>
                    <input type="text" class="form-control"> <!--Bootstrap form-control class--> 
                    <label>Phone:</label><br>
                    <input type="tel" class="form-control">
                    <label>Email:</label><br>
                    <input type="email" class="form-control" placeholder="example@email.com"> <br>
                    <label> Please Select  A Program Level:</label> <br>
                    <label>Bronze</label>
                    <input type="radio" name="level" value="Bronze">
                    <label>Silver</label>
                    <input type="radio" name="level" value="Silver">
                    <label>Gold</label>
                    <input type="radio" name="level" value="Gold"> <br> <br>
                    <label>Additional Comments</label><br>
                    <textarea type="textarea" class="form-control" placeholder="Type Here"></textarea>
                    <br>
                    <input type="submit" class=" btn-contact-us btn btn-primary" data-toggle="tooltip" data-placement="right" 
                    title="Submit the Form" value="Submit"> <!--Bootstrap btn class and Bootstrap tool tip--> 
                </form>

            </div>
        <!-- Form -->

<!-- Footer -->
        <?php

include './View/footer.php';

?>
<!-- Footer -->


    </div>
</body>
    
</html>