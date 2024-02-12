<?php
require('top.php');

if (!isset($_GET['id']) || $_GET['id'] == '') {
?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
    exit; // Exit after redirecting
}

$cat_id = mysqli_real_escape_string($con, $_GET['id']);

$price_high_selected = "";
$price_low_selected = "";
$new_selected = "";
$old_selected = "";
$sort_order = "";
if (isset($_GET['sort'])) {
    $sort = mysqli_real_escape_string($con, $_GET['sort']);
    if ($sort == "price_high") {
        $sort_order = " ORDER BY product.price DESC ";
        $price_high_selected = "selected";
    }
    if ($sort == "price_low") {
        $sort_order = " ORDER BY product.price ASC ";
        $price_low_selected = "selected";
    }
    if ($sort == "new") {
        $sort_order = " ORDER BY product.id DESC ";
        $new_selected = "selected";
    }
    if ($sort == "old") {
        $sort_order = " ORDER BY product.id ASC ";
        $old_selected = "selected";
    }
}

if ($cat_id > 0) {
    $get_product = get_product($con, '', $cat_id, '', '', $sort_order);
} else {
?>
    <script>
        window.location.href = 'index.php';
    </script>
<?php
    exit; // Exit after redirecting
}
?>


<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">CATEGORIES</span></h2>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <?php if (!empty($get_product)) { ?>
                <div class="col-lg-12">
                    <div class="htc__product__rightidebar">
                        <div class="htc__grid__top">
                            <div class="form-group">
                                <select class="form-control" onchange="sort_product_drop('<?php echo $cat_id ?>','<?php echo SITE_PATH ?>')" id="sort_product_id">
                                    <option value="">Default sorting</option>
                                    <option value="price_low" <?php echo $price_low_selected ?>>Sort by price low to high</option>
                                    <option value="price_high" <?php echo $price_high_selected ?>>Sort by price high to low</option>
                                    <option value="new" <?php echo $new_selected ?>>Sort by new first</option>
                                    <option value="old" <?php echo $old_selected ?>>Sort by old first</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<div class="row px-xl-5">



    <?php
    // Assuming $get_product is an array containing product information
    if (empty($get_product)) {
        echo '<p class="text-center">Products not found</p>';
    } else {
        foreach ($get_product as $list) {
    ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <a href="product.php?id=<?php echo $list['id'] ?>"><img class="img-fluid w-100" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt=""></a>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rs.<?php echo $list['price'] ?></h5>
                            <h6 class="text-muted ml-2"><del>Rs.<?php echo $list['mrp'] ?></del></h6>
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