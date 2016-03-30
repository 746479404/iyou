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
      <center>
      <h1>游记管理</h1>
      <table width="900px" border="1">
        <tr>
          <td><h3>发表人</h3></td>
          <td><h3>发表标题</h3></td>
          <td><h3>发表内容</h3></td>
          <td><h3>发表时间</h3></td>
          <td><h3>发表图片</h3></td>
          <td><h3>是否被投诉</h3></td>
          <td>操作</td>
        </tr>
        <?php foreach ($arr as $k => $v) { ?>
        <tr>
          <td><?php echo $v['u_id'];?></td>
          <td><?php echo $v['t_title'];?></td>
          <td><textarea name="" id="" cols="30" rows="5"><?php echo $v['t_content'];?></textarea></td>
          <td><?php echo $v['t_times'];?></td>
          <td><img src="<?php echo $v['t_img'];?>"></td>
          <td><?php
                  if ($v['t_opin']==1) {
                    echo "<font color='red'><marquee>被投诉</marquee></font>";
                  }else{
                    echo "正常";
                  }
            ?></td>
          <td>
            <a onclick="if(confirm('确定删除？')) return true; else return false;" href="index.php?r=travels/travelsdel&id=<?php echo $v['t_id']; ?>" class='outiong'>删除</a>
          </td>
        </tr>
        <?php } ?>
      </table>

      <!-- 分页 -->
            
                      <a href="index.php?r=travels/youji&page=<?php 
                        if ($page-1<1) {
                            echo '1';
                        }else{
                            $aa = $page-1;
                            echo $aa;
                        }
                         ?>">上一页</a>&nbsp;
                        
                        <a href="index.php?r=travels/youji&page=<?php 
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
    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


