<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 35 – Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <?php
    $dividendo = $_GET['v1'] ?? 0;
    $divisor = $_GET['v2'] ?? 1;
    ?>

    <main>
        <h1>Curso PHP Moderno com Gustavo Guanabara</h1>
        <p>Aluno: Mateus Alves Lopes</p>
    </main>

    <section class="flex">
        <h1>Anatomia de uma Divisão</h1>
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="formulario">
                <label for="v1">Dividendo</label>
                <input for="number" name="v1" id="v1" value="<?= $dividendo; ?>" class="input-form"></input>
                <label for="v2">Divisor</label>
                <input for="number" name="v2" id="v2" value="<?= $divisor; ?>" class="input-form"></input>
                <input type="submit" value="Analisar">
            </form>
        </div>

        <div>
            <h2>Estrutura da Divisão</h2>
            <div class="formulario-v2">
                <div class="l100">
                    <div class="l100">
                        <?php
                        echo $dividendo = $dividendo;
                        ?>
                    </div>
                    <div class="l100">
                        <?php
                        echo $resto = $dividendo % $divisor;
                        ?>
                    </div>
                </div>
                <div class="divisao l100">
                    <div class="l100">
                        <?php
                            echo $divisor = $divisor;
                            ?>
                    </div>
                    <div class="divisao-2 l100">
                        <?php
                                echo $resultado = $dividendo / $divisor;
                                ?>
                    </div>
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