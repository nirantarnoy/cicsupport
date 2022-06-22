<?php

namespace backend\helpers;

class CalType
{
    private static $data = [
        '1' => 'คำนวน',
        '0' => 'ไม่คำนวน',
    ];

    private static $dataobj = [
        ['id' => '1', 'name' => 'คำนวน'],
        ['id' => '0', 'name' => 'ไม่คำนวน'],
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
