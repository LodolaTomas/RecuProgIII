<?php
require "./clases/Cocinero.php";
$array = Cocinero::traerTodos();
$json="";
$listajson=[];
foreach ($array as $value) {
    array_push($listajson,json_decode($value->toJSON()));
}
var_dump($listajson);