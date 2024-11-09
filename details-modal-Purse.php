<div class="modal fade details-1" id="details-7" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text center">Brown Tote Bag</h4>
    </div>

    <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="center-block">
                        <img src="images/Purse.jpg" alt="Purse" class="details img-responsive" />

                    </div>
                </div>
                <div class="col-sm-6">
                    <h4>Details</h4>
                    <p>A tote bag is the perfect everyday companion. Spacious and stylish, it effortlessly carries all your essentials.</p>
                    <hr />
                    <p>Price: R 159.99</p>
                    <p>Brand: Truworths</p>
                    <form action="add_cart.php" method="post">
                        <div class="form-group">
                            <div class="col-xs-3">
                                <label for="quantity" id="quantity-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="0"/>
                            </div><br /> <br /> <br />
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select class="form-control" id="size" name="size" style="width: 200px;" >
                                    <option value="">ONE SIZE</option>
                                    
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