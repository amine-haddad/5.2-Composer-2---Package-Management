<?php
require_once ('../vendor/autoload.php');

use HelloWorld\SayHello;
$talk = new SayHello();
echo $talk->world();

use App\Wcs\Hello;
$talk = new Hello();
echo $talk->talk();