<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "travel".
 *
 * @property integer $t_id
 * @property string $t_name
 * @property string $t_p_img
 * @property string $t_content
 * @property string $t_j
 * @property string $t_w
 * @property integer $c_id
 * @property integer $s_id
 * @property string $t_money
 * @property integer $t_comment_id
 * @property integer $t_del
 * @property integer $click_num
 */
class Travel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 's_id', 't_comment_id', 't_del', 'click_num'], 'integer'],
            [['t_name', 't_p_img', 't_content', 't_j', 't_w', 't_money'], 'string', 'max' => 255]
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
            't_p_img' => 'T P Img',
            't_content' => 'T Content',
            't_j' => 'T J',
            't_w' => 'T W',
            'c_id' => 'C ID',
            's_id' => 'S ID',
            't_money' => 'T Money',
            't_comment_id' => 'T Comment ID',
            't_del' => 'T Del',
            'click_num' => 'Click Num',
        ];
    }
    public function sel()
    {
        $sql = "select * from travel inner join city on travel.c_id=city.c_id inner join season on travel.s_id=season.s_id where travel.t_del=1";
        return $info =\Yii::$app->db->createCommand($sql)->queryAll();
    }
    public function del()
    {
        $id = $_GET['id'];
        $info = Yii::$app->db->createCommand()->update('travel',['t_del'=>0],"t_id='$id'")->query();
            echo "<script>alert('移除成功');location.href='index.php?r=admins/travel';</script>"; 
    }
    public function doadd($t_p_img)
    {
        $t_name = $_POST['t_name'];
        $t_content = $_POST['t_content'];
        $t_money =$_POST['t_money'];
        $c_id = $_POST['c_id'];
        $s_id = $_POST['s_id']; 
        $sql = "insert into travel(t_name,t_content,t_money,c_id,s_id,t_p_img,t_del) values('$t_name','$t_content','$t_money','$c_id','$s_id','$t_p_img',1)";      
        return $info =\Yii::$app->db->createCommand($sql)->execute();  
    }
    public function sel2($id)
    {
        $sql = "select * from travel inner join city on travel.c_id=city.c_id inner join season on travel.s_id=season.s_id where travel.t_del=1 and t_id=$id";
        return $info =\Yii::$app->db->createCommand($sql)->queryAll();         
    }
    public function dosave($t_p_img)
    {
        $id = $_POST['id'];
        $t_name = $_POST['t_name'];
        $t_content = $_POST['t_content'];
        $t_money = $_POST['t_money'];
        $c_id = $_POST['c_id'];
        $s_id = $_POST['s_id'];
        //判断是否修改图片
        if ($t_p_img) {   
            $upda = Yii::$app->db->createCommand()->update('travel',['t_name'=>$t_name,'t_p_img'=>$t_p_img,'t_content'=>$t_content,'t_money'=>$t_money,'c_id'=>$c_id,'s_id'=>$s_id],"t_id='$id'")->query();
        }else{
            $upda = Yii::$app->db->createCommand()->update('travel',['t_name'=>$t_name,'t_content'=>$t_content,'t_money'=>$t_money,'c_id'=>$c_id,'s_id'=>$s_id],"t_id='$id'")->query();

        }
        return $upda;

    }
}
