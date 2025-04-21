<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 35 – Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    $numero = $_GET['v1'] ?? 1;
    $raiz_quadrada = sqrt($numero);
    $raiz_cubica = pow($numero, 1/3);

    // Formatando valores para exibição
    $raiz_quadrada_formatado = number_format($raiz_quadrada, 4, ',', '.');
    $raiz_cubica_formatado = number_format($raiz_cubica, 4, ',', '.');
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Informe um número</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Número</label>
                <input for="number" name="v1" id="v1" value="<?= $numero; ?>" class="input-form"></input>
                <input type="submit" value="Calcular Raízes">

            </form>
        </div>

        <div>
            <h2>Resultado Final</h2>
            <div class="formulario">
                <?php
                    echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
                    echo "<li>A sua raiz quadrada é: $raiz_quadrada_formatado</li>";
                    echo "<li>A sua raiz cúbica é: $raiz_cubica_formatado</li>";
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