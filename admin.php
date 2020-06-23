<?php include'includes/header.php' ?>
    <section>
    <div class="row">
        <div class="col-6 offset-2">
        <?php 
    if(isset($_POST['submit'])) {
        $p_name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $productquery = "select * from products order by id ASC " ;
        $query = mysqli_query($con,$productquery);
        $num =mysqli_num_rows($query);
        $count = $num + 1;

        $name = "{$count} ".$_POST['name'];
        $target_dir = "images/product-details/";
        $uploadOk = 1;
        $imageFileType = pathinfo( basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION);
        $target_file = $target_dir .$name.".$imageFileType";
        // Check if image file is a actual image or fake image
        
            if(empty($_FILES["fileToUpload"]["name"])){
            echo 'please select an image';
            header('location:admin.php');
        }
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
         
        /*if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }*/
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 10000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
           if (file_exists($target_file)) {   
           unlink($target_file);
            } 
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $sql="INSERT INTO products(name, price, description, image) values('$p_name', '$price', '$description', '$target_file')";
                if(mysqli_query($con, $sql)){
                     $info = getimagesize($target_file); 
                    if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/JPEG') $image = imagecreatefromjpeg($target_file); 
                    elseif ($info['mime'] == 'image/gif' || $info['mime'] == 'image/GIF') $image = imagecreatefromgif($target_file); 
                    elseif ($info['mime'] == 'image/png' || $info['mime'] == 'image/PNG') $image = imagecreatefrompng($target_file); 
                    elseif ($info['mime'] == 'image/jpg' || $info['mime'] == 'image/JPG') $image = imagecreatefromjpeg($target_file); 
                    imagejpeg($image, $target_file, 10);
        
                }else{
                    echo 'Error adding to database';
                }        
                
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        echo "Sucess";
        }
        
?>
            
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name'/>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name='price'/>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name='description'/>
            </div>
            <div class="form-group">
                <label for="image">Poduct Image</label>
                <input type="file" name='fileToUpload' id="fileToUpload"/>
            </div>
            <input type="submit" name="submit" value="Submit">     
        </form>
        </div>
    </div>
    </section> 
<?php include'includes/footer.php' ?>