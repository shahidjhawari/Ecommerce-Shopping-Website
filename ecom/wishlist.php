<?php
require('top.php');
if (!isset($_SESSION['USER_LOGIN'])) {
?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
}
$uid = $_SESSION['USER_ID'];

$res = mysqli_query($con, "select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'");
?>

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">My Favourits</span>
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
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                <?php
										while($row=mysqli_fetch_assoc($res)){
										?>
                        <tr>
                            <td class="align-middle"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" alt="" style="width: 50px;"><a href="#"><?php echo $row['name']?></td>
                            <td class="align-middle">Rs.<?php echo $row['price'] ?></td>
                            <td class="align-middle"><a href="wishlist.php?wishlist_id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-md-4 mt-3">
            <a href="<?php echo SITE_PATH ?>" class="btn btn-primary btn-sm mr-4"><b>Continue Shopping</b></a>
            <a href="<?php echo SITE_PATH ?>checkout.php" class="btn btn-primary btn-sm"><b>Checkout</b></a>
        </div>
    </div>
</div>
<!-- Cart End -->

<?php require('footer.php') ?>