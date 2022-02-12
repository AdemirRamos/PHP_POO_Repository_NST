<?php

    //Aula 13 - Namespaces

    //Temos dois arquivos com o mesmo nome e nome de métodos, em pastas diferentes.
    //Para evitar conflitos, usamos "namespaces" (nas pastas onde estão os arquivos com as classes):

    require 'Classes/produto.php';
    require 'Modelos/produto.php';

    //Após adicionar o "namespace", é possível instanciar a classe normalmente:

    $produto = new \Classes\Produto();
    $produto->mostrar_detalhes();

    $produto = new \Modelos\Produto();
    $produto->mostrar_detalhes();

    //Além de fazer a declaração do modo como foi feito acima, ela também pode ser feita deste outro modo:
    
    use \Classes\Produto;

    $product = new Produto();
    $product->mostrar_detalhes();

    //É possível, ao carregar uma classe, definir o nome através do qual ela será instanciada:

    use \Modelos\Produto as product_model;

    $product = new product_model();
    $product->mostrar_detalhes();

?>
