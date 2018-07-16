<!DOCTYPE html>
<html lang="en">
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
	
<br><br>	
	<?php
		        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'ferde_store';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
		//Get image data from database
		$result = $db->query("SELECT images FROM product");
		
		if($result->num_rows > 0){
			$imgData = $result->fetch_assoc();
			
			//Render image
//			header("Content-type: image/jpg"); 
	//		echo $imgData['images'];
		foreach($result as $row){
			echo '<img src="data:image/jpeg;base64,'.base64_encode( $imgData['images'] ).'"/><br>';				
		}

		}else{
			echo 'Image not found...';
		}
	?>
</body>
</html>