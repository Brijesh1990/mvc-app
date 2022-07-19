<?php 
require_once("model/model.php"); 
class controller extends model 
{
     
    public function __construct() 
    {
        parent:: __construct();

        $name="hi krupanshi";
        echo $name;

    }
     
}

$obj=new  controller;

?>