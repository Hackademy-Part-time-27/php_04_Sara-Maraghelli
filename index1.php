<?
class Vertebrate {
    public $name;
    public function __construct($nome){
        $this->name=$nome;
    }

    protected function saluta(){
        echo"Sono  $this->name e sono un vertebrato \n";
    }

    public function tellMeWhoIAm(){
        $this->saluta();
        $this->saluta1();
    }

    public function tellMeWhoIAm1(){
        $this->saluta();
        $this->saluta2();
    }

}

class WarmBlooded extends Vertebrate{

    public function __construct($nome){
        Parent::__construct($nome);
    }
   
    protected function saluta1(){
        echo "Sono a sangue caldo \n";
    }

   }

class ColdBlooded extends Vertebrate{

    public function __construct($nome){
        Parent::__construct($nome);
    }
    protected function saluta2(){
    echo"Sono a sangue freddo \n";
}

};

$lion=new WarmBlooded("il Leone");
$bird=new WarmBlooded("l' Uccello");
$fish=new ColdBlooded("il Pesce");
$snake=new ColdBlooded("il Serpente");
$frog=new ColdBlooded("la Rana");

 $lion->tellMeWhoIAm();
 $bird->tellMeWhoIAm();
 $fish->tellMeWhoIAm1();
 $snake->tellMeWhoIAm1();
 $frog->tellMeWhoIAm1();
