-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.6.26 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 paper 的数据库结构
CREATE DATABASE IF NOT EXISTS `paper` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `paper`;

-- 导出  表 paper.chapter 结构
CREATE TABLE IF NOT EXISTS `chapter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `courseid` int(10) unsigned NOT NULL COMMENT '本章所属的课程id号',
  `chaptername` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '章名称',
  `number` int(11) NOT NULL COMMENT '章号',
  `gmt_create` datetime DEFAULT NULL,
  `gmt_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_chapter_courseid` (`courseid`),
  CONSTRAINT `fk_chapter_courseid` FOREIGN KEY (`courseid`) REFERENCES `course` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.chapter 的数据：~10 rows (大约)
DELETE FROM `chapter`;
/*!40000 ALTER TABLE `chapter` DISABLE KEYS */;
INSERT INTO `chapter` (`id`, `courseid`, `chaptername`, `number`, `gmt_create`, `gmt_modified`) VALUES
	(1, 1, '关系数据库', 2, '2020-07-10 15:18:20', '2020-07-10 15:18:24'),
	(2, 7, '函数', 5, '2020-07-10 15:29:32', '2020-07-10 15:29:35'),
	(3, 9, 'SQL查询', 3, '2020-07-10 15:30:30', '2020-07-10 15:30:33'),
	(4, 5, 'Fred Smith and FedEx:', 3, '2020-07-10 15:37:13', '2020-07-10 15:37:15'),
	(5, 2, '命题逻辑', 1, '2020-07-10 15:38:28', '2020-07-10 15:38:29'),
	(6, 8, '图', 6, '2020-07-10 15:44:14', '2020-07-10 15:44:15'),
	(7, 3, 'JDBC', 9, '2020-07-10 15:44:34', '2020-07-10 15:44:36'),
	(8, 6, '函数与极限', 1, '2020-07-10 15:46:08', '2020-07-10 15:46:10'),
	(9, 4, '中央处理器', 5, '2020-07-10 15:46:44', '2020-07-10 15:46:46'),
	(10, 10, '触发器', 4, '2020-07-10 15:48:39', '2020-07-10 15:48:41');
/*!40000 ALTER TABLE `chapter` ENABLE KEYS */;

-- 导出  表 paper.course 结构
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coursename` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '课程名称',
  `manager` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '管理员，是一个教师的用户名',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间 ',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `coursename` (`coursename`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.course 的数据：~10 rows (大约)
DELETE FROM `course`;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`id`, `coursename`, `manager`, `gmt_create`, `gmt_modified`) VALUES
	(1, '数据库原理', '吴美娜', '2020-07-10 09:40:40', '2020-07-10 09:40:44'),
	(2, '离散数学', '廖胜斌', '2020-07-10 09:41:06', '2020-07-10 09:41:09'),
	(3, 'JavaWeb', '张建国', '2020-07-10 09:41:30', '2020-07-10 09:41:35'),
	(4, '计算机组成原理', '杨开朗', '2020-07-11 09:42:04', '2020-07-11 09:42:10'),
	(5, '大学英语', '李艺彤', '2020-07-09 10:34:55', '2020-07-09 11:23:06'),
	(6, '高等数学', '王华峰', '2020-07-10 10:48:43', '2020-07-10 10:48:47'),
	(7, 'C语言程序设计', '邢可', '2020-07-10 10:49:10', '2020-07-10 10:49:14'),
	(8, '数据结构', '赵海波', '2020-07-10 10:49:33', '2020-07-10 10:49:36'),
	(9, 'MySQL', '沈桂芳', '2020-07-10 10:50:07', '2020-07-10 10:50:16'),
	(10, '数字逻辑', '段荣浩', '2020-07-10 10:50:58', '2020-07-10 10:51:10');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;

-- 导出  表 paper.paper 结构
CREATE TABLE IF NOT EXISTS `paper` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `papername` varchar(200) COLLATE utf8_bin DEFAULT NULL COMMENT '试卷名称',
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '创建者——教师用户名',
  `courseid` int(10) unsigned NOT NULL COMMENT '课程id号',
  `gmt_create` datetime DEFAULT NULL,
  `gmt_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `papername` (`papername`),
  KEY `fk_paper_username` (`username`),
  KEY `fk_paper_courseid` (`courseid`),
  CONSTRAINT `fk_paper_courseid` FOREIGN KEY (`courseid`) REFERENCES `course` (`id`),
  CONSTRAINT `fk_paper_username` FOREIGN KEY (`username`) REFERENCES `teacher` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.paper 的数据：~20 rows (大约)
DELETE FROM `paper`;
/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
INSERT INTO `paper` (`id`, `papername`, `username`, `courseid`, `gmt_create`, `gmt_modified`) VALUES
	(1, '数据库原理期末A卷', '吴美娜', 1, '2020-07-10 11:41:42', '2020-07-10 11:44:06'),
	(2, '数据库原理期末B卷', '吴美娜', 1, '2020-07-10 11:44:41', '2020-07-10 11:44:44'),
	(3, '离散数学A卷', '廖胜斌', 2, '2020-07-10 11:46:29', '2020-07-10 11:46:32'),
	(4, '离散数学B卷', '廖胜斌', 2, '2020-07-10 11:46:49', '2020-07-10 11:46:51'),
	(5, 'JavaWeb期末A卷', '张建国', 3, '2020-07-10 11:47:23', '2020-07-10 11:47:26'),
	(6, 'JavaWeb期末B卷', '张建国', 3, '2020-07-10 11:47:41', '2020-07-10 11:47:43'),
	(7, '计算机组成原理A卷', '杨开朗', 4, '2020-07-10 11:48:10', '2020-07-10 11:48:12'),
	(8, '计算机组成原理B卷', '杨开朗', 4, '2020-07-10 11:48:28', '2020-07-10 11:48:29'),
	(9, '大学英语期末A卷', '李艺彤', 5, '2020-07-10 11:48:54', '2020-07-10 11:48:56'),
	(10, '大学英语期末B卷', '李艺彤', 5, '2020-07-10 11:49:16', '2020-07-10 11:49:18'),
	(11, '高等数学期末A卷', '王华峰', 6, '2020-07-10 11:49:45', '2020-07-10 11:49:47'),
	(12, '高等数学期末B卷', '王华峰', 6, '2020-07-10 11:50:08', '2020-07-10 11:50:10'),
	(13, 'C语言程序设计A卷', '邢可', 7, '2020-07-10 11:50:39', '2020-07-10 11:50:41'),
	(14, 'C语言程序设计B卷', '邢可', 7, '2020-07-10 11:50:56', '2020-07-10 11:50:58'),
	(15, '数据结构期末A卷', '赵海波', 8, '2020-07-10 11:51:31', '2020-07-10 11:51:33'),
	(16, '数据结构期末B卷', '赵海波', 8, '2020-07-10 11:51:51', '2020-07-10 11:51:53'),
	(17, 'MySQL期末A卷', '沈桂芳', 9, '2020-07-10 11:52:20', '2020-07-10 11:52:22'),
	(18, 'MySQL期末B卷', '沈桂芳', 9, '2020-07-10 11:52:42', '2020-07-10 11:52:43'),
	(19, '数字逻辑期末A卷', '段荣浩', 10, '2020-07-10 11:53:10', '2020-07-10 11:53:12'),
	(20, '数字逻辑期末B卷', '段荣浩', 10, '2020-07-10 11:53:26', '2020-07-10 11:53:27');
/*!40000 ALTER TABLE `paper` ENABLE KEYS */;

-- 导出  表 paper.paperconfig 结构
CREATE TABLE IF NOT EXISTS `paperconfig` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chaptercover` int(11) DEFAULT '80' COMMENT '章覆盖率',
  `sectioncover` int(11) DEFAULT '100' COMMENT '节覆盖率',
  `qestypecount` int(11) DEFAULT '5' COMMENT '题型数',
  `prevdup` int(11) DEFAULT '30' COMMENT '与上年度试卷重复率',
  `sibdup` int(11) DEFAULT '10' COMMENT 'AB卷重复率',
  `gmt_create` datetime DEFAULT NULL COMMENT '生成时间',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.paperconfig 的数据：~0 rows (大约)
DELETE FROM `paperconfig`;
/*!40000 ALTER TABLE `paperconfig` DISABLE KEYS */;
/*!40000 ALTER TABLE `paperconfig` ENABLE KEYS */;

-- 导出  表 paper.paperquestion 结构
CREATE TABLE IF NOT EXISTS `paperquestion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paperid` int(10) unsigned DEFAULT NULL COMMENT '该题目对应的试卷id',
  `questionid` int(10) unsigned DEFAULT NULL COMMENT '该题目在题库中的id号',
  `score` int(10) unsigned NOT NULL COMMENT '分值',
  `gmt_create` datetime DEFAULT NULL COMMENT '生成时间',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`),
  KEY `fk_question_paperid` (`paperid`),
  KEY `fk_paper_questionid` (`questionid`),
  CONSTRAINT `fk_paper_questionid` FOREIGN KEY (`questionid`) REFERENCES `question` (`id`),
  CONSTRAINT `fk_question_paperid` FOREIGN KEY (`paperid`) REFERENCES `paper` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.paperquestion 的数据：~20 rows (大约)
DELETE FROM `paperquestion`;
/*!40000 ALTER TABLE `paperquestion` DISABLE KEYS */;
INSERT INTO `paperquestion` (`id`, `paperid`, `questionid`, `score`, `gmt_create`, `gmt_modified`) VALUES
	(1, 1, 11, 4, '2020-07-10 17:03:14', '2020-07-10 17:03:18'),
	(2, 12, 8, 10, '2020-07-10 17:04:34', '2020-07-10 17:04:35'),
	(3, 3, 15, 2, '2020-07-10 17:04:54', '2020-07-10 17:04:55'),
	(4, 14, 12, 4, '2020-07-10 17:05:17', '2020-07-10 17:05:18'),
	(5, 5, 17, 2, '2020-07-10 17:05:37', '2020-07-10 17:05:38'),
	(6, 6, 7, 4, '2020-07-10 17:06:18', '2020-07-10 17:06:19'),
	(7, 17, 3, 5, '2020-07-10 17:06:41', '2020-07-10 17:06:42'),
	(8, 8, 9, 4, '2020-07-10 17:06:54', '2020-07-10 17:06:55'),
	(9, 19, 10, 4, '2020-07-10 17:07:25', '2020-07-10 17:07:27'),
	(10, 10, 4, 5, '2020-07-10 17:07:45', '2020-07-10 17:07:47'),
	(11, 11, 18, 10, '2020-07-10 17:08:35', '2020-07-10 17:08:36'),
	(12, 2, 1, 4, '2020-07-10 17:09:17', '2020-07-10 17:09:19'),
	(13, 13, 2, 4, '2020-07-10 17:09:40', '2020-07-10 17:09:41'),
	(14, 4, 5, 2, '2020-07-10 17:10:04', '2020-07-10 17:10:05'),
	(15, 15, 16, 4, '2020-07-10 17:10:50', '2020-07-10 17:10:51'),
	(16, 16, 6, 4, '2020-07-10 17:11:10', '2020-07-10 17:11:11'),
	(17, 7, 19, 4, '2020-07-10 17:11:36', '2020-07-10 17:11:37'),
	(18, 18, 13, 5, '2020-07-10 17:11:57', '2020-07-10 17:11:58'),
	(19, 9, 14, 5, '2020-07-10 17:12:24', '2020-07-10 17:12:25'),
	(20, 20, 20, 4, '2020-07-10 17:12:49', '2020-07-10 17:12:50');
/*!40000 ALTER TABLE `paperquestion` ENABLE KEYS */;

-- 导出  表 paper.question 结构
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sectionid` int(10) unsigned NOT NULL COMMENT '本题对应的节号',
  `question` varchar(500) COLLATE utf8_bin NOT NULL COMMENT '题干',
  `questiontypeid` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '题型',
  `answer` varchar(500) COLLATE utf8_bin DEFAULT NULL COMMENT '答案',
  `username` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '教师用户名',
  `isdeleted` tinyint(3) unsigned DEFAULT '0' COMMENT '是否已删除',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`),
  KEY `fk_question_sectionid` (`sectionid`),
  KEY `fk_question_username` (`username`),
  CONSTRAINT `fk_question_sectionid` FOREIGN KEY (`sectionid`) REFERENCES `section` (`id`),
  CONSTRAINT `fk_question_username` FOREIGN KEY (`username`) REFERENCES `teacher` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.question 的数据：~20 rows (大约)
DELETE FROM `question`;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` (`id`, `sectionid`, `question`, `questiontypeid`, `answer`, `username`, `isdeleted`, `gmt_create`, `gmt_modified`) VALUES
	(1, 1, '关系运算中花费时间可能最长的运算是', '填空题', '笛卡尔积', '吴美娜', 0, '2020-07-10 16:17:30', '2020-07-10 16:17:32'),
	(2, 2, '如果某一函数直接或间接地调用自身，这样的调用称为', '填空题', '递归调用', '邢可', 0, '2020-07-10 16:20:28', '2020-07-10 16:20:29'),
	(3, 3, '查询全部学生信息如何操作？', '简答题', 'select * from  Student', '沈桂芳', 0, '2020-07-10 16:23:59', '2020-07-10 16:24:00'),
	(4, 4, 'What is the typical scene at Memphis Airport every night? (Para.1)', '简答题', 'Then they are loaded onto other aircraft, and flown to their destinations – many within 24 hours of leaving their senders.', '李艺彤', 0, '2020-07-10 16:30:48', '2020-07-10 16:30:50'),
	(5, 5, '我正在说谎是一个命题', '判断题', '错，此句是悖论，不是命题', '廖胜斌', 0, '2020-07-10 16:31:03', '2020-07-10 16:34:55'),
	(6, 6, '图的两种遍历策略是什么？', '简答题', '深度优先搜索和广度优先搜索', '赵海波', 0, '2020-07-10 16:33:35', '2020-07-10 16:33:37'),
	(7, 7, 'Statement接口中executeQuery()方法的返回值是（ ）', '选择题', 'A: ResultSet', '张建国', 0, '2020-07-10 16:36:42', '2020-07-10 16:36:45'),
	(8, 8, '求lim ㏑x/x(x→∞)=?', '计算题', '原式=lim 1/x(x→∞)=0', '王华峰', 0, '2020-07-10 16:42:21', '2020-07-10 16:42:26'),
	(9, 9, 'CPU由哪三部分组成？', '简答题', '控制器、运算器、cache', '杨开朗', 0, '2020-07-10 16:44:10', '2020-07-10 16:44:11'),
	(10, 10, '集成触发器的种类？', '简答题', '多为集成JKFF、DFF', '段荣浩', 0, '2020-07-10 16:45:38', '2020-07-10 16:45:41'),
	(11, 1, '在关系代数运算中，五种基本运算为', '简答题', '并、差、选择、投影、乘积', '吴美娜', 0, '2020-07-10 16:49:19', '2020-07-10 16:49:22'),
	(12, 2, '所有的C函数都必须在被__________时才能执行其函数体，从而完成函数的功能。', '填空题', '主函数', '邢可', 0, '2020-07-10 16:50:49', '2020-07-10 16:50:50'),
	(13, 3, '查询全体学生的姓名以及出生年份', '简答题', 'select name，2020-sage as 出生年份 from Student;', '沈桂芳', 0, '2020-07-10 16:53:04', '2020-07-10 16:53:05'),
	(14, 4, 'Can you find the topic sentence in Paragraph 2? ', '简答题', 'Smith is recognized as an outstanding entrepreneur with an agreeable and winning personality.', '李艺彤', 0, '2020-07-10 16:54:06', '2020-07-10 16:54:07'),
	(15, 5, '北京是中国的首都是一个真命题', '判断题', '对', '廖胜斌', 0, '2020-07-10 16:55:05', '2020-07-10 16:55:06'),
	(16, 6, '图的存储结构两种存储结构', '简答题', '邻接矩阵和邻接表表示法', '赵海波', 0, '2020-07-10 16:56:11', '2020-07-10 16:56:14'),
	(17, 7, 'ResultSet接口中的常量TYPE_SCROLL_INSENITIVE，所代表的含义是【】。', '填空题', ' 结果集可滚动', '张建国', 0, '2020-07-10 16:56:59', '2020-07-10 16:57:00'),
	(18, 8, '求lim ㏑x-1/x-e(x→e)=?', '计算题', '原式=lim 1/x(x→e)=1/e', '王华峰', 0, '2020-07-10 16:58:51', '2020-07-10 16:58:52'),
	(19, 9, 'CPU的四大功能？', '简答题', '指令控制、操作控制、时间控制、数据加工', '杨开朗', 0, '2020-07-10 17:00:16', '2020-07-10 17:00:17'),
	(20, 10, '集成触发器的触发方式？', '简答题', '上升、下降、高电平、直接', '段荣浩', 0, '2020-07-10 17:02:30', '2020-07-10 17:02:31');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;

-- 导出  表 paper.questiontype 结构
CREATE TABLE IF NOT EXISTS `questiontype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `questiontypename` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '题型名称',
  `gmt_create` datetime DEFAULT NULL,
  `gmt_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `questiontypename` (`questiontypename`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.questiontype 的数据：~5 rows (大约)
DELETE FROM `questiontype`;
/*!40000 ALTER TABLE `questiontype` DISABLE KEYS */;
INSERT INTO `questiontype` (`id`, `questiontypename`, `gmt_create`, `gmt_modified`) VALUES
	(1, '选择题', '2020-07-12 10:10:03', '2020-07-12 10:30:10'),
	(2, '填空题', '2020-07-12 11:01:26', '2020-07-12 11:10:30'),
	(3, '判断题', '2020-07-12 11:11:01', '2020-07-12 11:22:09'),
	(4, '计算题', '2020-07-12 11:31:24', '2020-07-12 11:42:32'),
	(5, '简答题', '2020-07-12 11:45:47', '2020-07-12 11:59:54');
/*!40000 ALTER TABLE `questiontype` ENABLE KEYS */;

-- 导出  表 paper.section 结构
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `chapterid` int(10) unsigned NOT NULL COMMENT '本节所属的章号',
  `sectionname` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '节名称',
  `number` int(10) unsigned NOT NULL COMMENT '节序号',
  `gmt_create` datetime DEFAULT NULL,
  `gmt_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_section_chapterid` (`chapterid`),
  CONSTRAINT `fk_section_chapterid` FOREIGN KEY (`chapterid`) REFERENCES `chapter` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.section 的数据：~10 rows (大约)
DELETE FROM `section`;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` (`id`, `chapterid`, `sectionname`, `number`, `gmt_create`, `gmt_modified`) VALUES
	(1, 1, '关系代数', 4, '2020-07-10 15:49:58', '2020-07-10 15:49:59'),
	(2, 2, '函数的定义及调用', 2, '2020-07-10 15:50:42', '2020-07-10 15:50:44'),
	(3, 3, '简单查询', 1, '2020-07-10 15:51:00', '2020-07-10 15:51:01'),
	(4, 4, 'Text Study', 2, '2020-07-10 15:52:18', '2020-07-10 15:52:19'),
	(5, 5, '命题的基本概念', 1, '2020-07-10 15:53:37', '2020-07-10 15:53:39'),
	(6, 6, '图的两种遍历策略', 3, '2020-07-10 15:54:22', '2020-07-10 15:54:23'),
	(7, 7, 'JDBC的常用API', 2, '2020-07-10 15:56:22', '2020-07-10 15:56:24'),
	(8, 8, '数列极限的运算规则', 10, '2020-07-10 16:13:07', '2020-07-10 16:13:10'),
	(9, 9, 'CPU的基本组成', 2, '2020-07-10 16:13:37', '2020-07-10 16:13:38'),
	(10, 10, '集成触发器', 7, '2020-07-10 16:14:22', '2020-07-10 16:14:23');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;

-- 导出  表 paper.teacher 结构
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '姓名',
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '用户名',
  `password` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT '邮箱',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.teacher 的数据：~10 rows (大约)
DELETE FROM `teacher`;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` (`id`, `name`, `username`, `password`, `email`, `gmt_create`, `gmt_modified`) VALUES
	(1, '张建国', '张建国', '123', 'zjg0001@163.com', '2020-06-10 09:30:54', '2020-07-10 09:31:01'),
	(2, '吴美娜', '吴美娜', '456', 'wmn002@163.com', '2020-05-24 10:27:48', '2020-07-11 19:32:07'),
	(3, '廖胜斌', '廖胜斌', '234', 'lsb003@163.com', '2020-03-12 06:28:41', '2020-07-15 07:33:54'),
	(4, '李艺彤', '李艺彤', '689', 'lyt004@163.com', '2020-04-26 12:35:01', '2020-06-30 13:46:14'),
	(5, '杨开朗', '杨开朗', '925', 'ykl005@163.com', '2020-02-11 14:24:20', '2020-06-21 09:36:37'),
	(6, '王华峰', '王华峰', '257', 'whf006@163.com', '2020-01-10 10:36:18', '2020-07-10 10:36:24'),
	(7, '邢可', '邢可', '421', 'xk007@163.com', '2020-03-10 10:37:23', '2020-07-13 10:37:28'),
	(8, '赵海波', '赵海波', '763', 'zhb008@163.com', '2020-05-14 10:38:10', '2020-06-24 09:38:16'),
	(9, '沈桂芳', '沈桂芳', '861', 'sgf009@163.com', '2020-04-18 09:39:23', '2020-05-28 15:23:34'),
	(10, ' 段荣浩', '段荣浩', '379', 'drh100@169.com', '2020-06-10 10:46:46', '2020-07-05 12:34:53');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;

-- 导出  表 paper.teacher_course 结构
CREATE TABLE IF NOT EXISTS `teacher_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `couseid` int(11) NOT NULL COMMENT '课程id号',
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '教师用户名',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.teacher_course 的数据：~10 rows (大约)
DELETE FROM `teacher_course`;
/*!40000 ALTER TABLE `teacher_course` DISABLE KEYS */;
INSERT INTO `teacher_course` (`id`, `couseid`, `username`, `gmt_create`, `gmt_modified`) VALUES
	(1, 3, '张建国', '2020-07-10 11:28:53', '2020-07-10 11:28:54'),
	(2, 1, '吴美娜', '2020-07-10 11:29:07', '2020-07-10 11:29:09'),
	(3, 2, '廖胜斌', '2020-07-10 11:29:25', '2020-07-10 11:29:27'),
	(4, 5, '李艺彤', '2020-07-10 11:29:38', '2020-07-10 11:29:40'),
	(5, 4, '杨开朗', '2020-07-10 11:29:53', '2020-07-10 11:29:55'),
	(6, 6, '王华峰', '2020-07-10 11:30:08', '2020-07-10 11:30:10'),
	(7, 7, '邢可', '2020-07-10 11:30:20', '2020-07-10 11:30:21'),
	(8, 8, '赵海波', '2020-07-10 11:30:34', '2020-07-10 11:30:36'),
	(9, 9, '沈桂芳', '2020-07-10 11:30:48', '2020-07-10 11:30:50'),
	(10, 10, '段荣浩', '2020-07-10 11:31:28', '2020-07-10 11:31:32');
/*!40000 ALTER TABLE `teacher_course` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
