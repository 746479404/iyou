<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<link href="css/UserCSS.css" rel="stylesheet" type="text/css" />
<script src="js/ops.js" type="text/javascript"></script>
<script src="js/UserJS.js" type="text/javascript"></script>
<div class="row" style="margin-top: 10px;">
</div>
<div class="row">
    <div class="u-menu">
        <ul class="u-nav" id="user_menu">
            <li class="item" id="user_menu_my" name="user_menu_my">
                <ul class="sub">
                    <li><a class="current" href="<?= Url::toRoute(['data/user']); ?>">个人资料</a></li><li>
                        <a href="<?= Url::toRoute(['user/tui']); ?>">推荐好友</a></li>
                    <li><a href="<?= Url::toRoute(['user/collection']); ?>">我的收藏</a></li>
                    <li><a href="<?= Url::toRoute(['user/mall']); ?>" class="current">积分商城</a></li>
                </ul>
            </li>
        </ul>
        <script type="text/javascript">
            var menuClosed = Ops.getCookie('menuClosed');

            $(".item h3 span").click(function () {

                menuClosed = Ops.getCookie('menuClosed');
                if (menuClosed == undefined || menuClosed == null) {
                    menuClosed = '';
                    Ops.setCookie('menuClosed', menuClosed);
                }
                //console.log(menuClosed+',click;;;');
                $(this).parent().parent().toggleClass('bg-slide');
                $(this).parent().parent().find(".sub").slideToggle('fast');

                if ($(this).attr('title') == '折叠') {
                    $(this).attr('title', '展开');
                } else {
                    $(this).attr('title', '折叠');
                }

                var pid = $(this).parent().parent().attr('id');

                if ($(this).parent().parent().hasClass('bg-slide') && menuClosed.indexOf("#" + pid + "#") == -1) {
                    var cookies = menuClosed + '#' + pid + '#';
                } else {
                    var cookies = menuClosed.replace("#" + pid + "#", '');
                }
                Ops.setCookie('menuClosed', cookies);
            });

            if (menuClosed != null) {
                var closedMatch = menuClosed.match(/([a-z_]+)/g);
                for (var i in closedMatch) {
                    var idObj = $('#' + closedMatch[i]);
                    idObj.toggleClass('bg-slide');
                    idObj.find(".sub").hide();
                    idObj.find('h3 span').attr('title', '展开');
                }
            } else {
                $("#user_menu_loan h3 span").click();
            }
        </script>
    </div>