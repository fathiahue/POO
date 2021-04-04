<?php
class Cars{
    private  $nbrWheels ='4';
    public  $currentSpeed;
    private  $color = 'red';
    private  $nbrSeat ='5';
    private  $energy ='gazoil';
    private  $energyLevel;
    


 public function __construct( $color , $nbrSeat , $energy)
 {


}

public function getNbrWheels(){

    return $this->nbrWheels ='4';
}


public function getNbrSeat(){

    return $this->nbrseat ='5';
}




public function getEnergy(){

    return $this->energy ='gazoil';
}




public function getColor(){

    return $this->color ='red';
}




public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake():string
{
    $sentence ="safe";
    while ($this->currentSpeed > 10){
        $this ->currentSpeed--;
        $sentence.="Brake";
        
    }
    echo '<br>';
    $sentence .="I'm stopped";
    return $sentence;
}
}






<?php
require_once  'cars.php';

$cars = new Cars( $color , $nbrSeat , $energy);




echo $cars->getColor();
echo "<br>";

echo $cars->getNbrSeat();
echo'<br>';

echo $cars->getEnergy();
echo '<br>';




echo $cars->forward();
echo '<br> Vitesse de la voiture:' . $cars->currentSpeed .'<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture:' .$cars->currentSpeed .'<br>';
echo $cars->brake();

