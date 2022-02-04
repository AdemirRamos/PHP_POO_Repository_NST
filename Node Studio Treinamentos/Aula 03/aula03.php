<?php

    //Aula 03 - "Getters" e "Setters"

    class Login {
        
        //Caso os atributos sejam "private", eles não poderão ser acessados de fora da classe (salvo apenas com "getters" e "setters"):
        
        public function email_setter($mail) {

            //Exemplo de filtração de e-mail:

            $email = filter_var($mail, FILTER_SANITIZE_EMAIL);

            $this->email = $email;
            
            //Assim se define o e-mail.
        }

        public function email_getter() {
            //O nome mais indicado para essa função é "get_email", mas não é uma obrigação usar esse nome.

            return $this->email;

            //Assim se captura o e-mail.
        }

        public function password_setter($pass) {
            $this->senha = $pass;
        }

        public function password_getter() {
            return $this->senha;
        }

        private $email;
        private $senha;
        
        public function Logar() {
            if ($this->email == 'teste@teste.com' and $this->senha == '123456'):

                echo '"Logado" com sucesso! <hr>';

            else:

                echo 'Dados inválidos. <hr>';

            endif;
        }

    }

    $logar = new Login(); //Agora, "$logar" é um objeto "Login".
    
    //$logar->email = 'teste@teste.com';
    //$logar->senha = '123456';
    
    $logar->email_setter('teste@teste.com');
    $logar->password_setter('123456');

    $logar->Logar();

    echo 'Email: '. $logar->email_getter(). '. <hr>';
    echo 'Senha: '. $logar->password_getter(). '. <hr>';

    //Uma das razões para se usar "getters" e "setters" consiste em poder realizar filtrações a partir deles.

?>
