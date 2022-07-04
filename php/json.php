<?php

// $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}'; //un string object readable for JS

// $decoded = json_decode($json, true); //string of json to be turned into objects //by default false

// echo $decoded["e"]; //from json objects to php array




// FROM PHP ARRAY TO STRING OBJECTS 
// $cake= array('fruit1' => 'clementine'); //or : $cake = ['fruit1' => 'clementine'];
// echo json_encode($cake);
// result is : {"fruit1":"clementine"}



// FROM STRING OBJECTS TO PHP ARRAY
// $cake = '{"fruit1":"clementine"}';
// var_dump(json_decode($cake));
//result is : object(stdClass)#1 (1) { ["fruit1"]=> string(10) "clementine" }
