<?php
abstract class Country 
{
    protected $slogan;
    public abstract function sayHello();

    public function setSlogan($slogan){
        $this->slogan = $slogan;
    }
}

interface Boss
{
    public function checkValidSlogan();
}

class EnglandCountry extends Country implements Boss
{
    public function sayHello()
    {
        echo "Hello";
    }
    public function checkValidSlogan()
    {
        $x = stripos($this->slogan,"england");
        $y = stripos($this->slogan,"english");
        
        if (is_numeric($x) || is_numeric($y)){
            return true;
        }
        else {
            return false;
        }
    }

    use Active;
}

class VietnamCountry extends Country implements Boss
{
    public function sayHello()
    {
        echo "Xin chao";
    }

    public function checkValidSlogan()
    {
        $x = stripos($this->slogan,"vietnam");
        $y = stripos($this->slogan,"hust");
        
        if (is_numeric($x) && is_numeric($y)){
            return true;
        }
        else {
            return false;
        }       
    }
    
    use Active;
}

// bonus
trait Active
{
    function defindYourSelf(){
        return get_class($this);
    }
}

?>
<!-- main -->
<?php

$englandCountry = new EnglandCountry();

$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan("England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.");

$vietnamCountry->setSlogan("Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.");

$englandCountry->sayHello(); // Hello

echo "<br>";

$vietnamCountry->sayHello(); // Xin chao

echo "<br>";

var_dump($englandCountry->checkValidSlogan()); // true

echo "<br>";

var_dump($vietnamCountry->checkValidSlogan()); // false

// bonus
echo "<br>";

echo 'I am ' . $englandCountry->defindYourSelf();

echo "<br>";

echo 'I am ' . $vietnamCountry->defindYourSelf();
?>