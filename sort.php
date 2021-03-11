<?php
    require 'connection.php';
    if($_GET["sort"]=="NameAsc")
    {
        $sql = "SELECT * FROM `ads` ORDER BY `ads`.`name` ASC";
    }else if($_GET["sort"]=="NameDsc")
    {
        $sql = "SELECT * FROM `ads` ORDER BY `ads`.`name` DESC";
    }else if($_GET["sort"]=="PriceAsc")
    {
        $sql =   "SELECT * FROM `ads` ORDER BY `ads`.`price` ASC";
    }else if($_GET["sort"]=="priceDesc")
    {
      $sql =   "SELECT * FROM `ads` ORDER BY `ads`.`price` DESC";
    }
    $result = mysqli_query($conn,$sql);
    echo "
    <table >
    <caption>All Ads Below</caption>
    <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Product Name</th>
    <th>Product Info</th>
    <th>Price</th>
    <th>Brand</th>
    <th>Type</th>
    </tr>";
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['product_id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['fulladdress'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['productinfo'] . "</td>";
        echo "<td>" . $row['productname'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "0 results";
    }
    echo "</table>";
?>