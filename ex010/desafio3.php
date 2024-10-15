<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <h1>Conversor de Moedas v1</h1>
        <br>
        <div class="flex">
            <div class="formulario">
                <h2>Conversor de Moedas v1</h2>
                <br>
                <div>
                    <?php
                    $numero = floatval($_GET["numero"] ?? 1);
                    $cotacao = 5.60;

                    echo "<p>Seus R$ $numero equivalem a <strong>US$ " . number_format($numero / $cotacao, 2) . "</strong><br>
                        <strong>*Cotação fixa de R$ $cotacao</strong> informada diretamente no código</p>";
                    ?>
                    <br>
                    <a href="conversor-de-moedas-v1.php">voltar</a>
                    <br>
                    <a href="index.php">Página Inicial</a>
                </div>
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