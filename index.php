
<?php 
  require_once 'core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  include 'includes/headerfull.php';
  $sql = "SELECT * FROM tbl_products WHERE featured = 1";
  $featured = $db->query($sql);
?>

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


<!--details modal-->
 <?php include 'detailsmodal.php';

       include 'includes/footer.php';
 ?>
 <!-- End of details modal-->
</body>
</html>
