<?php 
use yii\widgets\LinkPager;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
  </head>
  <body class=""> 
  <!--<![endif]-->
    <div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">53</span>tickets</p>
    <p class="stat"><span class="number">27</span>tasks</p>
    <p class="stat"><span class="number">15</span>waiting</p>
</div>

            <h1 class="page-title">Dashboard</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Dashboard</li>
        </ul>

        <div class="container-fluid">
<center>
<a href="index.php?r=admins/addtravel">添加</a>
<table border="1" width="800">
    <tr>
        <th>ID</th>
        <th>景点名称</th>
        <th>景点图片</th>
        <th>景点介绍</th>
        <th>景点城市</th>
        <th>景点季度</th>
        <th>门票价钱</th>
        <th>操作</th>
    </tr>
    <?php foreach ($arr as $k => $v): ?>
    <tr>
        <td><?php echo $v['t_id']?></td>
        <td><?php echo $v['t_name']?></td>
        <td><img src="http://www.imgss.com/<?php echo $v['t_p_img']?>" alt="无图" width="100" height="100"></td>
        <td> <?php echo mb_strlen($v['t_content'], 'utf-8') > 20  ? mb_substr($v['t_content'], 0, 20 , 'utf-8').'....' : $v['t_content']; ?></td>
        <td><?php echo $v['c_name']?></td>
        <td><?php echo $v['s_name']?></td>
        <td><?php echo $v['t_money']?></td>
        <td><a onclick="if(confirm('确定移除？')) return true; else return false;" href="index.php?r=admins/del&id=<?php echo $v['t_id']?>" class='outiong'>移除</a>||<a href="index.php?r=admins/save&id=<?php echo $v['t_id']?>">修改</a></td>
    </tr>

     <?php endforeach ?>
      <!-- <tr><td colspan="7"></td></tr> -->
</table>
</center>
<center>
                     <a href="index.php?r=admins/travel&page=<?php 
                        if ($page-1<1) {
                            echo '1';
                        }else{
                            $aa = $page-1;
                            echo $aa;
                        }
                         ?>">上一页</a>&nbsp;
                        
                        <a href="index.php?r=admins/travel&page=<?php 
                        if ($page+1>$countpage) {
                            echo "$countpage";
                        }else{
                            $bb = $page+1;
                            echo $bb;
                        }
                         ?>">下一页</a><br/>
                         当前第<?php echo "$page"; ?>页-----
                         共<?php echo "$countpage";?>页    
                         </center>       
        </div>
    </div>
      


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


