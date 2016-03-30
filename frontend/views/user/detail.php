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
           <center><font size="5"><?= $data['p_name']?></font><br>
            <div style="float:left;margin-left:140px;"><img src="<?= $data['p_img']?>" onerror="avascript:this.src='images/errors.jpg'" width="200px" height="240px"></div>
           </center>
                    <div style="width:300px;float:left;height:300px;margin-left:50px">
                        <font size="4">
                        <p style="margin-top:10px">价格：<?= $data['p_jf']?>分<p>
                        <p style="margin-top:10px">配送方式：快递<p>
                        <input type="hidden" value="<?= $data['p_id']?>" name="g_id">
                        <p style="margin-top:10px">剩余数量：<?= $data['p_num']?><p>
                        <p style="margin-top:10px">兑换数量：<button class="num" style="width:18px;height:23px">-</button><input type="text" id="input" value="1" name="l_num"><button class="num" style="width:18px;height:23px">+</button><p>
                        </font>
                        <?php
                        if($user['m_integral'] >= $data['p_jf']){
                        ?>
                            <button style="width:170px;height:45px;margin-top:30px" id="button">兑换</button>
                        <?php
                        }else{
                            ?>
                            <button style="width:170px;height:45px;margin-top:30px" id="button" disabled="disabled">兑换</button>
                        <?php
                        }
                        ?>

                    </div>
            <script src="js/jquery-1.8.3.min.js"></script>
            <script>
                $(function(){
                    $("#button").click(function(){
                        var p_jf=<?= $data['p_jf']?>;
                        var p_id=<?= $data['p_id']?>;
                        var num=$('#input').val();
                        $.get("index.php?r=user/addlog", { g_id: p_id, l_num: num ,l_integral:p_jf}, function(data){
                                if(data==1){
                                    alert("兑换成功");
                                    location.href="index.php?r=user/mall";
                                }else{
                                    alert('兑换失败');
                                    history.go(0);
                                }
                            });
                    });
                    $(".num").click(function(){
                        var str = $(this).text();
                        var input = parseInt($("#input").val());
                        if(str=='+'){
                            input += 1;
                        }else{
                            input -= 1;
                        }
                        if(input >0 && input <= <?= $data['p_num']?>){
                            $("#input").val(input);
                        }

                    });
                });
            </script>
                </div>
        </div>
    </div>
</div>
