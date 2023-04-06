<?php
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    $email_in_mysql = "SELECT * FROM `users` where `email`='$email'";
    $duplication = mysqli_query($connection, $email_in_mysql);

    if(mysqli_num_rows($duplication) > 0){
        $user_already_existed = "Email already existed";
    }else{

        $insert_stat = "INSERT INTO `users`( `name`, `email`, `username`, `phone`, `password`) VALUES ('$name','$email','$username','$phone ','$password') ";
        $register_query  = mysqli_query($connection, $insert_stat) or die ('ERROR in regf'.mysqli_error());
        if(!$register_query){
            die ('ERROR in register'.mysqli_error());
        }else{
            $register_message = "Register successfully";
        }
    }




}
if(isset($_POST['submit_login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $select_admin = "SELECT * from `users` WHERE `email`='$email' AND `password`= '$password'";
    $select_result= mysqli_query($connection,$select_admin);
    
    if($select_result){
        while($row = mysqli_fetch_array($select_result)){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['phone'] = $row['phone'];
        }
        $count = mysqli_num_rows($select_result);
        if($count == 1){
            header('location: index.php');
        }else{
            $login_failed = "That's doesn't met ourt creditials";
        }
    }else{
        echo "Something happen in sql statement";
    }

}