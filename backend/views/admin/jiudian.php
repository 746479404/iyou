<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
       
    

    
    <div class="content">
        
        
        
             

        <div class="container-fluid">
            <div class="row-fluid">
                    

<div class="row-fluid">

    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Just a quick note:</strong> Hope you like the theme!
    </div>

    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">Latest Stats</a>
        <div id="page-stats" class="block-body collapse in">

            <div class="stat-widget-container">
                <div class="stat-widget">
                    

                  <form action="index.php?r=admin/jinyong" method="post">
                    <input type="submit" value="已禁用">
                  </form>
                    <table width="800px" border="1px" align="center">
                      <tr>
                        <td>酒店名称</td>
                        <td>酒店票价</td>
                        <td>酒店类型</td>
                        <td>酒店描述</td>
                        <td>酒店图片</td>
                        <td>管理</td>
                      </tr>
                        <?php foreach ($arr as $key => $values) { ?>
                      <tr>
                        <td><?php echo $values['g_name']; ?></td>
                        <td><?php echo $values['g_money']; ?></td>
                        <td><?php echo $values['g_type_id']; ?></td>
                        <td><textarea id="" cols="30" rows="5"><?php echo $values['g_content']; ?></textarea></td>
                        <td><a href='index.php?r=admin/jiudianimg&id=<?php echo $values["g_id"]?>'><img width="150px" src="http://<?php echo $values['g_p_img']; ?>"></a></td>
                        <td>
                          <a href='#'>*****</a>
                          <a href='#'>*****</a>
                        </td>
                      </tr>
                        
                        <?php } ?>
                    </table>
                    <table width="800px" border="1px" align="center">
                      <tr>
                        <td>酒店名称</td>
                        <td>酒店状态</td>
                        <td>酒店点击量</td>
                        <td>酒店地址</td>
                        <td>酒店坐标</td>
                        <td>管理</td>
                      </tr>
                        <?php foreach ($arr as $key => $values) { ?>
                      <tr>
                      <td><?php echo $values['g_name']; ?></td>
                        <td><?php 
                              if($values['g_del']==0){
                                  echo "<font color='red'><marquee>已禁用</marquee></font>";
                              }else{
                                  echo "正常";
                              }

                         ?></td>
                        <td><?php echo $values['g_num']; ?></td>
                        <td><textarea id="" cols="30" rows="5"><?php echo $values['g_place']; ?></textarea></td>
                        <td><?php echo $values['g_coordinate']; ?></td>                        <td>
                          <a href='index.php?r=admin/jiudiandel&id=<?php echo $values["g_id"]?>'>删除</a>
                          <a href='index.php?r=admin/jiudianupdt&id=<?php echo $values["g_id"]?>'>修改</a>
                        </td>
                      </tr>
                        
                        <?php } ?>
                    </table>
                    <!-- 分页 -->
            
                      <a href="index.php?r=admin/jiudian&page=<?php 
                        if ($page-1<1) {
                            echo '1';
                        }else{
                            $aa = $page-1;
                            echo $aa;
                        }
                         ?>">上一页</a>&nbsp;
                        
                        <a href="index.php?r=admin/jiudian&page=<?php 
                        if ($page+1>$countpage) {
                            echo "$countpage";
                        }else{
                            $bb = $page+1;
                            echo $bb;
                        }
                         ?>">下一页</a><br/>
                         当前第<?php echo "$page"; ?>页-------
                         共<?php echo "$countpage";?>页
                  

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


