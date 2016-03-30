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
            <div class="row-fluid">
                      <table width="800" border="1" align="center">
                        <tr align="center">
                          <td>用户名</td>
                          <td>邮箱</td>
                          <td>电话</td>
                          <td>地址</td>
                          <td>职位</td>
                          <td>操作</td>
                        </tr>
                        <?php foreach ($select as $key => $value): ?>
                        <tr align="center">
                          <td><?php echo $value['a_name']; ?></td>
                          <td><?php echo $value['a_email']; ?></td>
                          <td><?php echo $value['a_tel']; ?></td>
                          <td><?php echo $value['a_from']; ?></td>
                          <td><?php echo $value['a_position']; ?></td>
                          <td> <?php if ($value['a_del']==1){ ?>
                          <a onclick="if(confirm('确定删除？')) return true; else return false;" href="index.php?r=admin/a_del&id=<?php echo $value['a_id']; ?>&type=1" class='outiong'>删除</a> ||<a href="index.php?r=admin/a_upda&id=<?php echo $value['a_id']; ?>">修改</a>||<a href="index.php?r=admin/mima_upda&id=<?php echo $value['a_id']; ?>">修改密码</a>
                          <?php }else{ ?>
                            <a href="index.php?r=admin/a_del&id=<?php echo $value['a_id']; ?>&type=0">还原</a>
                          <?php } ?> </td>
                        </tr>
                        <?php endforeach ?>
                      </table>
          
<center>
                      <a href="index.php?r=admin/admins&page=<?php 
                        if ($page-1<1) {
                            echo '1';
                        }else{
                            $aa = $page-1;
                            echo $aa;
                        }
                         ?>">上一页</a>&nbsp;
                        
                        <a href="index.php?r=admin/admins&page=<?php 
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

                    
                    <footer>
                        <hr>
                        
                        <p class="pull-right">Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
                        

                        <p>&copy; 2012 <a href="#" target="_blank">Portnine</a></p>
                    </footer>
                    
            </div>
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


