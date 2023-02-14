<?php

class Person {
    public $name = 'nombre';
    public $surname = 'apellido';
    public $age = '00';

    function construct($name,$surname,$age) {
        echo "pasa por construct" .PHP_EOL;

        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;
    }
    public function getinfo(){
        echo $this-> name ."\n";
        echo $this-> surname ."\n";
        echo $this-> age ."\n";

    }

}

$personJ = new Person ('Julia','Siembra','30');
$personM = new Person ('Mario','Sembrado','31');

echo $personJ -> getinfo();
echo $personM -> getinfo();


?>