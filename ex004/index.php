<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 – Tipos Primitivos</title>
    <style>
        body {
            background-image: linear-gradient(-225deg, #2CD8D5 0%, #6B8DD6 48%, #8E37D7 100%);
            font-family: 'Inter';
            padding: 0;
            margin: 0;
            font-size: 1.2rem;
        }

        .flex {
            display: flex;
            gap: 50px;
        }

        body b {
            color: #e9e9e9;
        }

        h1 {
            font-size: 2rem;
        }

        h2 {
            font-size: 1.4rem;
        }

        header {
            display: flex;
            padding: 5px 15px;
            background: aliceblue;
            justify-content: space-between;
        }

        section {
            min-height: 77vh;
            padding: 25px 15px;
        }

        footer {
            background: aliceblue;
            padding: 5px 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            border-top: solid 1px #2CD8D5;
        }

        footer a {
            color: blue;
        }

        .social a {
            text-decoration: none;
        }

        a:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <h1>Teste de tipos primitivos</h1>

        <div>
            <h2>$sobrenome = Lopes</h2>
            <p><b>String</b> Sequência de letras, números e símbolos, sempre representadas entre aspas.</p>
        </div>

        <div>
            <h2>$idade = 33</h2>
            <p><b>int ou integer</b> um valor numérico sem casas decimai, ou seja, um número inteiro.</p>
        </div>

        <div>
            <h2>$peso = 81.6</h2>
            <p><b>float, double ou real</b> um valor numérico com casas decimais, ou seja, um número decimal.</p>
        </div>

        <div>
            <h2>$casado = true</h2>
            <p><b>boll ou boolean</b> um valor lógico ou booleano, que aceita apenas os valores (<b>true</b> ou
                <b>false</b>).
            </p>
        </div>
        <br><br>
        <h2>Outras categorias de tipos primitivos</h2>

        <div class="flex">
            <div>
                <h2>Compostos</h2>
                <p>array</p>
                <p>object</p>
            </div>

            <div>
                <h2>Especias</h2>
                <p>null</p>
                <p>resource</p>
                <p>callable</p>
                <p>mixed</p>
            </div>
        </div>
        <br><br>
        <h2>Exemplos</h2>
        <?php
        $num = 300;
        echo "O valor da variável é $num";
        ?>
        <br><br>
        <?php
        $num = 0x1A;
        echo "O valor da variável é $num";
        ?>
        <br><br>
        <?php
        $num = 0b110;
        echo "O valor da variável é $num";
        ?>
        <br><br>
        <?php
        // 0x = hexadecimal 0b = binário 0 = Octal
        $num = 010;
        echo "O valor da variável é $num";
        ?>
        <br><br>
        <?php
        $v = 300;
        var_dump($v);
        ?>
        <br><br>
        <?php
        $v = 45.2;
        var_dump($v);
        ?>
        <br><br>
        <?php
        $v = true;
        var_dump($v);
        ?>
        <br><br>
        <?php
        $v = "Mateus";
        var_dump($v);
        ?>
        <br><br>
        <?php
        $num = 3e2; // 3 * 10^2
        echo "O valor é $num";
        ?>
        <br><br>
        <?php
        $num = "950";
        var_dump($num);
        ?>
        <br><br>
        <?php
        $vet = [6, 2, 9, 3, 5];
        var_dump($vet);
        ?>
        <br><br>
        <?php
        $vet = [6, 2.5, "Mateus", 3, false];
        var_dump($vet);
        ?>
        <br><br>
        <?php
        class Pessoa
        {
            private string $nome;
        }

        $pessoa = new Pessoa();
        var_dump($pessoa);
        ?>
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