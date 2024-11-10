
<?php 
  require_once 'core/init.php';
  $sql = "SELECT * FROM tbl_products WHERE featured = 1";
  $featured = $db->query($sql);
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
      <!--features product 1-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
     <!--features product 2-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    <!--features product 3-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    <!--features product 4-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    <!--features product 5-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    <!--features product 6-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    <!--features product 7-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    <!--features product 8-->
    <?php while($tbl_products = mysqli_fetch_assoc($featured)) :  ?>
      <div class="col-md-3 text-center">
        <h4><?= $tbl_products['title']; ?></h4>
        <img src="<?=$tbl_products['image']; ?>" alt="<?= $tbl_products['title']; ?>" id="images" class="img-responsive center-block"/>
        <p class="list-price text-danger"> List Price: <s>R<?= $tbl_products['list_price']; ?></s></p>
        <p class="price">Our Price: R<?= $tbl_products['price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-<?= $tbl_products['id']; ?>">Details</button>
      </div>
    <?php endwhile; ?>
    


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
