<?php


if (!function_exists('getCategory')) {
    function getCategory()
    {
        return '₹' . number_format($amount, 2);
    }
}
