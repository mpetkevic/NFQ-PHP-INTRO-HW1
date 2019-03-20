<?php


namespace {
    function calculateHomeWorkSum(...$numbers) {
        echo __FUNCTION__ . ': ';
        return array_reduce($numbers, function ($a, $b){
            return $a += $b;
    });
}}

namespace Nfq\Akademija\Not_Typed {
    function calculateHomeWorkSum(...$numbers): int {
        echo __FUNCTION__ . ': ';
        return array_reduce($numbers, function ($a, $b){
            return $a += $b;
    });

}}

namespace Nfq\Akademija\Soft {
    function calculateHomeWorkSum(int ...$numbers): int {
        echo __FUNCTION__ . ': ';
        return array_reduce($numbers, function ($a, $b){
            return $a += $b;
    });
}}