<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    


    
    <div class="content" style="background-image:url('img/s.jpg');">
        <center>
            <form action="index.php?r=admin/jiudianupdt2" method="post">
            <input type="hidden" name="id" value="<?php echo $post1['g_id']?>">
                 <h1>修改酒店</h1>
              
                 <table width="500px">
                   <tr>
                     <td>酒店名</td>
                     <td><input type="text" value="<?php echo $post1['g_name']?>" name="g_name"></td>
                   </tr>
                   <tr>
                     <td>酒店价格</td>
                     <td><input type="text" value="<?php echo $post1['g_money']?>" name="g_money"></td>
                   </tr>
                   <tr>
                     <td>酒店描述</td>
                     <td><textarea name="g_content" id="" cols="30" rows="5"><?php echo $post1['g_content']?> </textarea></td>
                   </tr>
                   <tr>
                     <td>酒店图片1</td>
                     <td>
                       <img src="http://<?php echo $post1['g_p_img']?>">
                        <input type="file" name="g_p_img">

                     </td>
                   </tr>
                   <tr>
                     <td>酒店图片2</td>
                     <td>
                       <img src="http://<?php echo $post1['g_p_img2']?>">
                        <input type="file" name="g_p_img2">

                     </td>
                   </tr>
                   <tr>
                     <td>酒店图片3</td>
                     <td>
                       <img src="http://<?php echo $post1['g_p_img3']?>">
                        <input type="file" name="g_p_img3">

                     </td>
                   </tr>
                   <tr>
                     <td>酒店地址</td>
                     <td>
                       
                        <textarea name="g_place" value="g_place" cols="30" rows="5"><?php echo $post1['g_place']?></textarea>

                     </td>
                   </tr>
                   <tr>
                     <td>酒店坐标</td>
                     <td>
                       
                        <input type="text" name="g_coordinate" value="<?php echo $post1['g_coordinate'] ?>">

                     </td>
                   </tr>
                   <tr>
                     <td><input type="submit"></td>
                     <td></td>
                   </tr>
                 </table>
              </form>
            
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


