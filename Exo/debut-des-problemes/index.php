<?php

/*$firstname = 'lola';
echo $firstname;

$sentence = 'my name is XXXXXXXX';

$new_sentence = str_replace('XXXXXXXX', $firstname, $sentence);
echo '<br />'.$new_sentence;
*/

// creer une chaine de caractères. Ensuite si elle fait plus de 20 caracteres me
// dire que la chaine et trop longue. utiliser une condition et la fonction strlen

$char="sdazksqdaesccvdffgxqdq";

if(strlen($char)>20){
	echo "la chaine de caracthère est trop longue.";
}
else{
	echo $char;
}


/*$age = 18;

echo '<h2>bonjour mon nom est'. $firstname .' et j\'ai '.$age.' </h2>';
if($age >= 18){
	echo 'je suis majeur';
}else{
	echo 'je suis mineur';
}

//creation d'une focntion
function calcul($a, $b){
	return $a*$b;
}

echo calcul(12,54);
echo calcul(18,53);
*/


//créer une fonction qui permet d'afficher un circle.
// je dois pouvoir choisir la taille et la couleur du cercle


function createCircle($size,$color){
	return '<div style="width:'.$size.'px; background:'.$color.';height:'.$size.'px; border-radius: 50%;"></div>';
}

//is_numeric, is_int 


$size=100;
$color='orange';
if(is_numeric($size)&&is_string($color)){
	echo createCircle(100,$color);
}
else{
	echo "Erreur ! Je t'invite a refaire !";
}


?>


