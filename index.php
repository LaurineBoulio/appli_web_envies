
<?php
	require_once("BDD.php");
	
?>


<!DOCTYPE html>
<html lang=fr dir="ltr">
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Vos envies</title>
	</head>
	<body>

	
	
		<div class="corps">
				<h1>Questionnaire<h1>
				<h3>En moins de 12 min</h3>
				<h3>Seulement les questions <span class="sanssautdeligne">*</span> sont obligatoires</h3>
				<h3>Essayez de ne pas laisser de reponses neutres</h3>
				
				
				<form method='post' action='#'>
				
					<h2>0. Qui êtes-vous ?</h2>			
					<div class="reponse">
						<label for="sexe"><h3>Sexe : <span class="sanssautdeligne">*</span></h3></label>
						<SELECT name="sexe" id="sexe" size="1" onblur="verif()">
						<OPTION value='Choisir le sexe'>Choisir le sexe</OPTION>
						<OPTION value='Femme'>Femme</OPTION>
						<OPTION value='Homme'>Homme</OPTION>
						<OPTION value='Autre'>Autre</OPTION>
						</SELECT>
						
						 </br>				
						<label for="age"><h3>Age: <span class="sanssautdeligne">*</span></h3></label>
						<SELECT name="age" size="1" id="age" onblur="verif()">
						<OPTION value='Choisir age'>Choisir l'âge</OPTION>
						<OPTION value='moins de 15 ans'>moins de 15 ans</OPTION>
						<OPTION value='15/17 ans'>15/17 ans</OPTION>
						<OPTION value='18/24 ans'>18/24 ans</OPTION>
						<OPTION value='25/34 ans'>25/34 ans</OPTION>
						<OPTION value='35/49 ans'>35/49 ans</OPTION>
						<OPTION value='50/64 ans'>50/64 ans</OPTION>
						<OPTION value='65 ans et plus'>65 ans et plus</OPTION>
						</SELECT>
						
						 </br>
						<label for="region"><h3>Région : <span class="sanssautdeligne">*</span></h3></label>
						
						<SELECT name="region" size="1" id="region" onblur="verif()">
						<OPTION value='Choisir region'>Choisir la région</OPTION>
						<OPTION value='Auvergne-Rhône-Alpes'>Auvergne-Rhône-Alpes</OPTION>
						<OPTION value='Bourgogne-Franche-Comte'>Bourgogne-Franche-Comté</OPTION>
						<OPTION value='Bretagne'>Bretagne</OPTION>
						<OPTION value='Centre-Val de Loire'>Centre-Val de Loire</OPTION>
						<OPTION value='Corse'>Corse</OPTION>
						<OPTION value='Grand Est'>Grand Est</OPTION>
						<OPTION value='Hauts-de-France'>Hauts-de-France</OPTION>
						<OPTION value='Ile-de-France'>Ile-de-France</OPTION>
						<OPTION value='Normandie'>Normandie</OPTION>
						<OPTION value='Nouvelle-Aquitaine'>Nouvelle-Aquitaine</OPTION>
						<OPTION value='Occitanie'>Occitanie</OPTION>
						<OPTION value='Pays de la Loire'>Pays de la Loire</OPTION>
						<OPTION value='Provence-Alpes-Côte d Azur'>Provence-Alpes-Côte d'Azur</OPTION>
						</SELECT>
					
					</div>
					
					<h2>1. Pour vous, des vacances de rêve riment avec : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire1A"
						 name="choix1" value="campagne" onclick="griser(this)">
						<label for="formulaire1A">Campagne</label>
						 </br>
						<input type="radio" id="Formulaire1B"
						 name="choix1" value="plage" onclick="griser(this)">
						<label for="formulaire1B">Plage</label>
						 </br>
						<input type="radio" id="Formulaire1C"
						 name="choix1" value="ski" onclick="griser(this)">
						<label for="formulaire1C">Ski</label>
						 </br>	
						<input type="radio" id="Formulaire1D"
						name="choix1" value="autre1" onclick="nonGriser(this)">
						<label for="formulaire1D">Autre</label>
						<input type="text" id="commentaire1" name="commentaire1"  maxlength="30" size="30" disabled >	
						</br>
						<input type="radio" id="Formulaire0a"
						 name="choix1" value="nul" checked onclick="griser(this)">
						<label for="formulaire1a">Pas de réponse</label>
						 </br>
					</div>
					
					<h2>2. Quand vous sortez entre amis, vous préférez aller : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire2A"
						 name="choix2" value="bar" onclick="griser(this)">
						<label for="formulaire2A">Bar</label>
						 </br>
						<input type="radio" id="Formulaire2B"
						 name="choix2" value="cinema" onclick="griser(this)">
						<label for="formulaire2B">Cinéma</label>
						 </br>
						<input type="radio" id="Formulaire2C"
						 name="choix2" value="concert" onclick="griser(this)">
						<label for="formulaire2C">Concert</label>
						 </br>	
						<input type="radio" id="Formulaire2D"
						 name="choix2" value="magasin" onclick="griser(this)">
						<label for="formulaire2D">Magasin</label>
						 </br>	
						<input type="radio" id="Formulaire2E"
						name="choix2" value="autre2" onclick="nonGriser(this)">
						<label for="formulaire2E">Autre</label>
						<input type="text" id="commentaire2" name="commentaire2"  maxlength="30" size="30" disabled >	
						 </br>
						<input type="radio" id="Formulaire2a"
						 name="choix2" value="nul" checked onclick="griser(this)">
						<label for="formulaire2a">Pas de réponse</label>
						 </br>						
					</div>
					
					<h2>3. Le soir vous aimez : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire3A"
						 name="choix3" value="jeu" onclick="griser(this)">
						<label for="formulaire3A">Jouer à votre jeu préféré</label>
						 </br>
						<input type="radio" id="Formulaire3B"
						 name="choix3" value="lire" onclick="griser(this)">
						<label for="formulaire3B">Lire</label>
						 </br>
						<input type="radio" id="Formulaire3C"
						 name="choix3" value="tele" onclick="griser(this)">
						<label for="formulaire3C">Regarder la télé</label>
						 </br>	
						<input type="radio" id="Formulaire3D"
						 name="choix3" value="portable" onclick="griser(this)">
						<label for="formulaire3D">Rester sur votre portable</label>
						 </br>
						<input type="radio" id="Formulaire3E"
						name="choix3" value="autre3" onclick="nonGriser(this)">
						<label for="formulaire3E">Autre</label>
						<input type="text" id="commentaire3" name="commentaire3"  maxlength="30" size="30" disabled >	
						 </br>
						<input type="radio" id="Formulaire3a"
						 name="choix3" value="nul" checked onclick="griser(this)">
						<label for="formulaire3a">Pas de réponse</label>
						 </br>
					</div>
					
					<h2>4. Quand vous prenez un verre en terrasse, c'est plutôt : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire4A"
						 name="choix4" value="eau" onclick="griser(this)">
						<label for="formulaire4A">De l'eau</label>
						 </br>
						<input type="radio" id="Formulaire4B"
						 name="choix4" value="vin" onclick="griser(this)">
						<label for="formulaire4B">Du vin</label>
						 </br>
						<input type="radio" id="Formulaire4C"
						 name="choix4" value="cafe" onclick="griser(this)">
						<label for="formulaire4C">Un café</label>
						 </br>	
						<input type="radio" id="Formulaire4D"
						 name="choix4" value="jusFruit" onclick="griser(this)">
						<label for="formulaire4D">Un jus de fruit</label>
						 </br>
						<input type="radio" id="Formulaire4E"
						 name="choix4" value="soda" onclick="griser(this)">
						<label for="formulaire4E">Un soda</label>
						 </br>		
						<input type="radio" id="Formulaire4F"
						 name="choix4" value="biere" onclick="griser(this)">
						<label for="formulaire4F">Une bière</label>
						 </br>
						<input type="radio" id="Formulaire4G"
						name="choix4" value="autre4" onclick="nonGriser(this)">
						<label for="formulaire4G">Autre</label>
						<input type="text" id="commentaire4" name="commentaire4"  maxlength="30" size="30" disabled >	
						 </br>	
						<input type="radio" id="Formulaire4a"
						 name="choix4" value="nul" checked onclick="griser(this)">
						<label for="formulaire4a">Pas de réponse</label>
						 </br>						 
					</div>
					
					<h2>5. Quelle serait l'habitation idéale ? </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire5A"
						 name="choix5" value="appartVille" onclick="griser(this)">
						<label for="formulaire5A">Un appartement en ville</label>
						 </br>
						<input type="radio" id="Formulaire5B"
						 name="choix5" value="cabaneForet" onclick="griser(this)">
						<label for="formulaire5B">Une cabane perdue dans la forêt</label>
						 </br>
						<input type="radio" id="Formulaire5C"
						 name="choix5" value="maisonCampagne" onclick="griser(this)">
						<label for="formulaire5C">Une maison de campagne</label>
						 </br>	
						<input type="radio" id="Formulaire5D"
						name="choix5" value="autre5" onclick="nonGriser(this)">
						<label for="formulaire5D">Autre</label>
						<input type="text" id="commentaire5" name="commentaire5"  maxlength="30" size="30" disabled >	
						 </br>
						<input type="radio" id="Formulaire5a"
						 name="choix5" value="nul" checked onclick="griser(this)">
						<label for="formulaire5a">Pas de réponse</label>
						 </br>						
					</div>

					<h2>6. Quel animal de compagnie aimeriez-vous avoir :</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire6A"
							 name="choix6" value="aucun" onclick="griser(this)">
							<label for="formulaire6A">Aucun</label>
							 </br>
							<input type="radio" id="Formulaire6B"
							 name="choix6" value="chat" onclick="griser(this)">
							<label for="formulaire6B">Un chat</label>
							 </br>
							<input type="radio" id="Formulaire6C"
							 name="choix6" value="chien" onclick="griser(this)">
							<label for="formulaire6C">Un chien</label>
							 </br>			
							<input type="radio" id="Formulaire6D"
							 name="choix6" value="hamster" onclick="griser(this)">
							<label for="formulaire6D">Un hamster</label>
							 </br>
							<input type="radio" id="Formulaire6E"
							 name="choix6" value="lapin" onclick="griser(this)">
							<label for="formulaire6E">Un lapin</label>
							 </br>		
							<input type="radio" id="Formulaire6F"
							 name="choix6" value="poisson" onclick="griser(this)">
							<label for="formulaire6F">Un poisson</label>
							 </br>			
							<input type="radio" id="Formulaire6G"
							 name="choix6" value="rat" onclick="griser(this)">
							<label for="formulaire6G">Un rat</label>
							 </br>
							<input type="radio" id="Formulaire6H"
							 name="choix6" value="serpent" onclick="griser(this)">
							<label for="formulaire6H">Un serpent</label>
							 </br>		
							<input type="radio" id="Formulaire6I"
							 name="choix6" value="tortue" onclick="griser(this)">
							<label for="formulaire6I">Une tortue</label>
							 </br>
							<input type="radio" id="Formulaire6J"
							name="choix6" value="autre6" onclick="nonGriser(this)">
							<label for="formulaire6J">Autre</label>
							<input type="text" id="commentaire6" name="commentaire6"  maxlength="30" size="30" disabled >	
							 </br>	
							<input type="radio" id="Formulaire6a"
							 name="choix6" value="nul" checked onclick="griser(this)">
							<label for="formulaire6a">Pas de réponse</label>
							 </br>							 
						</section>
						</div>
						
						<h2>7. Quelle catégorie de film vous attire le plus ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire7A"
							 name="choix7" value="animation" onclick="griser(this)">
							<label for="formulaire7A">Animation</label>
							 </br>
							<input type="radio" id="Formulaire7B"
							 name="choix7" value="comedie" onclick="griser(this)">
							<label for="formulaire7B">Comédie</label>
							 </br>
							<input type="radio" id="Formulaire7C"
							 name="choix7" value="documentaire" onclick="griser(this)">
							<label for="formulaire7C">Documentaire</label>
							 </br>			
							<input type="radio" id="Formulaire7D"
							 name="choix7" value="drame" onclick="griser(this)">
							<label for="formulaire7D">Drame</label>
							 </br>
							<input type="radio" id="Formulaire7E"
							 name="choix7" value="fantastique" onclick="griser(this)">
							<label for="formulaire7E">Fantastique</label>
							 </br>		
							<input type="radio" id="Formulaire7F"
							 name="choix7" value="horreur" onclick="griser(this)">
							<label for="formulaire7F">Horreur</label>
							 </br>			
							<input type="radio" id="Formulaire7G"
							 name="choix7" value="thriller" onclick="griser(this)">
							<label for="formulaire7G">Thriller</label>
							 </br>
							<input type="radio" id="Formulaire7H"
							 name="choix7" value="science-fiction" onclick="griser(this)">
							<label for="formulaire7H">Science-fiction</label>
							 </br>		
							<input type="radio" id="Formulaire7J"
							name="choix7" value="autre7" onclick="nonGriser(this)">
							<label for="formulaire7K">Autre</label>
							<input type="text" id="commentaire7" name="commentaire7"  maxlength="30" size="30" disabled >	
							 </br>
							<input type="radio" id="Formulaire7a"
							 name="choix7" value="nul" checked onclick="griser(this)">
							<label for="formulaire7a">Pas de réponse</label>
							 </br>
						</section>
						</div>
						
						<h2>8. Quel genre de musique écoutez-vous ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire8A"
							 name="choix8" value="blues" onclick="griser(this)">
							<label for="formulaire8A">Blues</label>
							 </br>
							<input type="radio" id="Formulaire8B"
							 name="choix8" value="classique" onclick="griser(this)">
							<label for="formulaire8B">Classique</label>
							 </br>
							<input type="radio" id="Formulaire8C"
							 name="choix8" value="dubstep" onclick="griser(this)">
							<label for="formulaire8C">Dubstep</label>
							 </br>			
							<input type="radio" id="Formulaire8D"
							 name="choix8" value="electro" onclick="griser(this)">
							<label for="formulaire8D">Electro</label>
							 </br>
							<input type="radio" id="Formulaire8E"
							 name="choix8" value="jazz" onclick="griser(this)">
							<label for="formulaire8E">Jazz</label>
							 </br>		
							<input type="radio" id="Formulaire8F"
							 name="choix8" value="metal" onclick="griser(this)">
							<label for="formulaire8F">Métal</label>
							 </br>			
							<input type="radio" id="Formulaire8G"
							 name="choix8" value="rap" onclick="griser(this)">
							<label for="formulaire8G">Rap</label>
							 </br>
							<input type="radio" id="Formulaire8H"
							 name="choix8" value="reggae" onclick="griser(this)">
							<label for="formulaire8H">Reggae</label>
							 </br>		
							<input type="radio" id="Formulaire8I"
							 name="choix8" value="rnb" onclick="griser(this)">
							<label for="formulaire8I">RnB</label>
							 </br>	
							<input type="radio" id="Formulaire8J"
							 name="choix8" value="rock" onclick="griser(this)">
							<label for="formulaire8J">Rock</label>
							 </br>
							<input type="radio" id="Formulaire8K"
							name="choix8" value="autre8" onclick="nonGriser(this)">
							<label for="formulaire8K">Autre</label>
							<input type="text" id="commentaire8" name="commentaire8"  maxlength="30" size="30" disabled >	
							 </br>	
							<input type="radio" id="Formulaire8a"
							 name="choix8" value="nul" checked onclick="griser(this)">
							<label for="formulaire8a">Pas de réponse</label>
							 </br>							 
						</section>
						</div>
						
						<h2>9. Le weekend arrive, c'est le moment de relâcher la pression ! Quel plat vous donne le plus envie ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire9A"
							 name="choix9" value="africain" onclick="griser(this)">
							<label for="formulaire9A">Africain</label>
							 </br>
							<input type="radio" id="Formulaire9B"
							 name="choix9" value="algérien" onclick="griser(this)">
							<label for="formulaire9B">Algérien</label>
							 </br>
							<input type="radio" id="Formulaire9C"
							 name="choix9" value="chinois" onclick="griser(this)">
							<label for="formulaire9C">Chinois</label>
							 </br>			
							<input type="radio" id="Formulaire9D"
							 name="choix9" value="fastfood" onclick="griser(this)">
							<label for="formulaire9D">Fastfood</label>
							 </br>
							<input type="radio" id="Formulaire9E"
							 name="choix9" value="gastronomique" onclick="griser(this)">
							<label for="formulaire9E">Gastronomique</label>
							 </br>		
							<input type="radio" id="Formulaire9F"
							 name="choix9" value="indien" onclick="griser(this)">
							<label for="formulaire9F">Indien</label>
							 </br>			
							<input type="radio" id="Formulaire9G"
							 name="choix9" value="italien" onclick="griser(this)">
							<label for="formulaire9G">Italien </label>
							 </br>
							<input type="radio" id="Formulaire9H"
							 name="choix9" value="japonais" onclick="griser(this)">
							<label for="formulaire9H">Japonais</label>
							 </br>		
							<input type="radio" id="Formulaire9I"
							 name="choix9" value="marocain" onclick="griser(this)">
							<label for="formulaire9I">Marocain</label>
							 </br>	
							<input type="radio" id="Formulaire9J"
							 name="choix9" value="mexicain" onclick="griser(this)">
							<label for="formulaire9J">Mexicain</label>
							 </br>
							<input type="radio" id="Formulaire9K"
							name="choix9" value="autre9" onclick="nonGriser(this)">
							<label for="formulaire9K">Autre</label>
							<input type="text" id="commentaire9" name="commentaire9"  maxlength="30" size="30" disabled >	
							 </br>	
							<input type="radio" id="Formulaire9a"
							 name="choix9" value="nul" checked onclick="griser(this)">
							<label for="formulaire9a">Pas de réponse</label>
							 </br>							 
						</section>
						</div>
						
						
						<h2>10. Quel sport vous plaît le plus ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire10A"
							 name="choix10" value="basket-ball" onclick="griser(this)">
							<label for="formulaire10A">Basket-ball</label>
							 </br>
							<input type="radio" id="Formulaire10B"
							 name="choix10" value="canoe-kayak" onclick="griser(this)">
							<label for="formulaire10B">Canoe-Kayak</label>
							 </br>
							<input type="radio" id="Formulaire10C"
							 name="choix10" value="equitation" onclick="griser(this)">
							<label for="formulaire10C">Equitation</label>
							 </br>			
							<input type="radio" id="Formulaire10D"
							 name="choix10" value="football" onclick="griser(this)">
							<label for="formulaire10D">Football</label>
							 </br>
							<input type="radio" id="Formulaire10E"
							 name="choix10" value="golf" onclick="griser()">
							<label for="formulaire10E">Golf</label>
							 </br>		
							<input type="radio" id="Formulaire10F"
							 name="choix10" value="handball" onclick="griser(this)">
							<label for="formulaire10F">Handball</label>
							 </br>			
							<input type="radio" id="Formulaire10G"
							 name="choix10" value="judo" onclick="griser(this)">
							<label for="formulaire10G">Judo</label>
							 </br>
							<input type="radio" id="Formulaire10H"
							 name="choix10" value="rugby" onclick="griser(this)">
							<label for="formulaire10H">Rugby</label>
							 </br>		
							<input type="radio" id="Formulaire10I"
							 name="choix10" value="sports sous-marins" onclick="griser(this)">
							<label for="formulaire10I">Sports sous-marins</label>
							 </br>	
							<input type="radio" id="Formulaire10J"
							 name="choix10" value="tennis" onclick="griser(this)">
							<label for="formulaire10J">Tennis</label>
							 </br>
							<input type="radio" id="Formulaire10K"
							name="choix10" value="autre10" onclick="nonGriser(this)">
							<label for="formulaire10K">Autre</label>
							<input type="text" id="commentaire10" name="commentaire10"  maxlength="30" size="30" disabled >	
							 </br>	
							<input type="radio" id="Formulaire10a"
							 name="choix10" value="nul" checked onclick="griser(this)">
							<label for="formulaire10a">Pas de réponse</label>
							 </br>
						</section>
						
					</div>
					
					<h2>11. Quelle est votre destination de rêve ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire11A"
							 name="choix11" value="allemagne" onclick="griser(this)">
							<label for="formulaire11A">Allemagne</label>
							 </br>
							<input type="radio" id="Formulaire11B"
							 name="choix11" value="chine" onclick="griser(this)">
							<label for="formulaire11B">Chine</label>
							 </br>
							<input type="radio" id="Formulaire11C"
							 name="choix11" value="espagne" onclick="griser(this)">
							<label for="formulaire11C">Espagne</label>
							 </br>			
							<input type="radio" id="Formulaire11D"
							 name="choix11" value="etats-Unis" onclick="griser(this)">
							<label for="formulaire11D">Etats-Unis</label>
							 </br>
							<input type="radio" id="Formulaire11E"
							 name="choix11" value="france" onclick="griser(this)">
							<label for="formulaire11E">France</label>
							 </br>		
							<input type="radio" id="Formulaire11F"
							 name="choix11" value="italie" onclick="griser(this)">
							<label for="formulaire11F">Italie</label>
							 </br>			
							<input type="radio" id="Formulaire11G"
							 name="choix11" value="royaume-uni" onclick="griser(this)">
							<label for="formulaire11G">Royaume-Uni</label>
							 </br>
							<input type="radio" id="Formulaire11H"
							 name="choix11" value="russie" onclick="griser(this)">
							<label for="formulaire11H">Russie</label>
							 </br>		
							<input type="radio" id="Formulaire11I"
							 name="choix11" value="thailande" onclick="griser(this)">
							<label for="formulaire11I">Thailande</label>
							 </br>	
							<input type="radio" id="Formulaire11J"
							 name="choix11" value="turquie" onclick="griser(this)">
							<label for="formulaire11J">Turquie</label>
							 </br>
							<input type="radio" id="Formulaire11K"
							 name="choix11" value="autre11" onclick="nonGriser(this)">
							<label for="formulaire11K">Autre</label>
							<input type="text" id="commentaire11" name="commentaire11"  maxlength="30" size="30" disabled>	
							 </br>	
							<input type="radio" id="Formulaire11a"
							 name="choix11" value="nul" checked onclick="griser(this)">
							<label for="formulaire11a">Pas de réponse</label>
							 </br>							 
						</section>
						
					</div>
					
					  </br>
					  </br>
					  
					  
					  
					<div style="margin-left: 870px;"><input type="submit" name="confirmer" id="confirmer" value="Confirmer" disabled></div><br><br>
					
				</form>	
		</div>	
	</body>
	<script language="javascript" type="text/javascript">
		function nonGriser(champ) {
			
			var com1 = document.getElementById('commentaire1');
			var com2 = document.getElementById('commentaire2');
			var com3 = document.getElementById('commentaire3');
			var com4 = document.getElementById('commentaire4');
			var com5 = document.getElementById('commentaire5');
			var com6 = document.getElementById('commentaire6');
			var com7 = document.getElementById('commentaire7');
			var com8 = document.getElementById('commentaire8');
			var com9 = document.getElementById('commentaire9');
			var com10 = document.getElementById('commentaire10');
			var com11 = document.getElementById('commentaire11');
			
			if(champ.value == 'autre1') com1.disabled = false;
			if(champ.value == 'autre2') com2.disabled = false;
			if(champ.value == 'autre3') com3.disabled = false;
			if(champ.value == 'autre4') com4.disabled = false;
			if(champ.value == 'autre5') com5.disabled = false;
			if(champ.value == 'autre6') com6.disabled = false;
			if(champ.value == 'autre7') com7.disabled = false;
			if(champ.value == 'autre8') com8.disabled = false;
			if(champ.value == 'autre9') com9.disabled = false;
			if(champ.value == 'autre10') com10.disabled = false;
			if(champ.value == 'autre11') com11.disabled = false;
		}
		
		function griser(champ) {
			var com1 = document.getElementById('commentaire1');
			var com2 = document.getElementById('commentaire2');
			var com3 = document.getElementById('commentaire3');
			var com4 = document.getElementById('commentaire4');
			var com5 = document.getElementById('commentaire5');
			var com6 = document.getElementById('commentaire6');
			var com7 = document.getElementById('commentaire7');
			var com8 = document.getElementById('commentaire8');
			var com9 = document.getElementById('commentaire9');
			var com10 = document.getElementById('commentaire10');
			var com11 = document.getElementById('commentaire11');
			if(champ.name == 'choix1'){
				com1.value='';
				com1.disabled = true;
			} 
			if(champ.name == 'choix2'){
				com2.value='';
				com2.disabled = true;
			} 
			if(champ.name == 'choix3'){
				com3.value='';
				com3.disabled = true;
			} 
			if(champ.name == 'choix4'){
				com4.value='';
				com4.disabled = true;
			} 
			if(champ.name == 'choix5'){
				com5.value='';
				com5.disabled = true;
			} 
			if(champ.name == 'choix6'){
				com6.value='';
				com6.disabled = true;
			} 
			if(champ.name == 'choix7'){
				com7.value='';
				com7.disabled = true;
			} 
			if(champ.name == 'choix8'){
				com8.value='';
				com8.disabled = true;
			} 
			if(champ.name == 'choix9'){
				com9.value='';
				com9.disabled = true;
			} 
			if(champ.name == 'choix10'){
				com10.value='';
				com10.disabled = true;
			} 
			if(champ.name == 'choix11'){
				com11.value='';
				com11.disabled = true;
			} 
		}
		
	function verifAge(champ){
		var bouton = document.getElementById('confirmer');
		var age = parseInt(champ.value);
		if(isNaN(age) || age < 100 && age > 0){
		 bouton.disabled=false;
		}
	}
		
	function verif(){
		var bouton = document.getElementById('confirmer');
		var listeSexe = document.getElementById('sexe');
		var valeurSexe = listeSexe.options[listeSexe.selectedIndex].value;
		var listeAge = document.getElementById('age');
		var valeurAge = listeAge.options[listeAge.selectedIndex].value;
		var listeRegion = document.getElementById('region');
		var valeurRegion = listeRegion.options[listeRegion.selectedIndex].value;
		 
		if(valeurSexe != 'Choisir le sexe' && valeurAge != 'Choisir age' && valeurRegion != 'Choisir region'){
			bouton.disabled=false;
		}
		else{
			bouton.disabled=true;
		}  
		
	}
		
		
	
		
	
	</script>
</html>

<?php
			if(isset($_POST['confirmer'])){
				
				$sexe=$_POST['sexe'];
				$age=$_POST['age'];	
				// $region=$_POST['qRegion'];
				$region=$_POST['region'];
				
				$reponse1=$_POST['choix1'];
				$reponse2=$_POST['choix2'];
				$reponse3=$_POST['choix3'];
				$reponse4=$_POST['choix4'];
				$reponse5=$_POST['choix5'];
				$reponse6=$_POST['choix6'];	
				$reponse7=$_POST['choix7'];
				$reponse8=$_POST['choix8'];
				$reponse9=$_POST['choix9'];	
				$reponse10=$_POST['choix10'];
				$reponse11=$_POST['choix11'];
				
				//si commentaire== vide
				if(!empty($_POST['commentaire1'])) $com1=$_POST['commentaire1'];
				else $com1='';
				if(!empty($_POST['commentaire2'])) $com2=$_POST['commentaire2'];
				else $com2='';
				if(!empty($_POST['commentaire3'])) $com3=$_POST['commentaire3'];
				else $com3='';
				if(!empty($_POST['commentaire4'])) $com4=$_POST['commentaire4'];
				else $com4='';
				if(!empty($_POST['commentaire5'])) $com5=$_POST['commentaire5'];
				else $com5='';
				if(!empty($_POST['commentaire6'])) $com6=$_POST['commentaire6'];
				else $com6='';
				if(!empty($_POST['commentaire7'])) $com7=$_POST['commentaire7'];
				else $com7='';
				if(!empty($_POST['commentaire8'])) $com8=$_POST['commentaire8'];
				else $com8='';
				if(!empty($_POST['commentaire9'])) $com9=$_POST['commentaire9'];
				else $com9='';
				if(!empty($_POST['commentaire10'])) $com10=$_POST['commentaire10'];
				else $com10='';
				if(!empty($_POST['commentaire11'])) $com11=$_POST['commentaire11'];
				else $com11='';
				
				$bdd = connectDb();
				$query =$bdd->prepare('INSERT INTO personne  (sexe, age, region, question1, com1, question2, com2, question3, com3, question4, com4, question5, com5, 
				question6, com6, question7, com7, question8, com8, question9, com9, question10, com10, question11, com11) 
				VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
				$query->execute(array($sexe,$age,$region,$reponse1,$com1,$reponse2,$com2,$reponse3,$com3,$reponse4,$com4,$reponse5,$com5,$reponse6,$com6,$reponse7,$com7,$reponse8,$com8,$reponse9,$com9,$reponse10,$com10,$reponse11,$com11));
								
			}
			
			
        ?>

