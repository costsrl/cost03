<?php
namespace Cost03;
class TestClass02 {
    public $name = "";
    public $surname = "";

    public function __construct(string $n, $sn){
        $this->name = $n;
        $this->surname = $sn;
    }

    public function getDetails(){
        return "M03 CL02 Surname: ".$this->surname." - Name: ". $this->name ;
    }
}

?>