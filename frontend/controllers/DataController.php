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
class DataController extends Controller
{
    //首页
	public function actionAaa(){
		return $this->render('aaa');
	}

	public function actionIndex()
	{
       header("content-type:text/html;charset=utf-8");
		$this->layout="header";
        //查询首页轮播信息
		$sql="select * from imgs order by addtime desc limit 8";
    	$row=Yii::$app->db->createCommand($sql)->queryAll();
        //查询6条热门景点信息
    	$sql2="select * from travel order by click_num desc limit 6";
    	$re=Yii::$app->db->createCommand($sql2)->queryAll();
    	//print_r($re);die;
        //查询6条最热酒店信息
        $sql3="select * from gropshop order by g_num desc limit 6";
        $res=Yii::$app->db->createCommand($sql3)->queryAll();
    	return $this->render('index',['row'=>$row,'re'=>$re,'res'=>$res]);  	
	}

	public function actionHotel()
	{
		$this->layout="header";	

		$hotel = Yii::$app->db;

		//最热酒店
		$sql = $hotel->createCommand("SELECT * FROM gropshop WHERE g_del =1 ORDER BY g_num DESC ");
		$re = $sql->queryOne();	
		// print_r($re);die;
		$re['g_content'] = substr($re['g_content'], 0,530);

		//热门城市
		$sql2 = $hotel->createCommand("SELECT * FROM city INNER JOIN click ON city.c_id = click.c_id ORDER BY c_num DESC LIMIT 8");
		$arr = $sql2->queryAll();

		//热门酒店
		$sql3 = $hotel->createCommand("SELECT * FROM gropshop WHERE g_money<701 and g_del =1 ORDER BY g_num DESC LIMIT 6");
		$result = $sql3->queryAll();
		// print_r($result);die;

		// $result['g_content'] = substr($result['g_content'], 0,200);

		return $this->render('news',['re'=>$re,'arr'=>$arr,'result'=>$result]);
			
	}
	//个人中心
    public function actionUser(){
        $this->layout="header";
        $session=Yii::$app->session;
        $session->open();
        //判断是否登陆，未登录跳转到登陆页面
        if($session['u_id'] ==''){
            $this->redirect(array('/login/login'));
        }
        //获取登录id
        $id=$session['u_id'];
        //根据查用户信息
        $data=(new \yii\db\Query())
            ->from('message')
            ->where(['u_id' => $id])
            ->one();
        //查询配送地址
        $region=(new \yii\db\Query())
            ->from('region')
            ->where("region_id in (".$data['r_id'].")")
            ->all();
        $str='';
        foreach($region as $k=>$v){
            $str.=$v['region_name'].' ';
        }
        //根据id查兑换商品
        $goods=(new \yii\db\Query())
            ->from('goods_log')
            ->join('LEFT JOIN','present','present.p_id=goods_log.g_id')
            ->join('LEFT JOIN','picture','picture.p_id=present.p_img_p')
            ->where(['goods_log.u_id' => $id])
            ->all();
        //print_r($goods);die;
        return $this->render('user',['data'=>$data,'goods'=>$goods,'region'=>$str]);
    }
}
