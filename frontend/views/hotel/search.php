<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style type="text/css">
		body, html{width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
		#l-map{height:300px;width:100%;}
		#r-result{width:100%;}
	</style>
</head>
<body>
	

<div class="col-md-6 news-left" style="width:500px" id="list">
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
							
</div>


</body>
</html>