<?php

    //Aula 22 - Composer init, Require e Update

    //Na pasta "vendor", temos todos os paotes e dependências de terceiros.

    //"autoload" faz o carregamento automático e dinâmico destes pacotes.

    //"composer.json" contem todas as definições e dependências do nosso pacote.

    //"composer.lock" contem todas as especificações do nosso pacote.

    //Para baixar um novo pacote, dentro do "prompt" de comando, digite (sem aspas): "composer require (nome do pacote sem parênteses)".
    //Após o download do novo pacote, o seu arquivo "composer.json" vai ser atualizado e mostratá o novo pacote baixado.
    //Em "vendor", aparecerá uma nova pasta proveniente do pacote baixado.
    
    //Para remover o pacote, basta remover, do "composer.json", a linha correspondente ao pacote que deve ser desinstalado.
    //Após a remoção da referida linha, salva-se o arquivo e, no "cmd", se usar o seguinte comando (sem aspas): "composer update".
    //Feito isso, o pacote definido será removido junto de suas dependências.

?>
