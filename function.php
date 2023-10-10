<?php 
//Creation d'une fonction pour valider le mot de passe
function mdpLengthIsvalid($mdpTovalid){
// la condition pour la longueur du mot de passe
    $length = strlen($mdpTovalid);
    $reponses=[
        'isValid'=>true,
        'message'=>''
    ];
    if ($length < 6){
        $reponses=[
            'isValid'=>false,
            'message'=>'Mot De Passe trop court'
        ];
    }elseif ($length > 10) {
        $reponses=[
            'isValid'=>false,
            'message'=>'Mot De Passe trop long'
        ];
    }
    //Return de ma fonction
   return $reponses;

}
//Verification du mot de passe saisi 

    $passw = "Cissoko";

// Fonction pour ajouter le salt

function addSalt($mdpToSalt){
    $salt = 'Ma_Fille@2022!';
    $saltedMdp =$salt.$mdpToSalt.$salt;

    return $saltedMdp;
}
function encodeMdp($saltedMdp){
    $encodeMdp = sha1($saltedMdp);
    return $encodeMdp;
}
// Le Cryptage 
$passw = password_hash($passw, PASSWORD_DEFAULT);
// Affiche le mot de passe crypter
echo password_hash($passw, PASSWORD_DEFAULT);  
?>