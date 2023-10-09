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

//Nous utiliserons la fonction predefinie 

$encryptedPassword = password_hash($saltedMdp, PASSWORD_BCRYPT);

//Verification du mdp saisi 

    $passwdEntered = "Cissoko";
    if(password_verify(string $passwdEntered.$saltedMdp,$encryptedPassword)){
        return "Mot de passe correcte ";
    }else{
        return "Mot de passe incorrecte "
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