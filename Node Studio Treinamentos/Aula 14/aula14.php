<?php

    //Aula 14 - Referência e Clonagem de Objetos

    class Pessoa {
        public $idade;

        //Utilizando o método mágico "clone":

        public function __clone() {
            //Este método é inicializado ao se usar a palavra "clone" (ver linha 31):

            print 'Clonagem de objetos. <hr>';
        }
    }

    $person = new Pessoa();

    $person->idade = 25;

    //Um objeto referenciando outro:

    $person_2 = $person;

    $person_2->idade = 26;

    print 'Idade de "$person_2": '. $person->idade. '. <hr>';

    //Também é possível clonar um objeto:

    $person_3 = clone $person;

    $person_3->idade;

    print 'Idade de "$person_3": '. $person_3->idade. '. <hr>';

?>
