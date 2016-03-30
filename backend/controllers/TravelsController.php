<?php
namespace backend\controllers;

use Yii;
use app\models\Travels;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\FirmAdminuser;
use app\models\Gropshop;
use app\models\GropType;
use app\models\Imgs;
use app\models\UploadForm;

class TravelsController extends Controller
{
	public $enableCsrfValidation = false;
	//后台登陆
	public function actionYouji(){
			//echo "<script> alert('ok'); </script>";	
		// $this->layout="header";
		// $model = NEW Travels;
		// $select = $model->select1();
		// //print_r($select);die;
		// return $this->render('travels',["arr"=>$select]);
		$this->layout="header";
		// $model = NEW Travels;
		// $select = $model->select1();
		// //print_r($select);die;
		// return $this->render('travels',["arr"=>$select]);
		//$this->layout="header";
		$connection = Yii::$app->db;
         if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $command = $connection->createCommand('SELECT COUNT(*) FROM travels');   
        $postCount = $command->queryScalar();//查询标量值/计算值：queryScalar();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $command = $connection->createCommand("SELECT * FROM travels limit $limit2,$pagesize");
       //执行查询的sql语句,查询返回多行：
        $arr = $command->queryAll();
        //返回结果信息
        return $this->render('travels',['arr'=>$arr,'page'=>$page,'countpage'=>$countpage]);
	}
	public function actionTravelsdel(){
		//echo "<script> alert('ok'); </script>";
		$id = $_GET['id'];
		//echo "<script> alert($id); </script>";
		$model = NEW Travels;
		$del = $model->del($id);
		echo "<script> alert('删除成功');location.href='index.php?r=travels/youji' </script>";
	}
	public function actionYoujihuifu(){
			//echo "<script> alert('ok'); </script>";	
		// $this->layout="header";
		// $model = NEW Travels;
		// $select = $model->select1();
		// //print_r($select);die;
		// return $this->render('travels',["arr"=>$select]);
		$this->layout="header";
		// $model = NEW Travels;
		// $select = $model->select1();
		// //print_r($select);die;
		// return $this->render('travels',["arr"=>$select]);
		//$this->layout="header";
		$connection = Yii::$app->db;
         if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }
        $pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $command = $connection->createCommand('SELECT COUNT(*) FROM travels');   
        $postCount = $command->queryScalar();//查询标量值/计算值：queryScalar();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $command = $connection->createCommand("SELECT * FROM travels inner join reply on travels.t_id=reply.t_id limit $limit2,$pagesize");
       //执行查询的sql语句,查询返回多行：
        $arr = $command->queryAll();
        //返回结果信息
        return $this->render('reply',['arr'=>$arr,'page'=>$page,'countpage'=>$countpage]);
	}
}