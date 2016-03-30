<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property integer $a_id
 * @property string $a_name
 * @property string $a_pwd
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_name', 'a_pwd'], 'required'],
            [['a_name'], 'string', 'max' => 255],
            [['a_pwd'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_name' => 'A Name',
            'a_pwd' => 'A Pwd',
        ];
    }
    public function verify()
    {
        $user = $_POST['users'];
        $pwds = $_POST['pwds'];
        $pwd = md5($pwds);
        $sele = $this->findOne(['a_name'=>$user,'a_pwd'=>$pwd]);
        return $sele;
    }
    public function selects($del,$limit2,$pagesize)
    {
        if ($del==0) {
            $selects = $this->findBysql("SELECT * from admin INNER JOIN admin_message ON admin.a_id=admin_message.a_id where a_del=0 limit $limit2,$pagesize")->asArray()->all();
        }else{
            $selects = $this->findBysql("SELECT * from admin INNER JOIN admin_message ON admin.a_id=admin_message.a_id where a_del=1 limit $limit2,$pagesize")->asArray()->all();
        }
        return $selects;
    }
    public function del($id,$type)
    {
        if ($type==0) {
            $del = Yii::$app->db->createCommand()->update('admin',['a_del'=>1],"a_id='$id'")->query();
        }else{
            $del = Yii::$app->db->createCommand()->update('admin',['a_del'=>0],"a_id='$id'")->query();
        }
        return $del;
    }
    public function updates()
    {
        $id = $_POST['id'];
        $name = $_POST['a_name'];
        $email = $_POST['a_email'];
        $tel = $_POST['a_tel'];
        $from = $_POST['a_from'];
        $position = $_POST['a_position'];
        $update = Yii::$app->db->createCommand()->update('admin',['a_name'=>$name],"a_id='$id'")->query();
            $updates = Yii::$app->db->createCommand()->update('admin_message',['a_email'=>$email,'a_tel'=>$tel,'a_from'=>$from,'a_position'=>$position],"a_id='$id'")->query();
        if ($update and $updates) {
            return 1;
        }else{
            return 0;
        }

    }
    //修改密码
    public function upda_mima($id)
    {
        
        $name = $_POST['a_name'];
        $y_pwds = $_POST['y_pwd'];
        $y_pwd = md5($y_pwds);
        $g_pwd = $_POST['g_pwd'];
        $g_pwds = $_POST['g_pwds'];
        $g_pwdss = md5($g_pwds);
        $sele = $this->find()->where("a_name='$name' AND a_pwd='$y_pwd'")->asArray()->all();
        if ($sele) {
            if ($g_pwd==$g_pwds) {
                $update = Yii::$app->db->createCommand()->update('admin',['a_pwd'=>$g_pwdss],"a_id='$id'")->query();
                if ($update) {
                    return 1;//成功
                }else{
                    return 0;die;//失败
                }
            }else{
                return 0;die;//两次密码不一致
            }
        }else{
            return 0;die;//密码错误
        }

    }
    public function sele($id)
    {
        $selects = $this->findBysql("SELECT * from admin INNER JOIN admin_message ON admin.a_id=admin_message.a_id where admin.a_id='$id'")->asArray()->all();
        return $selects;
    }
    public function adds()
    {
        $name = $_POST['a_name'];
        $pwds= $_POST['a_pwd'];
        $pwd = md5($pwds);
        $email = $_POST['a_email'];
        $tel = $_POST['a_tel'];
        $from = $_POST['a_from'];
        $position = $_POST['a_position'];
        $insert = Yii::$app->db->createCommand()->insert('admin',['a_name'=>$name,'a_pwd'=>$pwd,'a_del'=>1])->query();
        if ($insert) {
            $sel = $this->find()->where("a_name='$name'")->asArray()->all();
            foreach ($sel as $key => $value) {
                $id = $value['a_id'];
            }
            $inserts = Yii::$app->db->createCommand()->insert('admin_message',['a_id'=>$id,'a_email'=>$email,'a_tel'=>$tel,'a_from'=>$from,'a_position'=>$position])->query();
        }else{
            return 0;
        }

        if ($insert and $inserts) {
            return 1;
        }else{
            return 0;
        }
    }
}
