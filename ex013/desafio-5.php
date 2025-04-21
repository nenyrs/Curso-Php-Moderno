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
    $nascimento = $_GET['v1'] ?? 2000;
    $ano = $_GET['v2'] ?? date('Y');
    $idade = $ano - $nascimento;

    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Calculando sua Idade</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Em que ao você nasceu?</label>
                <input type="number" name="v1" id="v1" value="<?= $nascimento; ?>" class="input-form">
                <label for="p1">Quer saber sua idade em que ano? (atualmente estamos em 2025)</label>
                <input type="number" name="v2" id="v2" value="<?= $ano; ?>" class="input-form">
                <input type="submit" value="Qual será minha idade?">
            </form>
        </div>

        <div>
            <h2>Resultado</h2>
            <div class="formulario-v2">
                <?php
                echo "<p>Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano</p>";
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