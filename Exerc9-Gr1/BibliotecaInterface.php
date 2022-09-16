<?php

    interface biblioteca{
        public function verLivros($vet);
    }

    class LeitorInt implements biblioteca{

        public $nome;
        public $tipo;
        public $email;
        public $login;
        public $senha;

        public function verLivros($vet)
        {
            $cont = 1;
            foreach($vet as $i){
                echo "$cont - ";
                echo "$i <br>";
                $cont++;
            }
        }
    }

    class BibliotecarioInt implements biblioteca{
        public $nome;
        public $tipo;
        public $email;
        public $login;
        public $senha;
        public function verLivros($vet)
        {
            $cont = 1;
            foreach($vet as $i){
                echo "$cont - ";
                echo "$i <br>";
                $cont++;
            }
        }
        public function registrarEmprestimo($vet, $pos){
            $cont = 0;
    
            while($cont < 10){
                if($cont == $pos){
                    $vet[$cont] = $vet[$cont] . " E";
                }
                $cont++;
            }
        return $vet;
        }
    }

    class AdministradorInt implements biblioteca{
        public $nome;
        public $tipo;
        public $email;
        public $login;
        public $senha;
        public function verLivros($vet)
        {
            $cont = 1;
            foreach($vet as $i){
                echo "$cont - ";
                echo "$i <br>";
                $cont++;
            }
        }

        public function criarUsuario($nome, $tipo, $email, $login, $senha){
            if($tipo == 1){
                $novoUsuario = new Leitor();
                $novoUsuario->nome = $nome;
                $novoUsuario->tipo = "Leitor";
                $novoUsuario->email = $email;
                $novoUsuario->login = $login;
                $novoUsuario->senha = $senha;
            }elseif($tipo == 2){
                $novoUsuario = new Bibliotecario();
                $novoUsuario->nome = $nome;
                $novoUsuario->tipo = "Bibliotecario";
                $novoUsuario->email = $email;
                $novoUsuario->login = $login;
                $novoUsuario->senha = $senha;
            }else{
                $novoUsuario = new Administrador();
                $novoUsuario->nome = $nome;
                $novoUsuario->tipo = "Adiministrador";
                $novoUsuario->email = $email;
                $novoUsuario->login = $login;
                $novoUsuario->senha = $senha;
            }
        echo "<br>Usuario $nome criado com sucesso!<br>";
        return $novoUsuario;
        }
    }
?>