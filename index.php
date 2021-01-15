<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Name: Joanna Folk
    Date: 01/15/2020
    Files: index.php, ???
    Purpose: To test the boundaries of git-commits -->

    <title>Pair Program 2</title>
</head>
<body>

    <h1>Welcome to Jo's World </h1>

</body>
</html>

<?php

    // Block for error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);

?>

<?php

    // Calls upon the functions of functions.php
    include 'functions.php';

    // Block for PHP Array Practice

    echo "<br><br>Numbers printed from an array: <br><br>";

    // An array holding a random assortment of numbers
    $numbers = array('7','9','8','9','8','8','6');

    // Print out the numbers on the page
    printArr($numbers);

    echo "<br><br>The largest number from the array: <br><br>";

    // Print out the numbers in order on the page
    largest($numbers);

    echo "<br><br>All unique values from the Array: <br><br>";

    // Print out unique values of an array
    $array = removeDups($numbers);
    printArr($array);

    echo "<br><br>Elements counted & returned as an Associative Array: <br><br>";

    // Print as an associativeArray (associativeArray returned)
    $field = distribution($numbers);

?>