<?php

/*for($i=0; $i < 10; $i++){
	echo $i;
	echo '<br>';
}*/
/*echo '<ul>';
for($i=0;$i <= 20; $i++){
	$calcul = $i*7;
	//echo $calcul;
	echo '<li>'.$i.' X 7 = '.$calcul.'</li>';
}
echo '</ul>';*/

function table_mult($fact){
	echo '<ul>';
	for($i=0;$i <= 20; $i++){
		$calcul = $i*$fact;
		//echo $calcul;
		echo '<li>'.$i.' X '.$fact.' = '.$calcul.'</li>';
	}
	echo '</ul>';
}
table_mult(7);
table_mult(9);
?>
<!--<ul>
	<?/*
	for($i=0;$i <= 20; $i++){
		//echo $i;
		echo '<li>'.$i.'</li>';
	}*/?>
</ul>-->