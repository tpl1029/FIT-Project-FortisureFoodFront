<?php

//check that post items are set
if(isset($_POST['firstname']))

{

    //display alert to thank customer
    echo "
    
        <script>
        
          alert('Thank you {$_POST['firstname']} for signing up!.' +
                'You will receive a confirmation email shortly!');

        </script>   

        ";


        //database interaction


        //finally we clear out data in post
        unset($_POST['firstname']);
        unset($_POST['lastname']);
        unset($_POST['address']);
        unset($_POST['city']);
        unset($_POST['state']);
        unset($_POST['zip']);
        unset($_POST['phone']);
        unset($_POST['email']);
        unset($_POST['level_1']);
        unset($_POST['level_2']);
        unset($_POST['level_3']);
        unset($_POST['comments']);

}



?>