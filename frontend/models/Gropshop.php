<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gropshop".
 *
 * @property integer $g_id
 * @property string $g_name
 * @property string $g_money
 * @property integer $g_type_id
 * @property string $g_content
 * @property string $g_p_img
 * @property string $g_p_img2
 * @property string $g_p_img3
 * @property integer $g_del
 * @property integer $g_num
 * @property string $g_place
 * @property string $g_coordinate
 * @property integer $c_id
 * @property string $g_desc
 */
class Gropshop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gropshop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_type_id', 'g_del', 'g_num', 'c_id'], 'integer'],
            [['g_content'], 'string'],
            [['g_name', 'g_money', 'g_p_img', 'g_p_img2', 'g_p_img3', 'g_place', 'g_coordinate', 'g_desc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'g_name' => 'G Name',
            'g_money' => 'G Money',
            'g_type_id' => 'G Type ID',
            'g_content' => 'G Content',
            'g_p_img' => 'G P Img',
            'g_p_img2' => 'G P Img2',
            'g_p_img3' => 'G P Img3',
            'g_del' => 'G Del',
            'g_num' => 'G Num',
            'g_place' => 'G Place',
            'g_coordinate' => 'G Coordinate',
            'c_id' => 'C ID',
            'g_desc' => 'G Desc',
        ];
    }

    // public function hotel_search()
    // {
    //     $update = Yii::$app->db->createCommand()->update('hotsearch',['search_num'=>$num],['search_name'=>$zhi])->query();
    //     $insert = Yii::$app->db->createCommand()->insert('hotsearch',['search_num'=>$num,'search_name'=>$zhi])->query();  
    // }


    //最热酒店显示
    public function hot_hotel_best()
    {
        $selects = $this->findBysql("SELECT * FROM gropshop WHERE g_del = 1 ORDER BY g_num DESC ")->asArray()->one();
        return $selects;
    }

    //热门城市
    public function hot_city()
    {
        $selects = $this->findBysql("SELECT * FROM city INNER JOIN click ON city.c_id = click.c_id ORDER BY c_num DESC LIMIT 8")->asArray()->all();
        return $selects;
    }

    //酒店推荐
    public function hot_hotel()
    {
        $selects = $this->findBysql("SELECT * FROM gropshop WHERE g_money<701 and g_del =1 ORDER BY g_num DESC LIMIT 6")->asArray()->all();
        return $selects;
    }


    //城市信息
    public function city_about($id)
    {
        $selects = $this->findBysql("SELECT * FROM city INNER JOIN gropshop ON city.c_id = gropshop.c_id WHERE city.c_id = '$id'")->asArray()->one();
        return $selects;
    }

    //城市地区
    public function city_place($id)
    {
        $selects = $this->findBysql("SELECT * FROM city WHERE c_pid = '$id'")->asArray()->all();
        return $selects;
    }

    //酒店详情
    public function hotel_about($id)
    {
        $selects = $this->findBysql("SELECT * FROM gropshop INNER JOIN grop_type ON gropshop.g_type_id = grop_type.t_id WHERE g_id = '$id'")->asArray()->all();
        return $selects;
    }

    public function search($hotel)
    {
        $selects = $this->findBysql("SELECT * FROM gropshop INNER JOIN city ON gropshop.c_id = city.c_id WHERE g_name and c_name like '%$hotel%'")->asArray()->all();
        return $selects;
    }
        /**
     *查询该城市比较好的酒店
     *
     */
    public function hotels($id)
    {
        $alls = $this->find()->where(['c_id'=>$id])->orderBy(['g_num'=>SORT_DESC])->asArray()->all();
        if(count($alls)>4)
        {
            $alls = $this->find()->where(['c_id'=>$id])->orderBy(['g_num'=>SORT_DESC])->limit(4)->asArray()->all();
        }
        return $alls;
    }


}
