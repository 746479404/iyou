
	<div class="lst">
		<div class="container">
			<div class="latest-top">
		
				<h3>热门酒店</h3>
				<div class="latest-bottom">
					<div class="col-md-6 latest-top-left">
						<a href="index.php?r=hotel/hot_about&id=<?php echo $re['g_id'] ?>"><img width="548px;" height="405px;" src="http://<?php echo $re['g_p_img'] ?>" alt="<?php echo $re['g_name'] ?>" title="<?php echo $re['g_name'] ?>"/></a>
					</div>
					<div class="col-md-6 latest-top-left">
						<h4><a href="index.php?r=hotel/hot_about&id=<?php echo $re['g_id'] ?>"><?php echo $re['g_name'] ?></a></h4>
						<p><?php echo $re['g_content']."..." ?><a href="index.php?r=hotel/hot_about&id=<?php echo $re['g_id'] ?>">详情</a></p>
						<div class="latest-btm">
							<div class="col-md-6 latest-btm-left">
								<a href="index.php?r=hotel/hot_about&id=<?php echo $re['g_id'] ?>"><img src="http://<?php echo $re['g_p_img2'] ?>" width="200px;" height="200px;" alt="<?php echo $re['g_name'] ?>" title="<?php echo $re['g_name'] ?>" /></a>
							</div>
							<div class="col-md-6 latest-btm-left">
								<a href="index.php?r=hotel/hot_about&id=<?php echo $re['g_id'] ?>"><img src="http://<?php echo $re['g_p_img3'] ?>" width="200px;" height="200px;" alt="<?php echo $re['g_name'] ?>" title="<?php echo $re['g_name'] ?>" /></a>
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
		<h3>热门城市酒店</h3>
			<div class="special-main">
				
				<br>
				<center>
				<table>
					<tr>
						<?php foreach ($arr as $key => $value): ?>
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

	<!-- recommend -->
	<div class="special">
		<div class="container">
			<h3>IU网酒店推荐</h3>
			<div class="special-main">
			<br>
				<center><table>
					<tr>
						<?php foreach ($result as $key => $value): ?>
						 	
						 		<td>
							 		<a href="index.php?r=hotel/hot_about&id=<?php echo $value['g_id'] ?>"><img src="http://<?php echo $value['g_p_img'] ?>" alt="<?php echo $value['g_name'] ?>" title="<?php echo $value['g_name'] ?>"></a>
							 		<p><a href="index.php?r=hotel/hot_about&id=<?php echo $value['g_id'] ?>"><?php echo $value['g_name'] ?> </a> ￥<?php echo $value['g_money'] ?> </p>
							 		<p></p>
						 		</td>
						 		<?php if (($key-5)%6 ==0){ ?>
						 			</tr></tr>
						 		<?php } ?>
						<?php endforeach ?>  
					</tr>
				</table></center>		
			</div>
		</div>
	</div>
	<!-- recommend -->
	<!--read-->
