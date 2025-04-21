<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 35 – Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    $segundos = $_GET['v1'] ?? 0;
    $semana = floor($segundos / 86400 / 7);
    $dias = floor($segundos / 86400);
    $horas = floor($segundos / 3600);
    $minutos = floor(($segundos % 3600) / 60);
    $segundos_formatado = $segundos % 60;
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Calculadora de Tempo</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Qual é o total de segundos?</label>
                <input type="number" name="v1" id="v1" value="<?= $segundos; ?>" class="input-form">
                <input type="submit" value="Reajustar">
            </form>
        </div>

        <div>
            <h2>Resultado</h2>
            <div class="formulario-v2">
                <?php
                echo "<p>Analisando o valor que você digitou: <strong>$segundos segundos</strong>, temos:</p>";
                echo "<p>$semana semanas</p>";
                echo "<p>$dias dias</p>";
                echo "<p>$horas horas</p>";
                echo "<p>$minutos minutos</p>";
                echo "<p>$segundos_formatado segundos</p>";
                ?>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright&copy; <?= date('Y'); ?> - Todos os direitos reservados | Desenvolvido com ❤ e ☕︎ por <a
                href="https://codech.com.br/">Mateus Lopes</a></p>
        <div class="social">
            <a href="https://www.linkedin.com/in/mateus-lopes-b76a31270/" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=13930&format=png&color=000000" alt="LinkedIn"
                    style="width: 40px; height: 40px;"></a>

            <a href="https://www.behance.net/mateuslopes17" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=13655&format=png&color=000000" alt="Behance"
                    style="width: 40px; height: 40px;"></a>

            <a href="https://github.com/nenyrs" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=63777&format=png&color=000000" alt="GitHub"
                    style="width: 40px; height: 40px;"></a>
        </div>
    </footer>
</body>

</html>