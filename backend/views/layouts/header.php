<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i><?php $session = Yii::$app->session; echo $session->get('user');?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="index.php?admin/remove">退出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php?r=admin/index"><span class="second">Company</span></a>
        </div>
    </div>
    


    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
    <div class="sidebar-nav">
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>

        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Admin管理<i class="icon-chevron-up"></i></a>
        <ul id="dashboard-menu" class="nav nav-list collapse">
        <!-- <ul id="dashboard-menu" class="nav nav-list collapse in"> -->
            <li><a href="index.php?r=admin/admins">admin管理</a></li>
            <li ><a href="index.php?r=admin/a_add">admin增加</a></li>
            <li ><a href="index.php?r=admin/a_hui">admin离职人员</a></li>
           
        </ul>

<!--         <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Account<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="sign-in.html">Sign In</a></li>
            <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.html">Reset Password</a></li>
        </ul> -->
        
        <a href="#lunbo-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>轮播图管理<i class="icon-chevron-up"></i></a>
        <ul id="lunbo-menu" class="nav nav-list collapse">
            <li><a href="index.php?r=admin/lunbo">轮播图管理</a></li>
            <li ><a href="index.php?r=admins/travel">热门景点管理</a></li>
            <!-- <li ><a href="user.html">Sample Item</a></li>
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>
             -->
        </ul>

        
        <a href="#user-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>用户管理<i class="icon-chevron-up"></i></a><ul id="user-menu" class="nav nav-list collapse">
            <li ><a href="index.php?r=user/index">用户列表</a></li>
        </ul>

        <a href="#Url-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>导航栏管理<i class="icon-chevron-up"></i></a>
        <ul id="Url-menu" class="nav nav-list collapse">
            <li ><a href="index.php?r=gps/index">导航栏管理 </a></li>
            <li ><a href="index.php?r=gps/add">导航栏添加</a></li>
        </ul>


        <a href="#friend-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>友情链接管理<i class="icon-chevron-up"></i></a>
        <ul id="friend-menu" class="nav nav-list collapse">
            <li ><a href="index.php?r=friend/index">友情链接列表 </a></li>
            <li ><a href="index.php?r=friend/add">友情链接添加 </a></li>
            <li ><a href="index.php?r=friend/qq">客服列表 </a></li>
            <li ><a href="index.php?r=friend/qq_add">客服添加 </a></li>
        </ul>

        
        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>驴友游记<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="index.php?r=travels/youji">管理游记</a></li>
            <li ><a href="index.php?r=travels/youjihuifu">管理回复</a></li>
        </ul>

        <a href="#legal-menu1" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>酒店<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu1" class="nav nav-list collapse">
            <li ><a href="index.php?r=admin/jiudian">管理酒店</a></li>
            <li ><a href="index.php?r=admin/jiudianadd">添加酒店</a></li>
        </ul>     

                <a href="#legal-menu2" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>数据库管理<i class="icon-chevron-up"></i></a>
        <ul id="legal-menu2" class="nav nav-list collapse">
            <li ><a href="index.php?r=ku/beifen">数据库备份</a></li>
            <li ><a href="index.php?r=ku/huanyuan">数据库还原</a></li>
        </ul>  


    </div>
    

    <?= $content ?>
    </body>
    </html>