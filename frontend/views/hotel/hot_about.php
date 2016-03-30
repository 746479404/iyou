
<html>
	<head>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=9IRuZHVNO5RqiVjMEiLLoG2QrHcX1YHv 	"></script>
	</head>



	<div class="lst">
		<div class="container">
			<div class="latest-top">
				<h3>酒店详情</h3>
				<div class="latest-bottom">
					<div class="col-md-6 latest-top-left">
					<?php foreach ($arr as $key => $value): ?>
						
						<h4><?php echo $value['g_name'] ?></h4>
						<p><img src="http://<?php echo $value['g_p_img'] ?>" height="200px;" width="200px;" alt=""></p>
						<p><font color="orange">￥<?php echo $value['g_money'] ?>起价</font>  位于<?php echo $value['g_place'] ?>  <font color="orange">人气 <?php echo $value['g_num'] ?></font></p>

					<?php endforeach ?>
					<div style="width:550px;height:300px;border:#ccc solid 1px;font-size:12px" id="map"></div>
				    
					</div>
					<div class="col-md-6 latest-top-left">
						<h4>介绍</h4>
						<?php foreach ($arr as $key => $value): ?>
						<p>有“<?php echo $value['t_name'] ?>”之称</p>
						<p><?php echo $value['g_content'] ?></p>
						<?php endforeach ?>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--news-->
	
	
	<!--special-->
	<div class="special">
		<div class="container">
			<div class="special-main">
				<h3>热门城市酒店</h3>
				<br>
				<center>
				<table>
					<tr>
						<?php foreach ($arr2 as $key => $value): ?>
							<td><a href="index.php?r=hotel/hotel_about&id=<?php echo $value['c_id'] ?>"><img src="http://<?php echo $value['c_img'] ?>" alt="<?php echo $value['c_name'] ?>" title="<?php echo $value['c_name'] ?>" width="200px;" height="150px;"><br></a>&nbsp;</td>
								
							<?php if (($key-3)%4 == 0){?>
								</tr><tr>
							<?php } ?>
						<?php endforeach ?>
					</tr>
				</table>
				</center>
				
			</div>
		</div>
	</div>
	<!--special-->
	<!--read-->
</html>
	<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(<?php echo $c['g_coordinate'] ?>),12);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
  </script>
