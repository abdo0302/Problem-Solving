<!-- Description du défi :

Écrivez une fonction qui reçoit deux chaînes de caractères (string) et qui vérifie si elles sont similaires ou non.
 -->


 <?php


function is_same($name1, $name2) {
    for ($i=0; $i <strlen($name1) ; $i++) { 
        if ($name1[$i] !== $name2[$i]) {
            return 'غير متشابهتين';
        }
    }
    return 'متشابهتين';
}

echo is_same('Anas','anas');
?>