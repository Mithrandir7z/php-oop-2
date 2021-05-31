<?php 

class User {
    public $name;

    public $lastname; 

    public $acquisti = [];

    public function __construct($_name, $_lastname) {

        $this->name = $_name;
        $this->lastname = $_lastname;
    }
}

?>