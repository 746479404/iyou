<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_pwd
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_name'], 'string', 'max' => 255],
            [['u_pwd'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
        ];
    }
    public function selects()
    {
        $select = $this->findBysql("SELECT * FROM user inner join message ON user.u_id=message.u_id")->asArray()->all();
        return $select;
    }


}
