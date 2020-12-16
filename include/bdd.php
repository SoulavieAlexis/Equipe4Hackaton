<?php try {  $bdd  = new PDO('mysql:host=localhost;dbname=hackt3', 'root', 'root');
         $bdd->exec('SET CHARACTER SET utf8');
        global  $bdd;
    }catch(Exception  $e){die('Erreur : '.$e->getMessage());}
?>
        