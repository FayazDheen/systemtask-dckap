<?php
require 'connection.php';

$name = $_POST["name"];
$fullAddress = $_POST["fulladdress"];
$phone = $_POST["phone"];
$productInfo = $_POST["productinfo"];
$productName = $_POST["productname"];
$price = $_POST["price"];
$brand = $_POST["brand"];

if($_POST["type"]==0)
{
  $type = "New";
}else if($_POST["type"]==1)
{
    $type = "Used";
}

$sql = "INSERT INTO ads (name,fulladdress,phone,productinfo,productname,price,brand,type) 
        VALUES ('$name','$fullAddress','$phone','$productInfo','$productName','$price','$brand','$type')";

if(!mysqli_query($conn,$sql))
{
    echo "Data Not inserted";
    echo mysqli_error($conn);
}else{
     echo '<script type="text/javascript">'; 
     echo 'alert("Posted Successfully!");'; 
     echo 'window.location= "index.php";';
     echo '</script>';       
}
?>

