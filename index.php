<?php
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-03-14
 * Time: 11:29
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/src/functions.php';
require __DIR__ . '/src/functions_strict.php';


$func1 = \calculateHomeWorkSum(3, 2.2, '1');
$func2 = \Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
$func3 = \Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
$func4 = \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');

echo $func1;
echo PHP_EOL;
echo __FUNCTION__ . $func2;
echo PHP_EOL;
echo $func3;
echo PHP_EOL;
echo $func4;