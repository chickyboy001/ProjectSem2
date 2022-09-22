#model/Admin.php

<?php
class Admin
{
    public $admin_id;
    public $admin_name;
    public $username;
    public $password;

    public function __construct($admin_id, $admin_name, $username, $password)
    {
        $this->admin_id = $admin_id;
        $this->admin_name = $admin_name;
        $this->username = $username;
        $this->password = $password;
    }

    public function login($username, $password){
        
    }

}
?>