<?php
namespace backend\controllers;

use Yii;
use app\models\Admin;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\FirmAdminuser;
use app\models\Gropshop;
use app\models\GropType;
use app\models\Imgs;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\travel;
use app\models\city;
use app\models\season;

class AdminsController extends Controller
{
	public function actionTravel()
	{
		$this->layout="header";
		$model = new travel();
		$info = $model->sel();
		// print_r($info);die;
		$connection = Yii::$app->db;
         if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $command = $connection->createCommand('SELECT COUNT(*) FROM travel');   
        $postCount = $command->queryScalar();//查询标量值/计算值：queryScalar();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $command = $connection->createCommand("select * from travel inner join city on travel.c_id=city.c_id inner join season on travel.s_id=season.s_id  where travel.t_del=1 order by t_id desc limit $limit2,$pagesize");
       //执行查询的sql语句,查询返回多行：
        $arr = $command->queryAll();
        //返回结果信息
        return $this->render('travel',['arr'=>$arr,'page'=>$page,'countpage'=>$countpage]);
		// return $this->render('travel',['info'=>$info]);  		
	}
	//删除方法
	public function actionDel()
	{
		$model = new travel();
		$info = $model->del();
	}
	//添加跳转页面
	public function actionAddtravel()
	{
		$this->layout="header";
		$model = new travel();
		$c = new city();
		$s = new season();
		//调用查询城市
		$info = $c->sel();
		$arr = $s->sel();
        return $this->render('addtravel',['info'=>$info,'model'=>$model,'arr'=>$arr]);
	}
	public function actionDoaddtravel()
	{
		// echo '111';
		$this->layout="header";
		$model = new travel();
		//上传的图片处理
        $b = $model->t_p_img = UploadedFile::getInstance($model, 't_p_img');
            $arr=$model->t_p_img->saveAs('./../../images/'.$model->t_p_img->baseName . '.' . $model->t_p_img->extension);
            $t_p_img = ''.$model->t_p_img->name;
            $update = $model->doadd($t_p_img);
        if ($update) {
                echo "<script>alert('添加成功');location.href='index.php?r=admins/travel';</script>";
            }else{
                echo "<script>alert('添加错误');location.href='index.php?r=admins/addtravel';</script>";
            }
	}
	public function actionSave()
	{
		$this->layout="header";
		$id = $_GET['id'];
		$model = new travel();
		$c = new city();
		$s = new season();		
		$info = $c->sel();
		$arr = $s->sel();
		$infos = $model->sel2($id);
		// print_r($infos);die;
		return $this->render('xiu',['model'=>$model,'arr'=>$arr,'info'=>$info,'infos'=>$infos]);

	}
	public function actionDosave()
	{
		$this->layout="header";
		$model = new travel();
		$id = $_POST['id'];
        $b = $model->t_p_img = UploadedFile::getInstance($model, 't_p_img');
        if($b){
            $arr=$model->t_p_img->saveAs('./../../images/'.$model->t_p_img->baseName . '.' . $model->t_p_img->extension);
            $t_p_img = ''.$model->t_p_img->name;
            $update = $model->dosave($t_p_img);
        }else{
                $t_p_img = "";
                $update = $model->dosave($t_p_img);
        }
        if ($update) {
                echo "<script>alert('修改成功');location.href='index.php?r=admins/travel';</script>";
            }else{
                echo "<script>alert('修改错误');location.href='index.php?r=admins/save';</script>";
            }

	}

}