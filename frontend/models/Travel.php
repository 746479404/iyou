<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "travel".
 *
 * @property integer $t_id
 * @property string $t_name
 * @property string $t_p_img
 * @property string $t_content
 * @property string $t_j
 * @property string $t_w
 * @property integer $c_id
 * @property integer $s_id
 * @property string $t_money
 * @property integer $t_comment_id
 * @property integer $t_del
 * @property integer $click_num
 */
class Travel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 's_id', 't_comment_id', 't_del'], 'integer'],
            [['t_name', 't_p_img', 't_content', 't_j', 't_w', 't_money'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_name' => 'T Name',
            't_p_img' => 'T P Img',
            't_content' => 'T Content',
            't_j' => 'T J',
            't_w' => 'T W',
            'c_id' => 'C ID',
            's_id' => 'S ID',
            't_money' => 'T Money',
            't_comment_id' => 'T Comment ID',
            't_del' => 'T Del',
            'click_num'=>'T Num',
        ];
    }
    /**
     * 模块：搜索价格最高的前六条数据
     * author：wangnana
     * time:2016/3/24
     */
    public function searchsix()
    {
        return $this->find()->select('*')
            ->innerJoin('city',"travel.c_id = city.c_id")
            ->innerJoin('season',"travel.s_id = season.s_id")
            ->orderBy(['click_num'=>SORT_DESC])
            ->limit(6)
            ->asArray()
            ->all();
    }
    /**
     * 最好的时节
     * 按时间跟点击量
     */
    public function seasons()
    {
        $time = date('m',time());
        if($time>=3 && $time<6)
        {
            $season = 1;
        }
        else if($time>=6 && $time<9)
        {
            $season = 2;
        }
        else if($time>=9 && $time<11)
        {
            $season = 3;
        }
        else
        {
            $season = 4;
        }
            $sql = $this->find()
            ->innerJoin('city',"travel.c_id = city.c_id")
            ->innerJoin('season',"travel.s_id = season.s_id")
            ->where(['travel.s_id'=>$season])
           ->orderBy(['click_num'=>SORT_DESC])->select('*');
        //return  $sql->asArray()->all();die;

        $sql1 = clone $sql;
        $pages = new Pagination([
            'totalCount'=>$sql1->count(),
            'defaultPageSize'=>3,
        ]);
        $info = Yii::$app->db->createCommand("select * from travel as tr join city on tr.c_id = city.c_id join season as sea on sea.s_id=tr.s_id where tr.s_id = '$season' limit ".$pages->offset.",".$pages->limit)->queryAll();

       /* $info = $sql2->offset($pages->offset)
            ->limit($pages->limit)
            ->all();*/
        return ['page'=>$pages,'info'=>$info];
    }
    /**
     * 最热的城市
     * 按城市里景点最多
     */
    public function hotcity()
    {
        $city = $this->find()->select("c_id")->asArray()->all();
        foreach($city as $k=>$v)
        {
            $arr[$k]=$v['c_id'];
        }
       $hots= array_count_values($arr);
        arsort($hots);
        foreach($hots as $k=>$v)
        {
            $city = new City();
            $citys[] = $city->find()->where(['c_id'=>$k])->asArray()->one();
        }
        //景点最多的前三位
        $info = array_chunk($citys,3);
        return $info;
    }
    /**
     * 季节详情页（season,$s_id）
     */
    public function detseason($id)
    {
         $viewspots = $this->find()
             ->innerJoin('city',"travel.c_id = city.c_id")
             ->innerJoin('season',"travel.s_id = season.s_id")
             ->where(['travel.t_id'=>$id])
             ->select('*')
             ->asArray()
             ->one ();
        //点击一次，点击量加一
        $res = Yii::$app->db->createCommand()->update('travel',['click_num'=>$viewspots['click_num']+1],['t_id'=>$id])->query();
        $city_id = $viewspots['c_id'];
        /*查询这个景点所在地区的推荐酒店（点击量）*/
        $hotel = new Gropshop();
        $hotels = $hotel->find()->where(['c_id'=>$city_id])->all();
        if(count($hotels)>4)
        {
            $hotels = $hotel->find()->where(['c_id'=>$city_id])->limit(4)->all();
        }
        else
        {
            $hotels = $hotel->find()->where(['c_id'=>$city_id])->all();
        }
        return ['views'=>$viewspots,'hotel'=>$hotels];
       // $recommend = $this->find()->where();
    }
    /**
     *城市 里面的景点
     *
     */
    public function cityview($id)
    {
        $all = $this->find()->where(['c_id'=>$id])->asArray()->all();
        if(count($all)>4)
        {
            $all = $this->find()->where(['c_id'=>$id])->orderBy(['click_num'=>SORT_DESC])->limit(4)->asArray()->all();
        }
        return $all;
    }
    /**
     *查处所有的景点
     *
     */
    public function allview()
    {
        return $this->find();

    }
}
