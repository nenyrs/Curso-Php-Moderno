<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 22 – Strings PHP</title>
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

        h3 {
            font-size: 1.2rem;
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
        <h1>Strings PHP</h1>

        <div>
            <h2>Quatro Formatos de String</h2>
            <br>
            <p>double quotes</p>
            <p>single quotes</p>
            <p>heredoc</p>
            <p>nowdoc</p>
        </div>

        <div>
            <h2>Double Quotes</h2>
            <p>"Curso"</p>
            <br>
            <h3>Concatenation operator</h3>
            <p>"Curso" . "PHP"</p> <!-- Double Quotes -->
            <br>
            <h3>Interpolação</h3>
            <p>"PHP \u{1F418}" = PHP 🐘</p> <!-- Double Quotes -->
            <p>'PHP \u{1F418}' = PHP \u{1F418} (Não há interpretação do conteúdo)</p> <!-- Single Quotes -->
        </div>
        <br>
        <div>
            <h2>Exemplo em PHP</h2>
            <br>
            <h3>Exemplo Com Double Quotes</h3>
            <?php
            $nome = "Mateus";
            $sobrenome = "Lopes";
            echo "Muito prazer, me chamo $nome $sobrenome!\u{1F596}";
            ?>

            <h3>Exemplo Com Single Quotes</h3>
            <?php
            $nome = "Mateus";
            $sobrenome = "Lopes";
            echo 'Muito prazer, me chamo $nome $sobrenome!\u{1F596}';
            ?>
        </div>

        <div>
            <h3>Exemplo Com Const</h3>
            <p>const ESTADO = "RS";</p>
            <p>echo "Moro no ESTADO"; --> Moro no ESTADO</p>
            <p>echo 'Moro no ESTADO'; --> Moro no ESTADO</p>
            <p>echo "Moro no" .ESTADO; --> Moro no RS</p>
        </div>

        <div>
            <h2>Exemplo em PHP</h2>
            <br>
            <h3>Exemplo Com Single Quotes</h3>
            <?php
            const CANAL = "Curso em Vídeo \u{1F596}";
            echo 'Eu adoro o CANAL';
            ?>

            <h3>Exemplo Com Double Quotes</h3>
            <?php
            const CANAL1 = "Curso em Vídeo \u{1F596}";
            echo "Eu adoro o CANAL1";
            ?>

            <h3>Exemplo Com Concatenation</h3>
            <?php
            const CANAL2 = "Curso em Vídeo \u{1F596}";
            echo "Eu adoro o " . CANAL2;
            ?>
        </div>

        <div>
            <h2>Single Quotes e Double Quotes na Mesma Linha</h2>
            <br>
            <p>$nome = "Mateus";</p>
            <p>$sobrenome = "Lopes";</p>
            <p>echo "$nome "Alves" $sobrenome"; --> Mateus "Alves" Lopes</p> <!-- Esse exemplo apresenta erro -->
            <p>echo '$nome "Alves" $sobrenome'; --> $nome "Alves" $sobrenome</p><!-- Esse exemplo não apresenta erro -->
            <p>echo "$nome \"Alves\" $sobrenome"; --> Mateus "Alves" Lopes</p> <!-- Sequência de escape -->
        </div>

        <div>
            <h2>Escape Sequences</h2>
            <br>
            <p>\n Nova linha</p>
            <p>\t Tabulação horizontal</p>
            <p>\\ Barra invertida</p>
            <p>\$ Sinal de cífrão</p>
            <p>\{} Codepoint Unicode</p>
        </div>

        <div>
            <h2>Exemplo em PHP</h2>
            <br>
            <h3>Exemplo Escape Sequences</h3>
            <?php
            $nome = "Mateus";
            $sobrenome = "Lopes";
            $apelido = "Neny";
            echo "$nome $apelido $sobrenome \u{1F596}";
            ?>
            <br>
            <h3>Exemplo com Single Quotes</h3>
            <?php
            $nome = "Mateus";
            $sobrenome = "Lopes";
            $apelido = "Neny";
            echo "$nome '$apelido' $sobrenome \u{1F596}";
            ?>
            <br>
            <h3>Exemplo com Double Quotes (ERRO) linha comentada</h3>
            <?php
            $nome = "Mateus";
            $sobrenome = "Lopes";
            $apelido = "Neny";
            //echo "$nome "$apelido" $sobrenome \u{1F596}";
            ?>
            <br>
            <h3>Exemplo com Double Quotes corretamente</h3>
            <?php
            $nome = "Mateus";
            $sobrenome = "Lopes";
            $apelido = "Neny";
            echo "$nome \"$apelido\" $sobrenome \u{1F596}";
            ?>
        </div>

        <div>
            <h2>Sintaxe Heredoc</h2>
            <br>
            <p>$curso = "PHP";</p>
            <p>$ano = date('Y');</p>
            <p>echo <<< TEXTO</p>
                    <p>Estou estudando</p>
                    <p>$curso em $ano</p>
                    <p>TEXTO;</p>
                    <p>Resultado = Estou estudando PHP em 2024</p>
        </div>

        <div>
            <h2>Exemplo em PHP</h2>
            <br>
            <?php
            $curso = "PHP";
            $ano = date('Y');
            echo <<< TEXTO
                    Estou estudando
                    $curso em $ano
                    TEXTO;
            ?>
        </div>

        <div>
            <h2>Sintaxe Nowdoc</h2>
            <br>
            <p>$curso = "PHP";</p>
            <p>$ano = date('Y');</p>
            <p>echo <<< 'TEXTO' </p>
                    <p>Estou estudando</p>
                    <p>$curso em $ano</p>
                    <p>>TEXTO;</p>
                    <p>Resultado = Estou estudando $curso em $ano</p>
                    <p>Nowdoc não aceita interpretações de código</p>
        </div>

        <div>
            <h2>Exemplo em PHP</h2>
            <br>
            <?php
            $curso = "PHP";
            $ano = date('Y');
            echo <<< 'TEXTO'
                    Estou estudando
                    $curso em $ano
                    TEXTO;
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