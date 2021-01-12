<?php
	include('config.php');

	$name = $_POST["name"];
	$price = $_POST["price"];
	$description = $_POST["description"];
	

	//Adding image as a blob
	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	//Sql query to insert data
	$sql = "INSERT INTO products (name, price, description, image) VALUES ('$name', '$price', '$description', '$image')";

	if($conn->query($sql) == TRUE){
		echo "New Record Created Successfully" . "<br>" . "<a href='admin.php'>Add Another Product</a>";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>