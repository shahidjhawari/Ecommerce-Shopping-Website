<?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$order_id=get_safe_value($con,$_GET['id']);
?>

<div class="container mt-5">
  <h2>Order Details</h2>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Product Name </th>
          <th>Product Image</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
      <?php
		$uid=$_SESSION['USER_ID'];
		$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");
		$total_price=0;
		while($row=mysqli_fetch_assoc($res)){
		$total_price=$total_price+($row['qty']*$row['price']);
		?>
        <tr>
          <td><?php echo $row['name']?></td>
          <td><img width="50px" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"></td>
          <td><?php echo $row['qty']?></td>
          <td>Rs.<?php echo $row['price']?></td>
          <td>Rs.<?php echo $row['qty']*$row['price'] + 30?></td>
        </tr>
        <?php } ?>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
</div>

<?php require('footer.php'); ?>   