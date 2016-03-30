<?php
/**
 * Created by PhpStorm.
 * module:景点
 * User: wangnana
 * Date: 2016/3/24
 * Time: 14:40
 */

namespace frontend\controllers;

use app\models\City;
use app\models\Gropshop;
use Yii;
use app\models\Travel;
use yii\web\Controller;

class ViewspotsController extends Controller
{
    /**
     *显示主页
     */
    public function actionIndex()
    {
        $this->layout="header";
        $model = new Travel();
        //轮播图（点击量最高前六张）
        $pots = $model->searchsix();
        //最好的时节
        $season = $model->seasons();
        $page = $season['page'];
        $info = $season['info'];
        //最热的城市
        $citys = $model->hotcity();
        $fourcity = $citys[0];
        return $this->render('magazine',['spots'=>$pots,'season'=>$info,'page'=>$page,'city'=>$fourcity]);
    }
    /**
     *景点详情页
     *
     */
    public function actionDetail()
    {
        $this->layout="header";
        $model = new Travel();
        $city = new City();
        $hotel= new Gropshop();
        //季节景点详情页
        if($type = Yii::$app->request->get('season'))
        {
            $s_id = Yii::$app->request->get('s_id');
            $detail = $model->detseason($s_id);
            $views = $detail['views'];
            $hotel = $detail['hotel'];
            return $this->render('detviews',['view'=>$views,'hotels'=>$hotel]);
        }
        //城市详情页
        else
        {
            $c_id = Yii::$app->request->get('c_id');
            $detail = $city->detcity($c_id);
            //推荐景点（这个城市的）
            $views = $model->cityview($c_id);
            //推荐酒店（这个城市的）
            $citys = $hotel->hotels($c_id);
            return $this->render('detcity',['city'=>$detail,'view'=>$views,'hotel'=>$citys]);
        }
    }
}