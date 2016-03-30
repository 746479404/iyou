<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class IndexController extends Controller
{
	public function actionIndex()
    {
        for ($i=1;$i<=9;$i++){
			for ($j=1;$j<=$i;$j++) {
				echo "$i*$j=".$i*$j." ";
			}
			echo "<br>\n";
		}
    }

    public function actionDat1($str='九九乘法表'){
    	return $this->render('Dat1',['aa'=>$str]);
    }
}