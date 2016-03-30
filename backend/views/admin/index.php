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


            <h1 class="page-title">Dashboard</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Dashboard</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    

<div class="row-fluid">

<br/>
<br/>
<br/>
<center>
<?php foreach ($select as $key => $value): ?>
<h1 style="color:red">欢迎  <?php echo $value['a_name']; ?>  进入，爱游后台管理系统！！！</h1>
<br/>
<br/>
<table>

		<tr>
		<td><h4>邮箱: </h4></td>
		<td><h4><?php echo $value['a_email']; ?></h4></td>
	</tr>
		<tr>
		<td><h4>电话: </h4></td>
		<td><h4><?php echo $value['a_tel']; ?></h4></td>
	</tr>
		<tr>
		<td><h4>地址: </h4></td>
		<td><h4><?php echo $value['a_from']; ?></h4></td>
	</tr>
		<tr>
		<td><h4>职位: </h4></td>
		<td><h4><?php echo $value['a_position']; ?></td>
	</tr>
<?php endforeach ?>
</table></center>

    </div>
</div>
<br/>
<br/>
<br/>
<br/>




                    
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


