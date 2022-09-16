<?php

    class Leitor{
        public $nome;
        public $tipo;
        public $email;
        public $login;
        public $senha;

        public function verLivros($vet){

            $cont = 1;
            foreach($vet as $i){
                echo "$cont - ";
                echo "$i <br>";
                $cont++;
            }
        }
    }
?>