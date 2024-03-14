<!DOCTYPE html>
<html>
	<head> 
		<title>Lab 4</title>
		<link rel="stylesheet" href="css/mystyle.css" />
		<script type="text/javascript" src="java/functions.js"></script>
		<style>
		</style>
	</head>
	<body bgcolor="orange"> 
	<h1 align="center">Online Store </h1>
	<?php include("db_connection.php"); ?>
		

	<ul>
	<center>
		<li class="menu-item"><a href="#" class="drp">Services</a>
			<div class="menu-content">
				<a href="add_book.php">Reparations</a><br>
				<a href="remove_book.php">Client support</a><br>
				<a href="display_books.php">Consults</a><br>
			</div>
		</li>

		<li class="menu-item"><a href="#" class="drp">Know About us</a>
			<div class="menu-content">
				<a href="add_book.php">Our History</a><br>
				<a href="remove_book.php">Mission</a><br>
				<a href="display_books.php">Vision</a><br>
			</div>
		</li>

		<li class="menu-item"><a href="#" class="drp">Laptops</a>
			<div class="menu-content">
				<a href="add_book.php">Laptops high gamma</a><br>
				<a href="remove_book.php">Laptops medium gamma</a><br>
				<a href="display_books.php">Laptop low gamma</a><br>
			</div>
		</li>

		<li class="menu-item"><a href="#" class="drp">Desktop PC</a>
			<div class="menu-content">
				<a href="add_book.php">Build your own</a><br>
				<a href="remove_book.php">Pre assamble pc's</a><br>
				<a href="display_books.php">MAC</a><br>
			</div>
		</li>
		<li class="menu-item"><a href="#" class="drp">Smartphones</a>	
			<div class="menu-content">
				<a href="add_user.php">Samsung</a><br>
				<a href="remove_user.php">Iphone</a><br>
				<a href="display_users.php">Redmagic</a><br>
			</div>
		</li>
	</center>
	</ul>
		<p align="center"> Welcome to my Online Store <p>
		<table align="center" width="80%" border="1">
		<tr>
		<?php
		$count=1;
		$sql_product = "SELECT * FROM products";
		$result_product = $connect->query($sql_product);
		while($row_product = $result_product->fetch_assoc())
		{
		?> 
		    <td align="center" class="block">
            <a href="javascript:void(0)" onclick="popupfunction('')" class="linktext"></a>
           	<?php echo "<img src='".$row_product["product_img"]."' width=50%/>";?> <br><?php echo $row_product["product_name"]."<br>"; ?>
       		
   			<br> Price: $<?php echo $row_product["unit_price"]."<br>"; ?>
            <br>Rating: 5<br>
            <input type="button" value="Add to Cart" onclick="javascript:addToCart('<?php echo $row_product["product_name"];?>')"/>
        	</td>
		<?php

		if ($count>=5)
		{
			echo "</tr><tr>";
			$count=1;
		}
		else
		{
			$count++;
		}
	    }
		?>
		    <div id="cart" class="cartImg">
		    	<img id="cart" src="img/cart.png" width="40px" onclick="popupfunction('7')">
		    </div>
		    <div id="popup7" class="display_cart" align="center"> 
		    	<img src="img/cart.png" width=30%>
		    	<a href="javascript:void(0)" onclick="popupclose('7')" class="linktext"><br>Close the preview</a>
		    	<br><br>
		    	<label>Your products:</label>
		    	<label id="addedItem"></label>
		    	<br><br>
				<label id="productsLabel" name="productsList"></label>
		    	<br><br>
		    </div>
	</center>
</body>
</html>


