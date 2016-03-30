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
    <form action="index.php?r=gps/upda" method="post">
        <?php foreach ($select as $key => $value): ?>
            <input type="hidden"  name="g_id" value="<?php echo $value['g_id']; ?>">
        <table border="0" width="400" align="center">
            <tr align="center">
                <td>导航名称</td>
                <td><input type="text" name="g_name" value="<?php echo $value['g_name']; ?>"></td>
            </tr>
            <tr align="center">
                <td>导航地址</td>
                <td><input type="text" name="g_url" value="<?php echo $value['g_url']; ?>"></td>
            </tr>
            <tr align="center">
                <td>排序顺序</td>
                <td><input type="text" name="g_order" value="<?php echo $value['g_order']; ?>"></td>
            </tr>
            <tr align="center">
                <td align="center" colspan="2"><input type='submit' value='修改'></td>
            </tr>
        </table>
        <?php endforeach ?>

    </form>
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


