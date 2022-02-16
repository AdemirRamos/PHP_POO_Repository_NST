<?php

    //Aula 16 - Relação Entre os Objetos (Associação)

    //Associação: acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.

    class Pedido {
        public $número;
        public $cliente;
    }

    class Cliente {
        public $nome;
        public $endereço;
    }

    $cliente = new Cliente();

    $cliente->nome = 'Ademir';
    $cliente->endereço = 'Rua AAA, Número 123';

    $pedido = new Pedido();

    $pedido->cliente = $cliente;
    $pedido->número = 123;

    $dados = array (

        'número' => $pedido->número, 'nome' => $pedido->cliente->nome, 'endereço_cliente' => $pedido->cliente->endereço

    );
    
    print 'Resultado: ';
    print var_dump($dados). '<hr>';

?>
