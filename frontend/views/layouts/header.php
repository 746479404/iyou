<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
$session = Yii::$app->session;
$session->open();
AppAsset::register($this);
echo $session['u_id'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Architect Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- <link href="css/UserCSS.css" rel="stylesheet" type="text/css" />
<script src="js/ops.js" type="text/javascript"></script>
<script src="js/UserJS.js" type="text/javascript"></script> -->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
<!--start-smoth-scrolling-->
</head>
<body>
  <!--header-->
  <div class="header-top" id="home">
    <div class="container">
      <div class="header-logo">
        <a href="index.html"><img src="images/logo.png" alt=""/></a>
      </div>
      <div class="top-nav">
        <span class="menu"><img src="images/menu-icon.png" alt=""/></span>
        <ul class="nav1">
          <li><a href="index.php?r=data/index">首页 </a></li>
        <li><a href="index.php?r=viewspots/index">景点</a></li>
          <li><a href="index.php?r=travelaround/index">周边游</a></li>
          <!-- <li><a href="404.html">网站公告</a></li> -->
          <li><a href="index.php?r=travel/travel">驴友游记</a></li>
          <li><a href="index.php?r=hotel/hotel">酒店</a></li>
            <?php
                if($session['u_id']) {
                    ?>
                    <li><a href="index.php?r=data/user">个人中心</a></li>
                <?php
                }
            ?>
          
         
          <!-- <li><a href="news.html">投诉</a></li> -->
        </ul>
        <!-- script-for-menu -->
         <script>
           $( "span.menu" ).click(function() {
           $( "ul.nav1" ).slideToggle( 300, function() {
           // Animation complete.
            });
           });
        </script>
        <!-- /script-for-menu -->
      </div>
      <div class="social-icons">
<!--        <ul>
          <li><a href="#"><span class="twit"> </span></a></li>
          <li><a href="#"><span class="fb"> </span></a></li>
          <li><a href="#"><span class="g"> </span></a></li>
        </ul> -->
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="search-box">
      <div id="sb-search" class="sb-search">
       <?php if($session['u_name']){?>
          <a href="javascript:void(0)" class="out">
            <h5 style="padding:25px"><font color='white'>退出</font><h5>
          </a>
          <?php } ?>
      </div>
      <script>
            
              $('.out').click(function(){
                 if(confirm('你确定要退出？')){
                     $.ajax({
                         url:'index.php?r=login/u_session',
                         success:function(data){
                                 history.go(0);
                         }
                     });
                 }
               })
          
      </script>
    </div>
    <div class="header-info-right">
        <div class="header cbp-spmenu-push">
          <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
              <a href="index.php?r=data/index">首页</a>
              <a href="index.php?r=data/scenic">景点</a>
              <a href="index.php?r=data/rim">周边游</a>
              <!-- <a href="404.html">网站公告</a> -->
              <a href="index.php?r=data/travel">驴友游记</a>
              <a href="index.php?r=data/hotel">酒店</a>
              <a href="news.html">个人中心</a>
          </nav>
          <!--script-nav -->  
          <script>
            $("span.menu").click(function(){
              $("ul.navigatoin").slideToggle("300" , function(){
              });
            });
          </script>
          <script type="text/javascript">
                jQuery(document).ready(function($) {
                  $(".scroll").click(function(event){   
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                  });
                });
          </script>
          <div class="clearfix"> </div>
            <!-- /script-nav -->
                  <div class="main">
                    <section class="buttonset">
                      <button id="showLeftPush"><img src="images/menu.png" /><span>菜单</span></button>
                    </section>
                  </div>
                  <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                  <script src="js/classie.js"></script>
                  <script>
                    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                      showLeftPush = document.getElementById( 'showLeftPush' ),
                      body = document.body;
              
                    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
                  </script>
        </div>
      </div>
  </div>
  <!--//header-->
  <!--search-scripts-->
          <script src="js/classie.js"></script>
          <script src="js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
  <!--//search-scripts-->
  <!--banner-->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" target="target">免费模板</a></div>


<?= $content ?>

 <!-- 公共尾部代码 -->
  <div class="read">
    <div class="container">
      <div class="read-main">
        <div class="col-md-5 read-left">
          <h3>友情链接</h3>
          <div class="read-btm">
            <div class="col-md-4 rd-left">
              <ul>
                <li><a href="http://www.ctrip.com" target="target">携程</a></li>
                <li><a href="http://www.tuniu.com" target="target">途牛</a></li>
                <li><a href="http://www.qunar.com" target="target">去哪儿</a></li>
                <li><a href="http://www.qyer.com" target="target">穷游</a></li>
           
              </ul>
            </div>
            <div class="col-md-4 rd-left">
              <ul>
                <li><a href="http://www.taobao.com" target="target">淘宝</a></li>
                <li><a href="http://www.jd.com" target="target">京东</a></li>
                <li><a href="http://www.163.com" target="target">网易</a></li>
                <li><a href="http://www.sina.com" target="target">新浪</a></li>
             
              </ul>
            </div>
            <div class="col-md-4 rd-left">
              <ul>
                <li><a href="http://bj.meituan.com" target="target">美团</a></li>
                <li><a href="http://www.suning.com/" target="target">苏宁易购</a></li>
                <li><a href="http://bj.jumei.com/" target="target">聚美优品</a></li>
                <li><a href="https://www.ele.me/home/" target="target">饿了么</a></li>
                
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-5 read-left">
          <h3>不能错过</h3>
          <div class="read-btm">
            <div class="read-one">
              <div class="col-md-3 read-bottom-left">
                <img src="images/read-1.jpg" alt="" />
              </div>
              <div class="col-md-9 read-bottom-right">
                <h4>信息展示信息展示</h4>
                <p>介绍介绍介绍</p>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="read-one">
              <div class="col-md-3 read-bottom-left">
                <img src="images/read-1.jpg" alt="" />
              </div>
              <div class="col-md-9 read-bottom-right">
                <h4>信息展示信息展示</h4>
                <p>介绍介绍介绍</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-md-2 read-left">
          <h3>客服中心</h3>
          <div class="read-btm follow">
            <ul>
              <li><a target="blank" href="tencent://message/?uin=1609711185&Site=qq&Menu=yes" class="twit" title="经理">QQ</a></li>
              <li><a target="blank" href="tencent://message/?uin=1253289610&Site=qq&Menu=yes" class="fb">QQ</a></li>
              <li><a target="blank" href="tencent://message/?uin=746479404&Site=qq&Menu=yes" class="d">QQ</a></li>
              <li><a href="#" class="p">QQ</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--read-->
  <!--footer-->
  <div class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="col-md-6 footer-left">
          <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
        </div>
        <div class="col-md-6 footer-right">
          <a href="index.html"><img src="images/lg.png" alt="" /></a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <script type="text/javascript">
                  $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                  });
                </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>
  <!--footer-->
  
</body>
</html>