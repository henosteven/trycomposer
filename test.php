<?php

require('./vendor/autoload.php');
$test = new Testcomposer\Foo\Test;
$test->hello();
$test->hi();

$test1 = new Haha\TryTest\TryLo;
$test1->justTry();

$test2 = new HenoLib();
$test2->test();

$test3 = new HenoHelper();
$test3->test();

$test4 = new service_pay();
$test4->test();
