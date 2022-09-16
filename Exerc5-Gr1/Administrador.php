<?php

class Administrador extends Leitor{

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