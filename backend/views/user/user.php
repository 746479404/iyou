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
                <div>
                <center>
                    
                    <table border="1" width="800">
                        <tr>
                            <td>用户名</td>
                            <td>昵称</td>
                            <td>性别</td>
                            <td>头像</td>
                            <td>邮箱</td>
                            <td>电话</td>
                            <td>积分</td>
                            <td>创建时间</td>
                            <td>操作</td>
                        </tr>
                        <?php foreach ($select as $key => $value): ?>
                        <tr>
                            <td><?php echo $value['u_name']; ?></td>
                            <td><?php echo $value['m_name']; ?></td>
                            <td><?php if ($value['m_sex']==1){ ?>
                                男
                            <?php }else{ ?>
                                女
                            <?php } ?></td>
                            <td><img src="http://<?php echo $value['m_img']; ?>" alt=""></td>
                            <td><?php echo $value['m_email']; ?></td>
                            <td><?php echo $value['m_tel']; ?></td>
                            <td><?php echo $value['m_integral']; ?></td>
                            <td><?php echo $value['m_time']; ?></td>
                            <td><a onclick="if(confirm('确定删除？')) return true; else return false;" href="index.php?r=user/user_del&id=<?php echo $value['u_id']; ?>&type=1" class='outiong'>删除用户</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </center>
                </div>



                    
                  
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


