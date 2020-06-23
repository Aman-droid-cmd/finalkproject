
<?php include'includes/header.php'; ?>
	
	<section id="form" class="mt-5 mb-5"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" name="password" placeholder="Your Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name="submit" class="btn btn-danger">Login</button>
						</form>
					</div><!--/login form-->
				</div>
			
			</div>
		</div>
	</section><!--/form-->
	<?php include'includes/footer.php'; ?>	

 <?php   
    
    if(isset($_POST['submit']))
     {
      $email = $_POST['email'];
      $password = $_POST['password'];
        
    $passquery = "select * from registration where email = '$email' ";
    $query = mysqli_query($con,$passquery);
    $emailcount = mysqli_num_rows($query);
    $array = mysqli_fetch_array($query);
    $hashpass = $array['password'];
        
    $verify = password_verify($password,$hashpass);
    if($emailcount>O)
    {
        if($verify)
        {  
            ?>
             <script> 
          location.replace('index.php');
            </script>
    <?php
            
        }
        else
        {  ?>
             <script> 
          alert("Password NOt Match");
            </script>
    <?php    }
    }    
    else
    {  ?>
        <script> 
          alert("Please Enter Valid Email");
        </script>
     <?php  
    }
    }
    ?>
    


  
