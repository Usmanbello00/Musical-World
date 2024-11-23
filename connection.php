<?php

	$conn = mysqli_connect('musical.mysql.database.azure.com','value','Password@123','musical_world');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>
