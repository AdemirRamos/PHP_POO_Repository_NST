<?php

    //Aula 23 - Composer install

    //Instalando as bibliotecas/dependências manualmente:

    //Dentro da pasta onde está o seu projeto, crie um arquivo novo com o nome "composer.json";
    //Em seguida, faça isto (desconsidere os numerais):

    /*

        {
            1ª: "require": {
                2ª: "cocur/slugify" 3ª: "3.2" 3.1ª: ,
            }
        }
    
    */

    //1ª: escreva "require";
    //2ª: digite o nome da biblioteca entre aspas;
    //3ª: digite a versão da biblioteca, entre aspas (após dois pontos);
    //3.1ª: caso se tenha mais de uma dependência, basta, após a primeira, colocar uma vírgula e digitar a próxima (e assim por diante);
    //4ª: dentro do "cmd", digite "composer install" (sem aspas);
    //5ª: dentro do arquivo do projeto, digite (desconsiderar o ponto final): require_once 'vendor/autoload.php'.

    //P. S.: "autoload", por enquanto, somente carrega as classes instaladas através do composer (classes da pasta "vendor");

    //6ª: Use a biblioteca baixada. Na página do "Packagist", há instruções de uso na página do pacote baixado.
    
?>
