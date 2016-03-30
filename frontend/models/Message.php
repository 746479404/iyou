<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $m_id
 * @property string $m_name
 * @property string $m_sex
 * @property string $m_img
 * @property string $m_email
 * @property string $m_tel
 * @property integer $a_id
 * @property string $m_integral
 * @property integer $u_id
 * @property string $m_time
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['m_img'], 'file', 'extensions' => 'png, jpg ,gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'm_id' => 'M ID',
            'm_name' => 'M Name',
            'm_sex' => 'M Sex',
            'm_img' => 'M Img',
            'm_email' => 'M Email',
            'm_tel' => 'M Tel',
            'a_id' => 'A ID',
            'm_integral' => 'M Integral',
            'u_id' => 'U ID',
            'm_time' => 'M Time',
        ];
    }
}
