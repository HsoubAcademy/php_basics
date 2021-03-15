<?php


    print_r($array);
    $value = $array[$key];

    var_dump($obj);
    $obj->drinkWater();


    exit;
    $value = $array[$key];

    die();
    var_dump($obj);
    $obj->drinkWater();


    someCode;

// count
echo count(['Hello', 'World']);

// is_array
echo (integer) is_array([1, 2, 3]);
echo (integer) is_array('hello');

// explode
$string = 'php javascript ruby swift kotlin';
$arr = explode(' ', $string);
print_r($arr);

// implode
echo implode('-', $arr);

// array_merge
$arr1 = ['red', 'green', 'blue'];
$arr2 = ['black', 'yellow'];
$result = array_merge($arr1, $arr2);
print_r($result);