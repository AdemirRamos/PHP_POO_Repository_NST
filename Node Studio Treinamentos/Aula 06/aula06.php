<?php

    //Aula 06 - Modificadores de Acesso

    //Modificadores de Acesso:

    //1ª: "public":

    /*Fará com que não haja ocultação nenhuma. Toda propriedade e/ou método declarado como "public", serão acessíveis a quem quer que queira acessá-los dentro ou fora do escopo da classe.*/

    //2ª: "protected":

    /*Esse método de acesso faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.*/

    //3: "private":

    /*Ao contrário de "public", esse método faz com que qualquer propriedade ou método passem a ser acessados somente pela classe que os declarou, dentro do escopo dessa classe. - Não é possível acessá-los nem por herança e nem fora do escopo da classe.*/

    class Veículo {
        public $modelo;
        protected $cor;
        private $ano;

        public function andar() {
            echo 'O veículo andou. <hr>';
        }

        public function parar() {
            echo 'O veículo parou. <hr>';
        }

        //Como ter acesso e manipular um atributo definido como "protected":

        public function colour_setter($color) {
            $this->cor = $color;
        }

        public function colour_getter() {
            return $this->cor;
        }

        //Modificando uma propriedade declarada como "private":

            public function year_setter($year) {
                $this->ano = $year;
            }
    
            public function year_getter() {
                return $this->ano;
            }
    }

    class Carro extends Veículo {
        public function para_brisa() {
            echo 'O para-brisa foi ligado. <hr>';
        }

        public function colour_setter($color) {
            $this->cor = $color;
        }

        public function colour_getter() {
            return $this->cor;
        }
    }

    class Moto extends Veículo {
        public function grau() {
            echo 'Você deu um "grau" e morreu. Passar bem. <hr>';
        }

        public function colour_setter($color) {
            $this->cor = $color;
        }

        public function colour_getter() {
            return $this->cor;
        }
    }

    /*$carro = new Carro();

    $carro->modelo = 'Gol';
    $carro->cor  = 'Vermelho';
    $carro->ano = 2018;
    $carro->andar();
    $carro->para_brisa();

    echo 'Conteúdo de <strong>"$carros"</strong>: ';

    echo var_dump($carro). '<hr>';

    $moto = new Moto();

    $moto->modelo = 'Honda Biz';
    $moto->cor = 'Azul';
    $moto->ano = 2017;
    $moto->parar();
    $moto->grau();

    echo 'Conteúdo de <strong>"$moto"</strong>: ';

    echo var_dump($moto). '<hr>';*/

    print "<strong>Conteúdo da aula 06:</strong><hr>";

    //Um exemplo da permissividade de "public":

    $veículo = new Veículo();

    $veículo->modelo = 'Honda';

    print "O novo modelo definido foi: \"$veículo->modelo\". <hr>";

    //Exemplo quanto a restrição de "protected" - as linhas de código abaixo (comentadas), resultam em um erro:

    //$veículo-> cor = 'Brnaco';

    //print "A nova cor definida foi: \"$veículo->cor\". <hr>";

    $veículo->colour_setter('Azul');
    print 'A nova cor definida foi: "'. $veículo->colour_getter(). '". <hr>';

    //Com o método "protected" é possível acessar os métodos e propriedades de uma classe a partir do escopo da classe ou dos herdeiros:

    $car = new Carro();

    $car->colour_setter('Preto');
    print 'Nova cor do objeto da classe "Carro": "'. $car->colour_getter(). '". <hr>';

    $motorcycle = new Moto();

    $motorcycle->colour_setter('Vermelha');
    print 'Nova cor do objeto da classe "Moto": "'. $motorcycle->colour_getter(). '". <hr>';

    $veículo->year_setter(2022);
    print 'Novo ano definido, dentro do escopo de "Veículo", por conta da prorpiedade "ano" (\'private\'), foi: "';
    print $veículo->year_getter(). '". <hr>';

    print var_dump($veículo). '<hr>'; //Por conta de "private", a propriedade "ano" terá como valor "null".
    var_dump($veículo->ano);

?>
