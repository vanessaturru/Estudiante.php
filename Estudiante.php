

<?php

class estudiante{
     //definimos los atributos de los estrudiantes  

     public $nombre;
     public $edad;
     public $promedio;
     public $grupo;
     public $matrícula;
     public $carrera;

     //metodo constructor 

     public function _contruct($nombre, $edad, $grupo, $promedio, $matrícula, $carrera){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->promedio = $promedio;
        $this->grupo = $grupo;
        $this->matrícula = $matrícula;
        $this->carrera = $carrera;
       

     }

}

// en esta parte del codigo son los datos que nos van arrojar al poner que estudiante es 
$estudiante1 = new estudiante ('Vanessa', 20, 6.5, 604, 12340652, 'informática');
$estudiante2 = new estudiante('Yoyce', 22, 9.5, 604, 123402478, 'informática' );

//aqui se imprime los datos completos llamando las variables 
echo "eres $estudiante1->nombre tienes $estudiante1->edad años de edad, tienes un promedio de $estudiante1->promedio, eres del grupo 
$estudiante1->grupo, tu matrícula es $estudiante1->matrícula y estas en la carrera de $estudiante1->carrera <br> ";

echo "eres $estudiante2->nombre tienes $estudiante2->edad años de edad, tienes un promedio de $estudiante2->promedio, eres del grupo 
$estudiante2->grupo, tu matrícula es $estudiante2->matrícula y estas en la carrera de $estudiante2->carrera";


?>










