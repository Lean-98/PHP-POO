<?php include 'includes/header.php';

 abstract class Trasporte {
    public function __construct(protected int $ruedas, protected int $capacidad )
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " Persona/s ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}


class Bicicleta extends Trasporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " Persona y NO GASTA GASOLINA.";
    }
}

class Automovil extends Trasporte {
    public function __construct(protected int $ruedas, protected int $capacidad ,protected string $transmision )
    {
    }
    public function getTransmision() : string {
        return $this->transmision;  
    }    
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
// echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4, 5 , 'Manual');
echo $auto->getInfo();
echo $auto->getTransmision();


include 'includes/footer.php';