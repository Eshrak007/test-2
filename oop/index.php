<?php 

class Robot{
    public $name;
    public $description;

    public function __construct($name,$description)
    {
        $this->name=$name;
        $this->description=$description;
    }
    public function work(){
        return "$this->name did its work perfectly";
    }
}
$jervis=new Robot("jervis","powerfull robot");

echo $jervis->name .'<br>';
echo $jervis->description.'<br>';
echo $jervis->work();


?>