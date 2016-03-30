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
            <form action="index.php?r=admin/mima_upda" method="post">
              
                      <table width="800" border="1" align="center">
                        <?php foreach ($select as $key => $value): ?>
                          <input type="hidden" value="<?php echo $value['a_id']; ?>" name="id">
                        <tr>
                          <td align="center">用户名</td>
                          <td><input type="text" value="<?php echo $value['a_name']; ?>" name='a_name'></td>
                        </tr>
                        <tr>
                          <td align="center">原密码</td>
                          <td><input type="text" name='y_pwd'></td>
                        </tr>
                        <tr>
                          <td align="center">更改密码</td>
                          <td><input type="text" name='g_pwd'></td>
                        </tr>
                        <tr>
                          <td align="center">再次输入密码</td>
                          <td><input type="text" name='g_pwds'></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><input type='submit' value='修改'></td>
                        </tr>
                        <?php endforeach ?>
                      </table>
            </form>



                    
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


