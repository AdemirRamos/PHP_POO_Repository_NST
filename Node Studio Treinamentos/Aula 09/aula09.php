<?php

    //Aula 09 - Constantes, "Self" e "Parent"

    class Pessoa {
        const nome = 'Ademir';
        
        //Referenciando a constante acima criada:

        public function exibir_nome() {
            echo self::nome;
        }
    }

    $pessoa = new Pessoa();

    echo 'Nome salvo na constante "nome" em "Pessoa": "';
    echo $pessoa->exibir_nome(). '". <hr>';

    class Ademir extends Pessoa {
        const nome = 'Ramos';

        public function exibir_nome() {
            echo self::nome;
        }

        public function exibir_nome_2() {
            echo parent::nome;
        }

        //O "self" sempre aponta para a constante dentro do escopo onde ele ("self") é utilizado.
        //Por conta disso, o método "exibir_nome()" poderia ter sido usado com "$pessoa" sem que houvesse qualquer erro.
        //Caso a constante nome = 'Ramos' fosse removida deste escopo, então seria capturada a constante nome = 'Ademir'.

        //Caso se deseje apontar para a constante do elemento-pai, basta usar, no lugar de "self", "parent".
    }

    $person = new Ademir();

    echo 'Nome salvo na constante "nome" em "Ademir": "';
    echo $person->exibir_nome(). '".<hr>';

    echo 'Nome salvo na constante "nome" em "Pessoa": ';
    echo $person->exibir_nome_2(). '. <hr>';

?>
