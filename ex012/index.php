<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 34 – Formulários retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    // Capturando os dados do Formuário Retroalimentados
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Formulários retroalimentados</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Valor 1</label>
                <input for="number" name="v1" id="v1" value="<?= $valor1; ?>" class="input-form"></input>
                <label for="v2">Valor 2</label>
                <input for="number" name="v2" id="v2" value="<?= $valor2; ?>" class="input-form"></input>
                <input type="submit" value="Somar">
            </form>
        </div>

        <div>
            <h2>Resultado da Soma</h2>
            <div class="formulario">
                <?php
                $resultado = $valor1 + $valor2;
                print "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a  $resultado</strong>.</p>
"
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