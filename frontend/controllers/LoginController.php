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
use frontend\models\Login;
header("content-type:text/html;charset=utf8");
/**
 * Site controller
 */
class LoginController extends Controller
{
	public $enableCsrfValidation = false;
      //跳到登录页面的方法
      public function actionLogin(){
      	   return $this->renderPartial("login");
      }
      //做登录的方法
      public function actionDo_login(){
      	$request = Yii::$app->request;
        $connection=Yii::$app->db; 
        $session = Yii::$app->session;	
        $session->open();
        $cookies = Yii::$app->response->cookies;
        $m_name=$request->post('m_name'); 
        //$u_id=$request->post('u_id'); 
        $m_pad=$request->post('m_pad'); 
        $sql="select * from message where m_name='$m_name'";
        $arr1 = \yii::$app->db->createCommand($sql)->queryOne();
        //print_r($arr);die;
        if($arr1){
        //print_r($arr1);die;
        //判断密码
         if($arr1['m_pad']==$m_pad){

         	       //session的id
         	      $session['u_id'] = $arr1['m_id'];
         	      //echo $session['u_id'];die;
                //session的用户名
         	       $session['u_name']=$arr1['m_name'];
                 $language = $cookies->get('cookie_day', 'cookie_day',time()-3600);
         	      //echo $u_id;die;
                //登录成功调到首页并输出session的值,就是是谁登录的用户名
               // echo "<script>alert('登陆成功');location.href='index.php?r=data/index'</script>";
                 $this->redirect('index.php?r=data/index');
         }else{
            //密码错误跳回到登录页面 继续登录
         	 echo "<script>alert('密码错误');location.href='index.php?r=login/login'</script>";
         }
        }else{
        	     //用户名不存在调回登录页面 继续登录
        	    echo "<script>alert('用户名不存在');location.href='index.php?r=login/login'</script>";

        }


      }
      public function actionSign_out(){
        //指向登录页面
           $session = Yii::$app->session; 
           $session->open();
           $session->remove('m_name');
          //echo $session['m_name'];die;
           $this->redirect('index.php?r=data/index');
      }
    /*
     * 退出删除session值
     */
    public function actionU_session(){
        $session=Yii::$app->session;
        $session->open();
        unset($session['u_id']);
        unset($session['u_name']);
    }
}