
	<div class="lst">
		<div class="container">
			<div class="latest-top">
				<h3>热门酒店</h3>
				<div class="latest-bottom">
					<div class="col-md-6 latest-top-left">
						<img src="http://<?php echo $re['g_p_img'] ?>" alt="<?php echo $re['g_name'] ?>" title="<?php echo $re['g_name'] ?>"/>
					</div>
					<div class="col-md-6 latest-top-left">
						<h4><?php echo $re['g_name'] ?></h4>
						<p><?php echo $re['g_content']."..." ?><a href="#">详情</a></p>
						<div class="latest-btm">
							<div class="col-md-6 latest-btm-left">
								<img src="http://<?php echo $re['g_p_img2'] ?>" width="200px;" height="200px;" alt="<?php echo $re['g_name'] ?>" title="<?php echo $re['g_name'] ?>" />
							</div>
							<div class="col-md-6 latest-btm-left">
								<img src="http://<?php echo $re['g_p_img3'] ?>" width="200px;" height="200px;" alt="<?php echo $re['g_name'] ?>" title="<?php echo $re['g_name'] ?>" />
							</div>
							<div class="clearfix"></div>
						</div>
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
				<h3>热门城市酒店列表</h3>
				<br>
				<center>
				<table>
					<tr>
						<?php foreach ($arr as $key => $value): ?>
							<td><a href="index.php?r=hotel/hotel_about&id=<?php echo $value['c_id'] ?>"><img src="http://<?php echo $value['c_img'] ?>" alt="<?php echo $value['c_name'] ?>" title="<?php echo $value['c_name'] ?>" width="200px;" height="150px;"><br></a>&nbsp;</td>
								
							<?php if (($key-4)%5 == 0){?>
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
