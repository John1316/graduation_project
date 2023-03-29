<?php

if(isset($_POST['submit_login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select_admin = "SELECT * from `admin` WHERE `email`='$email' AND `password`= '$password'";
    $select_result= mysqli_query($connection,$select_admin);
    
    if($select_result){
        while($row = mysqli_fetch_array($select_result)){
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
        }
        $count = mysqli_num_rows($select_result);
        if($count == 1){
            $_SESSION['admin'] = $email;
            header('location: dashboard.php');
        }else{
            $login_failed = 'Your not authorized';
        }
    }else{
        echo "Something happen in sql statement";
    }

}