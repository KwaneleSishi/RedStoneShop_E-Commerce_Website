<?php
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/headerfull.php';

if($cart_id != '') {
    $cartQ = $db->query("SELECT * FROM cart WHERE id = '{$cart_id}' ");
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
            <tbody>
                <?php
                foreach($item as $item) {
                    $product_id = $item['id'];
                    $productQ = $db->query("SELECT * FROM tbl_products WHERE id ='{$product_id}'");
                    $product = mysqli_fetch_assoc($productQ);
                    $sArray = explode(',',$product['sizes']);
                    foreach($sArray as $sizeString) {
                        $s = explode(':',$sizeString);
                        if($s[0] == $item['size']) {
                            $available = $s[1];
                        }
                    }
                
                ?>
                <tr>
                    <td><?=$i;?></td>

                    <td><?=$product['title'];?></td> 

                    <td><?=money($product['price']);?></td>
                    
                    <td>
                        <button class="btn btn-xs btn-deafault" onclick="update-cart('removeone','<?=$product['id'];?>','<?=$item['size'];?>)'">-</button>
                        <?=$item['quantity'];?>
                        <?php if($item['quantity'] < $available ): ?>
                        <button class="btn btn-xs btn-deafault" onclick="update-cart('addone','<?=$product['id'];?>','<?=$item['size'];?>)'">+</button>
                        <?php else: ?>
                            <span class="text-danger">Max</span>
                        <?php endif; ?>
                    </td>

                    <td><?=$item['size'];?></td>

                    <td><?=money($item['quantity'] * $product['price']);?></td>
                </tr>
                
                <?php
                    $i++;
                    $item_count += $item['quantity'];
                    $sub_total += ($product['price'] * $item['quantity']);
                }

                $tax = TAXRATE * $sub_total;
                $tax = number_format($tax,2);
                $grand_total = $tax + $sub_total;
                ?>
            </tbody>
        </table>

    </div>
</div>
