<?php

    //Aula 12 - Interfaces

    //"interfaces": definem o modelo a ser usado por outras classes.

    //Definindo uma "interface":

    interface Crud {
        public function create($data); //Aqui não será permitido linhas de códigos; apenas parâmetros (se necessários).
        public function read();
        public function update();
        public function delete();
    }

    //Implementando a "interface":

    class Notícias implements Crud {
        //Agora é preciso declarar os métodos-modelo:

        public function create($data) {
            //Aqui vão os códigos para criar uma notícia.
        }

        public function read() {
            //Aqui vão os códigos para ler uma notícia.
        }

        public function update() {
            //Aqui vão os códigos para atualizar uma notícia.
        }

        public function delete() {
            //Aqui vão os códigos para deletar uma notícia.
        }

        //A responsabilidade para criar os códigos dos métodos é da classe que herda a "interface".
        //Na "interface", são apenas feitas as declarações dos métodos.
        
        //P. S.: Os métodos das "interfaces" devem ser públicos.
    }

?>
