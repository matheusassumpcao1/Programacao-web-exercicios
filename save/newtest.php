<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-U   A-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php 
$livros = array("Harry Poter", "Crepusculo", "O Hobbit");
$usuarios= array('leitor','bibliotecaria','administrador');
$arL= array('anv', 'antonio', 'neuza');
$arB= array('bete', 'davi');
$arA= array('tico', 'teco');

function verLivros() {
    global $livros;
    echo "Livros disponiveis: ";
    foreach ($livros as $livro) {
        echo $livro."<br>";
    }
}

function registrarEmprestimo($empresta){
    echo "O livro $empresta foi emprestado.";

}

function criarUsuario($nome){
    echo "O usuario $nome foi criado.";
}


?>


