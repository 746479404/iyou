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
use app\models\Gps;
use app\models\Friendlist;
use app\models\kefu;

class FriendController extends Controller
{
	public $enableCsrfValidation = false;
	//后台登陆
	public function actionIndex()
	{
		$this->layout='header';
		$model = new Friendlist;

		// print_r($select);die;
		 if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }

		$pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $postCount = $model->find()->count();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $select = $model->selects($limit2,$pagesize);
  		return $this->render('index',['select'=>$select,'page'=>$page,'countpage'=>$countpage]); 
	}
	public function actionAdd()
	{
		$this->layout='header';
		$model = new Friendlist;
		if ($_POST) {
			$insert = $model->inserts();
			if ($insert) {
				echo "<script>alert('成功');location.href='index.php?r=friend/index'</script>";
			}else{
				echo "<script>alert('失败');location.href='index.php?r=friend/add'</script>";
			}
		}else{
			return $this->render('add');
		}
	}

	public function actionDel()
	{
		$id = $_GET['id'];
		$model = new Friendlist;
		$del = $model->deleteAll("f_id='$id'");
		if ($del) {
			echo "<script>alert('成功');location.href='index.php?r=friend/index'</script>";
		}else{
			echo "<script>alert('失败');location.href='index.php?r=friend/index'</script>";
		}
	}

	public function actionUpda()
	{
		$this->layout='header';
		$model = new Friendlist;
		if ($_POST) {
			$upda = $model->upda();
			// print_r($upda);die;
			if ($upda) {
				echo "<script>alert('成功');location.href='index.php?r=friend/index'</script>";
			}else{
				$id = $_POST['f_id'];
				echo "<script>alert('失败');location.href='index.php?r=friend/upda&id='+'$id'</script>";
			}
		}else{
			$id = $_GET['id'];
			$select = $model->find()->where("f_id='$id'")->asArray()->all();
			return $this->render('upda',['select'=>$select]);
		}
	}


	public function actionQq()
	{
		$this->layout='header';
		$model = new kefu;
		 if (empty($_GET['page'])) {
           $page = 1;
        }else{
            $page = $_GET['page'];
        }

		$pagesize = 3;//每页显示条数
        //查询数据库中一共有多少条数据
        $postCount = $model->find()->count();
        $countpage = ceil($postCount/$pagesize);//总页数
        $limit2 = ($page-1)*$pagesize;//偏移量
        $select = $model->selects($limit2,$pagesize);
  		return $this->render('qqlist',['select'=>$select,'page'=>$page,'countpage'=>$countpage]); 
	}

	public function actionQq_del()
	{
		$id = $_GET['id'];
		$model = new kefu;
		$del = $model->deleteAll("q_id='$id'");
		if ($del) {
			echo "<script>alert('成功');location.href='index.php?r=friend/qq'</script>";
		}else{
			echo "<script>alert('失败');location.href='index.php?r=friend/qq'</script>";
		}
	}


		public function actionQq_upda()
	{
		$this->layout='header';
		$model = new kefu;
		if ($_POST) {
			$upda = $model->upda();
			// print_r($upda);die;
			if ($upda) {
				echo "<script>alert('成功');location.href='index.php?r=friend/qq'</script>";
			}else{
				$id = $_POST['f_id'];
				echo "<script>alert('失败');location.href='index.php?r=friend/qq_upda&id='+'$id'</script>";
			}
		}else{
			$id = $_GET['id'];
			$select = $model->find()->where("q_id='$id'")->asArray()->all();
			return $this->render('qq_upda',['select'=>$select]);
		}
	}
	public function actionQq_add()
	{
		$this->layout='header';
		$model = new kefu;
		if ($_POST) {
			$insert = $model->inserts();
			if ($insert) {
				echo "<script>alert('成功');location.href='index.php?r=friend/qq'</script>";
			}else{
				echo "<script>alert('失败');location.href='index.php?r=friend/qq_add'</script>";
			}
		}else{
			return $this->render('qq_add');
		}
	}
}