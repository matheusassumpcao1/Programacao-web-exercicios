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

  $usuarios= ['leitor','bibliotecaria','administrador'];
  $arL= ['anv', 'antonio', 'neuza'];
  $arB= ['bete', 'davi'];
  $arA= ['tico', 'teco'];
  $livros= array("Harry Poter", "Crepusculo", "O Hobbit");

  function verLivros() {
    $usuarios= ['leitor','bibliotecaria','administrador'];
  $arL= ['anv', 'antonio', 'neuza'];
  $arB= ['bete', 'davi'];
  $arA= ['tico', 'teco'];
  $livros= array("Harry Poter", "Crepusculo", "O Hobbit");
    echo "Livros disponiveis: ";
    foreach($livros as $livro){
      echo $livro."<br>";
    }
  }
/*
   public function leitor(){
    echo $this->arL[1] ;
     echo "\n";
  }
   
  public function bibliotecaria(){
    
    echo $this->arB[1];
     echo "\n";
  }
   public function administrador(){
    echo $this->arA[1];
     echo "\n";
  }
  public function mostrar(){
    echo $this->usuarios[1];
  }

  
  public function bibliotecaria(){
    
    echo $this->arB[1];
     echo "\n";
  }
  public function bibliotecaria(){
    
    echo $this->arB[1];
     echo "\n";
  }
}
$um= new biblioteca; //necessario
$um-> leitor();
$um-> bibliotecaria();
$um-> administrador();*/
verLivros();
?>
    
</body>
</html>