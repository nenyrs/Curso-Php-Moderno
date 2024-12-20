<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livrando da Maldição</title>
    <style>
    body {
        background-image: linear-gradient(-225deg, #2CD8D5 0%, #6B8DD6 48%, #8E37D7 100%);
        font-family: 'Inter';
        padding: 0;
        margin: 0;
        font-size: 1.2rem;
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
        <h1>
            <?php 
            echo "Olá, Mundo! \u{1F30E}";
            ?>
        </h1>
        <p>Vamos tentar nos livrar da maldição</p>
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