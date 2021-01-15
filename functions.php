<?php

    // A function to print an array, with $numbers as the parameter
    function printArr($numbers) {

        // A foreach loop representing each number in the array on a separate line
        foreach ($numbers as $number) {
            echo "$number <br>";
        }
    }

    // A function that takes in an array as the parameter then returns the largest value in the array
    function largest($arr) {
        // Sort $arr param in order of value
        rsort($arr);

        for ($i = 0; $i < 1; $i++) {
            echo "$arr[$i] <br>";
        }
    }

    // A function that removes duplicates from an array
    function removeDups($arr) {

        return array_unique($arr);

    }

    // A function that turns a standard arr to an associative arr with # of occurances
    function distribution($arr) {


        // array = name/counter

        // keys should be sorted

        // sort

        // count ea/ in array - throw into a second arr @ $i

        // pair arr w/ associative

        $numbers = removeDups($arr);
        $occurance = array_count_values($arr);
        $assoArray = array_combine($numbers, $occurance);
        ksort($assoArray);

        echo "[";

        foreach ($assoArray as $key => $value) {

            echo "$key=> $value, ";
        }

        echo "]";

        return $assoArray;

    }


    /*

    foreach ($aso_arr as $side => $direc) {
        echo $side . " => " . $direc . "<br>";
    } */
