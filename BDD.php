<?php
		
	function connectDb(){
      $host = '127.0.0.1'; // ou sql.hebergeur.com
      $user = 'root';      // ou login
      $pwd = '';      // ou xxxxxx
      $db = 'appli';
	try {
       $bdd = new PDO('mysql:host='.$host.';dbname='.$db.
                      ';charset=utf8', $user, $pwd,
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
       return $bdd;
	   
      } catch (Exception $e) {
       exit('Erreur : '.$e->getMessage());
	  }
  }

?>




