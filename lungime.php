<?php
$sir = 'Tutorial PHP';

//echo strlen($sir);       // 12

$fructe= array("Portocale", "Banane", "Mere" , "Pere", "Cirese", "Caise", "Smochine", "Curmale", "Prune", "Rodii", "Struguri", "Afine", "Capsuni", "Visine");

   foreach($fructe as $key_fructe=>$valoare_fructe)
     {
         echo "- $key_fructe are valoare $valoare_fructe <br>  -";
        //echo $value;
     } 
$numar_fructe = count($fructe, 1);
echo $numar_fructe;       

?>