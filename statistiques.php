
<?php
	require_once("BDD.php");
	

	
	if(isset($_POST['stats']) AND ($_POST['stats'] == 'Statistiques')){ 
		header("Location:statistiques.php"); 
	}
	
	if(isset($_POST['qcm']) AND ($_POST['qcm'] == 'Questionnaire	|')){ 
		header("Location:index.php"); 
	}
	
	?>	
	


<!DOCTYPE html>
<html lang=fr dir="ltr">
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Vos envies</title>
		<link rel="icon" type="image/png" href="assets/img/logo.png" />
	</head>
	<body>

	<div class="header" style=" height:60px;  background-color: #cc0052; color:#ffffff; font-size:30px;">
	<form method='post' action='#'>	
	

	<p style="float:left; padding-top:5px;"><img src="assets/img/logo.png" style="width:100px; height:100px; margin-left:10px"/></p>
<p>Vos envies

		
	<input type="submit" value="Statistiques" id="stats" name="stats" class="submit" style="margin-right:630px;float:right;background:none;color:#ffffff;border:none;font-size:20px;padding-top:5px;padding-top:25px;  border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;" disabled/>

	<input type="submit" value="Questionnaire	|" name="qcm" style="margin-right:0px;float:right;background:none;color:#ffffff;border:none;font-size:20px;padding-top:25px;border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;" /></p>
</div>
	</form>
	
	
		<div class="corps" style="height: 5790px;">
				<h1>Statistiques</h1>
				<form method='post' action='#'>
				<div class="reponse">
				<label for="critere"><h2>Critères : </h2></label>
				
				<SELECT name="sexe" id="sexe" size="1" >
						<OPTION value='Choisir sexe'>Sexe</OPTION>
						<OPTION value='Femme'>Femme</OPTION>
						<OPTION value='Homme'>Homme</OPTION>
						<OPTION value='Autre'>Autre</OPTION>
				</SELECT>
				
				
				<SELECT name="age" size="1" id="age" >
						<OPTION value='Choisir age'>Age</OPTION>
						<OPTION value='moins de 15 ans'>moins de 15 ans</OPTION>
						<OPTION value='15/17 ans'>15/17 ans</OPTION>
						<OPTION value='18/24 ans'>18/24 ans</OPTION>
						<OPTION value='25/34 ans'>25/34 ans</OPTION>
						<OPTION value='35/49 ans'>35/49 ans</OPTION>
						<OPTION value='50/64 ans'>50/64 ans</OPTION>
						<OPTION value='65 ans et plus'>65 ans et plus</OPTION>
				</SELECT>
				
				
				
				
				<SELECT name="region" size="1" id="region" >
					<OPTION value='Choisir region'>Région</OPTION>
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
				
				 <input type="submit" name="valider" id="valider" value="Valider"></br></br>
				
				</div>
				
<?php
			$nbPersonne =0;
			//question 1
			$campagne=0;
			$plage=0;
			$ski=0;
			$autre=0;
			$nul=0;
			//question 2
			$bar=0;
			$cinema=0;
			$concert=0;
			$magasin=0;
			$autre2=0;
			$nul2=0;
			//question 3
			$jouer=0;
			$lire=0;
			$tele=0;
			$portable=0;
			$autre3=0;
			$nul3=0;
			//question 4
			$eau=0;
			$vin=0;
			$cafe=0;
			$jusFruit=0;
			$soda=0;
			$biere=0;
			$autre4=0;
			$nul4=0;
			//question 5
			$appartVille=0;
			$cabaneForet=0;
			$maisonCampagne=0;
			$autre5=0;
			$nul5=0;
			//question 6
			$chat=0;
			$chien=0;
			$hamster=0;
			$lapin=0;
			$poisson=0;
			$rat=0;
			$serpent=0;
			$tortue=0;
			$autre6=0;
			$nul6=0;
			//question 7
			$animation=0;
			$comedie=0;
			$documentaire=0;
			$drame=0;
			$fantastique=0;
			$horreur=0;
			$thriller=0;
			$science_fiction=0;
			$autre7=0;
			$nul7=0;
			//question 8
			$blues=0;
			$classique=0;
			$dubstep=0;
			$electro=0;
			$jazz=0;
			$metal=0;
			$rap=0;
			$reggae=0;
			$rnb=0;
			$rock=0;
			$autre8=0;
			$nul8=0;
			//question 9
			$africain=0;
			$algerien=0;
			$chinois=0;
			$fastfood=0;
			$gastronomique=0;
			$indien=0;
			$italien=0;
			$japonais=0;
			$marocain=0;
			$mexicain=0;
			$autre9=0;
			$nul9=0;
			//question 10
			$basket_ball=0;
			$canoe_kayak=0;
			$equitation=0;
			$football=0;
			$golf=0;
			$handball=0;
			$judo=0;
			$rugby=0;
			$sports_sous_marins=0;
			$tennis=0;
			$autre10=0;
			$nul10=0;
			//question 11
			$allemagne=0;
			$chine=0;
			$espagne=0;
			$etats_unis=0;
			$france=0;
			$italie=0;
			$royaume_uni=0;
			$russie=0;
			$thailande=0;
			$turquie=0;
			$autre11=0;
			$nul11=0;
			
			
			if(isset($_POST['valider'])){
				$sexe=$_POST['sexe'];
				$age=$_POST['age'];
				$region=$_POST['region'];
							
				$bdd = connectDb();
				if($sexe != 'Choisir sexe' && $age != 'Choisir age' && $region != 'Choisir region'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE sexe=? and age=? and region=?');
					$query->execute(array($sexe,$age,$region));
				}
				else if($sexe != 'Choisir sexe' && $age != 'Choisir age'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE sexe=? and age=?');
					$query->execute(array($sexe,$age));
				}
				else if($sexe != 'Choisir sexe' && $region != 'Choisir region'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE sexe=? and region=?');
					$query->execute(array($sexe,$region));
				}
				else if($age != 'Choisir age' && $region != 'Choisir region'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE age=? and region=?');
					$query->execute(array($age,$region));
				}
				else if($sexe != 'Choisir sexe'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE sexe=?');
					$query->execute(array($sexe));
				}
				else if($age != 'Choisir age'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE age=?');
					$query->execute(array($age));
				}
				else if($region != 'Choisir region'){
					$query =$bdd->prepare('SELECT * FROM personne WHERE region=?');
					$query->execute(array($region));
				}
				else{
					$query =$bdd->prepare('SELECT * FROM personne');
					$query->execute(array());
				}
			}else{
				$bdd = connectDb();
					$query =$bdd->prepare('SELECT * FROM personne');
					$query->execute(array());
				}	
						
				while ($data = $query->fetch()){
					$nbPersonne += 1;
				
					// echo $data[1]; //sexe
					// echo $data[2]; //age
					// echo $data[3]; //region
					
				//****************Question 1****************************************
					if($data[4] == 'campagne') $campagne +=1;
					else if($data[4] == 'plage') $plage +=1;
					else if($data[4] == 'ski') $ski +=1;
					else if($data[4] == 'nul') $nul +=1;
					else $autre +=1; 						
					
				//****************Question 2*****************************************
					if($data[6] == 'bar') $bar +=1;
					else if($data[6] == 'cinema') $cinema +=1;
					else if($data[6] == 'concert') $concert +=1;
					else if($data[6] == 'magasin') $magasin +=1;
					else if($data[6] == 'nul') $nul2 +=1;
					else $autre2 +=1; 
					
				//****************Question 3****************************************
					if($data[8] == 'jouer') $jouer +=1;
					else if($data[8] == 'lire') $lire +=1;
					else if($data[8] == 'tele') $tele +=1;
					else if($data[8] == 'portable') $portable +=1;
					else if($data[8] == 'nul') $nul3 +=1;
					else $autre3 +=1; 
				
				//****************Question 4****************************************
					if($data[10] == 'eau') $eau +=1;
					else if($data[10] == 'cafe') $cafe +=1;
					else if($data[10] == 'jusFruit') $jusFruit +=1;
					else if($data[10] == 'soda') $soda +=1;
					else if($data[10] == 'biere') $biere +=1;
					else if($data[10] == 'nul') $nul4 +=1;
					else $autre4 +=1; 
				
				//****************Question 5****************************************
					if($data[12] == 'appartVille') $appartVille +=1;
					else if($data[12] == 'cabaneForet') $cabaneForet +=1;
					else if($data[12] == 'maisonCampagne') $maisonCampagne +=1;
					else if($data[12] == 'nul') $nul5 +=1;
					else $autre5 +=1; 
				
				//****************Question 6****************************************
					if($data[14] == 'chat') $chat +=1;
					else if($data[14] == 'chien') $chien +=1;
					else if($data[14] == 'hamster') $hamster +=1;
					else if($data[14] == 'lapin') $lapin +=1;
					else if($data[14] == 'poisson') $poisson +=1;
					else if($data[14] == 'rat') $rat +=1;
					else if($data[14] == 'serpent') $serpent +=1;
					else if($data[14] == 'tortue') $tortue +=1;
					else if($data[14] == 'nul') $nul6 +=1;
					else $autre6 +=1; 
				
				//****************Question 7****************************************
					if($data[16] == 'animation') $animation +=1;
					else if($data[16] == 'comedie') $comedie +=1;
					else if($data[16] == 'documentaire') $documentaire +=1;
					else if($data[16] == 'drame') $drame +=1;
					else if($data[16] == 'fantastique') $fantastique +=1;
					else if($data[16] == 'horreur') $horreur +=1;
					else if($data[16] == 'thriller') $thriller +=1;
					else if($data[16] == 'science-fiction') $science_fiction +=1;
					else if($data[16] == 'nul') $nul7 +=1;
					else $autre7 +=1; 
				
				//****************Question 8****************************************
					if($data[18] == 'blues') $blues +=1;
					else if($data[18] == 'classique') $classique +=1;
					else if($data[18] == 'dubstep') $dubstep +=1;
					else if($data[18] == 'electro') $electro +=1;
					else if($data[18] == 'jazz') $jazz +=1;
					else if($data[18] == 'metal') $metal +=1;
					else if($data[18] == 'rap') $rap +=1;
					else if($data[18] == 'reggae') $reggae +=1;
					else if($data[18] == 'rnb') $rnb +=1;
					else if($data[18] == 'rock') $rock +=1;
					else if($data[18] == 'nul') $nul8 +=1;
					else $autre8 +=1; 
				
				//****************Question 9****************************************
					if($data[20] == 'africain') $africain +=1;
					else if($data[20] == 'algérien') $algerien +=1;
					else if($data[20] == 'chinois') $chinois +=1;
					else if($data[20] == 'fastfood') $fastfood +=1;
					else if($data[20] == 'gastronomique') $gastronomique +=1;
					else if($data[20] == 'indien') $indien +=1;
					else if($data[20] == 'italien') $italien +=1;
					else if($data[20] == 'japonais') $japonais +=1;
					else if($data[20] == 'marocain') $marocain +=1;
					else if($data[20] == 'mexicain') $mexicain +=1;
					else if($data[20] == 'nul') $nul9 +=1;
					else $autre9 +=1;
				
				//****************Question 10****************************************
					if($data[22] == 'basket-ball') $basket_ball +=1;
					else if($data[22] == 'canoe-kayak') $canoe_kayak +=1;
					else if($data[22] == 'equitation') $equitation +=1;
					else if($data[22] == 'football') $football +=1;
					else if($data[22] == 'golf') $golf +=1;
					else if($data[22] == 'handball') $handball +=1;
					else if($data[22] == 'sports sous-marins') $sports_sous_marin +=1;
					else if($data[22] == 'rugby') $rugby +=1;
					else if($data[22] == 'tennis') $tennis +=1;
					else if($data[22] == 'nul') $nul10 +=1;
					else $autre10 +=1;
				
				//****************Question 11****************************************
					if($data[24] == 'chine') $chine +=1;
					else if($data[24] == 'espagne') $espagne +=1;
					else if($data[24] == 'etats-unis') $etats_unis +=1;
					else if($data[24] == 'france') $france +=1;
					else if($data[24] == 'italie') $italie +=1;
					else if($data[24] == 'royaume-uni') $royaume_uni +=1;
					else if($data[24] == 'russie') $russie +=1;
					else if($data[24] == 'thailande') $thailande +=1;
					else if($data[24] == 'turquie') $turquie +=1;
					else if($data[24] == 'nul') $nul11 +=1;
					else $autre11 +=1;
					
				}

				 $query->closeCursor();
				 
					 
			
				
			//question 1
			if($campagne !=0) $campagne=($campagne/$nbPersonne)*100;
			if($plage !=0) $plage =($plage/$nbPersonne)*100;
			if($ski !=0) $ski=($ski/$nbPersonne)*100;
			if($nul !=0) $nul=($nul/$nbPersonne)*100;
			if($autre !=0) $autre=($autre/$nbPersonne)*100;
			
			$dataPoints = array( 
			array("label"=>"Campagne", "y"=>$campagne),
			array("label"=>"Plage", "y"=>$plage),
			array("label"=>"Ski", "y"=>$ski),
			array("label"=>"Pas de réponse", "y"=>$nul),
			array("label"=>"Autre", "y"=>$autre),
			);
			
			//question 2
			if($bar !=0) $bar=($bar/$nbPersonne)*100;
			if($cinema !=0) $cinema = ($cinema/$nbPersonne)*100;
			if($concert !=0) $concert= ($concert/$nbPersonne)*100;
			if($magasin !=0) $magasin=($magasin/$nbPersonne)*100;
			if($nul2 !=0) $nul2=($nul2/$nbPersonne)*100;
			if($autre2 !=0) $autre2=($autre2/$nbPersonne)*100;
			
			$dataPoints2 = array( 
			array("label"=>"Bar", "y"=> $bar),
			array("label"=>"Cinéma", "y"=> $cinema),
			array("label"=>"Concert", "y"=> $concert),
			array("label"=>"Magasin", "y"=> $magasin),
			array("label"=>"Pas de réponse", "y"=> $nul2),
			array("label"=>"Autre", "y"=> $autre2),
			);	
			
			//question 3
			if($jouer !=0) $jouer=($jouer/$nbPersonne)*100;
			if($lire !=0) $lire = ($lire/$nbPersonne)*100;
			if($tele !=0) $tele= ($tele/$nbPersonne)*100;
			if($portable !=0) $portable=($portable/$nbPersonne)*100;
			if($nul3 !=0) $nul3=($nul3/$nbPersonne)*100;
			if($autre3 !=0) $autre3=($autre3/$nbPersonne)*100;
			
			$dataPoints3 = array( 
			array("label"=>"Jouer aux jeux vidéo", "y"=> $jouer),
			array("label"=>"Lire", "y"=> $lire),
			array("label"=>"Regarder la télévision", "y"=> $tele),
			array("label"=>"Rester sur son portable", "y"=> $portable),
			array("label"=>"Pas de réponse", "y"=> $nul3),
			array("label"=>"Autre", "y"=> $autre3),
			);	
			
			//question 4
			if($eau !=0) $eau=($eau/$nbPersonne)*100;
			if($cafe !=0) $cafe = ($cafe/$nbPersonne)*100;
			if($jusFruit !=0) $jusFruit = ($jusFruit/$nbPersonne)*100;
			if($soda !=0) $soda= ($soda/$nbPersonne)*100;
			if($biere !=0) $biere=($biere/$nbPersonne)*100;
			if($nul4 !=0) $nul4=($nul4/$nbPersonne)*100;
			if($autre4 !=0) $autre4=($autre4/$nbPersonne)*100;
			
			$dataPoints4 = array( 
			array("label"=>"Eau", "y"=> $eau),
			array("label"=>"Café", "y"=> $cafe),
			array("label"=>"Jus de fruit", "y"=> $jusFruit),
			array("label"=>"Soda", "y"=> $soda),
			array("label"=>"Bière", "y"=> $biere),
			array("label"=>"Pas de réponse", "y"=> $nul4),
			array("label"=>"Autre", "y"=> $autre4),
			);	

			//question 5
			if($appartVille !=0) $appartVille=($appartVille/$nbPersonne)*100;
			if($cabaneForet !=0) $cabaneForet = ($cabaneForet/$nbPersonne)*100;
			if($maisonCampagne !=0) $maisonCampagne = ($maisonCampagne/$nbPersonne)*100;
			if($nul5 !=0) $nul5=($nul5/$nbPersonne)*100;
			if($autre5 !=0) $autre5=($autre5/$nbPersonne)*100;
			
			$dataPoints5 = array( 
			array("label"=>"Appartement en ville", "y"=> $appartVille),
			array("label"=>"Cabane en forêt", "y"=> $cabaneForet),
			array("label"=>"Maison de campagne", "y"=> $maisonCampagne),
			array("label"=>"Pas de réponse", "y"=> $nul5),
			array("label"=>"Autre", "y"=> $autre5),
			);	
						
			//question 6
			if($chat !=0) $chat=($chat/$nbPersonne)*100;
			if($chien !=0) $chien = ($chien/$nbPersonne)*100;
			if($hamster !=0) $hamster = ($hamster/$nbPersonne)*100;
			if($lapin !=0) $lapin= ($lapin/$nbPersonne)*100;
			if($poisson !=0) $poisson=($poisson/$nbPersonne)*100;
			if($rat !=0) $rat = ($rat/$nbPersonne)*100;
			if($serpent !=0) $serpent= ($serpent/$nbPersonne)*100;
			if($tortue !=0) $tortue=($tortue/$nbPersonne)*100;
			if($nul6 !=0) $nul6=($nul6/$nbPersonne)*100;
			if($autre6 !=0) $autre6=($autre6/$nbPersonne)*100;
			
			$dataPoints6 = array( 
			array("label"=>"Chat", "y"=> $chat),
			array("label"=>"Chien", "y"=> $chien),
			array("label"=>"Hamster", "y"=> $hamster),
			array("label"=>"Lapin", "y"=> $lapin),
			array("label"=>"Poisson", "y"=> $poisson),
			array("label"=>"Rat", "y"=> $rat),
			array("label"=>"Serpent", "y"=> $serpent),
			array("label"=>"Tortue", "y"=> $tortue),
			array("label"=>"Pas de réponse", "y"=> $nul6),
			array("label"=>"Autre", "y"=> $autre6),
			);	
			
			//question 7
			if($animation !=0) $animation=($animation/$nbPersonne)*100;
			if($comedie !=0) $comedie = ($comedie/$nbPersonne)*100;
			if($documentaire !=0) $documentaire = ($documentaire/$nbPersonne)*100;
			if($drame !=0) $drame= ($drame/$nbPersonne)*100;
			if($fantastique !=0) $fantastique=($fantastique/$nbPersonne)*100;
			if($horreur !=0) $horreur = ($horreur/$nbPersonne)*100;
			if($thriller !=0) $thriller= ($thriller/$nbPersonne)*100;
			if($science_fiction !=0) $science_fiction=($science_fiction/$nbPersonne)*100;
			if($nul7 !=0) $nul7=($nul7/$nbPersonne)*100;
			if($autre7 !=0) $autre7=($autre7/$nbPersonne)*100;
			
			$dataPoints7 = array( 
			array("label"=>"Animation", "y"=> $animation),
			array("label"=>"Comédie", "y"=> $comedie),
			array("label"=>"Documentaire", "y"=> $documentaire),
			array("label"=>"Drame", "y"=> $drame),
			array("label"=>"Fantastique", "y"=> $fantastique),
			array("label"=>"Horreur", "y"=> $horreur),
			array("label"=>"Thriller", "y"=> $thriller),
			array("label"=>"Science-fiction", "y"=> $science_fiction),
			array("label"=>"Pas de réponse", "y"=> $nul7),
			array("label"=>"Autre", "y"=> $autre7),
			);	
						
			//question 8
			if($blues !=0) $blues=($blues/$nbPersonne)*100;
			if($classique !=0) $classique= ($classique/$nbPersonne)*100;
			if($dubstep !=0) $dubstep = ($dubstep/$nbPersonne)*100;
			if($electro !=0) $electro = ($electro/$nbPersonne)*100;
			if($jazz !=0) $jazz=($jazz/$nbPersonne)*100;
			if($metal !=0) $metal = ($metal/$nbPersonne)*100;
			if($rap !=0) $rap= ($rap/$nbPersonne)*100;
			if($reggae !=0) $reggae=($reggae/$nbPersonne)*100;
			if($rnb !=0) $rnb= ($rnb/$nbPersonne)*100;
			if($rock !=0) $rock=($rock/$nbPersonne)*100;
			if($nul8 !=0) $nul8=($nul8/$nbPersonne)*100;
			if($autre8 !=0) $autre8=($autre8/$nbPersonne)*100;
			
			$dataPoints8 = array( 
			array("label"=>"Blues", "y"=> $blues),
			array("label"=>"Classqiue", "y"=> $classique),
			array("label"=>"Dubstep", "y"=> $dubstep),
			array("label"=>"Electro", "y"=> $electro),
			array("label"=>"Jazz", "y"=> $jazz),
			array("label"=>"Métal", "y"=> $metal),
			array("label"=>"Rap", "y"=> $rap),
			array("label"=>"Reggae", "y"=> $reggae),
			array("label"=>"RnB", "y"=> $rnb),
			array("label"=>"Rock", "y"=> $rock),
			array("label"=>"Pas de réponse", "y"=> $nul8),
			array("label"=>"Autre", "y"=> $autre8),
			);	
			
			//question 9
			if($africain !=0) $africain=($africain/$nbPersonne)*100;
			if($algerien !=0) $algerien = ($algerien/$nbPersonne)*100;
			if($chinois !=0) $chinois = ($chinois/$nbPersonne)*100;
			if($fastfood !=0) $fastfood= ($fastfood/$nbPersonne)*100;
			if($gastronomique !=0) $gastronomique=($gastronomique/$nbPersonne)*100;
			if($indien !=0) $indien = ($indien/$nbPersonne)*100;
			if($italien !=0) $italien= ($italien/$nbPersonne)*100;
			if($japonais !=0) $japonais=($japonais/$nbPersonne)*100;
			if($marocain !=0) $marocain= ($marocain/$nbPersonne)*100;
			if($mexicain !=0) $mexicain=($mexicain/$nbPersonne)*100;
			if($nul9 !=0) $nul9=($nul9/$nbPersonne)*100;
			if($autre9 !=0) $autre9=($autre9/$nbPersonne)*100;
			
			$dataPoints9 = array( 
			array("label"=>"Africain", "y"=> $africain),
			array("label"=>"Algérien", "y"=> $algerien),
			array("label"=>"Chinois", "y"=> $chinois),
			array("label"=>"Fastfood", "y"=> $fastfood),
			array("label"=>"Gastronomique", "y"=> $gastronomique),
			array("label"=>"Indien", "y"=> $indien),
			array("label"=>"Italien", "y"=> $italien),
			array("label"=>"Japonais", "y"=> $japonais),
			array("label"=>"Marocain", "y"=> $marocain),
			array("label"=>"Mexicain", "y"=> $mexicain),
			array("label"=>"Pas de réponse", "y"=> $nul9),
			array("label"=>"Autre", "y"=> $autre9),
			);
			
			//question 10
			if($basket_ball !=0) $basket_ball=($basket_ball/$nbPersonne)*100;
			if($canoe_kayak !=0) $canoe_kayak = ($canoe_kayak/$nbPersonne)*100;
			if($equitation !=0) $equitation = ($equitation/$nbPersonne)*100;
			if($football !=0) $football= ($football/$nbPersonne)*100;
			if($golf !=0) $golf=($golf/$nbPersonne)*100;
			if($handball !=0) $handball = ($handball/$nbPersonne)*100;
			if($judo !=0) $judo= ($judo/$nbPersonne)*100;
			if($sports_sous_marins !=0) $sports_sous_marins=($sports_sous_marins/$nbPersonne)*100;
			if($tennis !=0) $tennis= ($tennis/$nbPersonne)*100;
			if($nul10 !=0) $nul10=($nul10/$nbPersonne)*100;
			if($autre10 !=0) $autre10=($autre10/$nbPersonne)*100;
			
			$dataPoints10 = array( 
			array("label"=>"Basket-ball", "y"=> $basket_ball),
			array("label"=>"Canoe-kayak", "y"=> $canoe_kayak),
			array("label"=>"Equitation", "y"=> $equitation),
			array("label"=>"Football", "y"=> $football),
			array("label"=>"Golf", "y"=> $golf),
			array("label"=>"Handball", "y"=> $handball),
			array("label"=>"Judo", "y"=> $judo),
			array("label"=>"Sports sous-marins", "y"=> $sports_sous_marins),
			array("label"=>"Tennis", "y"=> $tennis),
			array("label"=>"Pas de réponse", "y"=> $nul10),
			array("label"=>"Autre", "y"=> $autre10),
			);
			
			//question 11
			if($allemagne !=0) $allemagne=($allemagne/$nbPersonne)*100;
			if($chine !=0) $chine = ($chine/$nbPersonne)*100;
			if($espagne !=0) $espagne = ($espagne/$nbPersonne)*100;
			if($etats_unis !=0) $etats_unis= ($etats_unis/$nbPersonne)*100;
			if($france !=0) $france=($france/$nbPersonne)*100;
			if($italie !=0) $italie = ($italie/$nbPersonne)*100;
			if($royaume_uni !=0) $royaume_uni= ($royaume_uni/$nbPersonne)*100;
			if($russie !=0) $russie=($russie/$nbPersonne)*100;
			if($thailande !=0) $thailande= ($thailande/$nbPersonne)*100;
			if($turquie !=0) $turquie=($turquie/$nbPersonne)*100;
			if($nul11 !=0) $nul11=($nul11/$nbPersonne)*100;
			if($autre11 !=0) $autre11=($autre11/$nbPersonne)*100;
			
			$dataPoints11 = array( 
			array("label"=>"Allemagne", "y"=> $allemagne),
			array("label"=>"Chine", "y"=> $chine),
			array("label"=>"Espagne", "y"=> $espagne),
			array("label"=>"Etats-unis", "y"=> $etats_unis),
			array("label"=>"France", "y"=> $france),
			array("label"=>"Italie", "y"=> $italie),
			array("label"=>"Royaume-uni", "y"=> $royaume_uni),
			array("label"=>"Russie", "y"=> $russie),
			array("label"=>"Thaïlande", "y"=> $thailande),
			array("label"=>"Turquie", "y"=> $turquie),
			array("label"=>"Pas de réponse", "y"=> $nul11),
			array("label"=>"Autre", "y"=> $autre11),
			);   
			
      
			
	?>
	
	
	<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Question 1"
	},
	subtitles: [{
		text: "Envie de vacances"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "Question 2"
	},
	subtitles: [{
		text: "Sortie entre amis"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

 var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	title: {
		text: "Question 3"
	},
	subtitles: [{
		text: "Passe-temps du soir"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});
chart3.render();

 var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	title: {
		text: "Question 4"
	},
	subtitles: [{
		text: "Consommation dans un bar"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart4.render();

 var chart5 = new CanvasJS.Chart("chartContainer5", {
	animationEnabled: true,
	title: {
		text: "Question 5"
	},
	subtitles: [{
		text: "Habitation de rêve"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}]
});
chart5.render();

 var chart6 = new CanvasJS.Chart("chartContainer6", {
	animationEnabled: true,
	title: {
		text: "Question 6"
	},
	subtitles: [{
		text: "Animal de compagnie"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
	}]
});
chart6.render();

 var chart7 = new CanvasJS.Chart("chartContainer7", {
	animationEnabled: true,
	title: {
		text: "Question 7"
	},
	subtitles: [{
		text: "Catégorie de film"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
	}]
});
chart7.render();

 var chart8 = new CanvasJS.Chart("chartContainer8", {
	animationEnabled: true,
	title: {
		text: "Question 8"
	},
	subtitles: [{
		text: "Catégorie de musique"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints8, JSON_NUMERIC_CHECK); ?>
	}]
});
chart8.render();

 var chart9 = new CanvasJS.Chart("chartContainer9", {
	animationEnabled: true,
	title: {
		text: "Question 9"
	},
	subtitles: [{
		text: "plat"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints9, JSON_NUMERIC_CHECK); ?>
	}]
});
chart9.render();

 var chart10 = new CanvasJS.Chart("chartContainer10", {
	animationEnabled: true,
	title: {
		text: "Question 10"
	},
	subtitles: [{
		text: "sport"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints10, JSON_NUMERIC_CHECK); ?>
	}]
});
chart10.render();

 var chart11 = new CanvasJS.Chart("chartContainer11", {
	animationEnabled: true,
	title: {
		text: "Question 11"
	},
	subtitles: [{
		text: "voyage"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints11, JSON_NUMERIC_CHECK); ?>
	}]
});
chart11.render();
}

	
	

</script>

<?php
 echo "<center><p>$nbPersonne personne(s) trouvé(s) dans la base de données</p></center>";
?>

</br></br>

<div class="graphique" >
	<div id="chartContainer" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer2" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer3" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer4" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer5" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer6" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer7" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer8" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer9" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer10" style="height: 400px; width: 100%;"></div>
	</br></br></br></br>
	<div id="chartContainer11" style="height: 400px; width: 100%;"></div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</br></br></br>
			
		
			</form>
		</div>	
	
</body>	
</html>