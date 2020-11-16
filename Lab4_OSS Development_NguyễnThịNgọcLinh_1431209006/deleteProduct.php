<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//Collect value of input field
			$name = $_POST['Name'];
			if (empty($name)) {
				echo "Name is empty";
				echo "<br>";
			}else{
				echo $name;
				echo "<br>";
			}

			$code = $_POST['Code'];
			if (empty($code)) {
				echo "code is empty";
				echo "<br>";
			}else{
				echo $code;
				echo "<br>";
			}

			$quantity = $_POST['quantity'];
			if (empty($quantity)) {
				echo "quantity is empty";
				echo "<br>";
			}else{
				echo $quantity;
				echo "<br>";
			}

			$date = $_POST['date'];
			if (empty($date)) {
				echo "date is empty";
				echo "<br>";
			}else{
				echo $date;
				echo "<br>";
			}

			$imgURL = $_POST['imgURL'];
			if (empty($imgURL)) {
				echo "imgURL is empty";
				echo "<br>";
			}else{
				echo $imgURL;
				echo "<br>";
			}


		}
	
		$servername = "localhost";
		$username = "ngoclinh";
		$password = "admin";
		$dbname ="products";

		//Create connection
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		//Check connection

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}
		if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['ID'])) {
			$ID=$_GET['ID'];

			$sql = "DELETE FROM products WHERE ID = $ID";

			if (mysqli_query($conn,$sql)) {
				echo "Record delete sucessfully";
			}else{
				echo "Error deleting record: ".myslqi_error($conn);
			}

		}
		
		mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Products</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Add a new Product</h1>
	<form method="POST">
		Product Name
		<input type="text" name="Name">
		<br>
		Product ID
		<input type="text" name="Code">
		<br>
		Quatity
		<input type="text" name="quantity">
		<br>
		ImportingDate
		<input type="text" name="date">
		<br>
		imageURL
		<input type="text" name="imgURL">
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>