<?php

namespace backend\helpers;

class StatusType
{
    private static $data = [
        '1' => 'ใช้งาน',
        '0' => 'ไม่ใช้งาน',
    ];

    private static $dataobj = [
        ['id' => '1', 'name' => 'ใช้งาน'],
        ['id' => '0', 'name' => 'ไม่ใช้งาน'],
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
