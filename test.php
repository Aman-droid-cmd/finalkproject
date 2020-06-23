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

echo $id ;
 foreach($_SESSION as $val)
{  
     foreach($val as $item)
     {
         echo "<h4>".$item."</h4>";
     }
}
 
?> 


	<?php include'includes/footer.php' ?>



















































