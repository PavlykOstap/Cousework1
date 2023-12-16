<?php
// image.php

$connect = mysqli_connect('localhost', 'root', '', 'kyr');

if (!$connect) {
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

$query = "SELECT * FROM products";
$result = mysqli_query($connect, $query);
?>
