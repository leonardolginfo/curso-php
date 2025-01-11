<div class="titulo">Integração HTML</div>

<h1 center>

    <?php
    echo 'Olá ';
    echo '<small>';
    echo 'Mundo';
    echo '<small>';
    echo '<small>' . '2Mundo' . '<small>';
    ?>
</h1>

<?= "<div>Outra forma de me 'expressar'! </div>";
?>

<br>
<div>
    <?php
    $nome = 'leo';
    ?>
    <button azul onclick="cliquei()">
        <?= 'Legal' ?>

    </button>

</div>
<style>
    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4886f4;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>
<script>
    function cliquei() {
        alert('Deu certo!');
    }
</script>