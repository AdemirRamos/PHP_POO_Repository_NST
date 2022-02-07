<?php

    //Aula 07 - Modificadores de Acesso (Parte 2)

    //Os modificadores de acesso também podem ser usados com os métodos de uma classe.

    class Veículo {
        public $modelo;
        public $cor;
        public $ano;

        public function andar() {
            echo 'O veículo se movimentou. <hr>';
        }

        //Acessando um método privado:

        private function parar() {
            echo 'O veículo deixou de se movmentar. <hr>';
        }

        public function mostrar_ação() {
            $this->parar();
        }

        protected function abastecer() {
            echo 'O veículo foi abastecido com sucesso. <hr>';
        }
    }

    class Carro extends veículo {
        public function para_brisa() {
            echo 'O para-brisa foi ativado. <hr>';
        }

        //Por ser "private", o método "parar()" não pode ser chamado a partir do escopo de outra classe que não seja a que o delcarou.
        //Quando um método é "private", nem mesmo a classe que herda a classe onde o método foi declarado tem acesso a ele.

        //Porém, no caso de "protected, isso é permitido.

        public function mostrar_ação() {
            $this->parar();
        }

        public function exibir_ação() {
            $this->abastecer();
        }

        //"protected" nos permite acessar um método de dentro do escopo da classe que o declara e do escopo da classe que o herda.
    }

    $carro = new Veículo();

    echo 'Modelo do carro: '. $carro->modelo = 'Celta'. '. <hr>';
    echo $carro->andar();
    echo 'Ação: ';
    echo $carro->mostrar_ação();

    $car = new Carro();

    //echo 'Ação: '. $car->mostrar_ação();

    echo '2ª ação: ';
    echo $car->exibir_ação();
?>
