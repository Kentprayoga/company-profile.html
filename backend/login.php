<?php 
    if(isset($_POST['email']) || isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email = 'kentprayoga07@gmail.com' && $password ='admin') {
            header('location: ./../dasboard.php');
        } else {
            echo 'email atau password salah';
        }
    }

?>