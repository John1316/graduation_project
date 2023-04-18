<?php

if(isset($_GET['id'])){
    $sql_select = "SELECT * FROM `products` where `id`=".$_GET['id']." ";
    $select_query= mysqli_query($connection,$sql_select) or die('ERROR in details'.mysqli_error());
    if(!$select_query){
        die('ERROR in details'.mysqli_error());
    }else{
        $result_details = mysqli_fetch_array($select_query);
    }

}
if(isset($_POST['submit_reservation'])){
    $visa = md5($_POST['visa']);

    $reserve_product = "INSERT INTO `reservation`( `user_id`, `product_id`, `status`, `visa`) VALUES (".$_SESSION['user_id'].",".$_GET['id'].",'pending','$visa')";

    $reserve_query = mysqli_query($connection,$reserve_product) or die('ERROR in reserve'.mysqli_error());
    if(!$reserve_query){
        die('ERROR in reserve'.mysqli_error());
    }else{
        $success_reserve= "Your product reserved successfully";
    }

}