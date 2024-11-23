<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 27b – Cinco desafios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <h1>Analisador Real</h1>
        <br>
        <div class="flex">
            <div class="formulario">
                <h2>Analisador de Número Real</h2>
                <?php
                $num = $_POST['num'] ?? 0;

                echo "<p>Analisando o número <strong>" .  number_format($num, 3, ",", ".") . "</strong> informado pelo usuário</p>";

                $int = (int) $num;
                $fra = $num - $int;

                echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";

                echo "<li> A parte fracionária do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";
                ?>
                <br>
                <a href="index.php">Página Inicial</a>
                </p>
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