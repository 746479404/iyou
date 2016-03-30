<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
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
                <h1>添加酒店</h1>
<?=Html::beginForm('index.php?r=admin/jiudianadd1' , 'post' , ['enctype' => 'multipart/form-data'])?>
                 <table width="500px">
                   <tr>
                     <td>酒店名</td>
                     <td><input type="text" name="g_name"></td>
                   </tr>
                   <tr>
                     <td>酒店价格</td>
                     <td><input type="text" name="g_money"></td>
                   </tr>
                   <tr>
                     <td>酒店类型</td>
                     <td>
                    
                      <select name="g_type_id">
                      <?php foreach ($arr as $key => $value) { ?>
                        <option value="<?php echo $value['t_id']?>"><?php echo $value['t_name']?></option>
                        <?php } ?>
                      </select>
                    
                     </td>
                   </tr>
                   <tr>
                     <td>酒店描述</td>
                     <td><textarea name="g_content" id="" cols="30" rows="5"></textarea></td>
                   </tr>
                   <tr>
                     <td>酒店图片1</td>
                     <td>
                       
                        <?=Html::activeFileInput($model , 'g_p_img')?>

                     </td>
                   </tr>
     <!--               <tr>
                     <td>酒店图片2</td>
                     <td>
                       
                        <input type="file" name="g_p_img2">

                     </td>
                   </tr> -->
          <!--          <tr>
                     <td>酒店图片3</td>
                     <td>
                       
                        <input type="file" name="g_p_img3">

                     </td>
                   </tr> -->
                   <tr>
                     <td>酒店地址</td>
                     <td>
                       
                        <textarea name="g_place" cols="30" rows="5"></textarea>

                     </td>
                   </tr>
                   <tr>
                     <td>酒店坐标</td>
                     <td>
                       
                        <input type="text" name="g_coordinate">

                     </td>
                   </tr>
                   <tr>
                     <td><input type="submit"></td>
                     <td></td>
                   </tr>
                 </table>
   
<?=Html::endForm();?>
                      
                  
              <footer>
                        <hr>
                        <p>&copy; 2016<a href="#" target="_blank">Portnine</a></p>
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


