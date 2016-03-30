<?php

namespace app\models;

use Yii;
use yii\db\Query;
use yii\data\Pagination;

/**
 * This is the model class for table "imgs".
 *
 * @property integer $i_id
 * @property string $i_img
 * @property string $i_b_times
 * @property string $i_e_times
 * @property string $i_content
 * @property string $i_desc
 */
class Imgs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imgs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['i_img', 'i_b_times', 'i_e_times', 'i_content', 'i_desc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'i_id' => 'I ID',
            'i_img' => 'I Img',
            'i_b_times' => 'I B Times',
            'i_e_times' => 'I E Times',
            'i_content' => 'I Content',
            'i_desc' => 'I Desc',
        ];
    }
    //查询类调用的方法
    public function sel()
    {
        //原生SQL查询全部
        $sql = "select * from imgs where i_del=1 order by i_id desc";
        //执行查询全部
        return $info =\Yii::$app->db->createCommand($sql)->queryAll();
    }
    //移除类调用的方法
    public function del()
    {
        //接收传来移除的ID
        $id = $_GET['id'];
        //执行移除
        $update = Yii::$app->db->createCommand()->update('imgs',['i_del'=>0],"i_id='$id'")->query();
            echo "<script>alert('移除成功');location.href='index.php?r=admin/lunbo';</script>";
       
    }
    //修改MODEL 
    public function upda($i_img)
    {
        $id = $_POST['id'];
        $i_b_times = $_POST['i_b_times'];
        $i_e_times = $_POST['i_e_times'];
        $i_content = $_POST['i_content'];
        $i_desc = $_POST['i_desc'];
        //判断是否修改图片
        if ($i_img) {   
            $upda = Yii::$app->db->createCommand()->update('imgs',['i_b_times'=>$i_b_times,'i_img'=>$i_img,'i_e_times'=>$i_e_times,'i_content'=>$i_content,'i_desc'=>$i_desc],"i_id='$id'")->query();
        }else{
            $upda = Yii::$app->db->createCommand()->update('imgs',['i_b_times'=>$i_b_times,'i_e_times'=>$i_e_times,'i_content'=>$i_content,'i_desc'=>$i_desc],"i_id='$id'")->query();

        }
        return $upda;

    }
    //查询要修改的ID的信息
    public function sel2($id)
    {
        //原生SQL查询对应的ID的信息
        $sql = "select * from imgs where i_id=$id";
        return $info =\Yii::$app->db->createCommand($sql)->queryOne();

    }
    //添加的MODEL
    public function doadd($i_img)
    {
        //接受传来的值
        $i_b_times = $_POST['i_b_times'];
        $i_e_times = $_POST['i_e_times'];
        $i_content = $_POST['i_content'];
        $i_desc = $_POST['i_desc'];
        //原生SQL入库
        $sql = "insert into imgs(i_img,i_b_times,i_e_times,i_content,i_desc,i_del) values('$i_img','$i_b_times','$i_e_times','$i_content','$i_desc',1)";      
        return $info =\Yii::$app->db->createCommand($sql)->execute();  
    }
    //调用分页MODEL
    public function fenye(){
        $infos = $this->find()->select('*');
        $info = clone $infos;
        $count = $info->count();
        $pages = new Pagination([
            'totalCount'=>$count,
            'defaultPageSize'=>3,
        ]);
        $content = $info->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
        return array('page'=>$pages,'content'=>$content);
    }
}
