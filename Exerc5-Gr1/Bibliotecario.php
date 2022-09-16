<?php

class Bibliotecario extends Leitor{

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

?>