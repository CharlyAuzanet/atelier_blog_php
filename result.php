<?php
	


if (empty($_POST['nom']) && empty($_POST['age'])) {
	echo 'erreur tété';
}
else{  
	$result = array ();
	foreach ($_POST as $key => $value) {
		$result[$key] = htmlspecialchars($value);
	}
}
var_dump($result);