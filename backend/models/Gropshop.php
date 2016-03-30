<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gropshop".
 *
 * @property integer $g_id
 * @property string $g_name
 * @property string $g_money
 * @property integer $g_type_id
 * @property string $g_content
 * @property string $g_p_img
 * @property string $g_p_img2
 * @property string $g_p_img3
 * @property integer $g_del
 * @property integer $g_num
 * @property string $g_place
 * @property string $g_coordinate
 */
class Gropshop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gropshop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_type_id', 'g_del', 'g_num'], 'integer'],
            [['g_content'], 'string'],
            [['g_name', 'g_money', 'g_p_img', 'g_p_img2', 'g_p_img3', 'g_place', 'g_coordinate'], 'string', 'max' => 255]
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
            'g_money' => 'G Money',
            'g_type_id' => 'G Type ID',
            'g_content' => 'G Content',
            'g_p_img' => 'G P Img',
            'g_p_img2' => 'G P Img2',
            'g_p_img3' => 'G P Img3',
            'g_del' => 'G Del',
            'g_num' => 'G Num',
            'g_place' => 'G Place',
            'g_coordinate' => 'G Coordinate',
        ];
    }
    public function jiudian(){
        $count = $this->findBysql("SELECT COUNT(*) FROM gropshop")->asArray()->all();
        return $count;
    }
    public function gropshopupdt($id){
        //return $id;die;
        $num = 0;
         $update = Yii::$app->db->createCommand()->update('gropshop',['g_del'=>$num],"g_id='$id'")->query();
        return $update;
    }
    public function jiudianimg($id){    
        // $command = $this->find()->where("g_id='$id'")->asArray()->all();
        //$command = Yii::$app->db->createCommand("SELECT * FROM gropshop WHERE g_id=$id");
        $info = $this->find()->where(['g_id'=>$id])->asArray()->one();
        return $info;
    }
public function doadd($g_p_img)
    {
        $g_name = $_POST['g_name'];
        $g_money = $_POST['g_money'];
        $g_type_id =$_POST['g_type_id'];
        $g_content = $_POST['g_content'];
        $g_place = $_POST['g_place'];
        $g_coordinate = $_POST['g_coordinate'];
        $sql = "insert into gropshop(g_name,g_money,g_type_id,g_content,g_place,g_coordinate,g_p_img) values('$g_name','$g_money','$g_type_id','$g_content','$g_place','$g_coordinate','$g_p_img')";      
        return $info =\Yii::$app->db->createCommand($sql)->execute();  

    }

}
