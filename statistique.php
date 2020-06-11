
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
				<h1>Statistique</h1>
				<form method='post' action='#'>
				<div class="reponse">
				<label for="critere"><h3>Critères : </h3></label>
				
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
				
				 <div style="margin-left: 870px;"><input type="submit" name="valider" id="valider" value="Valider"  > </div><br><br>
				
				</div>
				
			
				
				
			</form>
		</div>	
	
	
	<script language="javascript" type="text/javascript">
		function griser() {
			
			var checkboxSexe = document.getElementById('critereSexe');
			var listeSexe = document.getElementById('sexe');
			
			var checkboxAge = document.getElementById('critereAge');
			var listeAge = document.getElementById('age');
			
			var checkboxRegion = document.getElementById('critereRegion');
			var listeRegion = document.getElementById('region');
			
			
			
			if(checkboxSexe.checked == true) listeSexe.disabled=false;
			else listeSexe.disabled=true;
			
			if(checkboxAge.checked == true) listeAge.disabled=false;
			else listeAge.disabled=true;
			
			if(checkboxRegion.checked == true) listeRegion.disabled=false;
			else listeRegion.disabled=true;
			
			
			
			
		
	}
	
	
	</script>




<?php
			$nbPersonne =0;
			
			$campagne=0;
			$plage=0;
			$ski=0;
			$autre=0;
			$nul=0;

			$bar=0;
			$cinema=0;
			$concert=0;
			$magasin=0;
			$autre2=0;
			$nul2=0;
				
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
					echo $data[8];
					
					//****************Question 4****************************************
					echo $data[10];
					
					//****************Question 5****************************************
					echo $data[12];
					
					//****************Question 6****************************************
					echo $data[14];
					
					//****************Question 7****************************************
					echo $data[16];

					//****************Question 8****************************************
					echo $data[28];
					
					//****************Question 9****************************************
					echo $data[20];
					
					//****************Question 10****************************************
					echo $data[22];
					
					//****************Question 11****************************************
					echo $data[24];
				
						
				
						
						
					 }

					 $query->closeCursor();
					 echo "<p>$nbPersonne personne(s) trouvé(s) dans la base de données</p>";
					 
					 
			
					
				
			}
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
			array("label"=>"bar", "y"=> $bar),
			array("label"=>"cinema", "y"=> $cinema),
			array("label"=>"concert", "y"=> $concert),
			array("label"=>"magasin", "y"=> $magasin),
			array("label"=>"Pas de réponse", "y"=> $nul2),
			array("label"=>"Autre", "y"=> $autre2),
			);	
			
			//question 3
			
			//question 4
			
			//question 5
			
			//question 6
			
			//question 7
			
			//question 8
			
			//question 9
			
			//question 10
			
			//question 11
			
      
			
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

 


}

	
	

</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 40%;"></div>
<div id="chartContainer2" style="height: 370px; width: 40%;"></div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>	
</html>