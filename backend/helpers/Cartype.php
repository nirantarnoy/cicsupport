<?php

namespace backend\helpers;

class Cartype
{
    private static $data = [
        '1' => '5ส',
        '2' => 'Safety',
    ];

    private static $dataobj = [
        ['id' => '1', 'name' => '5ส'],
        ['id' => '2', 'name' => 'Safety'],
    ];

    public static function asArray()
    {
        return self::$data;
    }

    public static function asArrayObject()
    {
        return self::$dataobj;
    }

    public static function getTypeById($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }

    public static function getTypeByName($idx)
    {
        if (isset(self::$data[$idx])) {
            return self::$data[$idx];
        }

        return 'Unknown Type';
    }
}
