<?php

    //Aula 02 - Classes, Atributos e Métodos

    //A estrutura de um objeto é a sua classe.

    //Criando classes:

    //RECOMENDAÇÃO: sempre defina a primeira letra da classe em maiúscula.

    class Pessoa {

        //Os atributos de um objeto são as suas características.

        //Criando atributos:

        public $nome;
        public $idade;

        //Os métodos/funções representam as ações passíveis de serem exercidas pelas classes.

        //Criando métodos/funções:

        public function Falar() {
            print 'A pessoa falou. <hr>';

            print "$this->nome de $this->idade anos de idade, acabou de falar. <hr>";

            //O "$this" se faz necessário por conta do escopo ao qual, originalmente, pertencem os atributos.
        }
    }

    //Instanciando uma classe:

    $ademir = new Pessoa();

    //Sempre, ao se instanciar uma classe, se usa o comando "new" antes do nome da classe, assim como se deve fechar parênteses ao final.

    //var_dump($ademir);

    //A partir de agora, "$ademir" passa a ser um objeto com dois atributos: "$nome" e "$idade".

    //Utilizando um determinado método:

    //$ademir->Falar();

    //Acessando atributos de uma classe (e os definindo):

    $ademir->nome = 'Ademir Ramos';
    $ademir->idade = 25;

    var_dump($ademir);

    //Exibindo atributos:

    print '<hr> Atributo "nome" de "$ademir": '. $ademir->nome. '. <hr>';

    //Exibindo atributos através de métodos:

    //Checar a função "Falar()".

    $ademir->Falar();
    
?>
