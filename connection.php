<?php
$conn = mysqli_connect("localhost","root","","classifieds");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>