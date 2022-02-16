<?php

    //Aula 17 - Relação Entre Objetos (Agregação)

    //Na agregação, uma classe depende da outra para executar a sua ação, ou seja, uma classe utiliza outra como parte de si própria.

    class Produtos {
        public $nome;
        public $valor;

        function __construct($name, $value) {
            $this->nome = $name;
            $this->valor = $value;
        }
    }

    class Carrinho {
        public $produto;

        //Realizando a agregação:

        public function adicionar(Produtos $produto) {
            $this->produto[] = $produto;
        }

        public function exibir() {
            foreach ($this->produto as $product) {
                echo $this->produto->nome. '. <hr>';
                echo $this->produto->valor. '. <hr>';
            }
        }
    }

    $produto_01 = new Produtos('Notebook', 'R$1,500,00');

    $produto_02 = new Produtos('Mouse', 'R$50,00');

    $carrinho = new Carrinho();

    $carrinho->adicionar($produto_01);
    $carrinho->adicionar($produto_02);
    $carrinho->exibir();
?>
