<?php

namespace backend\helpers;

class Inspectiontype
{
    private static $data = [
        '1' => 'Normal',
        '2' => 'Big Cleaning',
    ];

    private static $dataobj = [
        ['id' => '1', 'name' => 'Normal'],
        ['id' => '2', 'name' => 'Big Cleaning'],
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
