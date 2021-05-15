<?php

include_once "Stack.php";

$test = new Stack();
$test->push(99);
$test->push(11);
$test->push(22);
$test->push(33);
$test->push(44);
$test->pop();
$test->pop();
$test->pop();
$test->push(55);
$test->push(66);
var_dump($test->isEmpty());
$test->pop();
$test->pop();
$test->pop();
$test->pop();
var_dump($test->isEmpty());