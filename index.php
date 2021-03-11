
<link rel="stylesheet" href="css/style.css">
<p><b>To add a post</b> <a href="addform.php">click here</a></p>
    <a class="fixedButton" href="addform.php">
    <!-- <div class="roundedFixedBtn"><i class="fa fa-phone"></i></div> -->
 </a>
 
<?php
    require 'connection.php';

    if(isset($_GET['order']))
    {
        $order = $_GET['order'];
    }else{
        $order = 'product_id';
    }
    if(isset($_GET['sort']))
    {
        $sort = $_GET['sort'];
    }else{
        $sort = 'ASC';
    }
    
    $sql = "SELECT * FROM ads ORDER BY $order $sort ";
    echo mysqli_error($conn);
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
      // output data of each row
      echo"<table >
      <caption>All Ads Below</caption>
      <tr>
      <th><a href='?order=product_id&&sort=$sort'>S.No</th>
      <th><a href='?order=name&&sort=$sort'>Name</a></th>
      <th>Address</th>
      <th>Phone</th>
      <th>Product Name</th>
      <th>Product Info</th>
      <th>Brand</th>
      <th><a href='?order=price&&sort=$sort'>Price</th>
      <th>Type</th> 
      ";
      while($row = mysqli_fetch_assoc($result)) {
        //echo "<tr>";
       // echo "<td>" . $row['product_id'] . "</td>";
       $name = $row['name'];
       $price = $row['price'];
       echo" 
       <tr>
            <td>" . $row['product_id'] . "</td>
            <td>$name</td>
            <td>" . $row['fulladdress'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>" . $row['productname'] . "</td>
            <td>" . $row['productinfo'] . "</td>
            <td>" . $row['brand'] . "</td>
            <td>$price</td>
            <td>" . $row['type'] . "</td>
        </tr>
       ";
      }
    } else {
      echo "0 results";
    }
    echo "</table>";
    
?>

