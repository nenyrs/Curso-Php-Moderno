<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <p>Curso PHP Moderno com Gustavo Guanabara</p>
        <p>Aluno: Mateus Alves Lopes</p>
    </header>

    <section>
        <h1>Conversor de Moedas v1</h1>
        <br>
        <div class="flex">
            <div class="formulario">
                <h2>Conversor de Moedas v2</h2>
                <br>
                <div>
                    <?php

                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                    $dados = json_decode(file_get_contents($url), true);

                    $cotacao = $dados["value"][0]["cotacaoCompra"];

                    $real = $_REQUEST["din"] ?? 0;

                    $dolar = $real / $cotacao;

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    //echo "Seus R\$" number_format($real, 2, ",", ".") . " equivalem a <strong>US$" . number_format($dolar, 2, ",", ".");

                    echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") .
                        " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") .
                        "</strong></p>";


                    ?>
                    <br>
                    <button onclick="history.go(-1)">Voltar</button>
                    <br>
                    <a href="index.php">Página Inicial</a>
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