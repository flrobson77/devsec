<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title> Segurança da Informação </title>    
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <h1> Coletando IP do usuário que acessa esta página</h1>
        </header>
        <hr><br/>
        <hr>
    <?php
            $IP = $_SERVER['REMOTE_ADDR']; //Coleta o IP
            $arquivo = 'ips.txt'; //Arquivo que guarda os IP's

            if (is_writable($arquivo)){
                if($arq = fopen($arquivo,'a')){ //Abrir o arquivo
                    fwrite($arq, $IP."\n"); //Escreva no arquivo
                    fclose($arq); // Fecha o arquivo
                    echo "Endereço IP ($IP) foi armazenado com sucesso";
                }
                else{
                    echo "Não foi possível abrir o arquivo para escrita";
                }
            }
            else{
                    echo "O arquivo $arquivo não existe ou não é gravável.";
            }   
    ?>
        <hr><br/>
        <hr>
        <footer id="rodape">
            <fieldset>
                <p>Está pagina foi elaborada exclusivamente para a disciplina de segurança da informação no IFSP Câmpus Guarulhos.</p>
                <p> Copyright&copy 2023 by SecurityLabs (Prof. Robson) </p>
            </fieldset>
        </footer>
    </div>
</body>
</html>
