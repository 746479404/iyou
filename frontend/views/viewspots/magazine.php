<?php
use yii\widgets\LinkPager;
?>
<script src="lib/modernizr/modernizr-custom.js"></script>
<script src="lib/jquery/jquery.js"></script>
<link href="css/mislider.css" rel="stylesheet">
<link href="css/mislider-skin-cameo.css" rel="stylesheet">
<script src="js/mislider.js"></script>
<script>
jQuery(function ($) {
var slider = $('.mis-stage').miSlider({
//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
stageHeight: 380,
//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
slidesOnStage: false,
//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
slidePosition: 'center',
//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
slideStart: 'mid',
//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
slideScaling: 150,
//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
offsetV: -5,
//  Center slide contents vertically - Boolean. Default: false
centerV: true,
//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
navButtonsOpacity: 1
});
});
</script>
<!-- Apply other styles -->
<link href='http://fonts.useso.com/css?family=Roboto+Condensed:400|Roboto:500' rel='stylesheet'>
<link href="css/styles.css" rel="stylesheet">
<!--magazine-->
<div class="magazine">
<div id="wrapper">
<figure>
<div class="mis-stage">
<ol class="mis-slider">
<!--轮播图动态读取-->
<?php foreach($spots as $v) {?>
	<li class="mis-slide">
		<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']?>">
			<figure>
				<img src="http://<?php echo $v['t_p_img'];?>" alt="Pink Water Lillies">
				<figcaption><?php echo $v['t_name'];?></figcaption>
			</figure>
		</a>
	</li>
<?php }?>
</ol>
</div>
</div>
<div class="magazine-bottom">
<div class="col-md-7 magazine-bottom-left">
<h3>最好の时节</h3>
<?php foreach($season as $k=>$v) {?>
					<div class="mag-btm">
						<div class="col-md-4 mag-btm-left">
							<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']?>"><img src="http://<?php echo $v['t_p_img']?>" alt="<?php echo $v['t_name']?>" /></a>
						</div>
						<div class="col-md-8 mag-btm-left">
							<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']?>"><h4><?php echo $v['t_name']?></h4></a>
							<p><?php echo mb_strlen($v['t_content'],'utf-8')>50? mb_substr($v['t_content'],0,50,'utf-8').'……':$v['t_content'];?></p>
							<div class="m-btn">
								<a href="index.php?r=viewspots/detail&season=1&s_id=<?php echo $v['t_id']?>" class="hvr-shutter-out-horizontal">了解我</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php } ?>
<?php echo LinkPager::widget([
	'pagination'=>$page,
])?>
</div>
<div class="col-md-5 magazine-bottom-left">
<h3>最热の城市</h3>
<?php foreach($city as $k=>$v) {?>
	<div class="mag-btm">
		<div class="col-md-4 mag-btm-left">
			<a href="index.php?r=viewspots/detail&city=2&c_id=<?php echo $v['c_id']?>"><h1><?php echo $k+1;?></h1><img src="http://<?php echo $v['c_img']?>" alt="<?php echo $v['c_name']?>" /></a>
		</div>
		<div class="col-md-8 mag-btm-left">
			<a href="index.php?r=viewspots/detail&city=2&c_id=<?php echo $v['c_id']?>"><h4><?php echo $v['c_name']?></h4></a>
			<p><?php echo mb_strlen($v['c_desc'],'utf-8')>50? mb_substr($v['c_desc'],0,50,'utf-8').'……':$v['c_desc'];?></p>
			<div class="m-btn">
				<a href="index.php?r=viewspots/detail&city=2&c_id=<?php echo $v['c_id']?>" class="hvr-shutter-out-horizontal">了解我</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php } ?>
</div>
<div class="clearfix"></div>
</div>

</div>

</div>
<!--magazine-->
<div>1213123132132132132</div>
<!--Slider-Starts-Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
// Slideshow 4
$("#slider4").responsiveSlides({
auto: true,
pager: false,
nav: false,
speed: 500,
namespace: "callbacks",
before: function () {
$('.events').append("<li>before event fired.</li>");
},
after: function () {
$('.events').append("<li>after event fired.</li>");
}
});

});
</script>
<!--End-slider-script-->
<!--read-->

