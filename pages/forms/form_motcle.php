<!-- Dev mettre dans la base puis afficher

//formulaire -->

<h1>Ajouter un mot-clé</h1><br>

		<form method="post" action="" class="form-group"> <!--  action = page contenant du php pour récupérer les informations -->
			
			<div>
				<label for="case_nummotcle" >Numéro de mot clé</label> :
			</div>
			<input class="form-control" type="text" name="case_nummotcle" id="case_nummotcle" /></input>
			<br />
			
			
			<div>
				<label for="case_nommotcle" >Mot clé</label> :
			</div>
			<input class="form-control" type="text" name="case_nommotcle" id="case_nommotcle" /></input>
			<br />
			
			
			<div>
				<label for="case_langmotcle" >Langue</label> :
			</div>
			<textarea  class="form-control" type="text" name="case_langmotcle" id="case_langmotcle" /></textarea>
			
			<br>
			<input class="btn btn-secondary" type="submit" value="Envoyer" id="Bouton"/>

		</form>


<!-- Récupération pour les mettres dans la base de données -->

<?php

ini_set('display_errors','off'); //cache les messages d'erreur

	include ('connexion.php'); // permet le lien avec la page de la connexion à la base (pas obligatoire si la connexion est déja dans la page)
        $case_nummotcle = $_POST['case_nummotcle']; // récupère la date de l'avis // l'information contenu dans les crochets vient du name mis dans le formulaire
		$case_nommotcle = $_POST['case_nommotcle']; // récupère le produit de l'avis
		$case_langmotcle = $_POST['case_langmotcle']; // récupère l'avis
        $requete="INSERT INTO motcle VALUES ('$case_nummotcle','$case_nommotcle','$case_langmotcle')"; // création de la requete pour enregistrer l'avis
		$exec = $bdd->query($requete); // exécuter la requete
?>
