<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 35 – Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    $salario = $_GET['v1'] ?? 0;
    $salario_minimo = 1518;

    //calcular o salário mínimo
    $quantidade = $salario / $salario_minimo;
    $quantidade_int = intval($quantidade);

     // Pluralização
     if ($quantidade_int <= 1) {
        $quantidade_str = "$quantidade_int salário mínimo";
    } else {
        $quantidade_str = "$quantidade_int salários mínimos";
    }

    // Calcular o restante (se houver)
    $resultado = $salario - ($salario_minimo * $quantidade_int);

    // Formatando valores para exibição
    $salario_formatado = number_format($salario, 2, ',', '.');
    $resultado_formatado = number_format($resultado, 2, ',', '.');
?>
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Informe seu salário</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Salário</label>
                <input for="number" name="v1" id="v1" value="<?= $salario; ?>" class="input-form"></input>
                <p>Considerando o salário mínimo de <strong>R$1.518,00</strong></p>
                <input type="submit" value="Calcular">

            </form>
        </div>

        <div>
            <h2>Resultado</h2>
            <div class="formulario">
                <?php
                if ($salario > 0) {
                    echo "<p>Quem recebe um salário de <strong>R$$salario_formatado</strong> ganha <strong>$quantidade_str</strong>";
                    if ($resultado > 0) {
                        echo " + R$$resultado_formatado";
                    }
                    echo ".</p>";
                } else {
                    echo "<p>Informe um valor para calcular.</p>";
                }
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