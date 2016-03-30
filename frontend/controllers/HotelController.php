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
use app\models\Gropshop;
use app\models\City;

/**
 * Hotel Controller
 */

class HotelController extends Controller
{


	/**
	 * 酒店
	 */
	public function actionHotel()
	{

		$this->layout="header";	

		$model = new Gropshop;

		$hotel = Yii::$app->db;


		//最热酒店
		$re = $model->hot_hotel_best();	
		$re['g_content'] = substr($re['g_content'], 0,530);
		
		//热门城市
		$arr = $model->hot_city();

		//酒店推荐
		$result = $model->hot_hotel();
		
		return $this->render('news',['re'=>$re,'arr'=>$arr,'result'=>$result]);		
	}



	/**
	 * 热门城市酒店详情
	 */
	public function actionHotel_about()
	{

		$this->layout = "header";

		$model = new Gropshop;

		$models = new City;

		$hotel = Yii::$app->db;

		$id = $_GET['id'];
		

		//城市信息
		$re = $model->city_about($id);

		//城市地区
		$arr = $model->city_place($id);

		//景点推荐
		$travel_result = $models->travel($id);

		//分页
		if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }

        $pagesize = 2;			//每页显示条数
        $sql = $hotel->createCommand('SELECT COUNT(*) FROM gropshop');   //查询数据库中一共有多少条数据
        $postCount = $sql->queryScalar();			//查询标量值/计算值：queryScalar();
        $countpage = ceil($postCount/$pagesize);	//总页数
        $limit2 = ($page-1)*$pagesize;				//偏移量

        //城市下的酒店
		$city_hotel = $hotel->createCommand("SELECT * FROM city INNER JOIN gropshop ON city.c_id = gropshop.c_id WHERE city.c_id = '$id' and gropshop.g_del = 1 ORDER BY gropshop.g_num DESC limit $limit2,$pagesize");
		$c = $city_hotel->queryAll();

		return $this->render('hotel_about',['re'=>$re,'arr'=>$arr,'c'=>$c,'travel_result'=>$travel_result,'page'=>$page,'countpage'=>$countpage]);
	}


	/**
	 * 酒店详情
	 */
	public function actionHot_about()
	{
		$this->layout = "header";
		$model = new Gropshop;
		$models = new City;
		$hotel = Yii::$app->db;
		$id = $_GET['id'];

		//酒店详情
		$arr = $model->hotel_about($id);

		//地图坐标
		$coo = $hotel->createCommand("SELECT g_coordinate FROM gropshop WHERE g_id = '$id'");
		$c = $coo->queryOne();

		//热门城市

		$arr2 = $models->city();

		return $this->render('hot_about',['arr'=>$arr,'arr2'=>$arr2,'c'=>$c]);
	}


	public function actionSearch()
	{

		$this->layout = "header";
		$hotel = $_GET['hot'];
		// echo $hotel;die;
		$model = new Gropshop;

		//酒店搜索
		$re = $model->search($hotel);
		// print_r($re);die;
		// print_r($re);
		return $this->render('search',['c'=>$re]);
	}
}