<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: mpmac
 * Date: 2019-03-20
 * Time: 11:59
 */

namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum(int ...$numbers): int {
        return array_reduce($numbers, function ($a, $b){
            return $a += $b;
        });
    }}