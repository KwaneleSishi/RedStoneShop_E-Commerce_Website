
<?php 
  require_once 'core/init.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Red Stone Shop</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<!-- SQL script to link catergories and display -->
<?php 
  $sql = "SELECT * FROM catergories WHERE parent = 0";
  $pquery  = $db->query($sql);

  if (!$pquery) {
      die("SQL query failed: " . $db->error);
  }
?>
 <!-- Creating the navigation bar -->
 <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <a href="/tutorial/index.php" class="navbar-brand" id="text">Red Stone Shop</a>
    <ul class="nav navbar-nav">
      <!--Call php -->
      <?php  while($parent = mysqli_fetch_assoc($pquery)) : ?>
      <?php  
      $parent_id = $parent['id'];
      $sql2 = "SELECT * FROM catergories WHERE parent = '$parent_id'";
      $cquery = $db->query($sql2);
      if (!$cquery) {
        die("SQL query failed: " . $db->error);
    }
      ?>
      <!-- Drop down Menu -->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text"><?php echo $parent['catergory']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <?php while($child = mysqli_fetch_assoc($cquery)) : ?>
          <li><a href="#"><?php echo $child['catergory']; ?></a></li>
          <?php endwhile; ?>
        </ul>
      </li>
    <?php endwhile; ?>
    </ul>
  </div>
 </nav>

 <!-- Inserting Image-->
 <div id="background-image">
   <div id="image-1"></div>

   <div id="image-2"></div>
 </div>
 <!-- Remove spaces and center products--> 
 <div class="col-md-2"></div>


  <!-- main content of features products-->
  <div class="col-md-8">
    <h2 class="text-center">Featured Products</h2>
    <div class="row">

      <div class="col-md-3 text-center">
        <h4>Levis Jeans</h4>
        <img src="images/levis.jpg" alt="levis Jeans" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 1,299.00</s></p>
        <p class="price">Our Price: R 999.00</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Addidas Football</h4>
        <img src="images/Football.jpg" alt="Addidas Football" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 24.99</s></p>
        <p class="price">Our Price: R 19.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Watch</h4>
        <img src="images/Gucci_Watch.jpg" alt="Watch" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 299.00</s></p>
        <p class="price">Our Price: R 245.00</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Polo Shirt</h4>
        <img src="images/PoloShirt.png" alt="Polo Shirt" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 599.99</s></p>
        <p class="price">Our Price: R 450.00</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Head Band</h4>
        <img src="images/HeadBand.jpg" alt="Head Band" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 50.00</s></p>
        <p class="price">Our Price: R 29.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Hoodie</h4>
        <img src="images/Hoodies.png" alt="Hoodie" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 300.00</s></p>
        <p class="price">Our Price: R 229.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Purse</h4>
        <img src="images/Purse.jpg" alt="Purse" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 200.00</s></p>
        <p class="price">Our Price: R 159.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
      </div>

      <div class="col-md-3 text-center">
        <h4>Joggers</h4>
        <img src="images/Joggers.jpg" alt="Joggers" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R 279.99</s></p>
        <p class="price">Our Price: R 199.99</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
      </div>

    </div>

    <footer class="text-center" id="footer">&copy; Copyright 2023-2024 Red Stone Shop</footer>

  </div>

<!--details modal-->
 <?php include 'details-modal-LevisJeans.php';
       include 'details-modal-Football.php';
       include 'details-modal-Watch.php';
       include 'details-modal-HeadBand.php';
       include 'details-modal-Hoodie.php';
       include 'details-modal-Purse.php';
       include 'details-modal-joggers.php';
       include 'details-modal-poloshirt.php';
 ?>
 <!-- End of details modal-->
</body>
</html>
