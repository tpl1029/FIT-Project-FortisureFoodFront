<!-- Header and Navbar -->
<?php
    include './View/header.php';
    include './View/navbar.php';
?>
<!-- Header and Navbar -->

        <!-- Welcome -->
            <div class="welcome-grid">

                <p class="welcome-text">
                    Welcome to Fortisure Food Front! For over fifty years, <br>
                    Fortisure Food Front has been delivering quality goods <br>
                    to the midwest area. On this site, you can place online <br>
                    orders, sign up for our rewards program, and view <br>
                    information about each of our stores.
                </p>

                <img src="./View/Public/Images/store.jpg" class="welcome-image" >

            </div>


        <!-- Welcome -->

        <!-- Products -->
            <div class="trending-container-grid">
             <h1> Best Sellers: </h1>
            
             <?php 
                    //creating array for the coupon loop
                    $bestSellers = array (

                        array("milk", "Whole Milk", "See Price"),

                        array("bread", "Italian Bread", "See Price"),

                        array("carrots", "Bag of Carrots", "See Price")                       
                    );

                    include './Controller/product-cards.php';          
                ?>
                <div class="deal-card">
                    <p class="deal-header"> Deal of the Week</p>
                    <img src="./View/Public/Images/ground-beef.jpeg">
                    <p class="deal-details">Enjoy a 15% discount off of all Ground Beef.</p>
                </div>

            </div>
        <!-- Products -->



<!-- Footer -->
<?php
    include './View/footer.php';
?>
<!-- Footer -->

    </div>
</body>
    
</html>