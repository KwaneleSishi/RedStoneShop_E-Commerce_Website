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
    <li>
      <a href="cart.php" id="cartbutton"><span class="glyphicon glyphicon-shopping-cart"></span>My Cart</a>
    </li>
    </ul>
  </div>
 </nav>