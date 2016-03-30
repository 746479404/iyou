<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kefu".
 *
 * @property integer $q_id
 * @property string $q_name
 * @property string $q_qq
 */
class Kefu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kefu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['q_name', 'q_qq'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'q_id' => 'Q ID',
            'q_name' => 'Q Name',
            'q_qq' => 'Q Qq',
        ];
    }
        public function selects($limit2,$pagesize)
    {

        $selects = $this->findBysql("SELECT * from kefu limit $limit2,$pagesize")->asArray()->all();
        return $selects;
    }

        public function upda()
    {
        $id  = $_POST['q_id'];
        $name = $_POST['q_name'];
        $url = $_POST['q_qq'];
        $upda = Yii::$app->db->createCommand()->update('kefu',['q_name'=>$name,'q_qq'=>$url],['q_id'=>$id])->query();
        return $upda;
    }

        public function inserts()
    {
        $name = $_POST['q_name'];
        $url = $_POST['q_qq'];
        $insert = Yii::$app->db->createCommand()->insert('kefu',['q_name'=>$name,'q_qq'=>$url])->query();
        return $insert;
    }
}
