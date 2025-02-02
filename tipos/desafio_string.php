<div class="titulo">Desafio String PHP</div>
<?php 
//usar o método que busque a sequencia abc na string "!AbcBcabc" e retorne 1

$strPrincipal = "!AbcBcabc";
$strBuscada = "abc";
echo "Para a busca temos o strpos e stripos";
echo "<br>" . "A diferença é que o strpos leva em consideração a forma escrita e o stripos não, ou seja, maúsculas e minúsculas";
echo "<br>" . "Resultado usando stripos: " . stripos($strPrincipal, $strBuscada);
echo "<br>" . "Resultado usando strpos: " . strpos($strPrincipal, $strBuscada);
echo "<br>" . "Podemos usar a estratégia de passar tudo para maiúsculo ou para minúsculo, mas usando o stripos() é mais prático :)";
echo "<br> Usando strpos(strtolower($strPrincipal), strtolower($strBuscada)) temos como resposta:";
echo strpos(strtolower($strPrincipal), strtolower($strBuscada));
?>