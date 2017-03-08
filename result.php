<?php

// On vérifie que tous les champs sont remplis grâce à "empty"
if (empty($_POST['nom']) OR
	empty($_POST['prenom']) OR 
	empty($_POST['age']) OR
	empty($_POST['langage'])){

		echo 'Merci de remplir tous les champ !!!';
}
// Sinon, je récolte les informations
else{
	//On ajoute le fichier de connexion de dbb
	include_once 'modele/connexion_bdd.php';

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage = htmlspecialchars($_POST['langage']);

	$query = $bdd ->prepare('INSERT INTO eleve(nom, prenom, age, langage) VALUES(?, ?, ?, ?)');
	$query ->execute(array(
		$nom,
		$prenom,
		$age,
		$langage
		));
	$query ->closeCursor();
}

header ('Location: index.php');