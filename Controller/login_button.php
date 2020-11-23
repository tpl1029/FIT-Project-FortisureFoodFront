<?php
if (isset($_SESSION['user_password']) ){
    echo"
    <script>
    function login() {

        var x = document.getElementById('Logout');
      if (x.style.display === 'none') {
        x.style.display = 'block';
      }

      function logout() {

        var x = document.getElementById('Login');
      if (x.style.display === 'visible') {
        x.style.display = 'none';
      }

     login();
     logout();
      </script>";
} else{
    echo"

    <script>
    function logout() {

        var x = document.getElementById('Login');
      if (x.style.display === 'visible') {
        x.style.display = 'visible';
      }
    }

     logout();
    
    </script>
    ";
}

?>