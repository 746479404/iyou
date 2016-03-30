<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
$session=yii::$app->session;
$session->open();
?>
<body>
<?php
require('/file/left.php');
?>
<link type="text/css" rel="stylesheet" href="css/tgv3_index.css">
<div class="u-main">
    <div class="ucenter">
        <div class="ucenter-info mt10">
            <div class="ucenter-tab-box">
                <ul>
                    <li><font>可兑换商品</font></li>
                </ul>
            </div>
            <div id="tab_box">
                <style>
                    .list {width:200px;height:20px}
                </style>
                <div class="u-form-wrap">
                    <?php
                    if(empty($data)){
                        echo "<div style='width:400px;height:400px'><center><img src='images/wu.jpg'><br><span>您暂时无收藏</span></center></div>";
                    }else {
                        ?>
                        <table>

                            <?php
                            foreach ($data as $k => $v) {
                                ?>
                                    <td style="width:350px;padding-left:60px"><a href="<?= Url::toRoute(['user/detail', 'id' => $v['p_id']])?>"><img src="<?= $v['p_img']?>" width="260px" height="280px" onerror="javascript:this.src='images/errors.jpg'"></a><br><font size="2"><?= $v['p_name']?></font><br><font color="green" size="2"><b><?= $v['p_jf']?></b></font>分</td>

                            <?php
                                if($k%2==1){
                                    echo "</tr><tr>";
                                }
                            }
                            ?>
                            </tr>
                        </table>
                        <?php
                    }
                    ?>

                </div>
        </div>

        </div>
    </div>
</div>
