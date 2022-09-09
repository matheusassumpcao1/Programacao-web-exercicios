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
$usuario = array(
  array("nome" => "Antonio", "tipo" => "leitor", "email" => "anv@ftek.com", "login" => "anv", "senha" => "f@tek"), 
  array("nome" => "Bete", "tipo" =>  "bibliotecária", "email" => "bete@ftek.com", "login" => "bib", "senha" => "bib123"), 
  array("nome" => "Teco", "tipo" =>  "admin", "email" => "teco@ftek.com", "login" => "admin", "senha" => "admin123"),
  array("nome" => "Tico", "tipo" => "admin", "email" => "tico@ftek.com", "login" => "admin1", "senha" => "admin1")
);

echo '<table>';
  echo '<tr>  
  <th>Usuário</th>
  <th>Tipo</th>
  <th>e-mail</th>
  <th>Login</th>
  <th>Senha</th>
  </tr>';

  foreach($usuario as $name){
    echo '<tr>
        <td>'.$name['nome'].'</td>
        <td>'.$name['tipo'].'</td>
        <td>'.$name['email'].'</td>
        <td>'.$name['login'].'</td>
        <td>'.$name['senha'].'</td>
      </tr>';
  }
echo '</table>';

