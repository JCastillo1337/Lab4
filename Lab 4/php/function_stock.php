	<?php
		$sql_product = "SELECT * FROM products";
		$result_product = $connect->query($sql_product);

		while($row_product = $result_product->fetch_assoc())
		{
			echo "<img src=".$row_product["product_img"]."/>";
			echo $row_product["product_name"]."<br>";
			echo $row_product["unit_price"]."<br>";
			echo $row_product["category"]."<br>";
			echo "<br><br>";

		}
	?>