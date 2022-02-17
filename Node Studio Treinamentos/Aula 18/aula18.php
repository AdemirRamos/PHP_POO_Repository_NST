<?php

    //Aula 18 - Relação Entre Objetos (Composição)

    //Composição: uma classe cria a instância de outra classe dentro de si própria.
    //Sendo assim, quando ela (primeira classe) for destruída, a outra classe também será.

    class Pessoa {
        public function atribuir_nome($nome) {
            return "O nome apresentado foi: \"$nome\". <hr>";
        }
    }

    class Exibir {
        public $pessoa; //Essa será a instância da classe "Pessoa".
        public $nome; //Essa atributo irá armazenar o nome passado como parâmetro.

        function __construct($nome) {
            $this->pessoa = new Pessoa();
            $this->nome = $nome;
        }

        public function exibir_nome() {
            print $this->pessoa->atribuir_nome($this->nome);
        }
    }

    $exibir = new Exibir('Ademir');
    $exibir->exibir_nome()

?>
