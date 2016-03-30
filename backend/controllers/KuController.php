<?php
namespace backend\controllers;

use Yii;
use app\models\Ku;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use app\models\FirmAdminuser;
use app\models\Gropshop;
use app\models\GropType;
use app\models\Imgs;
use app\models\UploadForm;

class KuController extends Controller
{
	public $enableCsrfValidation = false;
	public function actionBeifen(){
		$cfg_dbuser='root';
        $cfg_dbpwd='root';
        $cfg_dbname='travel';
        date_default_timezone_set('PRC');
        // 设置SQL文件保存文件名
        $filename=date("Y-m-d_H-i-s")."-".$cfg_dbname.".sql";
        // 所保存的文件名
        // 获取当前页面文件路径，SQL文件就导出到此文件夹内
        $tmpFile = (dirname(__FILE__))."\\".'mysql\\'.$filename;
        #print_r($tmpFile);die;
        // 用MySQLDump命令导出数据库
        exec("D:/phpStudy/MySQL/bin/mysqldump -h192.168.1.120 -u$cfg_dbuser -p$cfg_dbpwd --default-character-set=utf8 $cfg_dbname > ".$tmpFile);
        $file = fopen($tmpFile, "r+"); // 打开文件
        fread($file,filesize($tmpFile));
        fclose($file);
        //将备份数据插入到bak.xml文件内
        $bak=(dirname(__FILE__))."\\".'mysql\\bak.xml';
        
        $current = file_get_contents($bak);
        #print_r($current);die;
        $current .= "\n".$filename.','.$tmpFile;
        file_put_contents($bak, $current);
        echo "<script>alert('备份成功');location.href='index.php?r=admin/index';</script>";
	}
	public function actionHuanyuan(){
			return $this->render('huanyuan');
	}
	public function actionHuanyuanh(){
		
		// if ( isset ( $_POST['sqlFile'] ) )   
  //           {   
  //           $file_name = $_POST['sqlFile']; //要导入的SQL文件名   
  //           $dbhost = "192.168.1.120"; //数据库主机名   
  //           $dbuser = "root"; //数据库用户名   
  //           $dbpass = "root"; //数据库密码   
  //           $dbname = "travel"; //数据库名
  //           set_time_limit(0); //设置超时时间为0，表示一直执行。当php在safe mode模式下无效，此时可能会导致导入超时，此时需要分段导入
            
  //           $fp = @fopen('D:\WWW\jieye\jieye\php9\advanced\backend\controllers\mysql/'.$file_name, "r");
            
  //           // or die("不能打开SQL文件 $file_name");//打开文件
  //           mysql_connect($dbhost, $dbuser, $dbpass) or die("不能连接数据库 $dbhost");//连接数据库
  //           //echo "<script> alert('ok'); </script>";die;
  //           mysql_select_db($dbname) or die ("不能打开数据库 $dbname");//打开数据库
  //           echo "<p>正在清空数据库,请稍等....<br>";
  //           $result = mysql_query("SHOW tables");
  //           while ($currow=mysql_fetch_array($result))
  //           {
  //           mysql_query("drop TABLE IF EXISTS $currow[0]");
  //           echo "清空数据表【".$currow[0]."】成功！<br>";
  //           }
  //           echo "<br>恭喜你清理MYSQL成功<br>";
  //           echo "正在执行导入数据库操作<br>";
  //           // 导入数据库的MySQL命令
  //           exec("D:/phpStudy/MySQL/bin/mysql -h192.168.1.120 -uroot -proot travel < ".$file_name);
  //           echo "<br>导入完成！";
  //           mysql_close();
  //           }
  // --------------------------------------------------------------------------------------
  		//echo "<script> alert('ok!'); </script>";die;
        @$arr = isset($_POST['sqlFile']);
        //echo "<script> alert($arr); </script>";die;
        // 我的数据库信息都存放到config.php文件中，所以加载此文件，如果你的不是存放到该文件中，注释此行即可； 
            //require_once((dirname(__FILE__).'/../../include/config.php')); 
            if ( isset ( $_POST['sqlFile'] ) ) 
            { 
            $file_name = $_POST['sqlFile']; //要导入的SQL文件名 
            $dbhost = "192.168.1.120"; //数据库主机名 
            $dbuser = "root"; //数据库用户名 
            $dbpass = "root"; //数据库密码 
            $dbname = "travel"; //数据库名 
            echo "<script> alert($dbhost); </script>";
            echo "<script> alert($dbuser); </script>";
            echo "<script> alert($dbpass); </script>";
            echo "<script> alert($dbname); </script>";
            set_time_limit(0); //设置超时时间为0，表示一直执行。当php在safe mode模式下无效，此时可能会导致导入超时，此时需要分段导入 
            $fp = @fopen($file_name, "r") or die("不能打开SQL文件 $file_name");//打开文件 
            mysql_connect($dbhost, $dbuser, $dbpass) or die("不能连接数据库 $dbhost");//连接数据库
            mysql_select_db($dbname) or die ("不能打开数据库 $dbname");//打开数据库 
            
            echo "<p>正在清空数据库,请稍等....<br>"; 
            $result = mysql_query("SHOW tables"); 
            while ($currow=mysql_fetch_array($result)) 
            { 
            mysql_query("drop TABLE IF EXISTS $currow[0]"); 
            echo "清空数据表【".$currow[0]."】成功！<br>"; 
            } 
            echo "<br>恭喜你清理MYSQL成功<br>"; 
            
            echo "正在执行导入数据库操作<br>"; 
            // 导入数据库的MySQL命令 
            exec("D:/phpStudy/MySQL/bin/mysql -h192.168.1.120 -u$cfg_dbuser -p$cfg_dbpwd $cfg_dbname < ".$file_name); 
            echo "<br>导入完成！"; 
            mysql_close(); 
            }
        }
}