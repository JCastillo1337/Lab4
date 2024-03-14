<?php
	$connect = new mysql("localhost", "root", "", "jbustore_db", 3307);

				if($connect->connect_errno)
				{
					die('Could not connect: '. $connect->connect_errno);

				}
?>