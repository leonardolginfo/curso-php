<div class="titulo">Tipo Booleano</div>
<?php 
echo true; //será impresso 1
echo "<br>";
echo false; //não será impresso nada
echo var_dump(true);
echo "<br>";
echo var_dump(false);
echo "<br>";
echo is_bool(true);
echo "<br>";
echo is_bool(false);
echo "<br>" . "antes";
echo "<br>";
echo is_bool(2==5);
echo "<br>";
echo 'depois'."<br>";
echo var_dump("false");
//somente um pouco do booleano, no próximo item teremos somente conversões
?>