<?php


namespace {
    function calculateHomeWorkSum(...$numbers) {
        $result = array_reduce($numbers, function ($a, $b){
            return $a += $b;
    });
        echo __FUNCTION__ . ': ' . $result . PHP_EOL;
}}

namespace Nfq\Akademija\Not_Typed {
    function calculateHomeWorkSum(...$numbers): int {
        $result = array_reduce($numbers, function ($a, $b){
            return $a += $b;
    });
        echo __FUNCTION__ . ': ' . $result;

}}

namespace Nfq\Akademija\Soft {
    function calculateHomeWorkSum(int ...$numbers): int {
        $result = array_reduce($numbers, function ($a, $b){
            return $a += $b;
    });
        echo __FUNCTION__ . ': ' . $result;
}}