<?php
if(isset($_POST["submit"])){
    require("connect.php");

    $sql = "INSERT INTO `orders`(`name`, `customer`, `contact`, `deadline`, `price`)
VALUES ('".$_POST["ordername"]."','".$_POST["ordercustomer"]."','".$_POST["ordercustomercontact"]."','".$_POST["orderdeadline"]."','".$_POST["orderprice"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New order added successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>