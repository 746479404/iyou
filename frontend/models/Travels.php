<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%travels}}".
 *
 * @property integer $t_id
 * @property integer $u_id
 * @property integer $t_img_p
 * @property string $t_title
 * @property string $t_content
 * @property integer $c_id
 * @property string $t_times
 * @property string $t_img
 */
class Travels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%travels}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 't_img_p', 'c_id'], 'integer'],
            [['t_content'], 'string'],
            [['t_title', 't_times'], 'string', 'max' => 255],
            [['t_img'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            'u_id' => 'U ID',
            't_img_p' => 'T Img P',
            't_title' => 'T Title',
            't_content' => 'T Content',
            'c_id' => 'C ID',
            't_times' => 'T Times',
            't_img' => 'T Img',
        ];
    }
}
