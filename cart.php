<?php
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/headerfull.php';

if($cart_id != '') {
    $cartQ = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}'");
    $result = mysqli_fetch_assoc($cartQ);
    $items = json_decode($result['items'], true);
    $i = 1;
    $sub_total = 0;
    $item_count = 0;
}

?>
<div class="col-nd-12">
    <div class="row">
       <h2 class="text-center">My Shopping Cart</h2><hr />
       <?php if($cart_id == '') ?>
        <div class="bg-danger">
            <p class="bg-danger">
            Your  shopping cart is empty!
            </p>

        </div>
        <?php else: ?>
        <table class="table table-bordered table-condensed table-striped">
            <thead>
                <th>#</th>
                <th>Item</th>
                <th>Prices</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Sub-total</th>
            </thead>
        </table>

    </div>
</div>
