<?php

    //Aula 11 - Polimorfismo

    class Animal {
        public function andar() {
            echo 'O animal andou. <hr>';
        }

        public function correr() {
            echo 'O animal correu (classe "Animal"). <hr>';
        }
    }

    $bicho = new Animal();

    $bicho->andar();

    class Cavalo extends Animal {
        //Polimorfismo consiste em reescrever um método herdado.

        public function andar() {
            $this->correr();
        }

        //Um método herdado não precisa, necessariamente, desempenhar a mesma função exercida no seu elemento-pai:

        /*public function correr() {
            echo 'O cavlo trotou. <hr>';
        }*/

    }

    $bicho = new Cavalo();

    $bicho->andar();
    $bicho->correr();

    /*Caso, dentro da classe instanciada, haja um método com o mesmo nome do método do elemento-pai, o método do elemento-filho terá prioridade.*/

    //P. S.: "super-classe" == "classe-pai".

?>
