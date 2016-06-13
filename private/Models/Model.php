<?php 
class Model extends PDO
{
    public function __construct()
    {          
        parent::__construct('mysql:host=localhost;dbname=quiz;charset=UTF8', 'root', '');
    }

}
