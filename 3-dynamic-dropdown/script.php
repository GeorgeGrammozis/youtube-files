<?php
	require("countries.php");
	if(isset($_GET['country'])){
		$country = $_GET['country'];
		echo json_encode($data[$country], JSON_UNESCAPED_UNICODE);
	}