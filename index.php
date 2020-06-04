
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
						<label for="sexeChoix1"><h3>Sexe : <span class="sanssautdeligne">*</span></h3></label>
						<input type="radio" id="SexeChoix1"
						 name="qSexe" value="F" checked>
						<label for="sexeChoix1">F</label>
						<input type="radio" id="SexeChoix2"
						 name="qSexe" value="G">
						<label for="sexeChoix2">G</label>
						 </br>				
						<label for="age"><h3>Age: <span class="sanssautdeligne">*</span></h3></label>
						<input type="number" id="age" name="qAge" min="0" max="100">
						 </br>
						<label for="regionChoix"><h3>Région : <span class="sanssautdeligne">*</span></h3></label> </br>
						<section>
							<input type="radio" id="Region1"
							 name="qRegion" value="Auvergne-Rhône-Alpes" checked>
							<label for="Region1">Auvergne-Rhône-Alpes</label>
							 </br>
							 <input type="radio" id="Region2"
							 name="qRegion" value="Bourgogne-Franche-Comte">
							<label for="Region2">Bourgogne-Franche-Comte</label>
							 </br>
							<input type="radio" id="Region3"
							 name="qRegion" value="Bretagne">
							<label for="Region3">Bretagne</label>
							 </br>
							 <input type="radio" id="Region4"
							 name="qRegion" value="Centre-Val de Loire">
							<label for="Region4">Centre-Val de Loire</label>
							 </br>					
							<input type="radio" id="Region5"
							 name="qRegion" value="Corse">
							<label for="Region5">Corse</label>
							 </br> 
							<input type="radio" id="Region6"
							 name="qRegion" value="Grand Est">
							<label for="Region6">Grand Est</label>
							 </br>
							<input type="radio" id="Region7"
							 name="qRegion" value="Hauts-de-France">
							<label for="Region7">Hauts-de-France</label>
							 </br> 
							<input type="radio" id="Region8"
							 name="qRegion" value="Ile-de-France">
							<label for="Region8">Ile-de-France</label>
							 </br>
							<input type="radio" id="Region9"
							 name="qRegion" value="Normandie">
							<label for="Region9">Normandie</label>					
							 </br>				
							<input type="radio" id="Region10"
							 name="qRegion" value="Nouvelle-Aquitaine">
							<label for="Region10">Nouvelle-Aquitaine</label>		
							 </br>
							<input type="radio" id="Region11"
							 name="qRegion" value="Occitanie">
							<label for="Region11">Occitanie</label>
							 </br>						 
							<input type="radio" id="Region12"
							 name="qRegion" value="Pays de la Loire">
							<label for="Region12">Pays de la Loire</label>			
							 </br>
							<input type="radio" id="Region13"
							 name="qRegion" value="Provence-Alpes-Cote d'Azur">
							<label for="Region13">Provence-Alpes-Côte d'Azur</label>
							 </br>
						</section>
					</div>
					
					<h2>1. Pour vous, des vacances de rêve riment avec : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire0a"
						 name="choix1" value="nul" checked onclick="griser()">
						<label for="formulaire1a">Pas de réponse</label>
						 </br>
						<input type="radio" id="Formulaire1A"
						 name="choix1" value="campagne" onclick="griser()">
						<label for="formulaire1A">Campagne</label>
						 </br>
						<input type="radio" id="Formulaire1B"
						 name="choix1" value="plage" onclick="griser()">
						<label for="formulaire1B">Plage</label>
						 </br>
						<input type="radio" id="Formulaire1C"
						 name="choix1" value="ski" onclick="griser()">
						<label for="formulaire1C">Ski</label>
						 </br>	
						<input type="radio" id="Formulaire1D"
						name="choix1" value="autre" onclick="nonGriser()">
						<label for="formulaire1D">Autre</label>
						<input type="text" id="commentaire1" name="commentaire1"  maxlength="30" size="30" disabled >	
						</br>
					</div>
					
					<h2>2. Quand vous sortez entre amis, vous préférez aller : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire2a"
						 name="choix2" value="nul" checked onclick="griser()">
						<label for="formulaire2a">Pas de réponse</label>
						 </br>
						<input type="radio" id="Formulaire2A"
						 name="choix2" value="bar" onclick="griser()">
						<label for="formulaire2A">Bar</label>
						 </br>
						<input type="radio" id="Formulaire2B"
						 name="choix2" value="cinema" onclick="griser()">
						<label for="formulaire2B">Cinéma</label>
						 </br>
						<input type="radio" id="Formulaire2C"
						 name="choix2" value="concert" onclick="griser()">
						<label for="formulaire2C">Concert</label>
						 </br>	
						<input type="radio" id="Formulaire2D"
						 name="choix2" value="magasin" onclick="griser()">
						<label for="formulaire2D">Magasin</label>
						 </br>	
						<input type="radio" id="Formulaire2E"
						name="choix2" value="autre" onclick="nonGriser()">
						<label for="formulaire2E">Autre</label>
						<input type="text" id="commentaire2" name="commentaire2"  maxlength="30" size="30" disabled >	
						</br>						 
					</div>
					
					<h2>3. Le soir vous aimez : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire3a"
						 name="choix3" value="nul" checked onclick="griser()">
						<label for="formulaire3a">Pas de réponse</label>
						 </br>
						<input type="radio" id="Formulaire3A"
						 name="choix3" value="jeu" onclick="griser()">
						<label for="formulaire3A">Jouer à votre jeu préféré</label>
						 </br>
						<input type="radio" id="Formulaire3B"
						 name="choix3" value="lire" onclick="griser()">
						<label for="formulaire3B">Lire</label>
						 </br>
						<input type="radio" id="Formulaire3C"
						 name="choix3" value="tele" onclick="griser()">
						<label for="formulaire3C">Regarder la télé</label>
						 </br>	
						<input type="radio" id="Formulaire3D"
						 name="choix3" value="portable" onclick="griser()">
						<label for="formulaire3D">Rester sur votre portable</label>
						 </br>
						<input type="radio" id="Formulaire3E"
						name="choix3" value="autre" onclick="nonGriser()">
						<label for="formulaire3E">Autre</label>
						<input type="text" id="commentaire3" name="commentaire3"  maxlength="30" size="30" disabled >	
						</br>
					</div>
					
					<h2>4. Quand vous prenez un verre en terrasse, c'est plutôt : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire4a"
						 name="choix4" value="nul" checked onclick="griser()">
						<label for="formulaire4a">Pas de réponse</label>
						 </br>
						<input type="radio" id="Formulaire4A"
						 name="choix4" value="eau" onclick="griser()">
						<label for="formulaire4A">De l'eau</label>
						 </br>
						<input type="radio" id="Formulaire4B"
						 name="choix4" value="vin" onclick="griser()">
						<label for="formulaire4B">Du vin</label>
						 </br>
						<input type="radio" id="Formulaire4C"
						 name="choix4" value="cafe" onclick="griser()">
						<label for="formulaire4C">Un café</label>
						 </br>	
						<input type="radio" id="Formulaire4D"
						 name="choix4" value="jusFruit" onclick="griser()">
						<label for="formulaire4D">Un jus de fruit</label>
						 </br>
						<input type="radio" id="Formulaire4E"
						 name="choix4" value="soda" onclick="griser()">
						<label for="formulaire4E">Un soda</label>
						 </br>		
						<input type="radio" id="Formulaire4F"
						 name="choix4" value="biere" onclick="griser()">
						<label for="formulaire4F">Une bière</label>
						 </br>
						<input type="radio" id="Formulaire4G"
						name="choix4" value="autre" onclick="nonGriser()">
						<label for="formulaire4G">Autre</label>
						<input type="text" id="commentaire4" name="commentaire4"  maxlength="30" size="30" disabled >	
						</br>						 
					</div>
					
					<h2>5. Quelle serait l'habitation idéale ? </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire5a"
						 name="choix5" value="nul" checked onclick="griser()">
						<label for="formulaire5a">Pas de réponse</label>
						 </br>
						<input type="radio" id="Formulaire5A"
						 name="choix5" value="appartVille" onclick="griser()">
						<label for="formulaire5A">Un appartement en ville</label>
						 </br>
						<input type="radio" id="Formulaire5B"
						 name="choix5" value="cabaneForet" onclick="griser()">
						<label for="formulaire5B">Une cabane perdue dans la forêt</label>
						 </br>
						<input type="radio" id="Formulaire5C"
						 name="choix5" value="maisonCampagne" onclick="griser()">
						<label for="formulaire5C">Une maison de campagne</label>
						 </br>	
						<input type="radio" id="Formulaire5D"
						name="choix5" value="autre" onclick="nonGriser()">
						<label for="formulaire5D">Autre</label>
						<input type="text" id="commentaire5" name="commentaire5"  maxlength="30" size="30" disabled >	
						</br>						 
					</div>

					<h2>6. Quel animal de compagnie aimeriez-vous avoir :</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire6a"
							 name="choix6" value="nul" checked onclick="griser()">
							<label for="formulaire6a">Pas de réponse</label>
							 </br>
							<input type="radio" id="Formulaire6A"
							 name="choix6" value="aucun" onclick="griser()">
							<label for="formulaire6A">Aucun</label>
							 </br>
							<input type="radio" id="Formulaire6B"
							 name="choix6" value="chat" onclick="griser()">
							<label for="formulaire6B">Un chat</label>
							 </br>
							<input type="radio" id="Formulaire6C"
							 name="choix6" value="chien" onclick="griser()">
							<label for="formulaire6C">Un chien</label>
							 </br>			
							<input type="radio" id="Formulaire6D"
							 name="choix6" value="hamster" onclick="griser()">
							<label for="formulaire6D">Un hamster</label>
							 </br>
							<input type="radio" id="Formulaire6E"
							 name="choix6" value="lapin" onclick="griser()">
							<label for="formulaire6E">Un lapin</label>
							 </br>		
							<input type="radio" id="Formulaire6F"
							 name="choix6" value="poisson" onclick="griser()">
							<label for="formulaire6F">Un poisson</label>
							 </br>			
							<input type="radio" id="Formulaire6G"
							 name="choix6" value="rat" onclick="griser()">
							<label for="formulaire6G">Un rat</label>
							 </br>
							<input type="radio" id="Formulaire6H"
							 name="choix6" value="serpent" onclick="griser()">
							<label for="formulaire6H">Un serpent</label>
							 </br>		
							<input type="radio" id="Formulaire6I"
							 name="choix6" value="tortue" onclick="griser()">
							<label for="formulaire6I">Une tortue</label>
							 </br>
							<input type="radio" id="Formulaire6J"
							name="choix6" value="autre" onclick="nonGriser()">
							<label for="formulaire6J">Autre</label>
							<input type="text" id="commentaire6" name="commentaire6"  maxlength="30" size="30" disabled >	
							 </br>							 
						</section>
						</div>
						
						<h2>7. Quelle catégorie de film vous attire le plus ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire7a"
							 name="choix7" value="nul" checked onclick="griser()">
							<label for="formulaire7a">Pas de réponse</label>
							 </br>
							<input type="radio" id="Formulaire7A"
							 name="choix7" value="animation" onclick="griser()">
							<label for="formulaire7A">Animation</label>
							 </br>
							<input type="radio" id="Formulaire7B"
							 name="choix7" value="comedie" onclick="griser()">
							<label for="formulaire7B">Comédie</label>
							 </br>
							<input type="radio" id="Formulaire7C"
							 name="choix7" value="documentaire" onclick="griser()">
							<label for="formulaire7C">Documentaire</label>
							 </br>			
							<input type="radio" id="Formulaire7D"
							 name="choix7" value="drame" onclick="griser()">
							<label for="formulaire7D">Drame</label>
							 </br>
							<input type="radio" id="Formulaire7E"
							 name="choix7" value="fantastique" onclick="griser()">
							<label for="formulaire7E">Fantastique</label>
							 </br>		
							<input type="radio" id="Formulaire7F"
							 name="choix7" value="horreur" onclick="griser()">
							<label for="formulaire7F">Horreur</label>
							 </br>			
							<input type="radio" id="Formulaire7G"
							 name="choix7" value="thriller" onclick="griser()">
							<label for="formulaire7G">Thriller</label>
							 </br>
							<input type="radio" id="Formulaire7H"
							 name="choix7" value="science-fiction" onclick="griser()">
							<label for="formulaire7H">Science-fiction</label>
							 </br>		
							<input type="radio" id="Formulaire7J"
							 name="choix7" value="autre" onclick="griser()">
							<label for="formulaire7J">Autre</label>
							 </br>	
							<input type="radio" id="Formulaire7K"
							name="choix7" value="autre" onclick="nonGriser()">
							<label for="formulaire7K">Autre</label>
							<input type="text" id="commentaire7" name="commentaire7"  maxlength="30" size="30" disabled >	
							 </br>
						</section>
						</div>
						
						<h2>8. Quel genre de musique écoutez-vous ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire8a"
							 name="choix8" value="nul" checked onclick="griser()">
							<label for="formulaire8a">Pas de réponse</label>
							 </br>
							<input type="radio" id="Formulaire8A"
							 name="choix8" value="blues" onclick="griser()">
							<label for="formulaire8A">Blues</label>
							 </br>
							<input type="radio" id="Formulaire8B"
							 name="choix8" value="classique" onclick="griser()">
							<label for="formulaire8B">Classique</label>
							 </br>
							<input type="radio" id="Formulaire8C"
							 name="choix8" value="dubstep" onclick="griser()">
							<label for="formulaire8C">Dubstep</label>
							 </br>			
							<input type="radio" id="Formulaire8D"
							 name="choix8" value="electro" onclick="griser()">
							<label for="formulaire8D">Electro</label>
							 </br>
							<input type="radio" id="Formulaire8E"
							 name="choix8" value="jazz" onclick="griser()">
							<label for="formulaire8E">Jazz</label>
							 </br>		
							<input type="radio" id="Formulaire8F"
							 name="choix8" value="metal" onclick="griser()">
							<label for="formulaire8F">Métal</label>
							 </br>			
							<input type="radio" id="Formulaire8G"
							 name="choix8" value="rap" onclick="griser()">
							<label for="formulaire8G">Rap</label>
							 </br>
							<input type="radio" id="Formulaire8H"
							 name="choix8" value="reggae" onclick="griser()">
							<label for="formulaire8H">Reggae</label>
							 </br>		
							<input type="radio" id="Formulaire8I"
							 name="choix8" value="rnb" onclick="griser()">
							<label for="formulaire8I">RnB</label>
							 </br>	
							<input type="radio" id="Formulaire8J"
							 name="choix8" value="rock" onclick="griser()">
							<label for="formulaire8J">Rock</label>
							 </br>
							<input type="radio" id="Formulaire8K"
							name="choix8" value="autre" onclick="nonGriser()">
							<label for="formulaire8K">Autre</label>
							<input type="text" id="commentaire8" name="commentaire8"  maxlength="30" size="30" disabled >	
							 </br>						 
						</section>
						</div>
						
						<h2>9. Le weekend arrive, c'est le moment de relâcher la pression ! Quel plat vous donne le plus envie ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire9a"
							 name="choix9" value="nul" checked onclick="griser()">
							<label for="formulaire9a">Pas de réponse</label>
							 </br>
							<input type="radio" id="Formulaire9A"
							 name="choix9" value="africain" onclick="griser()">
							<label for="formulaire9A">Africain</label>
							 </br>
							<input type="radio" id="Formulaire9B"
							 name="choix9" value="algérien" onclick="griser()">
							<label for="formulaire9B">Algérien</label>
							 </br>
							<input type="radio" id="Formulaire9C"
							 name="choix9" value="chinois" onclick="griser()">
							<label for="formulaire9C">Chinois</label>
							 </br>			
							<input type="radio" id="Formulaire9D"
							 name="choix9" value="fastfood" onclick="griser()">
							<label for="formulaire9D">Fastfood</label>
							 </br>
							<input type="radio" id="Formulaire9E"
							 name="choix9" value="gastronomique" onclick="griser()">
							<label for="formulaire9E">Gastronomique</label>
							 </br>		
							<input type="radio" id="Formulaire9F"
							 name="choix9" value="indien" onclick="griser()">
							<label for="formulaire9F">Indien</label>
							 </br>			
							<input type="radio" id="Formulaire9G"
							 name="choix9" value="italien" onclick="griser()">
							<label for="formulaire9G">Italien </label>
							 </br>
							<input type="radio" id="Formulaire9H"
							 name="choix9" value="japonais" onclick="griser()">
							<label for="formulaire9H">Japonais</label>
							 </br>		
							<input type="radio" id="Formulaire9I"
							 name="choix9" value="marocain" onclick="griser()">
							<label for="formulaire9I">Marocain</label>
							 </br>	
							<input type="radio" id="Formulaire9J"
							 name="choix9" value="mexicain" onclick="griser()">
							<label for="formulaire9J">Mexicain</label>
							 </br>
							<input type="radio" id="Formulaire9K"
							name="choix9" value="autre" onclick="nonGriser()">
							<label for="formulaire9K">Autre</label>
							<input type="text" id="commentaire9" name="commentaire9"  maxlength="30" size="30" disabled >	
							 </br>							 
						</section>
						</div>
						
						
						<h2>10. Quel sport vous plaît le plus ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire10a"
							 name="choix10" value="nul" checked onclick="griser()">
							<label for="formulaire10a">Pas de réponse</label>
							 </br>
							<input type="radio" id="Formulaire10A"
							 name="choix10" value="basket-ball" onclick="griser()">
							<label for="formulaire10A">Basket-ball</label>
							 </br>
							<input type="radio" id="Formulaire10B"
							 name="choix10" value="canoe-kayak" onclick="griser()">
							<label for="formulaire10B">Canoe-Kayak</label>
							 </br>
							<input type="radio" id="Formulaire10C"
							 name="choix10" value="equitation" onclick="griser()">
							<label for="formulaire10C">Equitation</label>
							 </br>			
							<input type="radio" id="Formulaire10D"
							 name="choix10" value="football" onclick="griser()">
							<label for="formulaire10D">Football</label>
							 </br>
							<input type="radio" id="Formulaire10E"
							 name="choix10" value="golf" onclick="griser()">
							<label for="formulaire10E">Golf</label>
							 </br>		
							<input type="radio" id="Formulaire10F"
							 name="choix10" value="handball" onclick="griser()">
							<label for="formulaire10F">Handball</label>
							 </br>			
							<input type="radio" id="Formulaire10G"
							 name="choix10" value="judo" onclick="griser()">
							<label for="formulaire10G">Judo</label>
							 </br>
							<input type="radio" id="Formulaire10H"
							 name="choix10" value="rugby" onclick="griser()">
							<label for="formulaire10H">Rugby</label>
							 </br>		
							<input type="radio" id="Formulaire10I"
							 name="choix10" value="sports sous-marins" onclick="griser()">
							<label for="formulaire10I">Sports sous-marins</label>
							 </br>	
							<input type="radio" id="Formulaire10J"
							 name="choix10" value="tennis" onclick="griser()">
							<label for="formulaire10J">Tennis</label>
							 </br>
							<input type="radio" id="Formulaire10K"
							name="choix10" value="autre" onclick="nonGriser()">
							<label for="formulaire10K">Autre</label>
							<input type="text" id="commentaire10" name="commentaire10"  maxlength="30" size="30" disabled >	
							 </br>						 
						</section>
						
					</div>
					
					<h2>11. Quelle est votre destination de rêve ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire11a"
							 name="choix11" value="nul" checked onclick="griser()">
							<label for="formulaire11a">Pas de réponse</label>
							 </br>
							<input type="radio" id="Formulaire11A"
							 name="choix11" value="allemagne" onclick="griser()">
							<label for="formulaire11A">Allemagne</label>
							 </br>
							<input type="radio" id="Formulaire11B"
							 name="choix11" value="chine" onclick="griser()">
							<label for="formulaire11B">Chine</label>
							 </br>
							<input type="radio" id="Formulaire11C"
							 name="choix11" value="espagne" onclick="griser()">
							<label for="formulaire11C">Espagne</label>
							 </br>			
							<input type="radio" id="Formulaire11D"
							 name="choix11" value="etats-Unis" onclick="griser()">
							<label for="formulaire11D">Etats-Unis</label>
							 </br>
							<input type="radio" id="Formulaire11E"
							 name="choix11" value="france" onclick="griser()">
							<label for="formulaire11E">France</label>
							 </br>		
							<input type="radio" id="Formulaire11F"
							 name="choix11" value="italie" onclick="griser()">
							<label for="formulaire11F">Italie</label>
							 </br>			
							<input type="radio" id="Formulaire11G"
							 name="choix11" value="royaume-uni" onclick="griser()">
							<label for="formulaire11G">Royaume-Uni</label>
							 </br>
							<input type="radio" id="Formulaire11H"
							 name="choix11" value="russie" onclick="griser()">
							<label for="formulaire11H">Russie</label>
							 </br>		
							<input type="radio" id="Formulaire11I"
							 name="choix11" value="thailande" onclick="griser()">
							<label for="formulaire11I">Thailande</label>
							 </br>	
							<input type="radio" id="Formulaire11J"
							 name="choix11" value="turquie" onclick="griser()">
							<label for="formulaire11J">Turquie</label>
							 </br>
							<input type="radio" id="Formulaire11K"
							 name="choix11" value="autre" onclick="nonGriser()">
							<label for="formulaire11K">Autre</label>
							<input type="text" id="commentaire11" name="commentaire11"  maxlength="30" size="30" disabled >		
						
							
							 </br>							 
						</section>
						
					</div>
					
					  </br>
					  </br>
					  
					  
					  
					<div style="margin-left: 870px;"><input type="submit" name="confirmer" value="Confirmer"></div><br><br>
					
				</form>	
		</div>	
	</body>
	<script language="javascript" type="text/javascript">
		function nonGriser() {
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
			com1.disabled = false;
			com2.disabled = false;
			com3.disabled = false;
			com4.disabled = false;
			com5.disabled = false;
			com6.disabled = false;
			com7.disabled = false;
			com8.disabled = false;
			com9.disabled = false;
			com10.disabled = false;
			com11.disabled = false;
		}
		
		function griser() {
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
			com1.disabled = true;
			com2.disabled = true;
			com3.disabled = true;
			com4.disabled = true;
			com5.disabled = true;
			com6.disabled = true;
			com7.disabled = true;
			com8.disabled = true;
			com9.disabled = true;
			com10.disabled = true;
			com11.disabled = true;
		}
	</script>
</html>

<?php
			if(isset($_POST['confirmer'])){
				
				$id = 0;
				$sexe=$_POST['qSexe'];
				$age=$_POST['qAge'];	
				$region=$_POST['qRegion'];
			
				$bdd = connectDb();
				$query =$bdd->prepare('INSERT INTO personne  (id, sexe, age, region) VALUES(?,?,?,?)');
				$query->execute(array($id,$sexe,$age,$region));
				
				
				// $reponse1=$_POST['choix1'];
				// $commentaire='';
				// $num=1;
				
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire, id) VALUES(?,?,?,?)');
				// $query->execute(array($num,$reponse1,$commentaire, $id));
				
				// $reponse2=$_POST['choix2'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire, id) VALUES(?,?,?,?)');
				// $query->execute(array($num,$reponse2,$commentaire, $id));
				
				// $reponse3=$_POST['choix3'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire, id) VALUES(?,?,?,,)');
				// $query->execute(array($num,$reponse3,$commentaire, $id));
				
				// $reponse4=$_POST['choix4'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse4,$commentaire));
				
				// $reponse5=$_POST['choix5'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse5,$commentaire));
				
				// $reponse6=$_POST['choix6'];	
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse6,$commentaire));
				
				// $reponse7=$_POST['choix7'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse7,$commentaire));
				
				// $reponse8=$_POST['choix8'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse8,$commentaire));
				
				// $reponse9=$_POST['choix9'];	
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse9,$commentaire));
				
				// $reponse10=$_POST['choix10'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse10,$commentaire));
				
				// $reponse11=$_POST['choix11'];
				// $commentaire='';
				// $num++;
				// $bdd = connectDb();
				// $query =$bdd->prepare('INSERT INTO question  (num, reponse, commentaire) VALUES(?,?,?)');
				// $query->execute(array($num,$reponse11,$commentaire));
			}
			
			
        ?>

