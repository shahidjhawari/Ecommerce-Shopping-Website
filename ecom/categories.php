<?php
require('top.php');
if (isset($_GET['id']) && $_GET['id'] != '') {
    $cat_id = mysqli_real_escape_string($con, $_GET['id']);
    if ($cat_id > 0) {
        $get_product = get_product($con, '', $cat_id);
    } else {
?>
        <script>
            window.location.href = 'index.php';
        </script>
    <?php
    }
} else {
    ?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
}
?>

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">CATEGORIES</span></h2>
    <div class="row px-xl-5">

        <?php
        // Assuming $get_product is an array containing product information
        if (empty($get_product)) {
            echo '<p class="text-center">Result not found</p>';
        } else {
            foreach ($get_product as $list) {
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <a href="product.php?id=<?php echo $list['id']?>"><img class="img-fluid w-100" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt=""></a>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="product.php?id=<?php echo $list['id']?>"><?php echo $list['name']?></a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Rs.<?php echo $list['price']?></h5>
                        <h6 class="text-muted ml-2"><del>Rs.<?php echo $list['mrp']?></del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(<?php echo $list['price'] ?>)</small>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>


<?php require('footer.php'); ?>