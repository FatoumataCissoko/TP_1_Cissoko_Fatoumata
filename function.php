<?php 
function mdpLengthIsvalid($mdpTovalid){
//Creation d'une fonction pour valider le mot de passe
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


//Chiffrement du mdp
//la fonction predefinie bcrypt

$encryptedPassword = password_hash($saltedPassword, PASSWORD_BCRYPT);

//Verification du mdp saisi par l'utilisateur

    $passwdEntered = "Cissoko";

        if (password_verify($passwdEntered . $salt, $encryptedPassword)) {
            return "Mot de Passe Correct :  " . $salt . " | " . $encryptedPassword;
        }
        else {
            return "Mot de Passe Incorrect ";
        }

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
?>