<?php

    //Aula 04 - Construtor

    class Login_2 {

        private $email;
        private $senha;
        private $nome;

        //O Construtor é um método:

        public function __construct($e_mail, $password, $name) {
            $this->nome = $name;
            $this->email_setter($e_mail);
            $this->password_setter($password);            
        }

        //Toda vez que uma classe for criada, esse método (acima) será inicializado.
        //Ao ser instanciada, podemos passar parâmetros para a classe.
        
        public function email_setter($mail) {
            $email = filter_var($mail, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function email_getter() {
            return $this->email;
        }

        public function password_setter($pass) {
            $this->senha = $pass;
        }

        public function password_getter() {
            return $this->senha;
        }

        function name_getter() {
            return $this->nome;
        }
        
        public function Logar() {
            if ($this->email == 'teste@teste.com' and $this->senha == '123456' and $this->nome == 'Ademir'):

                echo '"Logado" com sucesso! <hr>';

            else:

                echo 'Dados inválidos. <hr>';

            endif;
        }

    }

    $logar = new Login_2('teste@teste.com', '123456', 'Ademir'); //O Construtor é inicializado ao se instanciar uma classe.

    $logar->Logar();

    echo 'Email: '. $logar->email_getter(). '. <hr>';
    echo 'Senha: '. $logar->password_getter(). '. <hr>';
    echo 'Nome: '. $logar->name_getter(). '. <hr>';

?>
