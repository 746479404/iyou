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
    
        <table border="1" width="700" align="center"> 
            <tr align="center">
                <td>客服名称</td>
                <td>客服qq</td>
                <td>操作</td>
            </tr>
            <?php foreach ($select as $key => $value): ?>
            <tr align="center">
                <td><?php echo $value['q_name']; ?></td>
                <td><?php echo $value['q_qq']; ?></td>
                <td><a onclick="if(confirm('确定删除？')) return true; else return false;" href="index.php?r=friend/qq_del&id=<?php echo $value['q_id']; ?>" class='outiong'>删除</a>||<a href="index.php?r=friend/qq_upda&id=<?php echo $value['q_id']; ?>">修改</a></td>
            </tr>
            <?php endforeach ?>
        </table>
<center>
                      <a href="index.php?r=friend/index&page=<?php 
                        if ($page-1<1) {
                            echo '1';
                        }else{
                            $aa = $page-1;
                            echo $aa;
                        }
                         ?>">上一页</a>&nbsp;
                        
                        <a href="index.php?r=friend/index&page=<?php 
                        if ($page+1>$countpage) {
                            echo "$countpage";
                        }else{
                            $bb = $page+1;
                            echo $bb;
                        }
                         ?>">下一页</a><br/>
                         当前第<?php echo "$page"; ?>页-------
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


