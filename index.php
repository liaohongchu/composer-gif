<?php
require './vendor/autoload.php';
use Wanlliu\Hello\Test;
$test=new Test();
$rst=$test->say();
echo $rst;