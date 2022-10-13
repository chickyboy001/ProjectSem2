<?php

class Logout
{
    public function __construct()
    {
        unset($_SESSION['useradmin']);
        header('Location: ../../?controller=loginAdmin'); 
    }
}
$logout = new Logout();