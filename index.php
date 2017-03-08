<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
	<h3>Formulaire :</h3>
	<form action="result.php" method="POST">
		<div>
			<label for="nom">Nom :</label>
			<input id="nom" placeholder="LETÉTÉ" type="text" name="nom">
		</div>
		<div>
			<label for="prenom">Prénom :</label>
			<input id="prenom" placeholder="Jean-michel" type="text" name="prenom">
		</div>
		<div>
			<label for="age">Âge :</label>
			<input id="age" placeholder="18" type="number" min="0" max="99" name="age">
		</div>
		<div>
			<label for="langage">Language :
			<select name="langage" id="langage">
				<option value="" disabled selected>Choisir</option>
				<option value="js" >JS</option>
	          	<option value="php">PHP</option>
	           	<option value="Ruby">Ruby</option>
	        </select>
	        </label id="langage">
		</div>
		<div>
			<input type="submit" value="Envoyer"/>
	</form>
	
</body>
</html>