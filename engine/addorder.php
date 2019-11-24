<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!empty($_POST)){
    require("connect.php");

    $name = $_POST["ordername"];
    $customer = $_POST["ordercustomer"];
    $contact = $_POST["ordercustomercontact"];
    $deadline = $_POST["orderdeadline"];
    $price = $_POST["orderprice"];

    $sql = "INSERT INTO `orders`(`name`, `customer`, `contact`, `deadline`, `price`) VALUES ('$name','$customer','$contact','$deadline','$price')";
    
    $result = $mysqli->query($sql);

    if ($result == true){
        echo "Order added succesful";
    }else{
        echo "Error";
    }
    
    $mysqli->close();
}
?>