<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

$logar= ['anv', 'bete', 'tico'];
$senhar= ['f@tek','bib123','admin1'];
$tipo= ['leitor','bibliotecaria','admin'];


for ($cont= 0; $cont <=2; $cont++):
  
  if ($login == $logar[$cont] && $senha == $senhar[$cont]):
    print_r(" o usuario $logar[$cont] é do tipo $tipo[$cont] \n");
    break; 

  elseif($cont==2): 
    echo "usuario ou senha errados";
    
  endif;
  
endfor;