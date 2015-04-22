<?php

class Valid
{
    public static function Param($cntrl, $act)
    {
        $params = [
            'news' => ['all', 'one'],
            'admin' => ['add', 'delete', 'insert', 'update', 'edit']
        ];

        if (array_key_exists($cntrl, $params)) {
            return in_array($act, $params[$cntrl]);
        } else {
            return false;
        }
    }
}
