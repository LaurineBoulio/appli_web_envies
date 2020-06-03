
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
				<h3>Aucune question n'est obligatoire cependant essayer de ne pas laisser de reponses neutres</h3>
				
				
				<form method='post' action='#'>
				
					<h2>0. Qui êtes-vous ?</h2>			
					<div class="reponse">
						<label for="sexeChoix1"><h3>Sexe : </h3></label>
						<input type="radio" id="SexeChoix1"
						 name="qSexe" value="F">
						<label for="sexeChoix1">F</label>
						<input type="radio" id="SexeChoix2"
						 name="qSexe" value="G">
						<label for="sexeChoix2">G</label>
						 </br>				
						<label for="age"><h3>Age:</h3></label>
						<input type="number" id="age" name="qAge" min="0" max="100">
						 </br>
						<label for="regionChoix"><h3>Région : </h3></label> </br>
						<section>
							<input type="radio" id="Region1"
							 name="qRegion" value="Auvergne-Rhône-Alpes">
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
						<input type="radio" id="Formulaire1A"
						 name="choix1" value="campagne">
						<label for="formulaire1A">Campagne</label>
						 </br>
						<input type="radio" id="Formulaire1B"
						 name="choix1" value="plage">
						<label for="formulaire1B">Plage</label>
						 </br>
						<input type="radio" id="Formulaire1C"
						 name="choix1" value="ski">
						<label for="formulaire1C">Ski</label>
						 </br>					
					</div>
					
					<h2>2. Quand vous sortez entre amis, vous préférez aller : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire2A"
						 name="choix2" value="bar">
						<label for="formulaire2A">Bar</label>
						 </br>
						<input type="radio" id="Formulaire2B"
						 name="choix2" value="cinema">
						<label for="formulaire2B">Cinéma</label>
						 </br>
						<input type="radio" id="Formulaire2C"
						 name="choix2" value="concert">
						<label for="formulaire2C">Concert</label>
						 </br>	
						<input type="radio" id="Formulaire2D"
						 name="choix2" value="magasin">
						<label for="formulaire2D">Magasin</label>
						 </br>						 
					</div>
					
					<h2>3. Le soir vous aimez : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire3A"
						 name="choix3" value="jeu">
						<label for="formulaire3A">Jouer à votre jeu préféré</label>
						 </br>
						<input type="radio" id="Formulaire3B"
						 name="choix3" value="lire">
						<label for="formulaire3B">Lire</label>
						 </br>
						<input type="radio" id="Formulaire3C"
						 name="choix3" value="tele">
						<label for="formulaire3C">Regarder la télé</label>
						 </br>	
						<input type="radio" id="Formulaire3D"
						 name="choix3" value="portable">
						<label for="formulaire3D">Rester sur votre portable</label>
						 </br>						 
					</div>
					
					<h2>4. Quand vous prenez un verre en terrasse, c'est plutôt : </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire4A"
						 name="choix4" value="eau">
						<label for="formulaire4A">De l'eau</label>
						 </br>
						<input type="radio" id="Formulaire4B"
						 name="choix4" value="vin">
						<label for="formulaire4B">Du vin</label>
						 </br>
						<input type="radio" id="Formulaire4C"
						 name="choix4" value="cafe">
						<label for="formulaire4C">Un café</label>
						 </br>	
						<input type="radio" id="Formulaire4D"
						 name="choix4" value="jusFruit">
						<label for="formulaire4D">Un jus de fruit</label>
						 </br>
						<input type="radio" id="Formulaire4E"
						 name="choix4" value="soda">
						<label for="formulaire4E">Un soda</label>
						 </br>		
						<input type="radio" id="Formulaire4F"
						 name="choix4" value="biere">
						<label for="formulaire4F">Une bière</label>
						 </br>							 
					</div>
					
					<h2>5. Quelle serait l'habitation idéale ? </h2>
					<div class="reponse">
						<input type="radio" id="Formulaire5A"
						 name="choix5" value="appartVille">
						<label for="formulaire5A">Un appartement en ville</label>
						 </br>
						<input type="radio" id="Formulaire5B"
						 name="choix5" value="cabaneForet">
						<label for="formulaire5B">Une cabane perdue dans la forêt</label>
						 </br>
						<input type="radio" id="Formulaire5C"
						 name="choix5" value="maisonCampagne">
						<label for="formulaire5C">Une maison de campagne</label>
						 </br>					 
					</div>

					<h2>6. Quel animal de compagnie aimeriez-vous avoir :</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire6A"
							 name="choix6" value="aucun">
							<label for="formulaire6A">Aucun</label>
							 </br>
							<input type="radio" id="Formulaire6B"
							 name="choix6" value="chat">
							<label for="formulaire6B">Un chat</label>
							 </br>
							<input type="radio" id="Formulaire6C"
							 name="choix6" value="chien">
							<label for="formulaire6C">Un chien</label>
							 </br>			
							<input type="radio" id="Formulaire6D"
							 name="choix6" value="hamster">
							<label for="formulaire6D">Un hamster</label>
							 </br>
							<input type="radio" id="Formulaire6E"
							 name="choix6" value="lapin">
							<label for="formulaire6E">Un lapin</label>
							 </br>		
							<input type="radio" id="Formulaire6F"
							 name="choix6" value="poisson">
							<label for="formulaire6F">Un poisson</label>
							 </br>			
							<input type="radio" id="Formulaire6G"
							 name="choix6" value="rat">
							<label for="formulaire6G">Un rat</label>
							 </br>
							<input type="radio" id="Formulaire6H"
							 name="choix6" value="serpent">
							<label for="formulaire6H">Un serpent</label>
							 </br>		
							<input type="radio" id="Formulaire6I"
							 name="choix6" value="tortue">
							<label for="formulaire6I">Une tortue</label>
							 </br>
							<input type="radio" id="Formulaire6J"
							 name="choix6" value="autre">
							<label for="formulaire6J">Autre</label>
							 </br>							 
						</section>
						</div>
						
						<h2>7. Quelle catégorie de film vous attire le plus ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire7A"
							 name="choix7" value="animation">
							<label for="formulaire7A">Animation</label>
							 </br>
							<input type="radio" id="Formulaire7B"
							 name="choix7" value="comedie">
							<label for="formulaire7B">Comédie</label>
							 </br>
							<input type="radio" id="Formulaire7C"
							 name="choix7" value="documentaire">
							<label for="formulaire7C">Documentaire</label>
							 </br>			
							<input type="radio" id="Formulaire7D"
							 name="choix7" value="drame">
							<label for="formulaire7D">Drame</label>
							 </br>
							<input type="radio" id="Formulaire7E"
							 name="choix7" value="fantastique">
							<label for="formulaire7E">Fantastique</label>
							 </br>		
							<input type="radio" id="Formulaire7F"
							 name="choix7" value="horreur">
							<label for="formulaire7F">Horreur</label>
							 </br>			
							<input type="radio" id="Formulaire7G"
							 name="choix7" value="thriller">
							<label for="formulaire7G">Thriller</label>
							 </br>
							<input type="radio" id="Formulaire7H"
							 name="choix7" value="science-fiction">
							<label for="formulaire7H">Science-fiction</label>
							 </br>		
							<input type="radio" id="Formulaire7J"
							 name="choix7" value="autre">
							<label for="formulaire7J">Autre</label>
							 </br>							 
						</section>
						</div>
						
						<h2>8. Quel genre de musique écoutez-vous ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire8A"
							 name="choix8" value="blues">
							<label for="formulaire8A">Blues</label>
							 </br>
							<input type="radio" id="Formulaire8B"
							 name="choix8" value="classique">
							<label for="formulaire8B">Classique</label>
							 </br>
							<input type="radio" id="Formulaire8C"
							 name="choix8" value="dubstep">
							<label for="formulaire8C">Dubstep</label>
							 </br>			
							<input type="radio" id="Formulaire8D"
							 name="choix8" value="electro">
							<label for="formulaire8D">Electro</label>
							 </br>
							<input type="radio" id="Formulaire8E"
							 name="choix8" value="jazz">
							<label for="formulaire8E">Jazz</label>
							 </br>		
							<input type="radio" id="Formulaire8F"
							 name="choix8" value="metal">
							<label for="formulaire8F">Métal</label>
							 </br>			
							<input type="radio" id="Formulaire8G"
							 name="choix8" value="rap">
							<label for="formulaire8G">Rap</label>
							 </br>
							<input type="radio" id="Formulaire8H"
							 name="choix8" value="reggae">
							<label for="formulaire8H">Reggae</label>
							 </br>		
							<input type="radio" id="Formulaire8I"
							 name="choix8" value="rnb">
							<label for="formulaire8I">RnB</label>
							 </br>	
							<input type="radio" id="Formulaire8J"
							 name="choix8" value="rock">
							<label for="formulaire8J">Rock</label>
							 </br>
							<input type="radio" id="Formulaire8K"
							 name="choix8" value="autre">
							<label for="formulaire8K">Autre</label>
							 </br>							 
						</section>
						</div>
						
						<h2>9. Le weekend arrive, c'est le moment de relâcher la pression ! Quel plat vous donne le plus envie ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire9A"
							 name="choix9" value="africain">
							<label for="formulaire9A">Africain</label>
							 </br>
							<input type="radio" id="Formulaire9B"
							 name="choix9" value="alg?en">
							<label for="formulaire9B">Algérien</label>
							 </br>
							<input type="radio" id="Formulaire9C"
							 name="choix9" value="chinois">
							<label for="formulaire9C">Chinois</label>
							 </br>			
							<input type="radio" id="Formulaire9D"
							 name="choix9" value="fastfood">
							<label for="formulaire9D">Fastfood</label>
							 </br>
							<input type="radio" id="Formulaire9E"
							 name="choix9" value="gastronomique">
							<label for="formulaire9E">Gastronomique</label>
							 </br>		
							<input type="radio" id="Formulaire9F"
							 name="choix9" value="indien">
							<label for="formulaire9F">Indien</label>
							 </br>			
							<input type="radio" id="Formulaire9G"
							 name="choix9" value="italien ">
							<label for="formulaire9G">Italien </label>
							 </br>
							<input type="radio" id="Formulaire9H"
							 name="choix9" value="japonais">
							<label for="formulaire9H">Japonais</label>
							 </br>		
							<input type="radio" id="Formulaire9I"
							 name="choix9" value="marocain">
							<label for="formulaire9I">Marocain</label>
							 </br>	
							<input type="radio" id="Formulaire9J"
							 name="choix9" value="mexicain">
							<label for="formulaire9J">Mexicain</label>
							 </br>
							<input type="radio" id="Formulaire9K"
							 name="choix9" value="autre">
							<label for="formulaire9K">Autre</label>
							 </br>							 
						</section>
						</div>
						
						
						<h2>10. Quel sport vous plaît le plus ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire10A"
							 name="choix10" value="basket-ball">
							<label for="formulaire10A">Basket-ball</label>
							 </br>
							<input type="radio" id="Formulaire10B"
							 name="choix10" value="canoe-kayak">
							<label for="formulaire10B">Canoe-Kayak</label>
							 </br>
							<input type="radio" id="Formulaire10C"
							 name="choix10" value="equitation">
							<label for="formulaire10C">Equitation</label>
							 </br>			
							<input type="radio" id="Formulaire10D"
							 name="choix10" value="football">
							<label for="formulaire10D">Football</label>
							 </br>
							<input type="radio" id="Formulaire10E"
							 name="choix10" value="golf">
							<label for="formulaire10E">Golf</label>
							 </br>		
							<input type="radio" id="Formulaire10F"
							 name="choix10" value="handball">
							<label for="formulaire10F">Handball</label>
							 </br>			
							<input type="radio" id="Formulaire10G"
							 name="choix10" value="judo">
							<label for="formulaire10G">Judo</label>
							 </br>
							<input type="radio" id="Formulaire10H"
							 name="choix10" value="rugby">
							<label for="formulaire10H">Rugby</label>
							 </br>		
							<input type="radio" id="Formulaire10I"
							 name="choix10" value="sports sous-marins">
							<label for="formulaire10I">Sports sous-marins</label>
							 </br>	
							<input type="radio" id="Formulaire10J"
							 name="choix10" value="tennis">
							<label for="formulaire10J">Tennis</label>
							 </br>
							<input type="radio" id="Formulaire10K"
							 name="choix10" value="autre">
							<label for="formulaire10K">Autre</label>
							 </br>							 
						</section>
						
					</div>
					
					<h2>11. Quelle est votre destination de rêve ?</h2>
					<div class="reponse">
						<section>
							<input type="radio" id="Formulaire11A"
							 name="choix11" value="allemagne">
							<label for="formulaire11A">Allemagne</label>
							 </br>
							<input type="radio" id="Formulaire11B"
							 name="choix11" value="chine">
							<label for="formulaire11B">Chine</label>
							 </br>
							<input type="radio" id="Formulaire11C"
							 name="choix11" value="espagne">
							<label for="formulaire11C">Espagne</label>
							 </br>			
							<input type="radio" id="Formulaire11D"
							 name="choix11" value="etats-Unis">
							<label for="formulaire11D">Etats-Unis</label>
							 </br>
							<input type="radio" id="Formulaire11E"
							 name="choix11" value="france">
							<label for="formulaire11E">France</label>
							 </br>		
							<input type="radio" id="Formulaire11F"
							 name="choix11" value="italie">
							<label for="formulaire11F">Italie</label>
							 </br>			
							<input type="radio" id="Formulaire11G"
							 name="choix11" value="royaume-uni">
							<label for="formulaire11G">Royaume-Uni</label>
							 </br>
							<input type="radio" id="Formulaire11H"
							 name="choix11" value="russie">
							<label for="formulaire11H">Russie</label>
							 </br>		
							<input type="radio" id="Formulaire11I"
							 name="choix11" value="thailande">
							<label for="formulaire11I">Thailande</label>
							 </br>	
							<input type="radio" id="Formulaire11J"
							 name="choix11" value="turquie">
							<label for="formulaire11J">Turquie</label>
							 </br>
							<input type="radio" id="Formulaire11K"
							 name="choix11" value="autre">
							<label for="formulaire11K">Autre</label>
							<input type="text" id="commentaire11" name="commentaire11"  maxlength="30" size="30">				
							
							 </br>							 
						</section>
						
					</div>
					
					
					<div style="margin-left: 900px;"><input type="submit" name="confirmer" value="Confirmer"></div><br><br>
					
				</form>	
		</div>	
	</body>
	
		
</html>

<?php
			if(isset($_POST['confirmer'])){
				if(!empty($_POST['qAge'])) $age=$_POST['qAge'];
				else $age='';
				
						
            $sexe=$_POST['qSexe'];
			$region=$_POST['qRegion'];
        
            $bdd = connectDb();
			$query =$bdd->prepare('INSERT INTO personne  (sexe, age, region) VALUES(?,?,?)');
			$query->execute(array($sexe,$age,$region));
			}
        ?>

