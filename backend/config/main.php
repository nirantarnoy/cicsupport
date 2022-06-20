<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
//        'ldap' => [
//            'class' => 'chrmorandi\ldap\Connection',
//            // Mandatory Configuration Options
//            'dc' => [
//                '172.16.0.215',
//                'ad.net'
//            ],
//            'baseDn'          => 'dc=ad,dc=net',
//            'username'        => 'administrator@cicnetgrp.net',
//            'password'        => 'Tamakogi@&2019$',
//            // Optional Configuration Options
//            'port'            => 389,
//            'followReferrals' => false,
//            'useTLS'          => true,
//            // Change pageSize (e.g. to 1000) if you are getting the following message
//            // with large result sets:
//            // ldap_search(): Partial search results returned: Sizelimit exceeded
//            'pageSize'        => -1,
//        ],
//        'ldapAuth' => [
//            'class' => '\stmswitcher\Yii2LdapAuth\LdapAuth',
//            'host' => '172.16.0.205',
//            'baseDn' => 'dc=cicnetgrp,dc=net',
//            'searchUserName' => 'administrator@cicnetgrp.net',
//            'searchUserPassword' => 'Tamakogi@&2019$',
//
//            // optional parameters and their default values
//            'ldapVersion' => 3,             // LDAP version
//            'protocol' => 'ldap://',       // Protocol to use
//            'followReferrals' => false,     // If connector should follow referrals
//            'port' => 389,                  // Port to connect to
//            'loginAttribute' => 'uid',      // Identifying user attribute to look up for
//            'ldapObjectClass' => 'person',  // Class of user objects to look up for
//            'timeout' => 10,                // Operation timeout, seconds
//            'connectTimeout' => 5,          // Connect timeout, seconds
//        ],
//        'user' => [
//            'identityClass' => '\stmswitcher\Yii2LdapAuth\Model\LdapUser',
//        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
