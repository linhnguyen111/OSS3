<!DOCTYPE html>
<html>
<head>
	<title>ShowProducts</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- <table> -->
		<!-- <tr>
			
			<td>ID</td>
			<td>ProductsName</td>
			<td>ProductsCode</td>
			<td>Quantity</td>
			<td>ImportingDate</td>
			<td>ImageURL</td>
			<td>Function</td>
		</tr> -->
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
		// echo "Connection sucessfully";
		if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['ID'])) {
			$ID=$_GET['ID'];

			$sql = "SELECT ProductsName, ProductsCode, Quantity, ImportingDate,ImageURL, ID FROM products WHERE ID =$ID";

			$result = mysqli_query($conn,$sql);
			if (mysqli_query($conn,$sql)) {
				echo "Record delete sucessfully";
			}else{
				echo "Error deleting record: ".myslqi_error($conn);
			}
			
			while ( $row = mysqli_fetch_assoc($result)) {
		?>
		<h1>Show a new Product</h1>
		<form method="POST">
			<input type="hidden" name="ID" value="<?php echo $_GET['ID']?>">
			Product Name
			<input type="text" name="Name" value="<?php echo $row["ProductsName"]; ?>">
			<br>
			Product ID
			<input type="text" name="Code" value="<?php echo $row["ProductsCode"]; ?>">
			<br>
			Quatity
			<input type="text" name="quantity" value="<?php echo $row["Quantity"]; ?>">
			<br>
			ImportingDate
			<input type="text" name="date" value="<?php echo $row["ImportingDate"]; ?>">
			<br>
			imageURL
			<input type="text" name="imgURL" value="<?php echo $row["ImageURL"]; ?>">
			<br>
			<input type="submit" name="submit">
		</form>
		<?php 
			}
		}

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//Collect value of input field
			$ID=$_GET['ID'];
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

			$sqli = "UPDATE products SET ProductsName='$name', ProductsCode='$code', Quantity='$quantity',ImportingDate='$date',imageURL='$imgURL' WHERE ID = $ID";

			if (mysqli_query($conn,$sqli)) {
				echo "Record delete sucessfully";
			}else{
				echo "Error deleting record: ".myslqi_error($conn);
			}

		}
		mysqli_close($conn);
?>

	<!-- </table> -->
</body>
</html>