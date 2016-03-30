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
            <form action="index.php?r=admin/a_add" method="post">
              
                      <table width="800" align="center">

                        <tr>
                          <td align="center">用户名</td>
                          <td><input type="text" name='a_name'></td>
                        </tr>
                        <tr>
                          <td align="center">密码</td>
                          <td><input type="text" name='a_pwd'></td>
                        </tr>
                        <tr>
                          <td align="center">邮箱</td>
                          <td><input type="text" name='a_email'></td>
                        </tr>
                        <tr>
                          <td align="center">电话</td>
                          <td><input type="text" name='a_tel'></td>
                        </tr>
                        <tr>
                          <td align="center">地址</td>
                          <td><input type="text" name='a_from'></td>
                        </tr>
                        <tr>
                          <td align="center">职位</td>
                          <td><input type="text" name='a_position'></td>
                        </tr>
                        <tr>
                          <td align="center"><input type='submit' style="width:100px" value='增加'></td>
                          <td></td>
                        </tr>
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


