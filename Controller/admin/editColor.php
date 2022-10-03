<?php
class EditColor
{
    public function __construct()
    {
        require '../../Model/Color.php';
        $colorModel = new Color();
        
        
            header('Location: ?controller=showProduct');
        
        
    }
}