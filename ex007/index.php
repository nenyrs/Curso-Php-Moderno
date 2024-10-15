<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 25 – Expressões aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <h1>Expressões Aritméticas</h1>
        <br>
        <div>
            <p>5 + 2 / 2</p>
            <p>3.5</p>
            <p>Ou</p>
            <p>6</p> <!-- Esta está correta por conta da maior precedência -->
        </div>
        <h2>Ordem de precedência</h2>
        <div>
            <p>()</p>
            <p>**</p>
            <p>* / %</p>
            <p>+ -</p>
            <br><br>
            <p><b>Exemplo</b></p>
            <p>50 / 2 + 3 **2</p>
            <p>50/2= 25 + 3^2 = 9</p>
            <p>25 + 9</p>
            <p>34</p>
        </div>

        <div>
            <h2>Exemplo em PHP</h2>
            <?php
            $res = 50 / (2 + 3) ** 2;
            echo "O resultado é $res";
            ?>
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