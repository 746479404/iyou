

		<?php
		use yii\helpers\Html;
		$session = Yii::$app->session;
		$session->open();
		?>
			<div class="banner">
				<div class="container">
					<div class="banner-top">
						
						   <?php if($session['u_name']){?>
				<h1>欢迎<font color="red"><?php echo $session['u_name']?></font>光临爱游网</h1>
		    <?php }else{?>
                  <ul>

				 	<li><a class="sub" href="index.php?r=login/login">登录</a></li>
					<li><a class="art" href="index.php?r=register/register">注册</a></li>
			      </ul>
			<?php } ?>
						
					</div>	
				</div>
			</div>
		<!--banner-->
		<!--slide-->
		<div class="gallery-cursual">
		<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
		items : 4,
		lazyLoad : true,
		autoPlay : true,
		pagination : true,
		});
		});
		</script>
		<!-- //requried-jsfiles-for owl -->
		<!-- start content_slider -->
		<div id="owl-demo" class="owl-carousel text-center">

		
		<!-- <!-- 轮播开始 -->
		<?php foreach ($row as $k=>$v) {
		   if($k==0){
			?>
		   <div class="item g1 popup-with-zoom-anim" href="#small-dialog">
		<img class="lazyOwl" src="http://<?php echo $v['i_img'];?>" alt="name">
		<div class="caption">
		<h3><?php echo $v['i_content'];?></h3>
		<div class="s-btn">
		<a href="#">点击显示</a>
		</div>
		</div>
		</div> 
		<?php } else {?>
		<div class="item g1 popup-with-zoom-anim" href="#small-dialog<?php echo $k;?>">
		<img class="lazyOwl" src="http://<?php echo $v['i_img'];?>" alt="name">
		<div class="caption">
		<h3><?php echo $v['i_content'];?></h3>
		<div class="s-btn">
		<a href="#">点击显示</a>
		</div>
		</div>
		</div>

		<?php } }?>

		<!-- 轮播结束 -->

		</div>
		<!--//sreen-gallery-cursual---->
		<!-- caption-popup -->


		<!-- 点击轮播图显示 -->
		<?php foreach ($row as $k=>$v){  
		     if($k==0){
			?>

		<div class="caption-popup">
		<div id="small-dialog" class="mfp-hide innercontent">
		<h4><?php echo $v['i_content'];?></h4>
		<img class="img-responsive cap" src="http://<?php echo $v['i_img'];?>" title="<?php echo $v['i_content'];?>" />
		<p><?php echo $v['i_desc'];?></p>
		<a class="morebtn" href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['i_s_id']?>">了解我</a>
		</div>						  
		</div>
		<?php } else { ?>
		<div class="caption-popup">
		<div id="small-dialog<?php echo $k;?>" class="mfp-hide innercontent">
		<h4><?php echo $v['i_content'];?></h4>
		<img class="img-responsive cap" src="http://<?php echo $v['i_img'];?>" title="<?php echo $v['i_content'];?>" />
		<p><?php echo $v['i_desc'];?></p>
		<a class="morebtn" href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['i_s_id']?>">了解我</a>
		</div>						  
		</div>
		<?php }}?>

		<!-- 点击轮播图显示结束 -->

		<!----//fea-video---->
		<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																	
		});
		</script>	
		</div>
		<!-- /caption-popup -->
		<!---pop-up-box---->
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js/owl.carousel.js"></script>
		<!---//pop-up-box---->
		<!--slide-->
		<!--address-->
		<div class="address">
		<div class="container">
		<div class="address-top">
		<p>最热景点</p>
		</div>
		</div>
		</div>
		<!--address-->
		<!--articles-->
		<div class="articles">
		<div class="container">
		<div class="articles-top">

		<div>
		<!-- 热门景点循环开始 -->

		<!-- <div class="col-md-4 articles-left"> -->
		<ul style="list-style:none;">
		<?php foreach ($re as $k=>$v){?>
		<li style="float:left;">

		<div class="art-one">

		<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']?>"><img src="http://<?php echo $v['t_p_img'];?>" alt=""  title="<?php echo $v['t_name'];?>" width="350" height="350"/></a>
		<div class="art-btm">
			<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']?>"><h3><?php echo $v['t_name'];?></h3></a>
			<p><?php echo mb_strlen($v['t_content'],'utf-8')>30?mb_substr($v['t_content'],0,30,'utf-8').'……':$v['t_content']?></p>
		</div>
		</div>
		</li>

		<?php }?>
		</ul>
		<div class="load">
		<a href="index.php?r=viewspots/index" class="hvr-shutter-out-horizontal">显示更多景点信息</a>
		</div>
		</div>

		<!-- 热门景点结束 -->

		</div>
		<div>

		<div class="address">
		<div class="container">
		<div class="address-top">
		<p>酒店信息</p>
		</div>
		</div>
		</div>
		 
		<!-- 123
		456 -->

		<!-- 酒店信息循环开始 -->
		<ul style="list-style:none;">

		   <?php foreach ($res as $k=>$v) {?>
		   <li style="float:left;margin-left:20px;height:450px;">

			<a href="http://<?php echo $v['g_p_img'];?>" class="b-link-stripe b-animate-go   swipebox"  title="<?php echo $v['g_name'];?>">
			<img src="http://<?php echo $v['g_p_img'];?>" title="<?php echo $v['g_name'];?>" width="350" height="350"/>
		    <div class="art-btm">
			<a href="index.php?r=hotel/hot_about&id=<?php echo $v['g_id']?>"><h3><?php echo $v['g_name'];?></h3></a>
			</div> 
		     <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">
			<span class="one"></span>
			</h2>
			 </div>
				  	 </a>
		</li>
		   <?php }?>
		   

		</ul>
		<!-- 酒店信息循环结束 -->

		</div>

		</div>
		<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div class="load">
		<a href="index.php?r=hotel/hotel" class="hvr-shutter-out-horizontal">显示更多酒店信息</a>
		</div>
		</div>
		</div>
		</div>
		<!--articles-->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script> 
		<script type="text/javascript">
		jQuery(function($) {
		$(".swipebox").swipebox();
		});
		</script>
		<!-- Portfolio Ends Here -->
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
		$(function () {

		var filterList = {

		init: function () {

		// MixItUp plugin
		// http://mixitup.io
		$('#portfoliolist').mixitup({
		targetSelector: '.portfolio',
		filterSelector: '.filter',
		effects: ['fade'],
		easing: 'snap',
		// call the hover effect
		onMixEnd: filterList.hoverEffect()
		});				

		},

		hoverEffect: function () {

		// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
		function () {
		$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
		$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
		},
		function () {
		$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
		$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
		}		
		);				

		}

		};

		// Run the show!
		filterList.init();

		});	
		</script>
		<!--advertisement-->
		<!-- 	<div class="add">
		<div class="container">
		<div class="add-top">
		<div class="col-md-10 add-left">
		<p>Leave your Ads Here</p>
		</div>
		<div class="col-md-2 add-right">
		<img src="images/add.png" alt="" />
		<h3>Advertisement</h3>
		</div>
		<div class="clearfix"></div>
		</div>
		</div>
		</div> -->
		<!--advertisement-->
		<!--read-->



