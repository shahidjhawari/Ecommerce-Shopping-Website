<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <img src="img/order_placed.png" width="50px" alt="Order Placed Icon" class="img-fluid mb-4">
            <h1 class="mb-3">Your order has been placed!</h1>
            <p class="lead">Thank you for choosing our services. Your order is confirmed, and we are processing it.</p>
            <p>We will send you an email with further details shortly.</p>
            <a href="#" class="btn btn-primary mt-3"><b>Track Your Order</b></a>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>