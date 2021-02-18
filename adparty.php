<?php require_once 'model.php'; ?>
<?php
         if (isset($_POST['but_upload'])) {
                   
             $maxsize = 250*2000000; // 5MB
            //$maxsize = 20971520; 
            $Rename = date('Ymd_his');
            $productname = $_POST['productname'];
            $price = $_POST['price'];
            $text = $_POST['description'];
            $name = $Rename.$_FILES['file']['name'];
            $size1 = $_FILES['file']['size'];
            $size = ceil($size1/1048576);
            $target_dir = "upload/";
            $target_file = $target_dir .$Rename.$_FILES["file"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","png","jpeg","jpg","mpeg","mp3","zip","webp");
            // Check extension
            if(in_array($videoFileType,$extensions_arr)){
                
                // Check file size
                if(($_FILES['file']['size'] > $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload

                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        // Insert record
    $sql = "INSERT INTO electro(file,location,productname,price,description) VALUES('".$name."','".$target_file."','".$productname."','".$price."','".$text."')";

                        $stmt = $pdo->prepare($sql);
                        $res = $stmt->execute();
                       if($res){
                        $user_id = $pdo->lastInsertID();
                        header("location: adwatches.php?result=1");

                       }
                        echo "Upload successfully.";
                    }
                }

            }else{
                echo "Invalid file extension.";
     }
}   
?> 
<?php include("includes/header.php"); ?>
	<div class="address"><!--address-->
		<div class="container">
			<div class="address-row">
				<div class="col-md-6 address-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s">ADD PARTY WEAR </h4>
						 <form method="post" action="adparty.php" enctype='multipart/form-data'>
							<input class="wow fadeIndown animated" data-wow-delay=".6s" type="text" name="productname" placeholder="Product name" required="">
				<input class="wow fadeIndown animated" data-wow-delay=".7s" name="price" type="text"  placeholder="Price" required="">
					<input class="wow fadeIndown animated" data-wow-delay=".8s" name='file' type="File" required="">
					<textarea class="wow fadeIndown animated" data-wow-delay=".8s" name="description" placeholder="Describe" required=""></textarea>
					<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit"  name='but_upload' value="Upload">
						</form>
					</div>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4>ADDRESS</h4>
						<p>123 San Sebastian, CG 09-123 Ba,Block(#456),Hill Towers 4567 New York City USA.</p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4>PHONE </h4>
						<p>+222 111 333 4444</p>
						<p>+222 111 333 5555</p>
					</div>
					<div class="address-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4>MAIL</h4>
						<p><a href="mailto:example@mail.com"> mail@example.com</a></p>
						<p><a href="mailto:example@mail.com"> mail2@example.com</a></p>
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact-->

<?php include("includes/footer.php"); ?>