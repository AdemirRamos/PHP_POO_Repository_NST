<?php

    //Aula 15 - Tratamento de Exceções

    //Exceção: ocorrência anormal que afeta o funcionamento de uma aplicação.
    //"Exception" é a classe base para todas as exceções ("message", "code", "file", "line", et cetera).

    class Newsletter {
        public function cadastrar_email($mail) {
            
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)): //Teste lógico: se está condição for falsa.

                //"Lançando" uma exceção:

                throw new Exception('Este e-mail é inválido. <hr>', 1);
                
                //O primeiro parâmetro é a mensagem correspondente à exceção;
                //O segundo parâmetro corresponde ao número de código retornado ao usuário.
            
            else:
                echo 'E-mail cadastrado com sucesso. <hr>';

            endif;
        }
    }

    $newsletter = new Newsletter();

    //Tratamento de exceções:

    try {
        $newsletter->cadastrar_email('ademirramos@gmail.com');
    }

    catch(Exception $mensagem) {
        echo $mensagem->getMessage();

        //Retornando mais informações ao usuário:

        echo 'Mensagem: '. $mensagem->getMessage();
        echo 'Código: '. $mensagem->getCode(). '. <hr>';
        echo 'Linha: '. $mensagem->getLine(). '. <hr>';
        echo 'Arquivo: '. $mensagem->getFile(). '<hr>';
    } 

?>
