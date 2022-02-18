<?php

    //Aula 19 - Métodos Mágicos

    class Pessoa {
        private $nome;
        
        //Este método faz passagem de valores:

        public function __set($nome, $valor) { //1ª parâmetro: nome de atributo; 2ª: o valor a ser passado para o 1º parâmetro.
            $this->nome = $valor;
        }

        //Para pode dar um "echo" em "$pessoa->nome", é preciso usar o método "get":

        public function __get($nome) {
            return $this->nome;
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = 'Ademir';

    echo var_dump($pessoa). '<hr>';

    echo $pessoa->nome. '. <hr>';

    class Pessoa_02 {
        private $dados = array();

        public function __set($nome, $valor) {
            $this->dados[$nome] = $valor;
        }

        public function __get($nome) {
            return $this->dados[$nome];
        }

        //Este método será chamado caso seja tentado imprimir a instância desta classe.

        public function __toString() {
            return 'Tentei imprimir o objeto.';
        }

        //Este método é usado ao se tentar usar um objeto como função:

        public function __invoke() {
            return 'Houve uma tentativa de se usar um objeto como função.';
        }
    }

    $pessoa_02 = new Pessoa_02();
    $pessoa_02->nome = 'Ramos';
    $pessoa_02->idade = 50;
    $pessoa_02->sexo = 'Masculino';

    echo $pessoa_02->nome. '. <hr>';
    echo $pessoa_02->idade. '. <hr>';
    echo $pessoa_02->sexo. '. <hr>';

    echo $pessoa_02. '<hr>';
    echo $pessoa_02(). '<hr>';
?>
