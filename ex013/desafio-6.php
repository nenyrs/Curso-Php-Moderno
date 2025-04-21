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
    $preco = $_GET['v1'] ?? 0;
    $reajuste = $_GET['v2'] ?? 0;
    $total = $preco + ($preco * ($reajuste / 100));
    $total = number_format($total, 2, ',', '.');
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Reajustador de Preços</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Preço do produto (R$)</label>
                <input type="number" name="v1" id="v1" value="<?= $preco; ?>" class="input-form">
                <label for="v2">Qual será o seu reajuste? (<span id="porcentagem"><?= $reajuste ?? 0 ?></span>%)</label>
                <input type="range" name="v2" id="v2" value="<?= $reajuste ?? 0 ?>" class="input-form" min="0" max="100"
                    oninput="atualizarPorcentagem(this.value)">
                <input type="submit" value="Reajustar">
            </form>
        </div>

        <div>
            <h2>Resultado</h2>
            <div class="formulario-v2">
                <?php
                echo "<p>O produto que custava <strong>R$$preco</strong>, com um reajuste de <strong>$reajuste%</strong> ficou em <strong>R$$total</strong></p>";
                ?>
            </div>
        </div>
    </section>

    <script>
    function atualizarPorcentagem(valor) {
        document.getElementById('porcentagem').innerText = valor;
    }
    </script>


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