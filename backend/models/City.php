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
    public function sel()
    {
        $sql = "select * from city";
        return $info =\Yii::$app->db->createCommand($sql)->queryAll();
    }
}
