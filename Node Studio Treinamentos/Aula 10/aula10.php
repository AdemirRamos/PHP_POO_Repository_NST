<?php

    //Aula 10 - Métodos e Atributos Estáticos

    class Login {

        //Criando um atributo estático:

        public static $user;

        public static function verificação_login() {
            print 'O usuário ' .self::$user. ' está logado. <hr>';
        }

        //O "$this" só pode ser usado quando se instancia uma classe. Com métodos e atributos estáticos, ele não funciona.
        //Em seu lugar (no lugar de "$this"), devemos usar "self::".

        //Se pode usar métodos e atributos estáticos junto de não estáticos:

        public function logout() {
            print 'O usuário não está mais "logado". <hr>';
        }

        //Os métodos não estáticos não vão funcionar como os estáticos.
        //Sendo assim, com métodos não estáticos, é necessário instanciar a classe.
    }

    //Com métodos e atributos estáticos, não é necessário instanciar a classe:

    Login::verificação_login();
    Login::$user = 'Ademir';

    $logout = new Login();

    print $logout->logout();

?>
