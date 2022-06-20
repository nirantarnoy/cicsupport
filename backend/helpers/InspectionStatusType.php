<?php

namespace backend\helpers;

class InspectionStatusType
{
    private static $data = [
        '1' => 'ปกติ',
        '2' => 'ตรวจซ้ำ',
    ];

    private static $dataobj = [
        ['id' => '1', 'name' => 'ปกติ'],
        ['id' => '2', 'name' => 'ตรวจซ้ำ'],
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
