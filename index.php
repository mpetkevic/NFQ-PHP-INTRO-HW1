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


echo \calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
echo \Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
echo \Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;
echo \Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
echo PHP_EOL;


