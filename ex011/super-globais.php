<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M01 Aula 33 – Super globais PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <main>
            <pre>
                <?php 
                    setcookie("nome", "Mateus", time() + 3600);
                    session_start();
                    $_SESSION["teste"] = "Funcionou!";                    
                    
                    echo "<h1>Superglobal GET</h1>";
                    var_dump($_GET);
                
                    echo "<h1>Superglobal POST</h1>";
                    var_dump($_POST); 

                    echo "<h1>Superglobal REQUEST</h1>";
                    var_dump($_SERVER);

                    echo "<h1>Superglobal COOKIES</h1>";
                    var_dump($_COOKIE);

                    echo "<h1>Superglobal SESSION</h1>";
                    var_dump($_SESSION);

                    echo "<h1>Superglobal ENV</h1>";
                    var_dump($_ENV);

                    echo "<h1>Superglobal SERVER</h1>";
                    var_dump($_SERVER);

                    echo "<h1>Superglobal GLOBALS</h1>";
                    var_dump($GLOBALS);
                ?>
            </pre>
        </main>
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