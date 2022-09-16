<?php
include("Leitor.php");
include("Bibliotecario.php");
include("Administrador.php");

$vet = [
    1 => "Historia do Brasil",
    2 => "Gibi Superman",
    3 => "O Senhor dos anéis",
    4 => "Vidas secas",
    5 => "A seleção: A escolha",
    6 => "Jogos vorazes",
    7 => "1001 Piadas",
    8 => "Como programar em PHP",
    9 => "Mayombe",
    10 => "A arte da guerra",
];

$_LEITOR = new Leitor();
$_LEITOR->nome = "Antônio";
$_LEITOR->tipo = "Leitor";
$_LEITOR->email = "anv@ftec.com";
$_LEITOR->login = "anv";
$_LEITOR->senha = "f@tek";

$_BIBLIOTECARIO = new Bibliotecario();
$_BIBLIOTECARIO->nome = "Bete";
$_BIBLIOTECARIO->tipo = "Bibliotecario";
$_BIBLIOTECARIO->email = "bete@ftec.com";
$_BIBLIOTECARIO->login = "bib";
$_BIBLIOTECARIO->senha = "bib123";

$_ADIMINISTRADOR = new Administrador();
$_ADIMINISTRADOR->nome = "Teco";
$_ADIMINISTRADOR->tipo = "Adiministrador";
$_ADIMINISTRADOR->email = "teco@ftec.com";
$_ADIMINISTRADOR->login = "admin";
$_ADIMINISTRADOR->senha = "admin123";

echo "<hr>";
echo "-------------[LEITORES]-------------<br>";

$_LEITOR->verLivros($vet);
echo "<br>";

echo "<hr>";
echo "-------------[BIBLIOTECARIOS]-------------<br>";

echo "<br>EMPRESTAR LIVRO ID 1<br>";
$vet = $_BIBLIOTECARIO->registrarEmprestimo($vet, 1);
$_BIBLIOTECARIO->verLivros($vet);
echo "<br>";
echo "<hr>";
echo "-------------[ADMINISTRADORES]-------------<br>";

//Criação de usuarios pedido no exercicio 7
$tico = $_ADIMINISTRADOR->criarUsuario("Tico", 3, "tico@ftec.com", "admin1", "admin456");
echo "<br>";
$neuza = $_ADIMINISTRADOR->criarUsuario("Neuza", 1, "nz@ftec.com", "neuza", "admin456");
echo "<br>";
$davi = $tico->criarUsuario("Davi", 2, "bib1@ftec.com", "bib1", "bib456");
echo "<br>";
$fer = $tico->criarUsuario("Fernado", 1, "fer@ftec", "fer", "senha123");
echo "<br>";
$car = $tico->criarUsuario("Carla", 1, "carla@ftec", "carla3", "car456");
echo "<br>";

echo "<hr>";
echo "-------------[NOVOS USUARIOS]-------------<br>";

echo "FERNANDO<br>";
$fer->verLivros($vet);

echo "CARLA<br>";
$car->verLivros($vet);

echo "<hr>";
echo "-------------[usuarios]-------------<br>";

$user = [
    
    1 => $_LEITOR,
    3 => $_BIBLIOTECARIO,
    5 => $_ADIMINISTRADOR,
    7 => $fer,
    8 => $car,
    9 => $tico,
    10 => $neuza,
    11 => $davi,
];

foreach($user as $t){
    echo "<hr>";
    echo "$t->nome <br>";
    echo "$t->tipo <br>";
    echo "$t->email <br>";
    echo "$t->login <br>";
    echo "$t->senha <br>";
}

?>