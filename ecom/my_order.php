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
  <h2>Your Orders</h2>
  
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Order Date</th>
          <th>Address</th>
          <th>Payment Type</th>
          <th>Payment Status</th>
          <th>Order Status</th>
        </tr>
      </thead>
      <tbody>
      <?php
		$uid=$_SESSION['USER_ID'];
		$res=mysqli_query($con,"select * from `order` where user_id='$uid'");
		while($row=mysqli_fetch_assoc($res)){
		?>
        <tr>
          <td><a class="btn btn-primary" href="my_order_details.php?id=<?php echo $row['id']?>"><b><?php echo $row['id']?></b></a></td>
          <td><?php echo $row['added_on']?></td>
          <td><?php echo $row['address']?><br/>
		    <?php echo $row['city']?><br/>
			<?php echo $row['pincode']?></td>
          <td><?php echo $row['payment_type']?></td>
          <td><?php echo $row['payment_status']?></td>
          <td><?php echo $row['order_status']?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php require('footer.php'); ?>