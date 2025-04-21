<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 35 – Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    $valor1 = $_GET['v1'] ?? 0;
    $peso1 = $_GET['p1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    $peso2 = $_GET['p2'] ?? 0;

    // Média Aritmética Simples
    $media_simples = ($valor1 + $valor2) / 2;

    // Média Aritmética Ponderada (evita divisão por zero)
    $soma_pesos = $peso1 + $peso2;
    if ($soma_pesos != 0) {
        $media_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / $soma_pesos;
    } else {
        $media_ponderada = 0;
    }

    // Formatando valores
    $media_simples_formatado = number_format($media_simples, 2, ',', '.');
    $media_ponderada_formatado = number_format($media_ponderada, 2, ',', '.');
?>
    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Médias Aritméticas</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">1º Valor</label>
                <input type="number" name="v1" id="v1" value="<?= $valor1; ?>" class="input-form" step="0.01">

                <label for="p1">1º Peso</label>
                <input type="number" name="p1" id="p1" value="<?= $peso1; ?>" class="input-form" step="0.01">

                <label for="v2">2º Valor</label>
                <input type="number" name="v2" id="v2" value="<?= $valor2; ?>" class="input-form" step="0.01">

                <label for="p2">2º Peso</label>
                <input type="number" name="p2" id="p2" value="<?= $peso2; ?>" class="input-form" step="0.01">

                <input type="submit" value="Calcular Médias">
            </form>
        </div>

        <div>
            <h2>Cálculo das Médias</h2>
            <div class="formulario-v2">
                <?php
            echo "<p><strong>📌 Média Aritmética Simples:</strong> É a soma dos valores dividida pela quantidade total de elementos. Usada quando todos os valores têm o mesmo peso.</p>";
            echo "<p><strong>📌 Média Aritmética Ponderada:</strong> Leva em consideração o peso (importância) de cada valor. Muito usada quando um valor tem mais relevância que o outro.</p>";
            
            echo "<p>Analisando os valores <strong>$valor1</strong> e <strong>$valor2</strong></p>";
            echo "<ul>";
            echo "<li>A <strong>Média Aritmética Simples</strong> é <strong>$media_simples_formatado</strong></li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é <strong>$media_ponderada_formatado</strong></li>";
            echo "</ul>";
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