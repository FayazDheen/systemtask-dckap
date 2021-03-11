<link rel="stylesheet" href="css/style.css">
<?php
    require 'connection.php';
    $sql = "SELECT * FROM `ads`";
    $result = mysqli_query($conn,$sql);
    
?>
<h1><b>Create a Post</b></h1>
<div class="container">
  
  <!-- Form Fields -->
  <form action="addpost.php" method="post"> 

    <label >Name</label>
    <input type="text" for = "name"  name="name" placeholder="Seller Name" id="_name">

    <label >Address</label>
    <input type="text" for = "fulladdress" name="fulladdress"  placeholder="Full Address">

    <label >Phone</label>
    <input type="text" for = "phone" name="phone"  placeholder="Phone Number">
    
    <label >Product Name</label>
    <input type="text" for ="productname"name="productname" placeholder="Product Name">
    
    <label >Product Info</label>
    <textarea id="subject" for = "productinfo" name="productinfo" placeholder="Write something.." style="height:200px"></textarea>
    
    <label >Price</label>
    <input type="text" for="price" name="price"  placeholder="Product Price">

    <label >Brand</label>
    <input type="text" for = "brand" name="brand"  placeholder="Brand">

    <label for="type">Type</label>
    <select id="type" name="type">
      <option value="0">New</option>
      <option value="1">Used</option> 
    </select>

    <input type="submit" value="Submit">
   
  </form>
</div>
