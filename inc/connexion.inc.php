<?php /* fichier cnam/nfa017/2017-cf1/inc/connexion.php - 20180604-PBO */

function connexion($bddname) {
/* variables de connexion =================================================== */
    $serveur = 'localhost';  $loginserveur ='id6090142_hazarkaysi';   $mdpserveur = 'totototo'; // variables connexion serveur


/* connexion ================================================================ */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;      // option pour capturer messages d'erreur
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8'; // option pour charset UTF-8
    $con = new PDO('mysql:host='.$serveur.';dbname='.$bddname,$loginserveur, $mdpserveur, $pdo_options);
    return $con;
}