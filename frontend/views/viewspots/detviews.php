<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/26
 * Time: 9:57
 */
?>
<body>
<!--search-scripts-->
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
    new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!--//search-scripts-->
<!--blog-->
<div class="blog">
    <div class="container">
        <div class="blog-top">
            <div class="col-md-9 blog-left">
                <div class="blog-main">
                    <a class="bg"><?php echo $view['t_name']?></a>
                </div>
                <div class="blog-main-one">
                    <div class="blog-one blog-sng">
                        <img src="http://<?php echo $view['t_p_img']?>" alt="<?php echo $view['t_name']?>" width="800px" height="450px"/>
                        <p class="sngl"><?php echo $view['t_content'];?></p>
                    </div>
                    <!--百度地图-->
                    <div>
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
                            local.search("+<?php echo $view['t_name']?>+");
                        </script>
                    </div>
                </div>
                <!--<div class="comment-list">
                    <h5>评论</h5>
                    <div class="cmt-list">
                        <div class="cmt-left">
                            <img src="images/avatar.png" alt="" />
                        </div>
                        <div class="cmt-right">
                            <p>View all posts by: <a href="#">admin</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>-->


                <div class="related">
                    <h3>推荐酒店：</h3>
                    <div class="related-bottom">
                        <?php foreach($hotels as $k=>$v) {?>
                            <a href="index.php?r=hotel/hot_about&id=<?php echo $v['g_id']?>"><div class="col-md-3 related-left">
                                <img src="http://<?php echo $v['g_p_img']?>" alt="" />
                                <h4><?php echo $v['g_name'];?></h4>
                            </div></a>
                        <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--留言
                <div class="content">
                    <h3>LEAVE A COMMENT</h3>
                    <div class="contact-form">
                        <form>
                            <input type="text" placeholder="Name" required/>
                            <input type="text" placeholder="Email" required/>
                            <input type="text" placeholder="Phone" required/>
                            <textarea placeholder="Message"></textarea>
                            <input type="submit" value="SEND"/>
                        </form>
                    </div>
                </div>-->
            </div>
            <div class="col-md-3 blog-right">
                <div class="categories" style="margin-top: 50px">
                    <h5><b>所在地区</b></h5>
                    <ul>
                        <li><a href="index.php?r=viewspots/detail&city=2&c_id=<?php echo $view['c_id']?>"><?php echo $view['c_name'];?></a></li>
                    </ul>
                </div>
                <div class="categories">
                    <h5><b>适合游玩的季节</b></h5>
                    <ul>
                        <li><?php echo $view['s_name'];?></li>
                    </ul>
                </div>
                <div class="categories">
                    <h5><b>门票</b></h5>
                    <ul>
                        <li>￥<?php echo $view['t_money'];?></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--blog-->
</body>
</html>