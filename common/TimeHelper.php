<?php

namespace cooldaniel\helpers\common;

class TimeHelper
{
    public static function format_datetime($timestamp=null, $format='Y-m-d H:i:s')
    {
        if ($timestamp === null) {
            $timestamp = time();
        }

        return date($format, $timestamp);
    }
}