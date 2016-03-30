<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "season".
 *
 * @property integer $s_id
 * @property string $s_name
 */
class Season extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'season';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_name' => 'S Name',
        ];
    }
    public function sel()
    {
        $sql = "select * from season";
        return $info =\Yii::$app->db->createCommand($sql)->queryAll();

    }
}
