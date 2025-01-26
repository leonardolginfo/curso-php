<div class="titulo">Operações aritméticas em PHP</div>
<?php 
echo "Simples de 1 + 1 = " . 1 + 1 . '<br>';
echo 'Passando o var_dump(1+1) temos ' ;
var_dump(1+1);
echo '<br>';
echo 'Passando o var_dump(1+1.0) temos ' ;
var_dump(1+1.0);
echo '<br>';
echo 'Subtração de 2-1 = ' . 2-1 . '<br>';
echo 'Multiplicação de 2 * 10 = ' . 2*10 . '<br>';
echo 'Divisão de 10 / 2 = ' . 10 / 2 . '<br>';
echo 'Divisão de 7 / 2 = ' . 7 / 2 . '<br> em PHP não precisamos fazer cast para float <br>';
echo 'Divisão pegando só a parte inteira: 7 / 2 = ' . intdiv(7,2) , '<br>';
echo 'Resultado de 7/2 usando o round() para arredondar = ' . round(7/2) , '<br>';
echo 'Resto da divisão 7/4 = ' . 7%4 . '<br>';
echo 'Resto da divisão 8/2 = ' . 8%2 . '<br>';
echo 'Resto da divisão 7/0 = dando erro divisão por 0' . '<br>'; #. 7/0 . '<br>';
echo 'Resto da divisão passando intdiv 7/0 = dando erro divisão por 0' . '<br>'; #. intdiv(7,0) . '<br>';
echo 'Usando round(7/2) = ' . round(7/2) . '<br>';
echo 'Resultado 7/2 = ' . 7/2 . '<br>';
echo 'intdiv(7,2) = ' . intdiv(7,2) . '<br>';
echo 'REsto da divisão 7%2 = ' . 7%2 . '<br>';
echo 'teste de precedência: 7 * 3 / 2 = ' . 7 * 3 / 2 . '<br>'; #7 7 
echo 'teste de precedência:  3 /  2 * 7 / = ' . 3 / 2  * 7  . '<br>'; #7 7 
?>