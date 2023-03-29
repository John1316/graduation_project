<?php

if(isset($_POST['add_category'])){
    $name = $_POST['name'];

    $insert_category = "INSERT INTO `category` (`name`) Values ('$name') ";
    $category_query = mysqli_query($connection, $insert_category) or die('Error in insert'.mysqli_error());

    if(!$category_query){
        die('Error in insert'.mysqli_error());
    }else{
        $inserted = "You category inserted successfully";
    }

}
if(isset($_POST['delete_category'])){
    $id = $_POST['c_id'];

    $delete_category="DELETE FROM `category` WHERE `id`='$id'";

    $delete_query =mysqli_query($connection, $delete_category) or die('Error in delete'.mysqli_error());
    if(!$delete_query){
        die('Error in delete'.mysqli_error());
    }else{
        $deleted = "Your category is deleted";
    }

}
if(isset($_POST['update_category'])){
    $id = $_POST['c_id'];
    $name = $_POST['name'];

    $update_category = "UPDATE `category` SET `name` ='$name' WHERE `id`='$id' ";

    $update_query =mysqli_query($connection, $update_category) or die('Error in update'.mysqli_error());
    if(!$update_query){
        die('Error in update'.mysqli_error());
    }else{
        $updated = "Your category is updated";
    }

}