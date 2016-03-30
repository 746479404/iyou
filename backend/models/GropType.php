<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grop_type".
 *
 * @property integer $t_id
 * @property string $t_name
 */
class GropType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grop_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_name'], 'string', 'max' => 255]
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
        ];
    }
}
