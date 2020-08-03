<?php

function checkSales(array $array,int $kijun) {
    foreach($array as $ary){
        if($ary["price"]*$ary["num"]>$kijun){
            yield $ary;
        }
    }
}
