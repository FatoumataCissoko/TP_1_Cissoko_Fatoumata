<?php 
// Permet d'afficher le resultat de la function.php
require_once("function.php");
var_dump($_POST);
if($_POST){
    $mdp = $_POST['fname'];
    if (empty($mdp)){
        echo "</br>Saisissez un mot de passe";
    }else{
        echo "</br>Votre mot de passe est: " . $mdp;
        echo "</br>";
        $mdpValid = mdpLengthIsvalid($mdp);
        echo "</br>";
        echo $mdpValid;
    }
$mdpLengthIsvalid = mdpLengthIsvalid($_POST['fname']);
echo '</br>';
$saltedMdp = addSalt($_POST['fname']);
var_dump($saltedMdp);
}
 ?>