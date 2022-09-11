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

$_LEITOR2 = new Leitor();
$_LEITOR2->nome = "Neuza";
$_LEITOR2->tipo = "Leitor";
$_LEITOR2->email = "nz@ftec.com";
$_LEITOR2->login = "neuza";
$_LEITOR2->senha = "nz1";

$_BIBLIOTECARIO = new Bibliotecario();
$_BIBLIOTECARIO->nome = "Bete";
$_BIBLIOTECARIO->tipo = "Bibliotecario";
$_BIBLIOTECARIO->email = "bete@ftec.com";
$_BIBLIOTECARIO->login = "bib";
$_BIBLIOTECARIO->senha = "bib123";

$_BIBLIOTECARIO2 = new Bibliotecario();
$_BIBLIOTECARIO2->nome = "Davi";
$_BIBLIOTECARIO2->tipo = "Bibliotecario";
$_BIBLIOTECARIO2->email = "bib1@ftec.com";
$_BIBLIOTECARIO2->login = "bib1";
$_BIBLIOTECARIO2->senha = "bib456";

$_ADIMINISTRADOR = new Administrador();
$_ADIMINISTRADOR->nome = "Teco";
$_ADIMINISTRADOR->tipo = "Adiministrador";
$_ADIMINISTRADOR->email = "teco@ftec.com";
$_ADIMINISTRADOR->login = "admin";
$_ADIMINISTRADOR->senha = "admin123";

$_ADIMINISTRADOR2 = new Administrador();
$_ADIMINISTRADOR2->nome = "Tico";
$_ADIMINISTRADOR2->tipo = "Adiministrador";
$_ADIMINISTRADOR2->email = "tico@ftec.com";
$_ADIMINISTRADOR2->login = "admin1";
$_ADIMINISTRADOR2->senha = "admin456";

echo "<hr>";
echo "-------------[leitores]-------------<br>";

$_LEITOR->verLivros($vet);
echo "<br>";
$_LEITOR2->verLivros($vet);

echo "<hr>";
echo "-------------[bibliotecarios]-------------<br>";

echo "<br>EMPRESTAR LIVRO ID 1<br>";
$vet = $_BIBLIOTECARIO->registrarEmprestimo($vet, 1);
$_BIBLIOTECARIO->verLivros($vet);
echo "<br>";
echo "EMPRESTAR LIVRO ID 8<br>";
$vet = $_BIBLIOTECARIO2->registrarEmprestimo($vet, 8);
$_BIBLIOTECARIO2->verLivros($vet);

echo "<hr>";
echo "-------------[adiministradores]-------------<br>";

$fer = $_ADIMINISTRADOR->criarUsuario("Fernado", 1, "fer@ftec", "fer", "senha123");
echo "<br>";
$car = $_ADIMINISTRADOR2->criarUsuario("Carla", 1, "carla@ftec", "carla3", "car456");

echo "<hr>";
echo "-------------[novos usuario]-------------<br>";

echo "FERNANDO<br>";
$fer->verLivros($vet);

echo "CARLA<br>";
$car->verLivros($vet);

echo "<hr>";
echo "-------------[usuarios]-------------<br>";

$user = [
    
    1 => $_LEITOR,
    2 => $_LEITOR2,
    3 => $_BIBLIOTECARIO,
    4 => $_BIBLIOTECARIO2,
    5 => $_ADIMINISTRADOR,
    6 => $_ADIMINISTRADOR2,
    7 => $fer,
    8 => $car, 
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