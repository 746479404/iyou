<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gps".
 *
 * @property integer $g_id
 * @property string $g_name
 * @property string $g_url
 */
class Gps extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gps';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_name', 'g_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'g_name' => 'G Name',
            'g_url' => 'G Url',
        ];
    }
    public function inserts()
    {
        $name = $_POST['g_name'];
        $url = $_POST['g_url'];
        $order = $_POST['g_order'];
        $insert = Yii::$app->db->createCommand()->insert('gps',['g_name'=>$name,'g_url'=>$url,'g_order'=>$order])->query();
        return $insert;
    }
    public function upda()
    {
        $id  = $_POST['g_id'];
        $name = $_POST['g_name'];
        $order = $_POST['g_order'];
        $url = $_POST['g_url'];
        $upda = Yii::$app->db->createCommand()->update('gps',['g_name'=>$name,'g_url'=>$url,'g_order'=>$order],['g_id'=>$id])->query();
        return $upda;
    }

        public function selects($limit2,$pagesize)
    {

        $selects = $this->findBysql("SELECT * from gps limit $limit2,$pagesize")->asArray()->all();
        return $selects;
    }


}

// 1   首页  index.php?r=data/index  1
// 2   景点  index.php?r=viewspots/index 2
// 3   酒店  index.php?r=hotel/hotel 5
// 4   驴友游记    index.php?r=travel/travel   4
// 5   周边游 index.php?r=travelaround/index  3
// 6   个人中心    index.php?r=data/user   6