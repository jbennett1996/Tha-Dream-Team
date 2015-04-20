<?php
try {
	$dbc = new PDO("sqlite:artists.sqlite");
	}
catch(PDOException $e) {
	echo $e->getErrorMessage();
}
?>
	
	
	
