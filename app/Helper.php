<?php


if(!function_exists('formatRupiah')){

    function formatRupiah(float $number){
        return 'Rp.' . number_format($number);
    }
}