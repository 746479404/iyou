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
use app\models\Travelaround;


class TravelaroundController extends Controller
{
	public function actionIndex()
	{
		header("content-type:text/html;charset=utf-8");
		//根据ip查询用户当前
		$ad_api_url='http://api.k780.com:88/?app=ip.get&appkey=17358&sign=691de9160c83f75c9d397d26409cb714&format=json';//返回的是json格式的   如果ip不写的的话就默认是本地联网所在地的IP
		@$info = file_get_contents($ad_api_url);
		// print_r($info);die;
		@$infos = json_decode($info);//返回来的是对象
		// print_r($infos);die;
		@$area = $infos->result->att;//因为返回来的是对象  中国,北京    所以我们调用下面的数据的时候用'->';
		@$citys = explode(',',$area);//将城市单独弄出来
		@$city = $citys['1'];
		//将我们获得的城市 方式系统变量中 以便以后方便使用
		@$_CFG['city'] = $city;
		// echo $city;die;
		$this->layout="header";
		//实例化model层
		$model=new Travelaround();
		//获取当前所在城市的id 根据id查看当前城市的景点
		$city=$model->select_city($city);
		$id=$city['c_id'];
		//显示城市定位时景色图片
		$arr=$model->select_all($id);
		// print_r($arr);die;
		$pages=$arr['pages'];
		$info=$arr['info'];
		// print_r($info);die;
		//显示城市定位时相应的酒店
		$hotel=$model->select_hotel($id);
		$page=$hotel['pa'];
		$row=$hotel['info'];
		// print_r($row);die;
		//没有城市的定位时显示其他推荐景点
		$else=$model->select_else();
		$p=$else['pages'];
		$e=$else['else'];
		// print_r($e);die;
		//没有城市的定位显示其他推荐酒店
		$el=$model->sel_hotels();
		$pa=$el['pages'];
		$els=$el['info'];
		// print_r($els);die;
    	return $this->render('index',['pages'=>$pages,'arr'=>$info,'city'=>$city,'hotel'=>$hotel,'page'=>$page,'row'=>$row,'p'=>$p,'e'=>$e,'pa'=>$pa,'els'=>$els]);
	}
	//根据用户搜索的城市搜索景点
	public function actionSearch(){
		// echo 1234567890;
		//接收搜索框的值
		$city=$_GET['city'];
		$model=new Travelaround();
		//搜索景点
		$arr=$model->search($city);
		$page=$arr['pages'];
		$row=$arr['info'];
		// print_r($row);die;
		//搜索酒店
		$hotel=$model->sea_hotel($city);
		$pages=$hotel['pages'];
		$info=$hotel['info'];
		// print_r($info);die;
		//搜索不到用户所输入的城市显示其他景点
		$else=$model->sea_scenery();
		$p=$else['p'];
		$sce=$else['info'];
		// print_r($a['p']);die;
		//搜索不到用户所输入的城市显示其他酒店
		$el=$model->sea_ho();
		$pa=$el['p'];
		$hot=$el['info'];
		// print_r($el['info']);die;
		if (@$_GET['page']) {
			$this->layout='header';
		}else{
			$this->layout=false;
		}
		return $this->render('search',['arr'=>$arr,'hotel'=>$hotel,'pages'=>$page,'row'=>$row,'page'=>$pages,'info'=>$info,'citys'=>$city,'p'=>$p,'sce'=>$sce,'pa'=>$pa,'hot'=>$hot]);
	}
}