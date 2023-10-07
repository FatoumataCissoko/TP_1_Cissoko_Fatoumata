<?php 
require_once("functions.php");
var_dump($_POST);
if($_POST){
    $mdp = $_POST['fname'];
    if (empty($mdp)){
        echo "</br>Saisissez un mot de passe";
    }else{
        echo "</br>Votre mot de passe est: " . $mdp;
    }
$mdpLengthIsvalid = mdpLengthIsvalid($_POST['fname']);
echo '</br>';
$saltedMdp = addSalt($_POST['fname']);
var_dump($saltedMdp);
}
 ?>