<?php

/*créer un tableau qui contient 5 étudiants et leur age.*/


/*

 NAME AGE
 Pierre 18
 Marie 20
 Jean 19
 Elodie 18
 Chloe 21
 */

$groupE = [
    "name" => ["Pierre","Marie","Jean","Elodie","Chloe"],
    "age" => [18,20,19,18,21]
];

#var_dump($groupE);

/*function displayT($a){
    echo '<table><tr>';
    for($i=0;$i>=count($a);$i++){
        echo '<th>'.$a[$i].'</th>';
        for($j=0;$j>=count($a[$j]);$j++)
        echo '<tr>'.$a[$i][$j].'</tr>';
        
    }
    echo '</tr></table>';*/


    function displayT($a){
        echo '<table><tr>';
      
        foreach($a as $key => $value) {
            echo '<th>'.$key.'</th>';
        }
        echo '</tr>';
        
        for($i = 0; $i < count($a["name"]); $i++) {
            echo '<tr>';
            foreach($a as $key => $value) {
                echo '<td>'.$a[$key][$i].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

displayT($groupE);
?>