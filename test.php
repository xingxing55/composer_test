<?php

/**
 * @Author: Ethan
 * @Date:   2020-01-16 17:34:35
 * @Last Modified by:   feng
 * @Last Modified time: 2020-01-17 09:15:51
 */

ini_set('display_errors',1);
error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';



use hello\Hello;

echo Hello::world()."\n";
p("hello");
echo "\n";