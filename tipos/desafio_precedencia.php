<div class="titulo">Desafio precedência</div>
<?php
echo '<p> 1. Qual valor será impresso?</p>';
echo '2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3) ' ;
echo 'Comentado pois dá erro div por 0' .'<br>'; #2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
echo '<p>2. Qual valor retorna 100?</p>' . '<br>';
echo 'a) (1 + 2) * 20 - 15 = ', (1 + 2) * 20 - 15 . '<br>'; #45
echo 'b)  4 * 5 ** 2  = ', 4 * 5 ** 2  . '<br>'; 
echo 'c) 2 ** 3 ** 4 / 1e25 = ', 2 ** 3 ** 4 / 1e25  . '<br>';
echo 'd) 3 + (3 * 8) / 2 - 3 ', 3 + (3 * 8) / 2 - 3  . '<br>';

?>