<?php

namespace App\Classes;

class Valid
{
    public static function Param($cntrl, $act)
    {
        $params = [
            'news' => ['all', 'one', '404', '403'],
            'admin' => ['add', 'delete', 'insert', 'update', 'edit', '403', 'auth']
        ];

        if (array_key_exists($cntrl, $params)) {
            return in_array($act, $params[$cntrl]);
        } else {
            return false;
        }
    }
}
