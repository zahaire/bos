<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('currentTimestamp')) {
    function currentTimestamp()
    {
        return date("Y-m-d H:i:s");
    }
}

if (!function_exists('curentDate')) {
    function curentDate()
    {
        return date("Y-m-d");
    }
}
