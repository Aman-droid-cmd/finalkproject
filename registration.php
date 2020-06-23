<?php include'includes/header.php'; ?>

	
	<section id="form" style="margin-bottom:60px"><!--form-->
		<div class="container ">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="login-form"><!--login form-->
						<h2>Registration For account</h2>
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
							<input type="text"  name="username" placeholder="Full Name" required />
							<input type="email" name="email"  placeholder="Email Address" required />
							<input type="tel" name="mobile"  placeholder="Mobile No" required />
							<input type="password" name="password"  placeholder="Enter Password" required />
							<input type="password" name="cpassword"  placeholder="Confirm Password " required />
							<div class="col-6"><button type="submit" name="submit" class="btn btn-warning">Sign Up</button></div>
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
         $username = mysqli_real_escape_string($con,$_POST['username']);
         $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
         $email = mysqli_real_escape_string($con,$_POST['email']);
         $password = mysqli_real_escape_string($con,$_POST['password']);
         $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
        
        
         $hash_pass = password_hash($password,PASSWORD_BCRYPT);         
         $hash_Cpass = password_hash($Cpassword,PASSWORD_BCRYPT);
        
        $emailquery = "select * from registration where email = '$email'" ;
          $query = mysqli_query($con,$emailquery);
          $row_count = mysqli_num_rows($query);               
          if($row_count>0){
              ?>   
                    <script> 
         alert("Email Already Exist");
                   </script>
             <?php
          }
          else {
              
              if($password===$cpassword)
              {
                 $insertquery = " insert into registration(username,mobile,email,password,cpassword) values('$username','$mobile','$email','$hash_pass','$hash_Cpass') ";
        
                 $res=mysqli_query($con,$insertquery);
                  ?>
                   <script> 
                            location.replace('login.php');
                   </script> <?php
      
              }
             else
              {  ?> <script> 
                            alert("Password Does Not Match");
                   </script> <?php }
        
          }
    }
    
        ?>
