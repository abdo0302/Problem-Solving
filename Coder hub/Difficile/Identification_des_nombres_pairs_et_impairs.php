<!-- Description du défi :
Écrivez une fonction qui prend un entier de type integer. La fonction doit additionner les chiffres pairs et impairs qui composent cet entier. Si la somme des chiffres impairs est supérieure à celle des chiffres pairs, la fonction doit retourner "odd". Si la somme des chiffres pairs est supérieure à celle des chiffres impairs, elle doit retourner "even". Si les deux sommes sont égales, la fonction doit retourner "equal". -->



<?php


function oddsVsEvens($num) {
    $num = (string)$num;
    $SumAdd=0;
    $SumEvens=0;
    for ($i=0; $i <strlen($num) ; $i++) { 
        $digit = (int)$num[$i];
        if ($digit % 2==0) {
            $SumAdd += $digit;
        }else{
            $SumEvens += $digit;
        }
    }

    if ($SumAdd>$SumEvens) {
        return "even";
    }elseif($SumEvens>$SumAdd){
        return "odd";
    }else{
        return "equal";
    }

}

echo oddsVsEvens(97428);
?>