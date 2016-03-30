<?php
namespace frontend\controllers;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\base\Model;
use app\models\Travels;
use yii\web\UploadedFile;
class TravelController extends Controller
{
	public function actionTravel()
	{
		$this->layout="header";
		$model = new Travels;
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM travels inner join user on travels.u_id = user.u_id order by t_id desc limit 7');
		$post_arr = $command->queryAll();
		return $this->render('blog',['post_arr'=>$post_arr,'model'=>$model]);
	}
	//景点上传
    public function actionUpload()
    {
		$session = Yii::$app->session;	
        $session->open();
		$title = $_POST['title'];
		$content = $_POST['content'];
		$date = date('Y-m-d h:m:s ',time());
		$session = $_SESSION['u_id'];
        $model = new Travels();
		$model->t_img = UploadedFile::getInstance($model, 't_img');
		$arr=$model->t_img->saveAs('../../frontend/web/images/'.$model->t_img->baseName . '.' . $model->t_img->extension);
		$article = new \app\models\Travels();
        $article -> t_content =$content;
		$article -> t_title =$title;
		$article -> t_times =$date;
		$article -> u_id =$session;
        $article -> t_img ='images/'.$model->t_img->name;
        $re=$article -> save();
		if($re) {
			echo "<script>alert('发表成功');location.href='index.php?r=travel/travel'</script>";
		}
    }
	//帖子详情
	public function actionSingle()
	{
		$this->layout="header";
		$id = $_GET['id'];
		$connection = \Yii::$app->db;
		//查询帖子详情
		$command = $connection->createCommand("SELECT * FROM travels inner join user on travels.u_id = user.u_id where t_id = '$id'");
		$post_arr = $command->queryOne();
		print_r($post_arr);
		//显示帖子回复内容
		$command = $connection->createCommand("SELECT * FROM reply inner join message on reply.m_id = message.m_id where t_id = '$id' limit 5");
		$reply_arr = $command->queryAll();
		//print_r($reply_arr);
		return $this->render('single.php',['list_arr'=>$post_arr,'reply_arr'=>$reply_arr]);

	}
	public $enableCsrfValidation = false;
	public function actionReply()
	{
		$this->layout="header";
		$session = Yii::$app->session;	
        $session->open();
		$content = $_POST['content'];
		$t_id = $_POST['t_id'];
		$session = $_SESSION['u_id'];
		$date = date('Y-m-d h:m:s ',time());
		$connection = \Yii::$app->db;
		$re = $connection->createCommand()->insert('reply', [
		're_content' => $content,
		't_id' => $t_id,
		'u_id' => $session,
		'date' => $date,
		])->execute();
		$connection = \Yii::$app->db;
		//查询帖子详情
		$command = $connection->createCommand("SELECT * FROM travels inner join user on travels.u_id = user.u_id where t_id = '$t_id'");
		$post_arr = $command->queryOne();
		//显示帖子回复内容
		$command = $connection->createCommand("SELECT * FROM reply inner join message on reply.m_id = message.m_id where t_id = '$t_id' limit 5");
		$reply_arr = $command->queryAll();
		return $this->render('reply.php',['list_arr'=>$post_arr,'reply_arr'=>$reply_arr]);
		//history.go(0);
		//print_r($re);
		
		//echo "<script>alert('评论成功');location.href='index.php?r=travel/single & id = $t_id'</script>";
		//echo "<a href='index.php?r=travel/single?id=$t_id'>评论成功</a>";
		
	}
}