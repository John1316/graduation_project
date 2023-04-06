<?php

if(isset($_POST['add_product'])){
    $name= $_POST['name'];
    $price= $_POST['price'];
    $category_id= $_POST['category_id']; 
    $status= $_POST['status']; 
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );

    $insert_statement = "INSERT INTO `products`(`name`, `price`, `category_id`, `image`, `status`) VALUES ('$name','$price','$category_id','$image_name','$status')";
    $insert_query = mysqli_query($connection, $insert_statement) or die('Error in insert'.mysqli_error());
    if(!$insert_query){
        die('Error in insert'.mysqli_error());
    }else{
        $inserted = "Product Inserted successfully";
    }

}
if(isset($_POST['delete_product'])){
    $id = $_POST['p_id'];

    $delete_product_statement="DELETE FROM `products` WHERE `id`='$id'";

    $delete_query =mysqli_query($connection, $delete_product_statement) or die('Error in delete'.mysqli_error());
    if(!$delete_query){
        die('Error in delete'.mysqli_error());
    }else{
        $deleted = "Your product is deleted";
    }

}
if(isset($_POST['update_product'])){
    $id = $_POST['p_id'];
    $name= $_POST['name'];
    $price= $_POST['price'];
    $category_id= $_POST['category_id']; 
    $status= $_POST['status']; 
    $image_name = time() . '-' . $_FILES['image']['name'];
    $image_dirction = '../images/';
    $image_target = $image_dirction . basename($image_name);
    move_uploaded_file($_FILES['image']['tmp_name'] ,$image_target );
    if(!empty($_FILES['image']['name'])){
        $updated_statement = "UPDATE `products` SET `name` = '$name', `price` = '$price', `category_id`='$category_id', `image`='$image_name', `status`='$status' WHERE id = '$id' ";
    }else{
        $updated_statement = "UPDATE `products` SET `name` = '$name', `price` = '$price',`category_id`='$category_id', `status`='$status' WHERE id = '$id'" ;
    }
    $update_query = mysqli_query($connection, $updated_statement) or die('Error in update'.mysqli_error());
    if(!$update_query){
        die('Error in update'.mysqli_error());
    }else{
        $updated = "Product Updated successfully";
    }

}