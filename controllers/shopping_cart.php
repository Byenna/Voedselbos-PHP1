<?php

function index($view)
{
    $query = "SELECT * FROM `cart`";
    $result = query($query);
    $items = $result->fetchAll(PDO::FETCH_ASSOC);

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}