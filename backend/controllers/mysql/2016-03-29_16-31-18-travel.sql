-- MySQL dump 10.13  Distrib 5.5.40, for Win32 (x86)
--
-- Host: 192.168.1.120    Database: travel
-- ------------------------------------------------------
-- Server version	5.5.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(255) NOT NULL,
  `a_pwd` char(32) NOT NULL,
  `a_del` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='后台用户';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'wpj','202cb962ac59075b964b07152d234b70','1'),(2,'zjh','202cb962ac59075b964b07152d234b70','1'),(3,'zcy','202cb962ac59075b964b07152d234b70','1'),(9,'ckq','202cb962ac59075b964b07152d234b70','0'),(12,'wnn','202cb962ac59075b964b07152d234b70','0'),(13,'zxx','202cb962ac59075b964b07152d234b70','0'),(14,'mzx','202cb962ac59075b964b07152d234b70','0'),(15,'whl','202cb962ac59075b964b07152d234b70','0'),(16,'jyh','202cb962ac59075b964b07152d234b70','0'),(17,'hxk','202cb962ac59075b964b07152d234b70','0');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_message`
--

DROP TABLE IF EXISTS `admin_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_message` (
  `a_id` int(11) NOT NULL,
  `a_email` varchar(255) DEFAULT NULL,
  `a_tel` varchar(255) DEFAULT NULL,
  `a_from` varchar(255) DEFAULT NULL,
  `a_position` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_message`
--

LOCK TABLES `admin_message` WRITE;
/*!40000 ALTER TABLE `admin_message` DISABLE KEYS */;
INSERT INTO `admin_message` VALUES (2,'652490218@qq.com','15710071323','山西','经理'),(3,'987564321@qq.com','987654321','河南','经理'),(1,'123456789@qq.com','12345678910','北京海淀','产品经理'),(13,'564468468@qq.com','646984684','北京','高级工程师'),(12,'654684684@qq.com','85687486468','天津','技术经理'),(9,'68465135@qq.com','65468684684','北京海淀','产品经理'),(14,'351668468@qq.com','68468','江西','技术顾问'),(15,'a/8878@qq.com','88486486','上海','项目经理'),(16,'1234324345@qq.com','065164.131','宁夏','高级工程师'),(17,'784564@qq.com','468468','内蒙古','程序员');
/*!40000 ALTER TABLE `admin_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role`
--

DROP TABLE IF EXISTS `admin_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role` (
  `r_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role`
--

LOCK TABLES `admin_role` WRITE;
/*!40000 ALTER TABLE `admin_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) DEFAULT NULL,
  `c_pid` int(11) DEFAULT NULL,
  `c_img` varchar(255) DEFAULT NULL,
  `c_desc` text,
  `c_hotel_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'北京',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/79f0f736afc37931adbee354e9c4b74542a911fc.jpg','北京是全球拥有世界遗产（7处）最多的城市，是全球首个拥有世界地质公园的首都城市。北京对外开放的旅游景点达200多处，有世界上最大的皇宫紫禁城、祭天神庙天坛、皇家园林北海公园、颐和园和圆明园，还有八达岭长城、慕田峪长城以及世界上最大的四合院恭王府等名胜古迹。北京市共有文物古迹7309项，99处全国重点文物保护单位（含长城和京杭大运河的北京段）、326处市级文物保护单位、5处国家地质公园、15处国家森林公园。',520),(2,'上海',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/bd3eb13533fa828bdf519f36fd1f4134960a5af0.jpg','截至2010年底，上海共有A级景区（点）61家，其中5A级景区（点）3家，4A级景区（点）28家，3A级景区（点）30家。自然佳地\r\n佘山国家森林公园、东滩世界地质公园、淀山湖、奉贤碧海金沙海滩、上海野生动物园、上海植物园、上海世纪公园、滴水湖、陆家嘴中心绿地',480),(3,'香港',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/77094b36acaf2eddd0267f488c1001e9380193bf.jpg','香港有传统的祖先宗祠、新界氏族围村，以至坐落闹市的庙宇。游客可以参加由香港旅游发展局主办的“古今建筑漫游”。香港是流行于民间的传统食品一直扎根香港，如年糕、粽子、鱼蛋、蛋挞、小桃酥、杏仁饼、盲公饼、鸡仔饼、小椰堆、花生饼、芝麻饼、相思酥、棋子饼、炒米饼、格子饼、花生糖、袋仔面、鸡蛋仔、花生豆、南乳香酥角等等。',533),(4,'武汉',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/4d086e061d950a7b503eb48e0ad162d9f2d3c975.jpg','武汉是“中国优秀旅游城市”，每年举办武汉国际旅游节。市内遍布有名胜古迹339处，革命纪念地103处，全国重点文物保护单位13处，5A级旅游景区3家，4A级景区15家。武汉自然风光独特，四季气候分明，拥有其他大都市罕有的166个湖泊和众多山峦；武汉的人文景观具有浓郁的楚文化特色。                                                          \r\n2014年接待国内旅游者19126.75万人次；接待海外旅游者170.57万人次；实现旅游总收入1949.46亿元。其中，国内旅游收入1892.06亿元；国际旅游收入9.34亿美元。年末共有旅游景区39个，其中5A级3个，4A级19个，3A级14个。旅游星级以上宾馆87家，其中五星级14家，四星级31家，三星级31家。',300),(5,'杭州',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/faedab64034f78f022348fbc78310a55b3191c45.jpg','杭州拥有两个国家级风景名胜区——西湖风景名胜区、“两江两湖”（富春江——新安江——千岛湖——湘湖）风景名胜区；两个国家级自然保护区——天目山、清凉峰自然保护区；七个国家森林公园——千岛湖、大奇山、午潮山、富春江、青山湖、半山和桐庐瑶琳森林公园；一个国家级旅游度假区——之江国家旅游度假区；全国首个国家级湿地——西溪国家湿地公园。杭州还有全国重点文物保护单位25个、国家级博物馆9个。全市拥有年接待1万人次以上的各类旅游景区、景点120余处。\r\n著名的旅游胜地有瑶琳仙境、桐君山、雷峰塔、岳庙、三潭映月、苏堤、六和塔、宋城、南宋御街、灵隐寺、跨湖桥遗址等。2011年6月24日，杭州西湖正式列入《世界遗产名录》。',200),(6,'澳门',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/d048adde987e5f00cdbf1af1.jpg','澳门烹饪吸收了广东地区的烹饪法和食材。葡国菜、广东菜、也会吃其他国家的餐饮。\r\n葡式蛋挞几乎已经是澳门美食的代表名词之一。\r\n马介休来自葡语Bacalhau，是鳕鱼（codfish）经盐腌制但并不风干保存而成，是不少澳葡式美食的主要材料。。\r\n水蟹粥已经成为了澳门当地最受欢迎的美食之一。随着澳门在国际的地位正在急速提升，一些国际的评级机构如世界概况也会把澳门加入统计之列，以下是一些澳门在国际上的排名',63),(7,'洛阳',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/11794d43b6d2b3499313c6dd.jpg','四扫尾：依次是“鱼翅插花”、“金猴探海”、“开鱿争春”、“碧波伞丸”。\r\n八大件：分前五后三。前五为“快三样”、“五柳鱼”、“鱼仁”、“鸡丁”、“爆鹤脯”。 （后三为三道甜食）\r\n真不同洛阳水席制作技艺是“国家级非物质文化遗产”，为中国唯一以整套宴席入选的国家级非遗项目。[29] \r\n四镇桌：燕菜、葱扒虎头鲤、云罩腐乳肉、海米升百彩。\r\n洛阳汤文化：羊肉汤，牛肉汤，丸子汤，驴肉汤，豆腐汤，不翻汤，胡辣汤。',320),(8,'许昌',0,'https://ss3.baidu.com/7LsWdDW5_xN3otqbppnN2DJv/lvpics/abpic/item/4e4a20a4462309f7d8e86cc4720e0cf3d6cad665.jpg','2014年，许昌市完成地区生产总值2108.0亿元，比上年增长9.3%。其中，第一产业增加值189.1亿元，第二产业增加值1438.8亿元，第三产业增加值480.1亿元。全年公共财政预算收入达125.2亿元；全年公共财政预算支出221.2亿元。全年完成固定资产投资（不含农户）1637.2亿元。全年城镇居民人均可支配收入23753元，农民人均纯收入12140元。',410),(26,'平谷区',1,NULL,NULL,NULL),(27,'密云县',1,NULL,NULL,NULL),(28,'延庆县',1,NULL,NULL,NULL),(23,'大兴区',1,NULL,NULL,NULL),(24,'房山区',1,NULL,NULL,NULL),(25,'怀柔区',1,NULL,NULL,NULL),(20,'丰台区',1,NULL,NULL,NULL),(21,'通州区',1,NULL,NULL,NULL),(22,'顺义区',1,NULL,NULL,NULL),(17,'昌平区',1,NULL,NULL,NULL),(18,'西城区',1,NULL,NULL,NULL),(19,'石景山区',1,NULL,NULL,NULL),(14,'朝阳区',1,NULL,NULL,NULL),(15,'海淀区',1,NULL,NULL,NULL),(16,'东城区',1,NULL,NULL,NULL),(29,'黄浦区',2,NULL,NULL,NULL),(30,'虹口区',2,NULL,NULL,NULL),(31,'杨浦区',2,NULL,NULL,NULL),(32,'闸北区',2,NULL,NULL,NULL),(33,'普陀区',2,NULL,NULL,NULL),(34,'长宁区 ',2,NULL,NULL,NULL),(35,'静安区',2,NULL,NULL,NULL),(36,'徐汇区',2,NULL,NULL,NULL),(37,'浦东新区',2,NULL,NULL,NULL),(38,'闵行区',2,NULL,NULL,NULL),(39,'奉贤区',2,NULL,NULL,NULL),(40,'金山区',2,NULL,NULL,NULL),(41,'松江区',2,NULL,NULL,NULL),(42,'青浦区',2,NULL,NULL,NULL),(43,'嘉定区',2,NULL,NULL,NULL),(44,'宝山区',2,NULL,NULL,NULL),(45,'崇明县',2,NULL,NULL,NULL),(46,'香港岛',3,NULL,NULL,NULL),(47,'九龙区',3,NULL,NULL,NULL),(48,'新界',3,NULL,NULL,NULL),(49,'中西区',3,NULL,NULL,NULL),(50,'东区',3,NULL,NULL,NULL),(51,'南区',3,NULL,NULL,NULL),(52,'湾仔',3,NULL,NULL,NULL),(53,'九龙城',3,NULL,NULL,NULL),(54,'观塘',3,NULL,NULL,NULL),(55,'深水埗',3,NULL,NULL,NULL),(56,'黄大仙',3,NULL,NULL,NULL),(57,'油尖旺',3,NULL,NULL,NULL),(58,'离岛',3,NULL,NULL,NULL),(59,'葵青',3,NULL,NULL,NULL),(60,'北区',3,NULL,NULL,NULL),(61,'西贡',3,NULL,NULL,NULL),(62,'沙田',3,NULL,NULL,NULL),(63,'大埔',3,NULL,NULL,NULL),(64,'荃湾',3,NULL,NULL,NULL),(65,'屯门',3,NULL,NULL,NULL),(66,'元朗',3,NULL,NULL,NULL),(67,'江岸区',4,NULL,NULL,NULL),(68,'江汉区',4,NULL,NULL,NULL),(69,'硚口区',4,NULL,NULL,NULL),(70,'汉阳区',4,NULL,NULL,NULL),(71,'武昌区',4,NULL,NULL,NULL),(72,'洪山区',4,NULL,NULL,NULL),(73,'青山区',4,NULL,NULL,NULL),(74,'东西湖区',4,NULL,NULL,NULL),(75,'蔡甸区',4,NULL,NULL,NULL),(76,'江夏区',4,NULL,NULL,NULL),(77,'黄陂区',4,NULL,NULL,NULL),(78,'新洲区',4,NULL,NULL,NULL),(79,'汉南区',4,NULL,NULL,NULL),(80,'武汉经济技术开发区',4,NULL,NULL,NULL),(81,'东湖新技术开发区',4,NULL,NULL,NULL),(82,'武汉吴家山台商投资区',4,NULL,NULL,NULL),(83,'西湖区',5,NULL,NULL,NULL),(84,'上城区',5,NULL,NULL,NULL),(85,'下城区',5,NULL,NULL,NULL),(86,'江干区',5,NULL,NULL,NULL),(87,'拱墅区',5,NULL,NULL,NULL),(88,'滨江区',5,NULL,NULL,NULL),(89,'萧山区',5,NULL,NULL,NULL),(90,'余杭区',5,NULL,NULL,NULL),(91,'花地玛堂区',6,NULL,NULL,NULL),(92,'圣安多尼堂区',6,NULL,NULL,NULL),(93,'大堂区',6,NULL,NULL,NULL),(94,'望德堂区',6,NULL,NULL,NULL),(95,'风顺堂区',6,NULL,NULL,NULL),(96,'海岛市',6,NULL,NULL,NULL),(97,'嘉模堂区',6,NULL,NULL,NULL),(98,'圣方济各堂区',6,NULL,NULL,NULL),(99,'澳门半岛',6,NULL,NULL,NULL),(100,'氹仔岛',6,NULL,NULL,NULL),(101,'路环岛',6,NULL,NULL,NULL),(102,'涧西区',7,NULL,NULL,NULL),(103,'西工区',7,NULL,NULL,NULL),(104,'老城区',7,NULL,NULL,NULL),(105,'瀍河区',7,NULL,NULL,NULL),(106,'洛龙区',7,NULL,NULL,NULL),(107,'吉利区',7,NULL,NULL,NULL),(108,'洛南新区',7,NULL,NULL,NULL),(109,'偃师市',7,NULL,NULL,NULL),(110,'孟津县',7,NULL,NULL,NULL),(111,'新安县',7,NULL,NULL,NULL),(112,'洛宁县',7,NULL,NULL,NULL),(113,'宜阳县',7,NULL,NULL,NULL),(114,'伊川县',7,NULL,NULL,NULL),(115,'嵩县',7,NULL,NULL,NULL),(116,'栾川县',7,NULL,NULL,NULL),(117,'汝阳县',7,NULL,NULL,NULL),(118,'许昌县',8,NULL,NULL,NULL),(119,'禹州市',8,NULL,NULL,NULL),(120,'鄢陵县',8,NULL,NULL,NULL),(121,'长葛市',8,NULL,NULL,NULL),(122,'襄城县',8,NULL,NULL,NULL),(123,'魏都区',8,NULL,NULL,NULL);
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `city_travel`
--

DROP TABLE IF EXISTS `city_travel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city_travel` (
  `c_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city_travel`
--

LOCK TABLES `city_travel` WRITE;
/*!40000 ALTER TABLE `city_travel` DISABLE KEYS */;
/*!40000 ALTER TABLE `city_travel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `click`
--

DROP TABLE IF EXISTS `click`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `click` (
  `c_id` int(11) NOT NULL,
  `c_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `click`
--

LOCK TABLES `click` WRITE;
/*!40000 ALTER TABLE `click` DISABLE KEYS */;
INSERT INTO `click` VALUES (1,220),(2,330),(3,240),(4,210),(5,221),(6,370),(7,240),(8,260);
/*!40000 ALTER TABLE `click` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collect`
--

DROP TABLE IF EXISTS `collect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collect` (
  `u_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collect`
--

LOCK TABLES `collect` WRITE;
/*!40000 ALTER TABLE `collect` DISABLE KEYS */;
INSERT INTO `collect` VALUES (1,1),(1,1);
/*!40000 ALTER TABLE `collect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_travel_id` int(11) DEFAULT NULL,
  `c_posts` int(11) DEFAULT NULL,
  `c_user` int(11) DEFAULT NULL,
  `c_comment` varchar(300) DEFAULT NULL,
  `c_time` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='评论表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,1,NULL,1,'fddgfsdgsfdgdsfgdfsgsdfgsdfgdsfgdfsg','2016-03-24 11:53:52'),(2,2,NULL,1,'倒萨飞飞 的所发生的','2016-03-24 11:53:52'),(3,3,NULL,1,'地方官个地方官','2016-03-24 11:53:52'),(4,5,NULL,1,'房东告诉法规梵蒂冈地方官','2016-03-24 11:53:52');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convert`
--

DROP TABLE IF EXISTS `convert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convert` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `c_record` varchar(255) DEFAULT NULL,
  `c_times` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convert`
--

LOCK TABLES `convert` WRITE;
/*!40000 ALTER TABLE `convert` DISABLE KEYS */;
/*!40000 ALTER TABLE `convert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extension`
--

DROP TABLE IF EXISTS `extension`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extension` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '推广id',
  `u_id` int(11) DEFAULT NULL COMMENT '推广人id',
  `u_pid` int(11) DEFAULT NULL COMMENT '被推广人id',
  `e_inte` int(11) DEFAULT NULL COMMENT '获取的推广几分',
  `e_time` varchar(16) DEFAULT NULL COMMENT '被推广人添加的时间',
  `u_pname` varchar(60) DEFAULT NULL COMMENT '被推广人name',
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extension`
--

LOCK TABLES `extension` WRITE;
/*!40000 ALTER TABLE `extension` DISABLE KEYS */;
INSERT INTO `extension` VALUES (1,1,3,20,'2016-3-17','zcy');
/*!40000 ALTER TABLE `extension` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friendlist`
--

DROP TABLE IF EXISTS `friendlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friendlist` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) DEFAULT NULL,
  `f_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friendlist`
--

LOCK TABLES `friendlist` WRITE;
/*!40000 ALTER TABLE `friendlist` DISABLE KEYS */;
INSERT INTO `friendlist` VALUES (1,'百度','www.baidu.com'),(2,'百度','www.baidu.com'),(3,'百度','www.baidu.com');
/*!40000 ALTER TABLE `friendlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `g_name` varchar(50) DEFAULT NULL,
  `g_img` varchar(50) NOT NULL,
  `g_num` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'旅行箱','',5),(2,NULL,'',NULL);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_log`
--

DROP TABLE IF EXISTS `goods_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods_log` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '兑换商品记录',
  `g_id` int(11) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `l_num` tinyint(4) DEFAULT NULL COMMENT '兑换数量',
  `l_time` varchar(16) DEFAULT NULL COMMENT '添加时间',
  `l_integral` int(11) DEFAULT NULL COMMENT '兑换积分',
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_log`
--

LOCK TABLES `goods_log` WRITE;
/*!40000 ALTER TABLE `goods_log` DISABLE KEYS */;
INSERT INTO `goods_log` VALUES (1,1,1,1,'2016-1-13',50);
/*!40000 ALTER TABLE `goods_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gps`
--

DROP TABLE IF EXISTS `gps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gps` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) DEFAULT NULL,
  `g_url` varchar(255) DEFAULT NULL,
  `g_order` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gps`
--

LOCK TABLES `gps` WRITE;
/*!40000 ALTER TABLE `gps` DISABLE KEYS */;
INSERT INTO `gps` VALUES (1,'首页','index.php?r=data/index','1'),(2,'景点','index.php?r=viewspots/index','2'),(3,'酒店','index.php?r=hotel/hotel','5'),(4,'驴友游记','index.php?r=travel/travel','4'),(5,'周边游','index.php?r=travelaround/index','3'),(6,'个人中心','index.php?r=data/user','6');
/*!40000 ALTER TABLE `gps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grop_type`
--

DROP TABLE IF EXISTS `grop_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grop_type` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grop_type`
--

LOCK TABLES `grop_type` WRITE;
/*!40000 ALTER TABLE `grop_type` DISABLE KEYS */;
INSERT INTO `grop_type` VALUES (1,'最佳酒店'),(2,'最奢华酒店'),(3,'最浪漫酒店'),(4,'最超值酒店'),(5,'最佳民宿'),(6,'最适合家庭酒店'),(7,'最佳小型酒店'),(8,'世界最佳服务酒店');
/*!40000 ALTER TABLE `grop_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gropshop`
--

DROP TABLE IF EXISTS `gropshop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gropshop` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) DEFAULT NULL,
  `g_money` varchar(255) DEFAULT NULL,
  `g_type_id` int(11) DEFAULT NULL,
  `g_content` text,
  `g_p_img` varchar(255) DEFAULT NULL,
  `g_p_img2` varchar(255) DEFAULT NULL,
  `g_p_img3` varchar(255) DEFAULT NULL,
  `g_del` int(11) DEFAULT '1',
  `g_num` int(11) DEFAULT '0' COMMENT '酒店点击量',
  `g_place` varchar(255) DEFAULT NULL,
  `g_coordinate` varchar(255) DEFAULT NULL,
  `c_id` int(11) DEFAULT '1',
  `g_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gropshop`
--

LOCK TABLES `gropshop` WRITE;
/*!40000 ALTER TABLE `gropshop` DISABLE KEYS */;
INSERT INTO `gropshop` VALUES (1,'希尔顿酒店','1018',2,'北京希尔顿酒店位于北京市燕莎商业区和外交使馆区的中心点，距离北京首都国际机场仅20分钟车程，轻松往来于各主要旅游景点、大型购物中心及娱乐场所。\r\n北京希尔顿酒店拥有设施齐全的会议室及宴会厅。无论您是商务旅行、家人出游，这里都将是您工作、休憩的绝佳选择。房间内的一切皆为您而设计，配有宽带高速网络接入，双线电话和留言服务。\r\n酒店提供502间客房及套房，为您带来轻松和惬意，享誉盛名的希尔顿酒店将为您提供至尊美食。\r\n于2008年奥运期间盛装开业的行政楼将为您提供更为广阔的空间和更加完善的设备。行政房间内增设了Bose CD播放器、浴室电视、咖啡机和DVD播放器。位于三层的行政酒廊是您享受宁静休闲时光的理想去处，您在此还可享受快速办理入住和退房手续。餐饮设施包括亚洲美食元素阁、美式餐厅东方路一号、颐达吧、汤尼酒廊和咖啡基诺，在此您将可以与朋友小酌，尽享美味。您可以在壁球场挥拍、享受中式指压按摩，还可以选择在设备齐全的健身中心锻炼，在设有温度监控的室内泳池畅凉一番。2008年奥运期间盛装开业的行政楼将为您提供更为广阔的空间和更加完善的设备。行政房间内增设了Bose CD播放器、浴室电视、咖啡机和DVD播放器。位于三层的行政酒廊是您享受宁静休闲时光的理想去处，您在此还可享受快速办理入住和退房手续。餐饮设施包括亚洲美食元素阁、美式餐厅东方路一号、颐达吧、汤尼酒廊和咖啡基诺，在此您将可以与朋友小酌，尽享美味。您可以在壁球场挥拍、享受中式指压按摩，还可以选择在设备齐全的健身中心锻炼，在设有温度监控的室内泳池畅凉一番。2008年奥运期间盛装开业的行政楼将为您提供更为广阔的空间和更加完善的设备。行政房间内增设了Bose CD播放器、浴室电视、咖啡机和DVD播放器。位于三层的行政酒廊是您享受宁静休闲时光的理想去处，您在此还可享受快速办理入住和退房手续。餐饮设施包括亚洲美食元素阁、美式餐厅东方路一号、颐达吧、汤尼酒廊和咖啡基诺，在此您将可以与朋友小酌，尽享美味。您可以在壁球场挥拍、享受中式指压按摩，还可以选择在设备齐全的健身中心锻炼，在设有温度监控的室内泳池畅凉一番。  ','www.imgss.com/xerd.jpg','www.imgss.com/xerd_2.jpg','www.imgss.com/xerd_3.jpg',0,594,'北京 朝阳区 东三环北路东方路1号 ，燕莎桥/三元桥交界。 【 燕莎、三里屯商业区 】','116.468921,39.958479',1,'未加载。。。'),(2,'香格里拉酒店','984',3,'北京香格里拉饭店于1987年成立，五矿发展控股62%，香港香格里拉国际饭店（北京）有限公司占股38%。2008年实现主营业务收入5.2亿元。北京香格里拉饭店毗邻繁华金融商业及高科技园区，交通便利，使您便捷地前往文明古都的各处名胜古迹，距首都机场仅30分钟车程。理想的位置和良好的声誉使其成为旅游和商务人士下榻北京的首选。饭店拥有各类客房与套房，室内装饰高雅舒适。另设7家风格迥异的餐厅和酒吧。喜爱健身的客人可以来健身中心，这里有先进的健身设施、室内游泳池以及桑拿和按摩服务。作为香格里拉集团品牌的“CHI”SPA，提炼自亚洲传统的理疗方法，旨在回复身心的和谐与统一，是京城最大的水疗中心之一。饭店两间设施齐备的大宴会厅及21间多功能厅也可承办各式宴会。\r\n荣获多项殊荣的北京香格里拉饭店是北京西部地区的标志性建筑，竣工后的饭店重新诠释了典雅和时尚的理\r\n念，使“香格里拉”成为现实中永恒的浪漫。[1] \r\n饭店更于2007年斥资5000万美元兴建了超豪华的新阁。新阁拥有142套舒适豪华客房，占新阁十二层全层的新阁廊为新阁的住客提供无与伦比的尊崇服务，包括全天畅饮饮料，葡萄酒及香槟和小吃。新阁其它场所及设施包括：蓝韵西餐厅、一流健身俱乐部（内有25米室内温水游泳池）、屋顶花园、北京最奢华的Spa设施之一 – 香格里拉「气」Spa。酒店会议及宴会设施包括气势恢宏的2个大宴会厅和21间典雅的多功能厅，使北京香格里拉饭店成为举办各种宴会、庆典的最佳场所。\r\n酒店名称由来 “香格里拉”一词意为心中的日月，英语发音源于康方言南路十语群体中甸的藏语方言。后来，“香格里拉”这一词汇被小说《失去的地平线》介绍引用后成为一个特有地名。1971年，香格里拉一词被马来西亚企业家郭氏家族买断，成为酒店的商号，进而风靡世界，成为世界酒店品牌的至高象征之一。1987年北京香格里拉饭店落成，是当时京城最高、最豪华的五星级饭店。','www.imgss.com/xgll.jpg','www.imgss.com/xgll_2.jpg','www.imgss.com/xgll_3.jpg',1,480,'海淀区紫竹院路29号，紫竹桥西北侧。 【 西直门及北京展览馆地区】 ','116.314486,39.950269',1,'未加载。。。'),(3,'凯宾斯基酒店','1112',2,'北京凯宾斯基饭店集完美融合奢华、舒适及不同文化于一身。地处北京市中心，地理位置得天独厚，并将欧洲一流的服务品质与中国丰厚的文化底蕴完美融为一体，是典型五星级酒店。北京燕莎中心凯宾斯基饭店坐落于北京的经济及商务的中心，可轻松到达首都国际机场，地理位置十分优越。不管是商务出行或是休闲旅游都是您最理想的选择。建筑融传统文化和现代设计于一体北京凯宾斯基饭店自1992年开业以来迅速成为中国首都地标性建筑,2008年酒店公共区域翻后更突出了这样的设计。\r\n北京凯宾斯基饭店拥有529间客房，以及配套齐全完备的会议设施及宽大的会议场地。饭店8个风格多样的餐厅及酒吧以提供世界各地品质精美的食品享誉京城。饭店还以两个健身俱乐部，包括一个顶楼恒温游泳池及设备齐全的健身房。\r\n北京凯宾斯基饭店在中国\"凯宾斯基\"是各种特色兼容并收的集大成者， 每个凯宾斯基饭店都代表着各地的文化和历史传统并散发着独特的个性和魅力。\r\n只需提出要求，我们即可为您奉上独享服务 什么是北京凯宾斯饭店的五星级服务？在这里，我们秉承着客户至上的原则。您尽可与我们分享期待拥有完美旅程的的愿望，我们会竭尽所能满足您的需要。','www.imgss.com/kbsj.jpg','www.imgss.com/kbsj_2.jpg','www.imgss.com/kbsj_3.jpg',1,120,'北京 朝阳区 亮马桥路50号 ，近燕莎友谊商城。 【 燕莎、三里屯商业区 】 ','116.471004,39.954835',3,'未加载。。。'),(4,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',3,'未加载。。。'),(5,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',1,'未加载。。。'),(6,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',2,'未加载。。。'),(7,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',2,'未加载。。。'),(8,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',2,'未加载。。。'),(9,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',2,'未加载。。。'),(10,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',2,'未加载。。。'),(11,'北京金枫酒店','428',6,'北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..北京金枫酒店位于北京朝阳区，近酒仙桥北路，紧邻中国国际展览中心（新馆）、机场辅路、望京国际商业中心、酒仙桥电子科技城、电子城IT产业园、华堂商场等。酒店毗邻电通创意广场、恒通国际创新园，地理位置优越，交通十分便利。北京金枫酒店的房间设计舒适温馨，所有房间均配有多语言卫星电视节目、电子保险箱及客房MINIBAR等先进设施。酒店咖啡厅装修风格现代、简洁，是与朋友休闲畅聊的好场所。酒店致力于为每一位宾客提供全方位、高品质的服务，使您在每日商务之余、游览之后享受到惬意与安逸的休憩环境。\r\n2014年开业  房间数量（间）：186间房..','www.imgss.com/jf.jpg','www.imgss.com/jf_2.jpg','www.imgss.com/jf_3.jpg',1,80,'朝阳区酒仙桥彩虹路798北门，近酒仙桥北路。 【 望京、酒仙桥、798地区】 ','116.503779,39.997458',1,'未加载。。。');
/*!40000 ALTER TABLE `gropshop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_g`
--

DROP TABLE IF EXISTS `history_g`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_g` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_id` int(11) DEFAULT NULL,
  `t_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_g`
--

LOCK TABLES `history_g` WRITE;
/*!40000 ALTER TABLE `history_g` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_g` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_t`
--

DROP TABLE IF EXISTS `history_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_t` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) DEFAULT NULL,
  `t_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_t`
--

LOCK TABLES `history_t` WRITE;
/*!40000 ALTER TABLE `history_t` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_t` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imgs`
--

DROP TABLE IF EXISTS `imgs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imgs` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_img` varchar(255) DEFAULT NULL,
  `i_b_times` varchar(255) DEFAULT NULL,
  `i_e_times` varchar(255) DEFAULT NULL,
  `i_content` varchar(255) DEFAULT NULL,
  `i_desc` varchar(255) DEFAULT NULL,
  `i_del` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `i_s_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imgs`
--

LOCK TABLES `imgs` WRITE;
/*!40000 ALTER TABLE `imgs` DISABLE KEYS */;
INSERT INTO `imgs` VALUES (1,'www.imgss.com/lun1.jpg','5','3','秦皇岛','人间天堂','0','2016-03-29 14:56:21',17),(3,'www.imgss.com/lun2.jpg','5','3','杭州西湖','风景迷人','1','2016-03-29 14:56:25',18),(4,'www.imgss.com/lun3.jpg','5','3','颐和园','游都游不完','1','2016-03-29 14:56:28',3),(5,'www.imgss.com/lun4.jpg','5','3','北海公园','冬天可以滑冰哦','1','2016-03-29 14:56:32',14),(6,'www.imgss.com/lun5.jpg','5','3','丽江古城','古城的忧伤','1','2016-03-29 14:56:34',19),(7,'www.imgss.com/lun6.jpg','5','3','西双版纳','领略民族风情','1','2016-03-29 14:56:37',20),(8,'www.imgss.com/lun7.jpg','5','3','五台山','佛教圣地','1','2016-03-29 14:56:41',21),(9,'www.imgss.com/lun8.jpg','5','3','大连','海鲜吃个够','1','2016-03-29 14:56:43',22);
/*!40000 ALTER TABLE `imgs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `integral`
--

DROP TABLE IF EXISTS `integral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `integral` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL,
  `i_record` varchar(255) DEFAULT NULL,
  `i_times` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `integral`
--

LOCK TABLES `integral` WRITE;
/*!40000 ALTER TABLE `integral` DISABLE KEYS */;
/*!40000 ALTER TABLE `integral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(255) DEFAULT NULL,
  `m_sex` varchar(255) DEFAULT NULL,
  `m_img` varchar(255) DEFAULT NULL,
  `m_email` varchar(255) DEFAULT NULL,
  `m_tel` varchar(255) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `m_integral` varchar(255) DEFAULT NULL,
  `u_id` int(11) NOT NULL COMMENT '用户ID',
  `m_time` varchar(16) NOT NULL,
  `m_pad` varchar(255) NOT NULL COMMENT '密码',
  `m_pwd` varchar(255) NOT NULL COMMENT '确认密码',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'whlnl','0','uploads/3.jpg','746479404@qq.com','123456789',NULL,'1000',1,'2016-2-16','',''),(2,'zhangsan','0','images/errors.jpg','45645465@qq.com','123456789',NULL,'1000',3,'2016-3-17','',''),(3,'123',NULL,NULL,NULL,NULL,NULL,NULL,0,'','123',''),(4,'马志向',NULL,NULL,NULL,NULL,NULL,NULL,0,'','123456',''),(5,'马志向',NULL,NULL,NULL,NULL,NULL,NULL,0,'','123456',''),(6,'马志向',NULL,NULL,NULL,NULL,NULL,NULL,0,'','123456','');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `node`
--

DROP TABLE IF EXISTS `node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node`
--

LOCK TABLES `node` WRITE;
/*!40000 ALTER TABLE `node` DISABLE KEYS */;
/*!40000 ALTER TABLE `node` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `picture` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_img` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `picture`
--

LOCK TABLES `picture` WRITE;
/*!40000 ALTER TABLE `picture` DISABLE KEYS */;
INSERT INTO `picture` VALUES (1,'images/xerd.jpg'),(2,'images/xerd_2.jgp'),(3,'images/xerd_3.jgp'),(4,'images/xgll.jpg'),(5,'images/xgll_2.jpg'),(6,'images/xgll_3.jpg'),(7,'images/kbsj.jpg'),(8,'images/kbsj_2.jpg'),(9,'images/kbsj_3.jpg'),(10,'images/b-4.jpg');
/*!40000 ALTER TABLE `picture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `present`
--

DROP TABLE IF EXISTS `present`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `present` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) DEFAULT NULL,
  `p_jf` varchar(255) DEFAULT NULL,
  `p_img_p` varchar(255) DEFAULT NULL,
  `p_content` varchar(500) DEFAULT NULL,
  `p_num` tinyint(4) DEFAULT NULL COMMENT '可兑换数量',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `present`
--

LOCK TABLES `present` WRITE;
/*!40000 ALTER TABLE `present` DISABLE KEYS */;
INSERT INTO `present` VALUES (1,'旅行包','1000','10','德萨大三大四',10),(2,'充电宝','1000','10','水滴铃声；阿大',10),(3,'手机','12000','10','打开就撒泼大师卡佳泊',5),(4,'支架','500','10','54d6sa4d6as1',10),(5,'手表','300','10','丹方撒的拉萨打算',30),(6,'水杯','400','10','金沙岛撒大数据和',20);
/*!40000 ALTER TABLE `present` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `re_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论自增ID',
  `u_id` int(11) DEFAULT NULL COMMENT '用户id',
  `re_content` varchar(200) DEFAULT NULL COMMENT '评论内容',
  `t_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`re_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='评论回复';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
INSERT INTO `reply` VALUES (1,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(2,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(3,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(4,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(5,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(6,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(7,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(8,NULL,'了；阿克江；法律框架撒；兰蔻肌肤；拉空间',6),(9,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(10,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(11,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(12,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(13,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(14,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(15,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(16,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',5),(17,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(18,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(19,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(20,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(21,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(22,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(23,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(24,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(25,NULL,'阿什顿；浪费空间；拉萨空间否；雷克萨金；东风科技；萨拉空间否；洛斯卡解放；拉萨',4),(26,NULL,'垃圾堆；浪费空间啦；减肥；拉开司机；封口机；喀什家的法律框架；阿拉山口 ',12),(27,NULL,'啊；里的街口府；拉空间否；绿卡；蓝色空间否；阿什顿',10);
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_nodel`
--

DROP TABLE IF EXISTS `role_nodel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_nodel` (
  `r_id` int(11) NOT NULL,
  `n_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_nodel`
--

LOCK TABLES `role_nodel` WRITE;
/*!40000 ALTER TABLE `role_nodel` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_nodel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `season`
--

DROP TABLE IF EXISTS `season`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `season` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='季节表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `season`
--

LOCK TABLES `season` WRITE;
/*!40000 ALTER TABLE `season` DISABLE KEYS */;
INSERT INTO `season` VALUES (1,'春季'),(2,'夏季'),(3,'秋季'),(4,'冬季');
/*!40000 ALTER TABLE `season` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travel`
--

DROP TABLE IF EXISTS `travel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travel` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(255) DEFAULT NULL,
  `t_p_img` varchar(255) DEFAULT NULL,
  `t_content` varchar(255) DEFAULT NULL,
  `t_j` varchar(255) DEFAULT NULL,
  `t_w` varchar(255) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `t_money` varchar(255) DEFAULT NULL,
  `t_comment_id` int(11) DEFAULT '1',
  `t_del` int(11) DEFAULT '1',
  `click_num` int(11) DEFAULT '0',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travel`
--

LOCK TABLES `travel` WRITE;
/*!40000 ALTER TABLE `travel` DISABLE KEYS */;
INSERT INTO `travel` VALUES (1,'西海公园','www.imgss.com/01.jpg','北海公园(Beihai Park)，位于北京市中心区，城内景山西侧，在故宫的西北面，与中海、南海合称三海。属于中国古代皇家园林。全园以北海为中心，面积约71公顷，水面占583市亩，陆地占480市亩。这里原是辽、金、元建离宫，明、清辟为帝王御苑，是中国现存最古老、最完整、最具综合性和代表性的皇家园林之一，1925年开放为公园。是中国保留下来的最悠久最完整的皇家园林，为全国重点文物保护单位，是国家AAAA级旅游景区','116.39754','39.932204',1,1,'100',1,1,12),(3,'颐和园','www.imgss.com/02.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',2,2,'120',1,1,12),(4,'长城','www.imgss.com/03.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',1,3,'80',1,1,15),(5,'奥林匹克公园','www.imgss.com/04.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',2,4,'50',1,1,6),(6,'动物园','www.imgss.com/05.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',3,2,'30',1,1,9),(7,'天文馆','www.imgss.com/01.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',5,2,'55',1,1,13),(8,'蜡像馆','www.imgss.com/02.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',8,4,'66',1,1,4),(9,'3D艺术馆','www.imgss.com/03.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',6,3,'78',1,1,10),(10,'故宫','www.imgss.com/04.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',1,1,'41',1,1,3),(11,'天坛','www.imgss.com/05.jpg',' 打四123465大四大7487451四大实47打实大师大师大厦的撒打算打算扩大时刻都卡死','116.39754','39.932204',6,3,'62',1,1,2),(14,'北海公园','www.imgss.com/01.jpg','北海公园(Beihai Park)，位于北京市中心区，城内景山西侧，在故宫的西北面，与中海、南海合称三海。属于中国古代皇家园林。全园以北海为中心，面积约71公顷，水面占583市亩，陆地占480市亩。这里原是辽、金、元建离宫，明、清辟为帝王御苑，是中国现存最古老、最完整、最具综合性和代表性的皇家园林之一，1925年开放为公园。是中国保留下来的最悠久最完整的皇家园林，为全国重点文物保护单位，是国家AAAA级旅游景区','116.39754','39.932204',1,1,'100',1,1,25),(15,'南海公园','www.imgss.com/06.jpg','北海公园(Beihai Park)，位于北京市中心区，城内景山西侧，在故宫的西北面，与中海、南海合称三海。属于中国古代皇家园林。全园以北海为中心，面积约71公顷，水面占583市亩，陆地占480市亩。这里原是辽、金、元建离宫，明、清辟为帝王御苑，是中国现存最古老、最完整、最具综合性和代表性的皇家园林之一，1925年开放为公园。是中国保留下来的最悠久最完整的皇家园林，为全国重点文物保护单位，是国家AAAA级旅游景区','116.39754','39.932204',1,1,'100',1,1,12),(16,'东海公园','www.imgss.com/01.jpg','北海公园(Beihai Park)，位于北京市中心区，城内景山西侧，在故宫的西北面，与中海、南海合称三海。属于中国古代皇家园林。全园以北海为中心，面积约71公顷，水面占583市亩，陆地占480市亩。这里原是辽、金、元建离宫，明、清辟为帝王御苑，是中国现存最古老、最完整、最具综合性和代表性的皇家园林之一，1925年开放为公园。是中国保留下来的最悠久最完整的皇家园林，为全国重点文物保护单位，是国家AAAA级旅游景区','116.39754','39.932204',1,1,'100',1,1,10),(17,'秦皇岛','www.imgss.com/lun1.jpg','地方撒第三方第三方地方斯蒂芬第三方屌丝第三方屌丝房顶上发送到佛挡杀佛第三方斯蒂芬萨达',NULL,NULL,3,2,'110',1,1,0),(18,'西湖','www.imgss.com/lun2.jpg','第三方第三方斯蒂芬萨达斯蒂芬斯蒂芬斯蒂芬第三方斯蒂芬',NULL,NULL,5,1,'222',1,1,0),(19,'丽江古城','www.imgss.com/lun5.jpg','的撒打算发放第三方斯蒂芬爱的色放撒打发爱的色放撒打发是的',NULL,NULL,6,2,'1212',1,1,1),(20,'西双版纳','www.imgss.com/lun6.jpg','第三方斯蒂芬第三方斯蒂芬斯蒂芬 斯蒂芬斯蒂芬第三方',NULL,NULL,6,4,'2385',1,1,0),(21,'五台山','www.imgss.com/lun7.jpg','fdhghjgjfdgsgdgdfsggggggggggggggggggggggggg',NULL,NULL,4,2,'123',1,1,0),(22,'大连','www.imgss.com/lun8.jpg','非公开将地方交流卡萨丁解放路口见山东龙口克林顿将双方考虑',NULL,NULL,4,1,'2132',1,1,1);
/*!40000 ALTER TABLE `travel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travel_content`
--

DROP TABLE IF EXISTS `travel_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travel_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_contents` text,
  `t_tid` int(11) DEFAULT NULL COMMENT '关联游记表ID',
  `title` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='游记详情';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travel_content`
--

LOCK TABLES `travel_content` WRITE;
/*!40000 ALTER TABLE `travel_content` DISABLE KEYS */;
INSERT INTO `travel_content` VALUES (1,'1.天门山(258元/人+3元保险、含双程索道).它有全世界最长的索道---天门山索道；有中国公路的奇观----盘山道；爬999个台阶刚好就可以到天门洞的洞底;.1997年5月，著名歌手李娜登天门山，似受冥冥中神奇力量的点化,顿悟而皈依佛门；1999年和2006年，世界特技飞行大师驾机穿越天门洞；法国蜘蛛人阿兰.罗伯特于2007年11月18号成功挑战天门山，在垂直度接近200米的绝壁上上演“空中芭蕾”.空中之路玻璃栈道。游玩时间半天到一天之间.\r\n\r\n2.土家风情园(120元/人).主要介绍的就是一些少数民族的建筑和风俗民情,里面已经有创了世界吉尼斯记录的九重天吊角楼,还有每晚都有土家风情表演,上刀山下火海,鬼谷神功等.游玩时间在2至3小时.\r\n\r\n3.老院子(74元/人）也值得一游,可以充分了解土家风俗民情,也是总理少年求学的地方.在湖南卫视热播的《血色湘西》室内镜头,就是在老院子拍摄的.游玩时间在1个半小时\r\n\r\n4.武陵源核心景区(这就是世界自然遗产5A级景区武陵源了.)\r\n四大景区(245元/人+3元保险).分别为：\r\n张家界国家森林公园(黄石寨游览线、金鞭溪游览线、鹞子寨游览线、袁家界游览线);\r\n杨家界风景区(乌龙寨游览线、一步登天--空中走廊);\r\n天子山风景区(大观台游览线、贺龙公园游览线);\r\n索溪峪风景区(十里画廊游览线).\r\n\r\n其中最常见的就是很多旅行社导游把袁家界划分成另外收取门票的地方了.其实都是一票通用,只是景区内索道、电梯以及十里画廊小火车要另外收费.门票有效期有两天限制.精华线路游玩时间为2至3天.\r\n\r\n\r\n5.黄龙洞(103元/人).是张家界武陵源风景名胜中著名的溶洞景点.游玩时间一个半小时.\r\n\r\n\r\n6.宝峰湖(96元/人).宝峰湖风景区集山水于一体，融民俗风情于一身，尤以奇秀的高峡平湖绝景、“飞流直下三千尺”的宝峰飞瀑闻名。游玩时间两小时.\r\n\r\n7.张家界大峡谷(121元/人)是新开发的一个景区.距世界自然遗产武陵源风景区15公里.张家界大峡谷境内多流泉飞瀑,地质地貌复杂.她远离都市喧唳,绝壁突兀,空气幽静,四季如春,曲径通幽,谷天相映,安静对晤.游玩时间加路上行程时间5小时\r\n\r\n张家界自由行你们可以有如下几个行程和价格：（以下包含门票+导游+住宿+吃+交通）\r\n\r\n第一条：张家界-金鞭溪-袁家界—杨家界—天子山(2天1晚500元）\r\n　\r\n第二条：张家界-金鞭溪-袁家界—杨家界—天子山（3天2晚580元）　　\r\n\r\n第三条：张家界-金鞭溪-袁家界—杨家界--天子山-凤凰（3天2晚880元）　　\r\n\r\n第四条：张家界-金鞭溪-天子山—袁家界--杨家界-天门山（3天2晚880元）　　\r\n\r\n第五条：张家界-金鞭溪-袁家界—杨家界-天子山-大峡谷-黄龙洞（3天2晚880元）\r\n\r\n第六条：张家界-金鞭溪-袁家界—杨家界-天子山-猛洞河漂流（3天2晚880元）\r\n\r\n第七条：张家界-金鞭溪-袁家界—杨家界-天子山-天门山-漂流（4天3晚1280元）\r\n\r\n第八条：张家界-袁家界-天子山—天门山（2日游750元）\r\n孩子6岁以上（1.3米以下免费）不占床位，半价。\r\n\r\n入住酒店的等级说明：（房间价格根据等级加费）\r\n\r\n普通房：入住农家乐家庭旅馆，无星级标准、干净卫生、安全、独立卫生间、彩电。定时热水提供；\r\n舒适房：入住实惠等或三星等之间的一般酒店，干净、卫生、安全、独立卫生间、热水提供；\r\n豪华房：入住国家相关部门评定的挂牌三星级酒店；\r\n\r\n增加景点：此路线可随游客的要求增加其他的景点费用；（如天门山、黄龙洞、宝峰湖、大峡谷、漂流等景点）\r\n\r\n张家界线路推荐\r\n推荐一：\r\n张家界森林公园两日游，2人以上成团经济型500元一人，舒适型600元一人\r\n路线：森林公园金鞭溪，袁家界，杨家界，天子山，十里画廊\r\n包含费用：\r\n一、森林公园248元大门票；\r\n二、景区山顶或者武陵源一晚住宿，行程中三个正餐，一个早餐（农家餐）；\r\n，两天导游费用，市区至景区往返交通费用\r\n不包含费用：\r\n\r\n景区内的索道67元/人，杨家界索道75/元，百龙天梯72元/人，十里画廊小火车往返52元/人（可自行选择徒步）\r\n推荐二：\r\n森林公园+天门山三日游，2人以上成团经济型880元一人，舒适型980元一人\r\n路线：森林公园金鞭溪，袁家界，杨家界，天子山，十里画廊，天门山国家森林公园\r\n包含费用：\r\n一、张家界山顶客栈一晚，市区客栈一晚\r\n二、 包含森林公园景区248的大门票，张家界天门山258元门票，市区至景区往返交通费用 \r\n三、 以上线路含景区内用餐三正餐一早餐，用餐标准按人数相应安排（农家餐）\r\n四、含优秀自助游导游全程贴心服务费用；\r\n\r\n\r\n不包含费用：\r\n景区内的索道67元/人，杨家界索道75/元，百龙天梯72元/人，十里画廊小火车往返52元/人\r\n玻璃栈道5元/人，小索道25元/人，扶梯32元/人（可自行选择徒步）',1,'\r\n最新张家界游玩可以参考一下行程线路和价格如下','images/a1.jpg'),(2,'恩施鱼木寨一个保存完美的土家山寨，土匪打丈的一个山寨，寨内农家乐可接待游客吃住免费向导，本农家小院干净整洁，单人间双人间热水洗澡方便，纯天然农家菜让您有种回家的感觉，联系电话18912381237 微信号18912381237 欢迎你咨询',2,'嶂石岩光华农家院欢迎您！','images/a2.jpg'),(3,'哪位大大知道呀，小弟在此感激不尽',3,'湖北恩施鱼木寨','images/a4.jpg'),(4,'1.天门山(258元/人+3元保险、含双程索道).它有全世界最长的索道---天门山索道；有中国公路的奇观----盘山道；爬999个台阶刚好就可以到天门洞的洞底;.1997年5月，著名歌手李娜登天门山，似受冥冥中神奇力量的点化,顿悟而皈依佛门；1999年和2006年，世界特技飞行大师驾机穿越天门洞；法国蜘蛛人阿兰.罗伯特于2007年11月18号成功挑战天门山，在垂直度接近200米的绝壁上上演“空中芭蕾”.空中之路玻璃栈道。游玩时间半天到一天之间.\r\n\r\n2.土家风情园(120元/人).主要介绍的就是一些少数民族的建筑和风俗民情,里面已经有创了世界吉尼斯记录的九重天吊角楼,还有每晚都有土家风情表演,上刀山下火海,鬼谷神功等.游玩时间在2至3小时.\r\n\r\n3.老院子(74元/人）也值得一游,可以充分了解土家风俗民情,也是总理少年求学的地方.在湖南卫视热播的《血色湘西》室内镜头,就是在老院子拍摄的.游玩时间在1个半小时\r\n\r\n4.武陵源核心景区(这就是世界自然遗产5A级景区武陵源了.)\r\n四大景区(245元/人+3元保险).分别为：\r\n张家界国家森林公园(黄石寨游览线、金鞭溪游览线、鹞子寨游览线、袁家界游览线);\r\n杨家界风景区(乌龙寨游览线、一步登天--空中走廊);\r\n天子山风景区(大观台游览线、贺龙公园游览线);\r\n索溪峪风景区(十里画廊游览线).\r\n\r\n其中最常见的就是很多旅行社导游把袁家界划分成另外收取门票的地方了.其实都是一票通用,只是景区内索道、电梯以及十里画廊小火车要另外收费.门票有效期有两天限制.精华线路游玩时间为2至3天.\r\n\r\n\r\n5.黄龙洞(103元/人).是张家界武陵源风景名胜中著名的溶洞景点.游玩时间一个半小时.\r\n\r\n\r\n6.宝峰湖(96元/人).宝峰湖风景区集山水于一体，融民俗风情于一身，尤以奇秀的高峡平湖绝景、“飞流直下三千尺”的宝峰飞瀑闻名。游玩时间两小时.\r\n\r\n7.张家界大峡谷(121元/人)是新开发的一个景区.距世界自然遗产武陵源风景区15公里.张家界大峡谷境内多流泉飞瀑,地质地貌复杂.她远离都市喧唳,绝壁突兀,空气幽静,四季如春,曲径通幽,谷天相映,安静对晤.游玩时间加路上行程时间5小时\r\n\r\n张家界自由行你们可以有如下几个行程和价格：（以下包含门票+导游+住宿+吃+交通）\r\n\r\n第一条：张家界-金鞭溪-袁家界—杨家界—天子山(2天1晚500元）\r\n　\r\n第二条：张家界-金鞭溪-袁家界—杨家界—天子山（3天2晚580元）　　\r\n\r\n第三条：张家界-金鞭溪-袁家界—杨家界--天子山-凤凰（3天2晚880元）　　\r\n\r\n第四条：张家界-金鞭溪-天子山—袁家界--杨家界-天门山（3天2晚880元）　　\r\n\r\n第五条：张家界-金鞭溪-袁家界—杨家界-天子山-大峡谷-黄龙洞（3天2晚880元）\r\n\r\n第六条：张家界-金鞭溪-袁家界—杨家界-天子山-猛洞河漂流（3天2晚880元）\r\n\r\n第七条：张家界-金鞭溪-袁家界—杨家界-天子山-天门山-漂流（4天3晚1280元）\r\n\r\n第八条：张家界-袁家界-天子山—天门山（2日游750元）\r\n孩子6岁以上（1.3米以下免费）不占床位，半价。\r\n\r\n入住酒店的等级说明：（房间价格根据等级加费）\r\n\r\n普通房：入住农家乐家庭旅馆，无星级标准、干净卫生、安全、独立卫生间、彩电。定时热水提供；\r\n舒适房：入住实惠等或三星等之间的一般酒店，干净、卫生、安全、独立卫生间、热水提供；\r\n豪华房：入住国家相关部门评定的挂牌三星级酒店；\r\n\r\n增加景点：此路线可随游客的要求增加其他的景点费用；（如天门山、黄龙洞、宝峰湖、大峡谷、漂流等景点）\r\n\r\n张家界线路推荐\r\n推荐一：\r\n张家界森林公园两日游，2人以上成团经济型500元一人，舒适型600元一人\r\n路线：森林公园金鞭溪，袁家界，杨家界，天子山，十里画廊\r\n包含费用：\r\n一、森林公园248元大门票；\r\n二、景区山顶或者武陵源一晚住宿，行程中三个正餐，一个早餐（农家餐）；\r\n，两天导游费用，市区至景区往返交通费用\r\n不包含费用：\r\n\r\n景区内的索道67元/人，杨家界索道75/元，百龙天梯72元/人，十里画廊小火车往返52元/人（可自行选择徒步）\r\n推荐二：\r\n森林公园+天门山三日游，2人以上成团经济型880元一人，舒适型980元一人\r\n路线：森林公园金鞭溪，袁家界，杨家界，天子山，十里画廊，天门山国家森林公园\r\n包含费用：\r\n一、张家界山顶客栈一晚，市区客栈一晚\r\n二、 包含森林公园景区248的大门票，张家界天门山258元门票，市区至景区往返交通费用 \r\n三、 以上线路含景区内用餐三正餐一早餐，用餐标准按人数相应安排（农家餐）\r\n四、含优秀自助游导游全程贴心服务费用；\r\n\r\n\r\n不包含费用：\r\n景区内的索道67元/人，杨家界索道75/元，百龙天梯72元/人，十里画廊小火车往返52元/人\r\n玻璃栈道5元/人，小索道25元/人，扶梯32元/人（可自行选择徒步）',4,'河北旅游的旅游大类营养配餐在北苑?','images/aa7.jpg');
/*!40000 ALTER TABLE `travel_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travelaround`
--

DROP TABLE IF EXISTS `travelaround`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travelaround` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `city` varchar(32) DEFAULT NULL,
  `is_hot` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travelaround`
--

LOCK TABLES `travelaround` WRITE;
/*!40000 ALTER TABLE `travelaround` DISABLE KEYS */;
INSERT INTO `travelaround` VALUES (1,'images/week-3.jpg','香山','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机感受对方就看过的副驾驶上广泛的环境股份是对方公司非框架','北京',1),(2,'images/week-4.jpg','zzc','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打按时大大说第三大街上等哈见客户的撒娇客户打款单萨克结婚都干啥就给打了机','北京',1),(3,'images/week-5.jpg','fdsff','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打啥都噶建设大街个借口离开家了解了解了解了看看离开了卡机','北京',1),(4,'images/week-6.jpg','dsf','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机','北京',1),(5,'images/week-7.jpg','sfs','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机','山东',1),(6,'images/week-8.jpg','fsf','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机','甘肃',1),(7,'images/week-9.jpg','ssfgf','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机','陕西',1),(8,'images/week-10.jpg','fgfg','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机','上海',1),(9,'images/week-11.jpg','dsf','收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机收到一封干坏事干豆腐花功夫就搜嘎大家给大哥大姐打卡机','南京',0);
/*!40000 ALTER TABLE `travelaround` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travels`
--

DROP TABLE IF EXISTS `travels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travels` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) DEFAULT NULL COMMENT '关联用户id',
  `t_img_p` int(11) DEFAULT NULL COMMENT '关联图片 id',
  `t_title` varchar(255) DEFAULT NULL COMMENT '发表标题',
  `t_content` text COMMENT '详情表关联tid',
  `c_id` int(11) DEFAULT NULL COMMENT '评论关联id',
  `t_times` varchar(255) DEFAULT NULL COMMENT '编写时间',
  `t_img` varchar(100) DEFAULT NULL COMMENT '关联ID',
  `t_opin` varchar(50) DEFAULT NULL,
  `m_id` int(11) DEFAULT NULL COMMENT '用户信息关联ID',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travels`
--

LOCK TABLES `travels` WRITE;
/*!40000 ALTER TABLE `travels` DISABLE KEYS */;
INSERT INTO `travels` VALUES (1,NULL,NULL,'\r\n最新张家界游玩可以参考一下行程线路和价格如下','1.天门山(258元/人+3元保险、含双程索道).它有全世界最长的索道---天门山索道；有中国公路的奇观----盘山道；爬999个台阶刚好就可以到天门洞的洞底;.1997年5月，著名歌手李娜登天门山，似受冥冥中神奇力量的点化,顿悟而皈依佛门；1999年和2006年，世界特技飞行大师驾机穿越天门洞；法国蜘蛛人阿兰.罗伯特于2007年11月18号成功挑战天门山，在垂直度接近200米的绝壁上上演“空中芭蕾”.空中之路玻璃栈道。游玩时间半天到一天之间.\r\n\r\n2.土家风情园(120元/人).主要介绍的就是一些少数民',NULL,'2016-3-24','images/a1.jpg',NULL,1),(2,NULL,NULL,'嶂石岩光华农家院欢迎您！','恩施鱼木寨一个保存完美的土家山寨，土匪打丈的一个山寨，寨内农家乐可接待游客吃住免费向导，本农家小院干净整洁，单人间双人间热水洗澡方便，纯天然农家菜让您有种回家的感觉，联系电话18912381237 微信号18912381237 欢迎你咨询',NULL,'2016-3-24','images/a2.jpg',NULL,1),(3,NULL,NULL,'湖北恩施鱼木寨','哪位大大知道呀，小弟在此感激不尽',NULL,'2016-3-24','images/a4.jpg',NULL,1),(4,NULL,NULL,'河北旅游的旅游大类营养配餐在北苑?','1.天门山(258元/人+3元保险、含双程索道).它有全世界最长的索道---天门山索道；有中国公路的奇观----盘山道；爬999个台阶刚好就可以到天门洞的洞底;.1997年5月，著名歌手李娜登天门山，似受冥冥中神奇力量的点化,顿悟而皈依佛门；1999年和2006年，世界特技飞行大师驾机穿越天门洞；法国蜘蛛人阿兰.罗伯特于2007年11月18号成功挑战天门山，在垂直度接近200米的绝壁上上演“空中芭蕾”.空中之路玻璃栈道。游玩时间半天到一天之间.\r\n\r\n2.土家风情园(120元/人).主要介绍的就是一些少数民',NULL,'2016-3-24','images/aa7.jpg',NULL,1),(5,NULL,NULL,'asdf','asfd',NULL,NULL,'images/5376f8499ee0a.jpg',NULL,2),(7,NULL,NULL,'\r\n最新张家界游玩可以参考一下行程线路和价格如下','1.天门山(258元/人+3元保险、含双程索道).它有全世界最长的索道---天门山索道；有中国公路的奇观----盘山道；爬999个台阶刚好就可以到天门洞的洞底;.1997年5月，著名歌手李娜登天门山，似受冥冥中神奇力量的点化,顿悟而皈依佛门；1999年和2006年，世界特技飞行大师驾机穿越天门洞；法国蜘蛛人阿兰.罗伯特于2007年11月18号成功挑战天门山，在垂直度接近200米的绝壁上上演“空中芭蕾”.空中之路玻璃栈道。游玩时间半天到一天之间.\r\n\r\n2.土家风情园(120元/人).主要介绍的就是一些少数民',NULL,'2016-3-24','images/a1.jpg','',2),(8,NULL,NULL,'嶂石岩光华农家院欢迎您！','恩施鱼木寨一个保存完美的土家山寨，土匪打丈的一个山寨，寨内农家乐可接待游客吃住免费向导，本农家小院干净整洁，单人间双人间热水洗澡方便，纯天然农家菜让您有种回家的感觉，联系电话18912381237 微信号18912381237 欢迎你咨询',NULL,'2016-3-24','images/a2.jpg','',2),(9,NULL,NULL,'湖北恩施鱼木寨','哪位大大知道呀，小弟在此感激不尽',NULL,'2016-3-24','images/a4.jpg','',3),(10,NULL,NULL,'河北旅游的旅游大类营养配餐在北苑?','1.天门山(258元/人+3元保险、含双程索道).它有全世界最长的索道---天门山索道；有中国公路的奇观----盘山道；爬999个台阶刚好就可以到天门洞的洞底;.1997年5月，著名歌手李娜登天门山，似受冥冥中神奇力量的点化,顿悟而皈依佛门；1999年和2006年，世界特技飞行大师驾机穿越天门洞；法国蜘蛛人阿兰.罗伯特于2007年11月18号成功挑战天门山，在垂直度接近200米的绝壁上上演“空中芭蕾”.空中之路玻璃栈道。游玩时间半天到一天之间.\r\n\r\n2.土家风情园(120元/人).主要介绍的就是一些少数民',NULL,'2016-3-24','images/aa7.jpg','',3),(11,NULL,NULL,'asdf','asfd',NULL,'','images/5376f8499ee0a.jpg','',3),(12,NULL,NULL,'asdfsafd ','afsadfsafs',NULL,'','images/psb (1).jpg','',3);
/*!40000 ALTER TABLE `travels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) DEFAULT NULL,
  `u_pwd` char(32) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'zjh','123'),(3,'zcy','123'),(4,'wpj','123');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-29 16:31:20
