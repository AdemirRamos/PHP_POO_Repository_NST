<?php

    //Aula 08 - Abstração (classes abstratas e métodos abstratos)

    abstract class Banco {
        protected $saldo;
        protected $limite_saque;
        protected $juros;

        abstract protected function sacar($balance);

        abstract protected function depositar($balance);

        //A classe "Banco()", após receber "abstract", se tornou uma Classe Abstrata que serve de modelo para as outras duas (classes).
        //A partir deste ponto, não é mais possível instanciar a classe "Banco()".

        //Casos os métodos de "Banco()" também sejam tornados abstratos, eles poderão ser usados nas outras classes como uma extensão.
        //A partir do momento em que os métodos são tornados abstratos, não é mais preciso usar chaves após suas declarações.
        //A declarações dos métodos (e seus respectivos conteúdos) devem ser feitas nas classes herdeiras.
        //As declarações de método devem ser feitas em todos classes herdeiras.

        //Dentro da Classe Abstrata, também é possível se ter métodos não abstratos:

        public function set_saldo($balance) {
            $this->saldo = $balance;
        }

        public function get_saldo() {
            return $this->saldo;
        }
    }

    class Banco_2 extends Banco {
        public function sacar($balance) {
            $this->saldo = $this->saldo - $balance; //Outra escrita possível: "$this->saldo -= $balance".
            print 'O valor sacado foi de: '. $balance. '. <hr>';
        }

        public function depositar($balance) {
            $this->saldo += $balance;
            print 'O valor depositado foi de: '. $balance. '. <hr>';
        }
    }

    class Banco_3 extends Banco {
        public function sacar($balance) {
            $this->saldo = $this->saldo - $balance; //Outra escrita possível: "$this->saldo -= $balance".
            print 'O valor sacado foi de: '. $balance. '. <hr>';
        }

        public function depositar($balance) {
            $this->saldo += $balance;
            print 'O valor depositado foi de: '. $balance. '. <hr>';
        }
    }

    $bank = new Banco_2();

    $bank->set_saldo(1000);
    print 'Saldo: ';
    print $bank->get_saldo(). '.<hr>';

    $bank->sacar(250);
    print 'Saldo atual: ';
    print $bank->get_saldo(). '. <hr>';

    $bank->depositar(100);
    print 'Saldo atual: '. $bank->get_saldo(). '. <hr>';

?>
