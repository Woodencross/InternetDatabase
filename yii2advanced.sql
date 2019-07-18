-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-07-18 15:21:16
-- 服务器版本： 10.1.40-MariaDB
-- PHP 版本： 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2advanced`
--

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1562922518),
('m130524_201442_init', 1562922529),
('m190124_110200_add_verification_token_column_to_user_table', 1562922530);

-- --------------------------------------------------------

--
-- 表的结构 `nku100_activity`
--

CREATE TABLE `nku100_activity` (
  `NKU100_activity_id` int(10) UNSIGNED NOT NULL COMMENT '活动编号',
  `NKU100_activity_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动名称',
  `NKU100_activity_time` date NOT NULL COMMENT '活动时间',
  `NKU100_activity_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动类型',
  `NKU100_activity_place` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动地点',
  `NKU100_activity_department` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT '主办单位'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='校庆活动';

--
-- 转存表中的数据 `nku100_activity`
--

INSERT INTO `nku100_activity` (`NKU100_activity_id`, `NKU100_activity_name`, `NKU100_activity_time`, `NKU100_activity_type`, `NKU100_activity_place`, `NKU100_activity_department`) VALUES
(1, '高级并发处理技术国际会议', '2019-08-15', '学术与交流活动', '天津东凯悦酒店', '中国计算机学会'),
(2, '第十届全国环境大会', '2019-08-15', '学术与交流活动', '八里台校区体育馆、二主楼', '中国化学会环境化学专业委员会、中国环境科学学会环境'),
(3, '新时代中国宗教学的发展与前瞻', '2019-08-23', '学术与交流活动', '津南校区', '中国宗教学会'),
(4, '第二届新型污染物与环境纳米技术大会', '2019-08-15', '学术与交流活动', '八里台校区', '南开大学'),
(5, 'Hippo信号通路第九届全国大会', '2019-08-02', '学术与交流活动', '八里台校区生物站报告厅', '南开大学、天津医科大学'),
(6, '明清史国际学术研讨会', '2019-09-09', '学术与交流活动', '津南校区综合和业务西楼报告厅', '历史学院'),
(7, '叶嘉莹教授回国执教四十周年暨中华诗教国际学术研讨会', '2019-09-10', '学术与交流活动', '八里台校区省身楼或小礼堂', '南开大学'),
(8, '全国高校社会主义经济理论研讨会', '2019-09-09', '学术与交流活动', '八里台校区省身楼', '经济学院'),
(9, '全国大学生征兵工作总结交流现场会', '2019-09-24', '文化与纪念活动', '省身楼报告厅', '中央军委国防动员部、南开大学'),
(10, '陈茹玉院士诞辰100周年级联大会', '2019-09-24', '文化与纪念活动', '八里台校区省身楼一楼多功能厅', '化学学院'),
(11, '百年南开校园历史变迁专题展览', '2019-09-10', '文化与纪念活动', '八里台校区二主楼甲座', '档案馆'),
(12, '“最忆南开”迎校庆摄影书画作品征集展览', '2019-09-10', '文化与纪念活动', '学生活动中心', '工会、学工部、校友办'),
(13, '纪念南开大学建校一百周年文艺晚会', '2019-10-17', '文化与纪念活动', '八里台校区体育馆', '艺术教育指导中心'),
(14, '百年校庆捐赠大会', '0000-00-00', '校友与发展活动', '八里台校区主楼小礼堂', '南开大学教育基金会'),
(15, '1985级本科、1986级研究生校友毕业三十周年返校活动', '2019-10-20', '校友与发展活动', '八里台校区田家炳音乐厅', '南开大学、南开校友总会');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_alumniassociation`
--

CREATE TABLE `nku100_alumniassociation` (
  `id` varchar(20) NOT NULL COMMENT '校友会编号',
  `location` varchar(20) NOT NULL COMMENT '校友会地区',
  `contactor` varchar(20) NOT NULL COMMENT '校友会联系人',
  `contact` varchar(30) NOT NULL COMMENT '校友会联系方式'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nku100_alumniassociation`
--

INSERT INTO `nku100_alumniassociation` (`id`, `location`, `contactor`, `contact`) VALUES
('001', '新加坡', '刘笑炎', 'liuxiaoyan@yahoo.com'),
('002', '西班牙', '聂旻', 'nieminspain@gmail.com'),
('003', '广西', '苏放', 'sunfang-98@163.com'),
('004', '俄勒冈', '齐利杰', 'lijieq@yahoo.com'),
('005', '达拉斯', '杨禄', 'yanglu300071@hotmail.com'),
('006', '土耳其', '张宁', 'zhangning@nankai.edu.cn'),
('007', '迪拜', '张立军', 'bbjun2000@163.com'),
('008', '德国', '张坊', 'zhangf123@hotmail.com'),
('009', '意大利', '张晋', '380639594@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_famousschoolmate`
--

CREATE TABLE `nku100_famousschoolmate` (
  `id` varchar(20) NOT NULL COMMENT '校友编号',
  `name` varchar(20) NOT NULL COMMENT '校友姓名',
  `sex` varchar(20) NOT NULL COMMENT '校友性别',
  `hometown` varchar(20) NOT NULL COMMENT '校友家乡'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nku100_famousschoolmate`
--

INSERT INTO `nku100_famousschoolmate` (`id`, `name`, `sex`, `hometown`) VALUES
('001', '周恩来', '男', '江苏淮安'),
('002', '陈省身', '男', '浙江嘉兴'),
('003', '曹禺', '男', '天津'),
('004', '杨振宁', '男', '安徽合肥'),
('005', '吴大猷', '男', '广东高要'),
('006', '李政道', '男', '江苏苏州'),
('007', '黄仁宇', '男', '湖南长沙');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_member`
--

CREATE TABLE `nku100_member` (
  `NKU100_member_id` int(8) UNSIGNED NOT NULL COMMENT '成员学号',
  `NKU100_member_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '成员名字',
  `NKU100_member_sex` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT '成员性别',
  `NKU100_member_college` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '成员学院',
  `NKU100_member_hometown` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT '成员家乡',
  `NKU100_member_sign` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '个性签名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='成员信息';

--
-- 转存表中的数据 `nku100_member`
--

INSERT INTO `nku100_member` (`NKU100_member_id`, `NKU100_member_name`, `NKU100_member_sex`, `NKU100_member_college`, `NKU100_member_hometown`, `NKU100_member_sign`) VALUES
(1711368, '齐冲', '男', '计算机学院', '中国', NULL),
(1711416, '周坤', '男', '计算机学院', '湖南', NULL),
(1711418, '朱勋建', '男', '计算机学院', '云南', NULL),
(1711429, '黄艺璇', '女', '网络空间安全学院', '中国', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `nku100_message`
--

CREATE TABLE `nku100_message` (
  `NKU100_message_id` int(10) UNSIGNED NOT NULL COMMENT '留言编号',
  `NKU100_message_contend` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '留言内容',
  `NKU100_message_data` date NOT NULL COMMENT '留言日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='校庆留言';

--
-- 转存表中的数据 `nku100_message`
--

INSERT INTO `nku100_message` (`NKU100_message_id`, `NKU100_message_contend`, `NKU100_message_data`) VALUES
(1, '百年南开,愈益昂扬', '2019-07-18'),
(2, '白河之滨，汇聚四海英才。悠悠学府，天下桃李芬芳。南以开拓，公能传承百年。同祝华诞，再迎日新月异', '2019-07-09'),
(3, '母校与五四运动同龄，这是青春和激情的印记。回顾过去，心潮澎拜，展望未来，激情满怀。不论沧海桑田，我们总以南开为荣。百年的时光，南开正年青。祝愿百年南开在新时代书写新的辉煌篇章。', '2019-07-16'),
(9, '祝母校南开早日成为世界一流大学，完成张伯苓老校长的夙愿！', '2019-07-13'),
(10, '二十载扎根西部，于三尺讲台书青春华章；  一百年壮怀难折，为泱泱中华筑公能学府。  中兴业，当吾辈！巍巍南开，月异日新！', '2019-07-02'),
(11, '南开百年华诞将至，历百载愈淬公能初心，新时代更彰日新月异，祝愿母校永远年轻！', '2019-07-15');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_news`
--

CREATE TABLE `nku100_news` (
  `NKU100_news_id` int(8) NOT NULL COMMENT '校庆新闻ID',
  `NKU100_news_name` varchar(20) NOT NULL COMMENT '校庆新闻名称',
  `NKU100_news_url` varchar(100) NOT NULL COMMENT '校庆新闻链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nku100_news`
--

INSERT INTO `nku100_news` (`NKU100_news_id`, `NKU100_news_name`, `NKU100_news_url`) VALUES
(1, '习近平总书记视察南开大学', 'http://100.nankai.edu.cn/2019/0117/c10880a118518/page.htm'),
(2, '马志明院士做客“百年南开大讲坛”', 'http://100.nankai.edu.cn/2019/0602/c10880a170076/page.htm'),
(3, '江小涓教授做客“百年南开大讲坛”', 'http://100.nankai.edu.cn/2019/0602/c10880a170075/page.htm'),
(4, '林惠民院士做客“百年南开大讲坛”', 'http://100.nankai.edu.cn/2019/0602/c10880a170074/page.htm'),
(5, '南开大学木斋馆思源堂秀山堂复建完工', 'http://100.nankai.edu.cn/2019/0602/c10880a170073/page.htm'),
(6, '南开大学“文中馆”冠名揭幕', 'http://100.nankai.edu.cn/2019/0602/c10880a170064/page.htm'),
(7, '全球南开人齐聚绍兴 助力母校百年校庆', 'http://100.nankai.edu.cn/2019/0601/c10880a170054/page.htm'),
(8, '曹雪涛会见南开南通校友会代表', 'http://100.nankai.edu.cn/2019/0601/c10880a170043/page.htm'),
(9, '学校设立多处校庆景观 营造校庆氛围', 'http://100.nankai.edu.cn/2019/0601/c10880a170041/page.htm'),
(10, '首届南开全球校友马拉松赛举行', 'http://100.nankai.edu.cn/2019/0601/c10880a170030/page.htm');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_notice`
--

CREATE TABLE `nku100_notice` (
  `NKU100_notice_id` int(8) NOT NULL COMMENT '校庆公告ID',
  `NKU100_notice_name` varchar(20) NOT NULL COMMENT '校庆公告名称',
  `NKU100_notice_url` varchar(100) NOT NULL COMMENT '校庆公告链接'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nku100_notice`
--

INSERT INTO `nku100_notice` (`NKU100_notice_id`, `NKU100_notice_name`, `NKU100_notice_url`) VALUES
(1, '解读《南开大学百年校庆活动方案》', 'http://100.nankai.edu.cn/2019/0301/c10879a120042/page.htm'),
(2, '声明（一）', 'http://100.nankai.edu.cn/2018/1029/c10879a112141/page.htm'),
(3, '声明（二）', 'http://100.nankai.edu.cn/2018/1029/c10879a112142/page.htm'),
(4, '南开大学百年校庆公告（第一号）', 'http://100.nankai.edu.cn/2018/1009/c10879a110373/page.htm'),
(5, '南开大学百年校庆公告（第二号）', 'http://100.nankai.edu.cn/2018/1009/c10879a110372/page.htm');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_viewspots`
--

CREATE TABLE `nku100_viewspots` (
  `NKU100_viewspots_id` int(8) NOT NULL COMMENT '景点ID',
  `NKU100_viewspots_name` varchar(20) NOT NULL COMMENT '景点名称',
  `NKU100_viewspots_content` varchar(255) NOT NULL COMMENT '景点简介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `nku100_viewspots`
--

INSERT INTO `nku100_viewspots` (`NKU100_viewspots_id`, `NKU100_viewspots_name`, `NKU100_viewspots_content`) VALUES
(1, '周总理雕像', '周总理雕像介绍：正对南开大学校门，有一尊周恩来总理的大理石雕像。总理笑容可掬、风度翩翩。雕像背后的基座上写着：我是爱南开的。'),
(2, '主楼', '主楼介绍：主楼气势磅礴，巍然耸立，楼前花木扶疏，绿草如茵，景色宜人。\r\n'),
(3, '新开湖', '新开湖介绍：新开湖，是南开大学校内的一片人工湖。湖水清澈宁碧，水面波澜不兴，湖光倒影，美不胜收。新开湖的湖水滋养了代代南大人。'),
(4, '行政楼', '行政楼介绍：行政楼坐落于新开湖南侧，楼前花木繁茂，绿树成荫，杨柳依依，景色秀美。融合西方的建筑风格，大气而不失现代。'),
(5, '东方艺术大楼', '东方艺术大楼介绍：东方艺术大楼是一幢造型奇特的灰色建筑，外墙开有小窗，仿西方古堡式风格，颇有艺术美感。\r\n'),
(6, '思源堂', '思源堂介绍：思源堂，也就是现在的南开大学医学院。入口处有几根大理石柱撑在檐下，檐顶上方写有“思源堂”三个朱红大字。融合了西方古典主义的建筑元素，式样优美。\r\n'),
(7, '天南大联合学院', '天南大联合学院介绍：天南大联合学院，是由天津大学和南开大学共同建造的，楼内有一处通道，联通两座院校。'),
(8, '校钟', '校钟介绍：南开大学校园内，有一红色铁架，架上吊有巨型铜钟。想必是西南联大时期的报时方式。'),
(9, '南开荷池', '南开荷池介绍：新开湖中有一片荷池，每逢盛夏七八月间，可以观赏到“接天莲叶无穷碧，映日荷花别样红”的美好景致。'),
(10, '日晷', '日晷介绍：南开大学校园内，有一座圆形大理石日晷。晷面饰以祥云图案和古老的计时标志。中心有晷针。底面的碑座上，镌刻有“日新月异”的字样。');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_volunteer`
--

CREATE TABLE `nku100_volunteer` (
  `NKU100_volunteer_id` int(11) NOT NULL COMMENT 'id号',
  `NKU100_volunteer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '志愿者姓名',
  `NKU100_volunteer_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '志愿者学号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `nku100_volunteer`
--

INSERT INTO `nku100_volunteer` (`NKU100_volunteer_id`, `NKU100_volunteer_name`, `NKU100_volunteer_number`) VALUES
(1, '张三丰', '1711445'),
(2, '李四茂', '1711446'),
(3, '王五德', '1711447'),
(4, '阿三', '1711448'),
(5, '佳迪', '1711449'),
(6, '小朱', '1711450'),
(7, '白廉', '1711416'),
(8, '辛容', '1711490'),
(9, '周岁', '1711491');

-- --------------------------------------------------------

--
-- 表的结构 `nku100_volunteerwork`
--

CREATE TABLE `nku100_volunteerwork` (
  `id` int(11) NOT NULL COMMENT '自增id',
  `NKU100_volunteerwork_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '志愿者姓名',
  `NKU100_volunteerwork_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '志愿者学号',
  `NKU100_volunteerwork_task` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '工作任务',
  `NKU100_volunteerwork_department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '任务详细信息'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `nku100_volunteerwork`
--

INSERT INTO `nku100_volunteerwork` (`id`, `NKU100_volunteerwork_name`, `NKU100_volunteerwork_number`, `NKU100_volunteerwork_task`, `NKU100_volunteerwork_department`) VALUES
(1, '张三丰', '1711445', '礼仪志愿者', '接待嘉宾，南开形象团队'),
(2, '李四茂', '1711446', '礼仪志愿者', '接待嘉宾，南开形象团队'),
(3, '王五德', '1711447', '礼仪志愿者', '接待嘉宾，南开形象团队'),
(4, '阿三', '1711448', '嘉宾接待志愿者', '接待外来嘉宾，向嘉宾介绍南开'),
(5, '佳迪', '1711449', '嘉宾接待志愿者', '接待外来嘉宾，向嘉宾介绍南开'),
(6, '小朱', '1711450', '嘉宾接待志愿者', '接待外来嘉宾，向嘉宾介绍南开'),
(7, '白廉', '1711416', '校庆工作志愿者', '在校的各个岗位，向来宾介绍南开'),
(8, '辛容', '1711490', '校庆工作志愿者', '在校的各个岗位，向来宾介绍南开'),
(9, '周岁', '1711491', '校庆工作志愿者', '在校的各个岗位，向来宾介绍南开');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'test001', 'ltmV1F1mWsiYfABvgDhwDwH11maPmQWy', '$2y$13$o6C1OD1mH6/xODna0EGvveZoLuosw.INZPNMti5ulCNdz9u293TgO', NULL, 'test001@test.com', 10, 1562922597, 1562922597, 'i_JMmckRWBFYbFWjf4n9nIRBoapPEbOX_1562922597');

--
-- 转储表的索引
--

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `nku100_activity`
--
ALTER TABLE `nku100_activity`
  ADD PRIMARY KEY (`NKU100_activity_id`);

--
-- 表的索引 `nku100_alumniassociation`
--
ALTER TABLE `nku100_alumniassociation`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `nku100_famousschoolmate`
--
ALTER TABLE `nku100_famousschoolmate`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `nku100_member`
--
ALTER TABLE `nku100_member`
  ADD PRIMARY KEY (`NKU100_member_id`);

--
-- 表的索引 `nku100_message`
--
ALTER TABLE `nku100_message`
  ADD PRIMARY KEY (`NKU100_message_id`);

--
-- 表的索引 `nku100_news`
--
ALTER TABLE `nku100_news`
  ADD PRIMARY KEY (`NKU100_news_id`);

--
-- 表的索引 `nku100_notice`
--
ALTER TABLE `nku100_notice`
  ADD PRIMARY KEY (`NKU100_notice_id`);

--
-- 表的索引 `nku100_viewspots`
--
ALTER TABLE `nku100_viewspots`
  ADD PRIMARY KEY (`NKU100_viewspots_id`);

--
-- 表的索引 `nku100_volunteer`
--
ALTER TABLE `nku100_volunteer`
  ADD PRIMARY KEY (`NKU100_volunteer_id`);

--
-- 表的索引 `nku100_volunteerwork`
--
ALTER TABLE `nku100_volunteerwork`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NKU100_volunteerwork_number` (`NKU100_volunteerwork_number`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `nku100_activity`
--
ALTER TABLE `nku100_activity`
  MODIFY `NKU100_activity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '活动编号', AUTO_INCREMENT=16;

--
-- 使用表AUTO_INCREMENT `nku100_message`
--
ALTER TABLE `nku100_message`
  MODIFY `NKU100_message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '留言编号', AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `nku100_news`
--
ALTER TABLE `nku100_news`
  MODIFY `NKU100_news_id` int(8) NOT NULL AUTO_INCREMENT COMMENT '校庆新闻ID', AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `nku100_notice`
--
ALTER TABLE `nku100_notice`
  MODIFY `NKU100_notice_id` int(8) NOT NULL AUTO_INCREMENT COMMENT '校庆公告ID', AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `nku100_viewspots`
--
ALTER TABLE `nku100_viewspots`
  MODIFY `NKU100_viewspots_id` int(8) NOT NULL AUTO_INCREMENT COMMENT '景点ID', AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `nku100_volunteer`
--
ALTER TABLE `nku100_volunteer`
  MODIFY `NKU100_volunteer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id号', AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `nku100_volunteerwork`
--
ALTER TABLE `nku100_volunteerwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id', AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
