<?php

	$conn = mysqli_connect('music.mysql.database.azure.com','music','Password@123','musical_world');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);

 ?>
