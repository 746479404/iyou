<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html{width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
		#l-map{height:300px;width:100%;}
		#r-result{width:100%;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=9IRuZHVNO5RqiVjMEiLLoG2QrHcX1YHv"></script>

</head>


<body>
	<div class="lst">
		<div class="container">
			<div class="latest-top">
				<h3>城市</h3>
				<div class="latest-bottom">
					<div class="col-md-6 latest-top-left">
						<h4><font color="brown"><?php echo $re['c_name'] ?></font></h4>
						<p></p>
						<font color="brown">全部区域：</font>
						<?php foreach ($arr as $key => $value): ?>
							 <a href="#"><?php echo $value['c_name'] ?></a> &nbsp;
						<?php endforeach ?>
						<p><font color="orange"><?php echo $re['c_hotel_num'] ?></font> 家酒店</p>

						<p><?php echo $re['c_desc'] ?></p>
						<p>旅游地点推荐：</p>
						<?php foreach ($travel_result as $key => $value): ?>
							<a href="#"><font color="brown" style="font-size:12px;"><?php echo $value['t_name'] ?></font></a>
						<?php endforeach ?>

					</div>
					<div class="col-md-6 latest-top-left">
						
						<p>
							
  								<div style="width:500px; height:300px; border:#ccc solid 1px; font-size:12px" id="l-map"></div>
  								<div id="r-result">
								<input type="button" onclick="add_control();" value="添加" />
								<input type="button" onclick="delete_control();" value="删除" />
								</div>
								<p>点击地图类型控件切换普通地图、卫星图、三维图、混合图（卫星图+路网），右下角是缩略图，点击按钮查看效果</p>

						</p>
				
					</div>
		
				</div>
			</div>
		</div>
	
	<!--news-->
	<!--new-->
	
		<div class="container">
			<div class="new-top">
			</div>
				<div class="news-bottom">
					<div class="col-md-6 news-left">
						<input id="hotels" class="sea" placeholder="请输入您要搜索的酒店" style="height:32px;width:260px" type="text"><img onclick="searchs()" src="http://www.imgss.com/search.png" alt="">
					</div>
					<div class="col-md-6 news-left">
					<h3>最近浏览过的酒店</h3>
						<h4></h4>
						<p></p>
					</div>
					<div class="clearfix"></div>
				</div>
			
		</div>

	<div class="new" >
		<div class="container">
			<div class="new-top"></div>	
				<div class="news-bottom" id="list">
						<div class="col-md-6 news-left" style="width:500px">
							<?php foreach ($c as $key => $value): ?>
							<p><font color="orange" style="font-size:18px;"><?php echo $value['g_name'] ?></font></p>
							<p>￥  <font color="orange"><?php echo $value['g_money'] ?></font>  起价</p>
							<table>
								<tr>
									<td><img src="http://<?php echo $value['g_p_img'] ?>" alt="<?php echo $value['g_name'] ?>" title="<?php echo $value['g_name'] ?>" width="260px;"></td>
									<td>
										<p ><?php echo $value['g_desc'] ?></p>
										<div class="sp-btn" style="height:20px; width:100px;">
											<a href="index.php?r=hotel/hot_about&id=<?php echo $value['g_id'] ?>" class="hvr-shutter-out-horizontal">查看 </a>
										</div>
									</td>
								</tr>
							</table>
							
							
							
							
							<?php endforeach ?>
							
							<a href="index.php?r=hotel/hotel_about&id=<?php echo $re['g_id'] ?>&page=<?php 
						    if ($page-1<1) {
						        echo '1';
						    }else{
						        $aa = $page-1;
						        echo $aa;
						    }
						     ?>">上一页</a>&nbsp;
						    
						    <a href="index.php?r=hotel/hotel_about&&id=<?php echo $re['g_id'] ?>page=<?php 
						    if ($page+1>$countpage) {
						        echo "$countpage";
						    }else{
						        $bb = $page+1;
						        echo $bb;
						    }
						     ?>">下一页</a><br/>
						     当前第<?php echo "$page"; ?>页----
						     共<?php echo "$countpage";?>页
							
						</div>
				</div>
		</div>
	</div>

	<!--new-->
	<!--special-->
	<div class="special">
		<div class="container">
			<div class="special-main">
				<h3></h3>
				<p></p>
				
			</div>
		</div>
	</div>
	<!--special-->
	<!--read-->
</div>

	
</body>
</html>
<script type="text/javascript">
	function searchs(){
		// alert(123);
		var hot = $("#hotels").val();
		// alert(hot);
		$.get('index.php?r=hotel/search',{hot:hot},function(msg){
			$("#list").html(msg);

		})
	}



	// 百度地图API功能
	var map = new BMap.Map("l-map");            // 创建Map实例
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
	
	map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
	var mapType1 = new BMap.MapTypeControl({mapTypes: [BMAP_NORMAL_MAP,BMAP_HYBRID_MAP]});
	var mapType2 = new BMap.MapTypeControl({anchor: BMAP_ANCHOR_TOP_LEFT});
	var overView = new BMap.OverviewMapControl();
	var overViewOpen = new BMap.OverviewMapControl({isOpen:true, anchor: BMAP_ANCHOR_BOTTOM_RIGHT});

	setMapEvent();//设置地图事件
	addMapControl();//向地图添加控件
	addMapOverlay();//向地图添加覆盖物

	function add_control(){
		map.addControl(mapType1);          //2D图，卫星图
		map.addControl(mapType2);          //左上角，默认地图控件
		map.setCurrentCity("<?php echo $re['c_name'] ?>");        //由于有3D图，需要设置城市哦
		map.addControl(overView);          //添加默认缩略地图控件
		map.addControl(overViewOpen);      //右下角，打开
	}
	//移除地图类型和缩略图
	function delete_control(){
		map.removeControl(mapType1);   //移除2D图，卫星图
		map.removeControl(mapType2);
		map.removeControl(overView);
		map.removeControl(overViewOpen);
	}

	function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
	function setMapEvent(){
      
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    function addMapOverlay(){
    }
	var local = new BMap.LocalSearch(map, {
		renderOptions: {map: map}
	});
	local.search("<?php echo $re['c_name'] ?>");
</script>
