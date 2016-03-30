<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<body>
<?php
    require('/file/left.php');
?>
    <!-- /.u-menu -->
    <div class="u-main">
        <div class="ucenter">
            <div class="ucenter-info mt10">
                <div class="info">
                    <ul class="info-img">
                        <li>
                            <img src="<?php if($data['m_img']==''){echo 'aa';}else{
                                echo $data['m_img'];
                            }?>" class="avatar" onerror="javascript:this.src='images/error.jpg'"/></li></ul>
                    <div class="info-main">
                        <div class="row">
                            <label>
                                昵称：</label><?= $data['m_name']?></div>
                        <div class="row"><label>注册时间：</label><?= $data['m_time']?></div>
                        <div class="row">
                            <label>
                                绑定邮箱：</label>
                            <?php
                                if(empty($data['m_email'])){
                                    echo "<a href='/index.php?r=user/authemail&id=".$data['m_id']."'>未认证</a>";
                                }else{
                                    echo $data['m_email'];
                                    echo "&nbsp;&nbsp;&nbsp;<a href='index.php?r=user/authemail&email=".$data['m_email']."'><font color='blue'>修改</font></a>";
                                }
                            ?>
                        </div>
                        <div class="row">
                            <label>
                                现有积分：</label><span class="orange"><?= $data['m_integral']?></span></div>
                    </div>
                    <div style="float:right">
                        <?= HTML::button('编辑',['style'=>'width:200px;height:30px;background:#fff;font-size:16','id'=>'button']) ?>
                    </div>
                    <script>
                        $(function(){
                            $("#button").click(function(){
                                location.href='/index.php?r=user/index&id=<?= $data["m_id"]?>';
                            });
                        });
                    </script>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <div class="ucenter-info mt10">
                <div class="ucenter-tab-box">
                    <ul>
                        <li><font>我兑换过的商品</font></li>
                    </ul>
                </div>
                <div id="tab_box">
                    <style>
                        .list {width:200px;height:80px}
                    </style>
                    <div class="u-form-wrap">
                        <table>
                            <th class="list">商品名称</th>
                            <th class="list">商品图片</th>
                            <th class="list">兑换积分</th>
                            <th class="list">兑换数量</th>
                            <th class="list">兑换时间</th>
                            <?php
                                foreach($goods as $k=>$v){
                                    ?>
                                    <tr>
                                        <td class="list"><?= $v['p_name']?></td>
                                        <td class="list"><img src="<?php if($v['p_img']==''){echo "aa";}else{echo $v['p_img'];}?>"  onerror="javascript:this.src='images/errors.jpg'" width='60%'/></td>
                                        <td class="list"><?= $v['l_integral']?></td>
                                        <td class="list"><?= $v['l_num']?></td>
                                        <td class="list"><?= $v['l_time']?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <div>



                        </div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是关注我的用户</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是我的投标记录</div>
                    </div>
                    <div class="u-form-wrap" style="display: none;">
                        <div>
                            这是我的贷款记录</div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">

                var $div_li = $(".ucenter-tab-box ul li");

                $div_li.click(function () {

                    $(this).addClass("current").siblings().removeClass("current");

                    var div_index = $div_li.index(this);

                    $("#tab_box>div").eq(div_index).show().siblings().hide();

                }).hover(function () {

                    $(this).addClass("hover");

                }, function () {

                    $(this).removeClass("hover");

                });

            </script>
        </div>
        <!-- /.u-main -->
    </div>

