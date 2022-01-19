<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function insert()
{
    $fruits = $_POST;

    $id = $fruits[0];
    $title = $fruits[1];
    $image = $fruits[2];
    $price = $fruits[3];

    $query = "INSERT INTO `cart` (`id`, `title`, `image`, `price`) VALUES ($id, '$title', '$image', '$price')";
    $result = query($query);

}  

