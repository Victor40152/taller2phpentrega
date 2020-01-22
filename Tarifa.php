<?php 

class Tarifa{

    private $valorserie;
    
    public function __construct(){
        $this-> valorserie =0;
    }

    public function getValortarifa(){
        return $this->valorserie;
    }
    public function setValortarifa($valor){
        $this->valorserie =$valor;
    }

    public function listarTarifas(){
        $tarifa=10000;
        if ($this->getValortarifa()<=5){

            echo "<br> Su función es gratis";
        }else{
            if ($this->getValortarifa()<=12){
                echo "<br> Su función es a mitad de precio";
                $total=($tarifa/2);
                echo "Su tarifa es ".$total;

        }else{
            if ($this->getValortarifa()<=54){
                echo "<br> Su función tiene tarifa completa";
            }
        else{
            echo "<br> Su función es gratis ";

        }

    

        }
    }
    }
}

    
?>
   