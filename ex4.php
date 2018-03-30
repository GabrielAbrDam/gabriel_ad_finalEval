<?php 

namespace gabriel_ad_finale;

use 'ex4_cat.php';

class cat
{
    private $firstname;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    
    // ************** FIRSTNAME --- Beginning **************
    public function __construct(string $outputfirstname)
    {
        $this->firstname = fopen($outputfirstname, 'w');
    }
        
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    public function setfirstname(string $newFirstname)
    {
        if (strlen($newFirstname) <= 3 && strlen($newFirstname) >= 20)
        {
            throw new Exception();
        }
        $this->firstanme = $newFirstname;
        return $this;
    }
 
    
    // ************** AGE --- Beginning **************
    public function __construct(string $outputAge)
    {
        $this->age = fopen($outputAge, 'w');
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    protected function setAge(INT $newAge)
    {
        if (in_int($newSex))
        {
            $this->age = $newAge;
        }else{
            throw new Exception();
        }
        return $this;
    }
    
    // ************** COLOR --- Beginning **************
    public function __construct(string $outputColor)
    {
        $this->color = fopen($outputColor, 'w');
    }
        
    public function getColor()
    {
        return $this->color;
    }
    
    protected function setColor(string $newColor)
    {
        if (strlen($newColor) <= 3 && strlen($newColor) >= 10){
            throw new Exception();
        }
        $this->color = $newColor;
        return $this;
    }
    
    // ************** SEX --- Beginning (OHHHH YEAHHH :) ) **************
    
    public function __construct(string $outputSex)
    {
        $this->sex = fopen($outputSex, 'w');
    }
   
    public function getSex()
    {
        return $this->sex;
    }
    
    protected function setSex($newSex)
    {
        if (in_array($newSex, ['male', 'female'])){
            $this->sex = $newSex;
        }else{
            throw new Exception();
        }
        return $this;
    }
    
    // ************** RACE --- Beginning (OHHHH YEAHHH :) ) **************
    public function __construct(string $outputRace)
    {
        $this->race = fopen($outputRace, 'w');
    }
    
    protected function setRace(string $newRace)
    {
        if (strlen($newRace) <= 3 && strlen($newRace) >= 20){
            throw new Exception();
        }
        $this->race = $newRace;
        return $this;
    }
    
    
    // ************** getInfo Method --- Beginning **************
    public function getInfo()
    {
        return [
            'firstname' => $this->firstname,
            'age' => $this->age,
            'color' => $this->color,
            'sex' => $this->sex,
            'race' => $this->race
        ];
    }
    
}


// miaou miaou miaou

//$cat1 = new Cat();
//$cat1->setfirstname('Riri')->setAge('88')->setColor('rouge et jaune à petits poid')->setSex('female')->setRace('Sphynx');

//$cat2 = new Cat();
//$cat2->setfirstname('Fifi')->setAge('888')->setColor('bleu et vert à petits poid')->setSex('male')->setRace('chat de goutière');

//$cat3 = new Cat();
//$cat3->setfirstname('Loulou')->setAge('8888')->setColor('violet et magenta à petits poid')->setSex('female')->setRace('chat europeen');






?>