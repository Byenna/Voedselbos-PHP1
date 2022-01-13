<?php
$conn = mysqli_connect('localhost', 'juraia', 'Gorilla1!', 'voedselbos');

if(mysqli_connect_error()) {
    echo 'You have an error in your connection to voedselbos' . mysqli_connect_error();
}