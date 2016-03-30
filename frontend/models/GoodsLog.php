<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods_log".
 *
 * @property integer $l_id
 * @property integer $g_id
 * @property integer $u_id
 * @property integer $l_num
 * @property string $l_time
 * @property integer $l_integral
 */
class GoodsLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_id', 'u_id', 'l_num', 'l_integral'], 'integer'],
            [['l_time'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'g_id' => 'G ID',
            'u_id' => 'U ID',
            'l_num' => 'L Num',
            'l_time' => 'L Time',
            'l_integral' => 'L Integral',
        ];
    }
}
