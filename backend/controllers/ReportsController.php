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
class ReportsController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex(){
        return $this->render('_index');
    }
}