<!-- 
 Description du défi :

Écrivez une fonction qui prend une chaîne de caractères de type string. La fonction doit vérifier si la valeur de la chaîne contient une adresse e-mail valide ou non, en renvoyant une valeur de type boolean.

Conditions pour un e-mail valide :

Ne doit pas commencer par un symbole.
La première partie (avant le symbole @) doit contenir au moins un caractère.
Doit contenir le symbole @.
Le symbole @ doit être suivi d'au moins un caractère.
Ensuite, il doit être suivi du symbole ..
Le symbole . doit être suivi d'au moins deux caractères.
La partie avant le symbole @ peut contenir les symboles suivants : _, -, .. 

-->



<?php


function isEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;

}


?>