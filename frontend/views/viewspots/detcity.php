<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/29
 * Time: 11:48
 */
?>
<!--blog-->
<div class="blog">
    <div class="container">
        <div class="blog-top">
            <div class="col-md-9 blog-left">
                <div class="blog-main">
                    <a class="bg"><?= $city['c_name']?></a>
                </div>
                <div class="blog-main-one">
                    <div class="blog-one blog-sng">
                        <img src="http://<?= $city['c_img']?>" alt="" />
                        <p class="sngl"><?= $city['c_desc']?></p>
                    </div>
                    <div class="comments cmt">
                        <ul>
                        </ul>
                    </div>
                    <!--百度地图-->
                    <div>
                        <h3>所在位置：</h3>
                        <style type="text/css">
                            body, html{width: 100%;height: 100%; margin:0;font-family:"微软雅黑";}
                            #l-map{height:300px;width:100%;}
                            #r-result{width:100%;}
                        </style>
                        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SVN0d9j1lEZmqLGjn9Mq9c1t"></script>
                        <div id="l-map"></div>
                        <div id="r-result"></div>
                        <script type="text/javascript">
                            // 百度地图API功能
                            var map = new BMap.Map("l-map");            // 创建Map实例
                            map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
                            var local = new BMap.LocalSearch(map, {
                                renderOptions: {map: map, panel: "r-result"}
                            });
                            local.search("+<?php echo $city['c_name']?>+");
                        </script>
                    </div>
                </div>
                <div class="related">
                    <h3>推荐景点</h3>
                    <div class="related-bottom">
                        <?php foreach($view as $k=>$v){?>
                            <div class="col-md-3 related-left">
                            <a href="index.php?r=viewspots/detail&season=1&s_id=<?= $v['t_id'];?>"><img src="http://<?= $v['t_p_img']?>" alt="<?= $v['t_name'];?>" title="<?= $v['t_name']?>" /></a>
                                <a href="index.php?r=viewspots/detail&season=1&s_id=<?= $v['t_id'];?>"><h4><?= $v['t_name']?></h4></a>
                        </div>
                        <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="related">
                    <h3>推荐酒店</h3>
                    <div class="related-bottom">
                        <?php foreach($hotel as $k=>$v){?>
                            <div class="col-md-3 related-left">
                                <a href="index.php?r=hotel/hot_about&id=<?= $v['g_id'];?>"><img src="http://<?= $v['g_p_img']?>" alt="<?= $v['g_name'];?>" title="<?= $v['g_name']?>" /></a>
                                <a href="index.php?r=hotel/hot_about&id=<?= $v['g_id'];?>"><h4><?= $v['g_name']?></h4></a>
                            </div>
                        <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 blog-right" style="margin-top:50px;">
                <div class="categories">
                    <h3>景点</h3>
                    <ul>
                        <?php foreach($view as $k=>$v){?>
                            <li><a href="index.php?r=viewspots/detail&season=1&s_id=<?= $v['t_id'];?>"><?= $v['t_name']?></a></li>
                        <?php }?>
                        <li>……</li>
                    </ul>
                </div>
                <div class="categories">
                    <h3>酒店</h3>
                    <ul>
                    <?php foreach($hotel as $k=>$v){?>
                        <li><a href="index.php?r=hotel/hot_about&id=<?= $v['g_id'];?>"><?= $v['g_name']?></a></li>
                    <?php }?>
                        <li>……</li>
                </div>
            </div>
            <div class="clearfix"></div>
        </div> 
    </div>
</div>
<!--blog-->