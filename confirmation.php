<?php
	
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

		
	<input type="submit" value="Statistiques" id="stats" name="stats" class="submit" style="margin-right:630px;float:right;background:none;color:#ffffff;border:none;font-size:20px;padding-top:5px;padding-top:25px;  border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;"/>

	<input type="submit" value="Questionnaire	|" name="qcm" style="margin-right:0px;float:right;background:none;color:#ffffff;border:none;font-size:20px;padding-top:25px;border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;" /></p>
</div>
	</form>
	
		<div class="corps" style="height : 500px">
			<h1>Votre participation a bien été prise en compte</h1></br>
			<div style="text-align: center"><img src="assets/img/merci.jpg" style="height : 280px; width : 486px; "/></div>
			<h3>Merci d'avoir répondu à notre formulaire ! Votre retour va être traité et analysé avec les plus grands soins.</h3>
			<h3>Vous pouvez consulter les statistiques des autres utilisateurs en cliquant sur le lien en haut</h3></br>
			
		</div>
	
	</body>
	
		
</html>

