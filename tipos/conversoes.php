<div class="titulo">Conversões</div>
<?php 
echo is_int(PHP_INT_MAX);
echo '<br>';
//Sendo true print 1 e sendo false não printa  nada
$valorTeste = 5;
if(is_int($valorTeste)){
echo 'É inteiro';
}else{
    echo 'Não é inteiro';
};
echo '<br>';
//de int para float
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0); 
echo '<br>';
var_dump(3); //será int
echo '<br>';
var_dump((float) 3); //convertendo para float
echo '<br>';
//de float para int
var_dump(2.8);
echo '<br>';
var_dump((int) 2.8); //convertendo para int
echo '<br>';
var_dump(intval(2.8,10));//passando no segundo parâmetro a base 10, mas neste caso podemos omitir e o resultado será o mesmo
echo '<br>';
var_dump(intval('10101111001010',2));
echo '<br>';
//arredondamento
var_dump(round(2.8));//printa 3 do tipo float
echo '<br>';
var_dump((int) round(2.8));//printa 3 do tipo float
echo '<br>';
echo '<br>';

echo ("Operações com strings");
echo '<br>';
echo(3+"3"); 
echo '<br>';
var_dump(3 ."3");
echo '<br>';
echo(3 ."3");
echo '<br>';
//para verificar se é uma string is_string()
echo is_string("20");// saída 1 = true
echo '<br>';
echo is_string(20); //não tem nada na saída = false
echo '<br>';
echo (is_string("30" . 200)); // true pois usa o "."
echo '<br>';
echo (is_string("30" + 20)); //false pois usa o sinal "+" .
echo '<br>';
echo "Forçando a saída na tela:";
echo '<br>';
echo "Testando a expressão: is_string(\"30\" . 200);";
echo '<br>';
if(is_string("30" . 200)){
    echo "É uma string, você usou o PONTO";
}else{
    echo "Não é uma string";
}
echo '<br>';
if(is_string("30" + 200)){
    echo "É uma string";
}else{
    echo "Não é uma string, você usou o sinal de +";
}
echo '<br>';
echo 'Mais alguns testes, o que será o resultado de 1 +  cinco ?';
echo '<br>';
//echo(1+"cinco");
echo"<br>";
//echo(1 + " 5 cinco"); //nesta versão dará um Warning mas mostrará o resultado
var_dump(1 + "3.2");
echo'<br>';
var_dump(1 + "3+2"); // evitar - sendo citado para mostrar que é possível, mas evite.
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump("10.20"); //uma string
echo '<br>';
var_dump((float) "10.2"); //um float vindo de uma string
?>
