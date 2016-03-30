<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $c_id
 * @property string $c_name
 * @property integer $c_pid
 * @property string $c_img
 * @property string $c_desc
 * @property integer $c_hotel_num
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_pid', 'c_hotel_num'], 'integer'],
            [['c_desc'], 'string'],
            [['c_name', 'c_img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_name' => 'C Name',
            'c_pid' => 'C Pid',
            'c_img' => 'C Img',
            'c_desc' => 'C Desc',
            'c_hotel_num' => 'C Hotel Num',
        ];
    }

    //景点推荐
    public function travel($id)
    {
        return $this->find()->select('*')
            ->innerJoin('travel',"city.c_id = travel.c_id")
            ->where("city.c_id = '$id' and travel.t_del = 1")
            ->orderBy(['click_num'=>SORT_DESC])
            ->limit(10)
            ->asArray()
            ->all();
            
    }

    public function city()
    {
        return $this->find()->select('*')
            ->innerJoin('click',"city.c_id = click.c_id")
            ->orderBy(['c_num'=>SORT_DESC])
            ->limit(8)
            ->asArray()
            ->all();
                    
    }
        /**
     * 城市详情页
     *
     */
    public function detcity($id)
    {
        //查询这个城市
        return $cityinfo = $this->find()->where(['c_id'=>$id])->asArray()->one();
    }

}
