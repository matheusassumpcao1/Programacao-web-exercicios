<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "O array associativo \$usuario foi prenchido com: <br>";
$usuario = array('login'=> 'anv', 'senha'=> 'f@tek');

print_r($usuario);

echo "<br><br> O conteudo do array associativo é <br>";
echo "Login = ";
print($usuario['login']);
echo "<br>Senha = ";
print($usuario['senha']);


?>
    
</body>
</html>