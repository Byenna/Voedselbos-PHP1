<?php

// Get page from URL
$page = getPage();

// Get action from URL
$function = getFunction();


// dd($_POST['password'], password_verify($_POST['password'], $data['password']));
// dd($_SERVER['DOCUMENT_ROOT'] . '/controllers/add_to_cart.php');
// dd("page = " . $page, "function = " . $function);

// M = Model (data)
// V = View (html)
// C = Controller (php)

if (!empty($page) && file_exists('controllers/' . $page . '.php')) {
    require_once 'controllers/' . $page . '.php';

    // Call function in controller
    $function($page);
}