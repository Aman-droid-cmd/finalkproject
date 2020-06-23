<?php session_start(); ?>

<?php include'includes/header.php' ?>
<?php
 
$id = $_POST['id'];    
$price = $_POST['price'];
$name = $_POST['name'];
$image = $_POST['image'];
$quantity = $_POST['quantity'];

$products = array($image,$name,$price,$quantity);

$_SESSION[$name] = $products;
 
?>    
     	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php 
                        foreach($_SESSION as $val)
                        { if(is_array($val))
                        {
						echo '<tr>';
                            foreach($val as $key=>$item)
                                 { 
                            if($key==0) 
                            {
                            
							echo '<td class="cart_product">
								<a href=""><img width=110px height=110px src=" '.$item.'" alt=""></a>
							</td>' ;
							} 
                             
                            elseif($key==1) 
                            {
                        
							  echo '<td class="cart_description">
								<h4><a href="">'.$item.'</a></h4>
								<p>Web ID: 1089772</p>
							</td>' ;}
                            
							elseif($key==2) 
                            {
                            
							echo '<td class="cart_price">
								'.$item.'</p>
							</td>' ;}
                            
                            elseif($key==3) 
                            {
                            
							echo '<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="number" max="5" min="1" name="quantity" 
									value="'.$item.'" >
								</div>
							</td>
                           ' ;}
                             
							
							  } 
							 }} ?>
					
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


	<?php include'includes/footer.php' ?>
