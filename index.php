<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Curso PHP</title>
</head>

<body>

    <header class="cabecalho">
        <h1>CURSO PHP</h1>
        <h2>Índices dos exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básicos</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=basic&file=hello">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=comentarios">
                                Comentários em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=basic&file=desafio">
                                Desafio básico em PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercise.php?dir=tipos&file=int">
                                Tipo Int em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=float">
                                Tipo Float em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=aritimeticas">
                                Operações aritméticas em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=desafio_precedencia">
                                Desafio precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=desafio_string">
                                Desafio String em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=tipo_booleano">
                                Booleano em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercise.php?dir=tipos&file=conversoes">
                               Conversões em PHP
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y') ?>
    </footer>
</body>

</html>