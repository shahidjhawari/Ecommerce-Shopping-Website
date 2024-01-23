<?php require('top.php'); ?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                <?php
					if(isset($_SESSION['cart'])){
						foreach($_SESSION['cart'] as $key=>$val){
						$productArr=get_product($con,'','',$key);
						$pname=$productArr[0]['name'];
						$mrp=$productArr[0]['mrp'];
						$price=$productArr[0]['price'];
						$image=$productArr[0]['image'];
						$qty=$val['qty'];
						?>
                    <tr>
                        <td class="align-middle"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" alt="" style="width: 50px;"><?php echo $pname?></td>
                        <td class="align-middle">Rs.<?php echo $price?></td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" id="<?php echo $key?>qty" value="<?php echo $qty?>" readonly>
                            </div>
                        </td>
                        <td class="align-middle">Rs.<?php echo $qty*$price?></td>
                        <td class="align-middle"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>  
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-md-4 mt-3">
            <a href="<?php echo SITE_PATH?>" class="btn btn-primary btn-sm mr-4"><b>Continue Shopping</b></a>
            <a href="<?php echo SITE_PATH?>checkout.php" class="btn btn-primary btn-sm"><b>Checkout</b></a>
        </div>
    </div>
</div>
<!-- Cart End -->


<?php require('footer.php'); ?>