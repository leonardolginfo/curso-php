<div class="titulo">Tipo String</div>
<?php 
echo "Eu sou uma string.";
echo "<br>";
var_dump("Eu também!");
echo "<br>";
#concatenação
echo "Nós também somos " . "strings concatenadas com '.' !";
echo "<br>";
echo "Somos " , "strings concatenadas com ',' mas só no contexto ECHO !";
echo "<br>";
echo "<br>";
print "Voçê pode usar a função PRINT ao invés de ECHO.";
#Algumas funções com Strings
echo "<br>" . strtoupper("maximizado");
echo "<br>" . strtolower("MINIMIZADO");
ECHO "<br>" . "Primeira letra maiúscula " . ucfirst("leonardo");
echo "<br>" . "Todas as palavras com a 1ª letra em maiúsculo, exemplo abaixo: " . "<br>";
echo ucwords("teste de cada inicial sendo passada para maiúscola.");
echo "<br>" . "Qantidade de caracteres na frase \"teste de caracteres\" = " . strlen("teste de caracteres");
echo "<br>" . "Qantidade de caracteres na frase \"testão de caracteres\" = " . strlen("testão de caracteres");
echo "<br>" . "Qantidade de caracteres na frase \"testão de caracteres\" = " . mb_strlen("testão de caracteres");
echo "<br>" . "Qantidade de caracteres na frase \"testão de caracteres\" = " . mb_strlen("testão de caracteres", "utf-8");
echo "<br>" . "Usando substring: " . substr("Leonardo Gonçalves", 0, 3);
$testeNome = "Esse texto tem Leo e outras palavras, vamos usar str_replace aqui.";
echo "<br>" . $testeNome;
echo "<br> ------------------------------------------------";
echo "<br>" . str_replace("Leo", "Leonardo", $testeNome);
echo "<br>" . "Testando atribuição com str_replace";
$testeNome = str_replace("vamos usar", "usamos", $testeNome);
echo "<br>";
echo $testeNome;
echo "<br>" . str_repeat("-", 55);
?>
