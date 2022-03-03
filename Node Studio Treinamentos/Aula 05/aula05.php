<?php

    //Aula 05 - Herança

    /*Herança: se trata de um recurso que permite que diferentes classes compartilhem atributos e métodos para aproveitar códigos e/ou comportamentos generalizados.*/

    //Criação de uma classe genérica que possa ter os seus atributos e métodos aplicados à Carro e à Moto:

    class Veículo {
        public $modelo;
        public $cor;
        public $ano;

        public function andar() {
            echo 'O veículo andou. <hr>';
        }

        public function parar() {
            echo 'O veículo parou. <hr>';
        }
    }

    //Para fazer as classes abaixo herdarem os atributos e métodos da classe acima, basta usar o comando "extends Veículo":

    class Carro extends Veículo {
        public function para_brisa() {
            echo 'O para-brisa foi ligado. <hr>';
        }
    }

    class Moto extends Veículo {
        public function grau() {
            echo 'Você deu um "grau" e morreu. Passar bem. <hr>';
        }
    }

    $carro = new Carro();

    $carro->modelo = 'Gol';
    $carro->cor = 'Vermelho';
    $carro->ano = 2018;
    $carro->andar();
    $carro->para_brisa();

    echo 'Conteúdo de <strong>"$carro"</strong>: ';

    echo var_dump($carro). '<hr>';

    $moto = new Moto();

    $moto->modelo = 'Honda Biz';
    $moto->cor = 'Azul';
    $moto->ano = 2017;
    $moto->parar();
    $moto->grau();

    echo 'Conteúdo de <strong>"$moto"</strong>: ';

    echo var_dump($moto). '<hr>';

    //Em caso de se precisar de algum método específico para alguma das "classes-filhas", sua existência se justificará.

?>
