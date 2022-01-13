<?php

function products($view)
{
    $fruits = require 'model/fruits.php';
   

    require 'views/' . $view . '.view.php';
}