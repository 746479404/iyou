<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "extension".
 *
 * @property integer $e_id
 * @property integer $u_id
 * @property integer $u_pid
 * @property integer $e_inte
 * @property string $e_time
 */
class Extension extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'extension';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'u_pid', 'e_inte'], 'integer'],
            [['e_time'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'e_id' => 'E ID',
            'u_id' => 'U ID',
            'u_pid' => 'U Pid',
            'e_inte' => 'E Inte',
            'e_time' => 'E Time',
        ];
    }
}
