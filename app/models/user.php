<?php 

class User extends AppModel 
{
    public $useTable = false;

   
    public function find($type, $options) 
    {
        
        $conditions = $options["conditions"];
        if( $conditions["User.username"] == Configure::read("Admin.Username")  &&
            $conditions["User.password"] == Configure::read("Admin.Password")) {
            
            return array("User" => array(
                "username" => Configure::read("Admin.Username"),
                "password" => Configure::read("Admin.Password")
            ));
        
        }
        
        return array();
    }  

}
