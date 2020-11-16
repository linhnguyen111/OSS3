<!-- 
<?php 
		
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

			$sql = "UPDATE products SET ProductsName='Banh mi' WHERE ID = $ID";

			if (mysqli_query($conn,$sql)) {
				echo "Record delete sucessfully";
			}else{
				echo "Error deleting record: ".myslqi_error($conn);
			}

		}
		
		mysqli_close($conn);
?> -->


<?php 
		
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
		// echo "Connection sucessfully";

		$sql = "SELECT ProductsName, ProductsCode, Quantity, ImportingDate,ImageURL, ID FROM products";
		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			//Output data of each row
			echo "
				<table>
					<tr>
						
						<td>ID</td>
						<td>ProductsName</td>
						<td>ProductsCode</td>
						<td>Quantity</td>
						<td>ImportingDate</td>
						<td>ImageURL</td>
					</tr>
				";
				$i = 1;
			while ( $row = mysqli_fetch_assoc($result)) {
				
				echo "
				<tr>
					<td>".$i++."</td>
					<td>".$row["ProductsName"]."</td>
					<td>".$row["ProductsCode"]."</td>
					<td>".$row["Quantity"]."</td>
					<td>".$row["ImportingDate"]."</td>
					<td>".$row["ImageURL"]."</td>
				</tr>
				";
			}
		}else{
			echo "0 results";
		}

		mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<title>ShowProducts</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- <h1>Show a new Product</h1>
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
	</form> -->

	<table>
		<tr>
			
			<td>ID</td>
			<td>ProductsName</td>
			<td>ProductsCode</td>
			<td>Quantity</td>
			<td>ImportingDate</td>
			<td>ImageURL</td>
			<td>Function</td>
		</tr>
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
		// echo "Connection sucessfully";

		$sql = "SELECT ProductsName, ProductsCode, Quantity, ImportingDate,ImageURL, ID FROM products";

		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			$i = 1;
			while ( $row = mysqli_fetch_assoc($result)) {
		?>

		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row["ProductsName"]; ?></td>
			<td><?php echo $row["ProductsCode"]; ?></td>
			<td><?php echo $row["Quantity"]; ?></td>
			<td><?php echo $row["ImportingDate"]; ?></td>
			<td><?php echo $row["ImageURL"]; ?></td>
			<td><a href="editProduct2.php?ID=<?php echo $row['ID']?>">Edit</a> -<a href="<?php echo $_SERVER['PHP_SELF'];?>?ID=<?php echo $row['ID']?>">Delete</a></td>
		</tr>
		<?php 
		}
		}else{
			echo "0 results";
		}

		mysqli_close($conn);
?>
	</table>
</body>
</html>