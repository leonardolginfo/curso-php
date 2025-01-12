<div class="titulo">Comentários em PHP</div>
<?php 
echo "Estou no PHP";
# Comentários de uma linha com // ou #
//echo "Estou no PHP";
# echo "Estou no PHP";
//?> <!--Mesmo comentando a linha, se este comentário for na linha do fechamento do bloco PHP, ele é desconsiderado, digo, o comentário-->
<h5>Depois do 1º bloco PHP</h5>

<?php 
/*
Comentário de
várias linhas, CUIDADO, este tipo de comentário consegue anular o fechamento do bloco PHP

?>*/

?> 
<p>Depois do segundo bloco PHP</p>