<!-- variables are used in the index.php code, to link to product details in the database-->
<?php
require_once 'core/init.php';
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM tbl_products WHERE id = '$id'";
$result = $db->query($sql);
$product = mysqli_fetch_assoc($result);
$brand_id = $product['brand'];
$sql = "SELECT brand FROM brand WHERE id = '$brand_id'";
$brand_query = $db->query($sql);
$brand = mysqli_fetch_assoc($brand_query);
$sizestring = $product['sizes'];
$sizestring = rtrim($sizestring, ',');
$size_array = explode(',', $sizestring);
?>
<!-- Details Light Box -->
<?php ob_start(); ?>

<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text center"><?=$product['title']; ?></h4>
    </div>

    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="center-block fotorama" data-autoplay="true">
                        <?php $photos = explode(',',$product['image']);
                        foreach ($photos as $photo) :  ?>
                        <img src="<?=$photo; ?>" alt="<?= $product['title']; ?>" class="details img-responsive">
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4>Details</h4>
                    <p><?= nl2br($product['description']); ?></p>
                    <hr />
                    <p>Price: R<?= $product['price']; ?></p>
                    <p>Brand: <?= $brand['brand']; ?></p>
                    <form action="add_cart.php" method="post" id="add_product_form">
                    <input type="hidden" name="product_id" value="<?=$id; ?>">
                    <input type="hidden" name="available" id="available" value="">
                        <div class="form-group">
                            <div class="col-xs-3">
                                <label for="quantity" id="quantity-label">Quantity:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="0"/></div><br><dic class="col-xs-9">&nbsp;</div>

                            </div><br /><br />
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control" id="size" name="size" style="width: 200px;" >
                                    <option value=""></option>
                                    <?php foreach($size_array as $string) {
                                        $string_array=explode(':', $string);
                                        $size=$string_array[0];
                                        $available=$string_array[1];
                                        if($available > 0) {
                                        echo '<option value="'.$size.'" data-available="'.$available.'">'.$size.' ('.$available.' Available)</option>';
                                    }
                                } ?>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
    </div>
                        
    </div>
  </div>
</div>


<!-- Script to refresh modal  every time a different product is clicked in the DB -->
<script>
$(function (){
$('.fotorama').fotorama({loop: true,});
});

jQuery('#size').change(function(){
var available = jQuery('#size option:selected').data("available");
jQuery('#available').val(available);
});

function closemodal() {
jQuery('#details-1').modal('hide');
setTimeout(function(){
    jQuery('#details-1').remove();
    jQuery('.modal-backdrop').remove();
    }, 500);
}
</script>

<?php echo ob_get_clean(); ?>