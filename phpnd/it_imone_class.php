<?php
abstract class ItImoneBlue {
    protected $vadovai = [];
    protected $Programuotojai = [];
    protected $Testuotojai = [];
    function __construct($vardas1, $vardas2, $vardas3) {
        array_push($this->vadovai, $vardas1);
        array_push($this->Programuotojai, $vardas2);
        array_push($this->Testuotojai, $vardas3);
    }
   

    public static function sayHello(){
        echo "<br>";
        echo "Sveiki";
        echo "<br>";
    }

    abstract function getWorkers();

}

class ItImone extends ItImoneBlue{
     public function getWorkers(){
        echo "<br>";
        echo "Vadovai: ";
        print_r([$this->vadovai,$this->Programuotojai, $this->Testuotojai]);
     }
     public function getAll(){
        echo "<br>";
        print_r($this->vadovai);
        echo "<br>";
        print_r($this->Programuotojai);
        echo "<br>";
        print_r($this->Testuotojai);
    }
    
}

class Vadovai extends ItImone{

    public function getWorkers(){
        echo "<br>";
        echo "Vadovai: ";
        print_r($this->vadovai);
    }
    
    public function addVadovai($vardas){
        echo "<br>";
        echo "Pridedamas vadovas.";
        array_push($this->vadovai, $vardas);
    }
    
}

class Programuotojai extends ItImone{
   public function getWorkers(){
        echo "<br>";
        echo "Programuotojai: ";
        print_r($this->Programuotojai);
    }

     public function addProgramuotojai($vardas){
        echo "<br>";
        echo "Pridedamas programuotojas.";
        array_push($this->Programuotojai, $vardas);
    }

}

class Testuotojai extends ItImone{
    public function getWorkers(){
        echo "<br>";
        echo "Testuotojai: ";
        print_r($this->Testuotojai);
    }

     public function addTestuotojai($vardas){
        echo "<br>";
        echo "Pridedamas testuotojas.";
        array_push($this->Testuotojai, $vardas);
    }

}


