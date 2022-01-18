<?php

function index($view)
{
    $query = "SELECT * FROM `products` WHERE `deleted_at` IS NULL";
    $result = query($query);
    $fruits = $result->fetchAll(PDO::FETCH_ASSOC);

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}