<?php


class   Model_member {
    public $Name;
    public $Age;
    public $Number;
    public $Email;
    public $Location; 
    public $City;

    public function __construct($name = "",  $age = "", $number = "", $email = "", $location = "", $city = "") {
        $this->Name = $name;
        $this->Age = $age;
        $this->Number = $number;
        $this->Email = $email;
        $this->Location = $location;
        $this->City = $city;
    }
}

?>