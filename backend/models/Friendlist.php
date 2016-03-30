<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "friendlist".
 *
 * @property integer $f_id
 * @property string $f_name
 * @property string $f_url
 */
class Friendlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friendlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_name', 'f_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_id' => 'F ID',
            'f_name' => 'F Name',
            'f_url' => 'F Url',
        ];
    }

        public function inserts()
    {
        $name = $_POST['f_name'];
        $url = $_POST['f_url'];
        $insert = Yii::$app->db->createCommand()->insert('friendlist',['f_name'=>$name,'f_url'=>$url])->query();
        return $insert;
    }
    public function upda()
    {
        $id  = $_POST['f_id'];
        $name = $_POST['f_name'];
        $url = $_POST['f_url'];
        $upda = Yii::$app->db->createCommand()->update('friendlist',['f_name'=>$name,'f_url'=>$url],['f_id'=>$id])->query();
        return $upda;
    }
    public function selects($limit2,$pagesize)
    {

        $selects = $this->findBysql("SELECT * from friendlist limit $limit2,$pagesize")->asArray()->all();
        return $selects;
    }
}
