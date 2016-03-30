<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use app\models\Gropshop;
/**
 * This is the model class for table "travelaround".
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $content
 * @property integer $c_id
 */
class Travelaround extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travelaround';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['c_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'content' => 'Content',
            'c_id' => 'C ID',
        ];
    }
    //查询所在城市id
    public function select_city($city){
        $id=$this->findBySql("select c_id from city where c_name = '$city'")->asArray()->one();
        return $id;
    }
    //查询定位城市的景点
    public function select_all($id){
        $arr=$this->findBySql("select * from travel inner join city on travel.c_id=city.c_id where travel.c_id='$id' and travel.t_del=1")->asArray()->all();
        $pages = new Pagination([
            'totalCount' => count($arr),
            'defaultPageSize' => 4,
            ]);
        $info=Yii::$app->db->createCommand("select * from travel inner join city on travel.c_id=city.c_id where travel.c_id='$id' and travel.t_del=1 limit ".$pages->offset.",".$pages->limit)->queryAll();
        return ['pages'=>$pages,'info'=>$info];
    }
    //查询其他推荐景点
    public function select_else(){
        $model=new Travel();
        $row=$model->find()->orderBy(['click_num'=>SORT_DESC]);
        $sql=clone $row;
        $pages = new Pagination([
            'totalCount' =>$sql->count(),
            'defaultPageSize'=>4,
            ]);
        $models = $sql->offset($pages->offset)
        ->limit($pages->limit)
        ->asArray()
        ->all();
        return ['pages'=>$pages,'else'=>$models];
    }
    //查询定位城市的酒店
    public function select_hotel($id){
        // $hotel=$this->findBySql("select * from gropshop where c_id = '$id' order by g_num desc");
        $model = new Gropshop();
        $hotel=$model->find()->where(['c_id'=>$id])->orderBy(['g_num'=>SORT_DESC]);
        $sql=clone $hotel;
         $pages = new Pagination([
            'totalCount' => $sql->count(),
            'defaultPageSize' => 4,
            ]);
        $models = $sql->offset($pages->offset)
        ->limit($pages->limit)
        ->asArray() 
        ->all();
        return ['pa'=>$pages,'info'=>$models];
    }
    //显示其他推荐酒店
    public function sel_hotels(){
        $model=new Gropshop();
        $row=$model->find()->orderBy(['g_num'=>SORT_DESC]);
        $sql=clone $row;
        $pages = new Pagination([
            'totalCount' =>$sql->count(),
            'defaultPageSize'=>4,
            ]);
        $models = $sql->offset($pages->offset)
        ->limit($pages->limit)
        ->asArray()
        ->all();
        return ['pages'=>$pages,'info'=>$models];
    }
    //根据用户搜索景点
    public function search($city){
        if (empty($city)) {
            $model=new Travel();
            $row=$model->find()->orderBy(['click_num'=>SORT_DESC]);
            $sql=clone $row;
            $pages = new Pagination([
                'totalCount' =>$sql->count(),
                'defaultPageSize'=>4,
                ]);
            $info = $sql->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
        }else{ 
        $arr=$this->findBySql("select * from travel inner join city on travel.c_id = city.c_id where c_name like '%$city%'")->asArray()->all();
        $pages = new Pagination([
            'totalCount' => count($arr),
            'defaultPageSize' => 4,
            ]);
        $info=Yii::$app->db->createCommand("select * from travel inner join city on travel.c_id = city.c_id where c_name like '%$city%' limit ".$pages->offset.",".$pages->limit)->queryAll();
        }
        return ['pages'=>$pages,'info'=>$info];
    }
    //根据用户搜索酒店
    public function sea_hotel($city){
        if (empty($city)) {
            $model=new Gropshop();
            $row=$model->find()->orderBy(['g_num'=>SORT_DESC]);
            $sql=clone $row;
            $pages = new Pagination([
                'totalCount' =>$sql->count(),
                'defaultPageSize'=>4,
                ]);
            $info = $sql->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
        }else{

        $arr=$this->findBySql("select * from gropshop inner join city on gropshop.c_id = city.c_id where c_name like '%$city%'")->asArray()->all ();
        $pages = new Pagination([
            'totalCount' => count($arr),
            'defaultPageSize' => 4,
            ]);
        $info=Yii::$app->db->createCommand("select * from gropshop inner join city on gropshop.c_id = city.c_id where c_name like '%$city%' limit ".$pages->offset.",".$pages->limit)->queryAll();
        
        }
        return ['pages'=>$pages,'info'=>$info];
    }
    //无法搜索到用户所在的城市显示其他景点
    public function sea_scenery(){
        $model=new Travel();
            $row=$model->find()->orderBy(['click_num'=>SORT_DESC])->limit(8);
            $sql=clone $row;
            $pages = new Pagination([
                'totalCount' =>$sql->count(),
                'defaultPageSize'=>4,
                ]);
            $info = $sql->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
            return ['p'=>$pages,'info'=>$info];
    }
    //无法搜索到用户所在的城市显示其他酒店
    public function sea_ho(){
        $model=new Gropshop();
            $row=$model->find()->orderBy(['g_num'=>SORT_DESC])->limit(8);
            $sql=clone $row;
            $pages = new Pagination([
                'totalCount' =>$sql->count(),
                'defaultPageSize'=>4,
                ]);
            $info = $sql->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
            return ['p'=>$pages,'info'=>$info];
    }
}
