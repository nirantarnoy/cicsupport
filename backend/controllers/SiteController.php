<?php

namespace backend\controllers;

use common\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use stmswitcher\Yii2LdapAuth\Model\LdapUser;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'ldaplogin','adddomainuser'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionLdaplogin()
    {

        $domain = 'cicnetgrp.net';
        $username = 'niran.w';
        $password = 'Ax0887692818';
        $ldapconfig['host'] = '172.16.0.205';
        $ldapconfig['port'] = 389;
        $ldapconfig['basedn'] = 'dc=cicnetgrp,dc=net';

        $ds=ldap_connect($ldapconfig['host'], $ldapconfig['port']);
        ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);

        $dn="ou=Information,".$ldapconfig['basedn'];
        $bind=ldap_bind($ds, $username .'@' .$domain, $password);

        //  $isITuser = ldap_search($bind,$dn,'(&(objectClass=User)(sAMAccountName=' . $username. '))');
       //   $isITuser = ldap_search($ds, "OU=User Accounts,DC=Domain1,DC=foobar,DC=Local", "(|(sn=*))");
        if (TRUE == $bind) {
            echo("Login correct");
            $ad_users = [];
            $ldap_base_dn = 'DC=cicnetgrp,DC=net';
            $search_filter = '(&(objectCategory=person)(samaccountname=*))';
            $attributes =[];
            $attributes[] = 'givenname';
            $attributes[] = 'mail';
            $attributes[] = 'samaccountname';
            $attributes[] = 'sn';
            $attributes[] = 'password';
            $result = ldap_search($ds, $ldap_base_dn, $search_filter, $attributes);
            if (FALSE !== $result){
                $entries = ldap_get_entries($ds, $result);
                for ($x=0; $x<$entries['count']; $x++){
                    if (!empty($entries[$x]['givenname'][0]) &&
                        !empty($entries[$x]['samaccountname'][0]) &&
                        !empty($entries[$x]['sn'][0])){
                        //$ad_users[strtoupper(trim($entries[$x]['samaccountname'][0]))] = ['first_name' => trim($entries[$x]['givenname'][0]),'last_name' => trim($entries[$x]['sn'][0])];
                        array_push($ad_users,['samaccountname'=>trim($entries[$x]['samaccountname'][0]),'first_name'=>trim($entries[$x]['givenname'][0]),'last_name'=>trim($entries[$x]['sn'][0])]);
                    }
                }
                //print_r($entries[100]['samaccountname'][0]);
                //var_dump($entries);

//                for($i=0;$i< count($ad_users)-1;$i++){
//                    echo $ad_users[$i]['samaccountname'].' '.trim($ad_users[$i]['first_name']).' '.trim($ad_users[$i]['last_name']) .'<br />';
//                }
            }

            return $this->render('_aduserlist',['ad_users'=>$ad_users]);

        } else {
            echo("Login incorrect");
        }

    }

    public function actionAdddomainuser(){
        $ad_name = \Yii::$app->request->post('ad_user');
        print_r($ad_name);
        if($ad_name !=null){

           // $list = explode(',',$ad_name);
            if(count($ad_name)){
                for($i=0;$i<=count($ad_name)-1;$i++){
                    if(\backend\models\Person::find()->where(['ad_user'=>trim($ad_name[$i])])->count())continue;
                    $model = new \backend\models\Person();
                    $model->ad_user = $ad_name[$i];
                    $model->save(false);
                }
            }
        }
    }
}
