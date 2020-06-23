<?php session_start(); ?>
<?php include'includes/header.php'; ?>

<?php

$productquery = "select * from products order by id ASC " ;
$query = mysqli_query($con,$productquery);
$num =mysqli_num_rows($query);
?>
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row ">
				
				
				<div class="col-sm-12 offset-sm-1 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
					<?php	if($num > 0)
                    {
                        while($array = mysqli_fetch_array($query))
                        
                          { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo $array['image']; ?>" alt="" />
										<h2><?php echo $array['price']; ?></h2>
										<p><?php echo $array['name']; ?></p>
										<form action="cart.php" method="POST">
										    <input type="submit" name="addtocart" class="btn btn-warning form-control" value="Add to Cart">
										    <span>Quantity</span><input type="number" value="1" min="1" max="5" style="margin-top:5px; 
										    margin-bottom:5px; margin-left:4px; border-radius:6px" name="quantity">
										    <input type="hidden" value="<?php echo $array['price']; ?>" name="price">
										    <input type="hidden" value="<?php echo $array['image']; ?>" name="image">
										    <input type="hidden" value="<?php echo $array['name']; ?>" name="name">
										    <input type="hidden" value="<?php echo $array['id']; ?>" name="id">
										    
										</form>
									</div>
									
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php }
                                } ?> 
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	<?php include'includes/footer.php'; ?>