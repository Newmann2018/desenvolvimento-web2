<?php

function tabuada($tabuada){
   $cont = 1;
   $resultado = '';

   while ($cont <= 10){
        $resultado .= '<tr><td>' . $tabuada . 'x' . $cont . ' = ' . 
        ($tabuada * $cont) . '</td></tr>';
      $cont++;
   }

   return $resultado;
}

$tabela .= '<center><table border="1";>';
$tabela .= tabuada(10);
$tabela .= '</table></center>';

echo $tabela;

?>