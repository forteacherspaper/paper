-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.7.14 - MySQL Community Server (GPL)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.chapter 的数据：~22 rows (大约)
/*!40000 ALTER TABLE `chapter` DISABLE KEYS */;
INSERT INTO `chapter` (`id`, `courseid`, `chaptername`, `number`, `gmt_create`, `gmt_modified`) VALUES
	(11, 8, '绪论', 1, NULL, NULL),
	(12, 8, '线性表', 2, NULL, NULL),
	(13, 12, '选择控制结构', 3, NULL, NULL),
	(14, 12, '循环控制结构', 4, NULL, NULL),
	(15, 12, '函数', 5, NULL, NULL),
	(16, 12, '数组', 6, NULL, NULL),
	(17, 12, '字符串', 7, NULL, NULL),
	(18, 12, '指针', 8, NULL, NULL),
	(19, 12, '结构体和共同体', 9, NULL, NULL),
	(20, 12, '编译预处理', 10, NULL, NULL),
	(21, 12, '文件', 11, NULL, NULL),
	(22, 13, 'PHP开篇', 1, NULL, NULL),
	(23, 13, 'PHP语法基础', 2, NULL, NULL),
	(24, 13, 'PHP操作数据库', 3, NULL, NULL),
	(25, 13, 'Web表单与绘画技术', 4, NULL, NULL),
	(26, 13, '文件与图像技术', 5, NULL, NULL),
	(27, 13, '面向对象编程', 6, NULL, NULL),
	(28, 13, 'PDO数据库抽象层', 7, NULL, NULL),
	(29, 13, 'ThinkPHP框架', 8, NULL, NULL),
	(30, 13, '项目实战——电子商务网站', 9, NULL, NULL),
	(31, 12, 'C语言概述', 1, NULL, NULL),
	(32, 12, '简单C程序设计', 2, NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.course 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`id`, `coursename`, `manager`, `gmt_create`, `gmt_modified`) VALUES
	(8, '数据结构', '吴美娜', NULL, NULL),
	(12, 'C语言程序设计', '吴美娜', NULL, NULL),
	(13, 'PHP动态网站的开发', '吴美娜', NULL, NULL);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;

-- 导出  表 paper.paper 结构
CREATE TABLE IF NOT EXISTS `paper` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `papername` varchar(200) COLLATE utf8_bin DEFAULT NULL COMMENT '试卷名称',
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '创建者——教师用户名',
  `courseid` int(10) unsigned NOT NULL COMMENT '课程id号',
  `gmt_create` datetime DEFAULT NULL,
  `gmt_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.paper 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `paper` DISABLE KEYS */;
INSERT INTO `paper` (`id`, `papername`, `username`, `courseid`, `gmt_create`, `gmt_modified`) VALUES
	(1, 'aaaa', 'admin', 8, NULL, NULL),
	(2, 'a01', 'admin', 8, NULL, NULL),
	(3, 'C试卷1', 'admin', 12, NULL, NULL),
	(4, '测试20201127', '101', 12, NULL, NULL);
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.paperquestion 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `paperquestion` DISABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.question 的数据：~168 rows (大约)
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` (`id`, `sectionid`, `question`, `questiontypeid`, `answer`, `username`, `isdeleted`, `gmt_create`, `gmt_modified`) VALUES
	(1, 1, '关系运算中花费时间可能最长的运算是', '填空题', '笛卡尔积', '吴美娜', 0, '2020-07-10 16:17:30', '2020-07-10 16:17:32'),
	(2, 2, '如果某一函数直接或间接地调用自身，这样的调用称为', '填空题', '递归调用', '邢可', 0, '2020-07-10 16:20:28', '2020-07-10 16:20:29'),
	(3, 3, '查询全部学生信息如何操作？', '简答题', 'select * from  Student', '沈桂芳', 0, '2020-07-10 16:23:59', '2020-07-10 16:24:00'),
	(4, 4, 'What is the typical scene at Memphis Airport every night? (Para.1)', '简答题', 'Then they are loaded onto other aircraft, and flown to their destinations – many within 24 hours of leaving their senders.', '李艺彤', 0, '2020-07-10 16:30:48', '2020-07-10 16:30:50'),
	(5, 5, '我正在说谎是一个命题', '判断题', '错，此句是悖论，不是命题', '廖胜斌', 0, '2020-07-10 16:31:03', '2020-07-10 16:34:55'),
	(6, 6, '图的两种遍历策略是什么？', '简答题', '深度优先搜索和广度优先搜索', '赵海波', 0, '2020-07-10 16:33:35', '2020-07-10 16:33:37'),
	(7, 7, 'Statement接口中executeQuery()方法的返回值是（ ）', '单选题', 'A: ResultSet', '张建国', 0, '2020-07-10 16:36:42', '2020-07-10 16:36:45'),
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
	(20, 10, '集成触发器的触发方式？', '简答题', '上升、下降、高电平、直接', '段荣浩', 0, '2020-07-10 17:02:30', '2020-07-10 17:02:31'),
	(23, 108, '下列关于C语言的说法错误的是(  )。\r\nA、 C程序的工作过程是编辑、编译、链接、执行。 \r\nB、 C语言不区分大小写。 \r\nC、 C程序的三种基本结构是顺序、选择、循环。 \r\nD、 C程序从main函数开始执行。', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(24, 105, '2、 C语言源程序名的后缀是(  ) 。 \r\nA、 .exe\r\nB、 .c\r\nC、 .obj\r\nD、 .cpp', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(25, 105, '一个C语言程序总是从______ 开始执行。', '填空题', '主函数;main函数;', 'Wt', 0, NULL, NULL),
	(26, 104, 'C语言是一种结构化程序设计语言,而结构化程序设计的基本结构有3种,分别是             ________、_______和________。', '填空题', '顺序；分支;选择；循环；', 'Wt', 0, NULL, NULL),
	(27, 105, 'C语言源程序经过编译后,生成扩展名为__________的目标文件;经过链接后,生成扩展名为__________的可执行文件。', '填空题', '.obj ；.exe；', 'Wt', 0, NULL, NULL),
	(28, 106, '一个完整的C语言程序,是由一个__________和若干(或0个)其它函数结合而成的。', '填空题', '主函数；', 'Wt', 0, NULL, NULL),
	(29, 104, 'C语言是一种具有某些低级语言特征的高级语言。(   )', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(30, 104, 'C语言程序的实现与其它高级语言一样也需要经过编辑、编译、链接和执行的步骤。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(31, 106, '预处理指令的前面必须加一个“#”号。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(32, 105, '下列四组选项中,正确的C语言标识符是(  )。\r\nA、 %x \r\nB、 a+b\r\nC、 a123\r\nD、 123', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(33, 17, 'C语言中的简单数据类型包括(  )。\r\nA、 整型、实型、逻辑型 \r\nB、 整型、实型、逻辑型、字符型 \r\nC、 整型、字符型、逻辑型 \r\nD、 整型、实型、字符型', '单选题', 'D', 'Wt', 0, NULL, NULL),
	(34, 17, '在C语言程序中,表达式5%2的结果是(  )。\r\nA、 2.5\r\nB、 2\r\nC、 1\r\nD、 3', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(35, 21, '下列运算符中,优先级最高的是(  )。\r\nA、 [ ]\r\nB、 ++\r\nC、 %\r\nD、 &&', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(36, 20, '已知i,j,k为int型变量,若从键盘输入:1,2,3<回车>,使i的值为1,j的值为2,k的值为3,以下选项中正确的输入语句是(  )。\r\nA、 scanf(“%2d%2d%2d”,&i,&j,&k); \r\nB、 scanf(“%d %d %d”,&i,&j,&k); \r\nC、 scanf(“%d,% d,%d”,&i,&j,&k); \r\nD、 scanf(“i=%d,j=% d,k=%d”,&i,&j,&k);', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(37, 20, '如下程序段的输出为(  )。\r\n#include <stdio.h>\r\nint main()\r\n{\r\n      int a=3,b=5;\r\n      double c;\r\n      c=a/b;\r\nprintf(“%.2f\n”,c);\r\n}\r\nA、 0.00\r\nB、 1.00\r\nC、 0.60\r\nD、 不确定', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(38, 105, 'C语言中的标识符只能由________、_______和_______组成。开头必须是______或             _______。', '填空题', '数字；字母；下划线；字母；下划线；', 'Wt', 0, NULL, NULL),
	(39, 105, '一般地,调用标准字符或格式输入输出库函数时,文件开头应有以下预编译指令_________。', '填空题', '#include<stdio.h>；', 'Wt', 0, NULL, NULL),
	(40, 17, 'C语言中,基本整型类型关键字为__________,在16位操作系统中,一般用__________字节表示一个变量。单精度浮点型型类型关键字为__________,一般占__________字节。', '填空题', 'int；2；float；4；', 'Wt', 0, NULL, NULL),
	(41, 22, '编程:输入4个实数x1,y1,x2,y2,数据之间用空格隔开。表示两点坐标A(x1,y1),B(x2,y2),计算并输出两点间的距离。结果保留两位小数。部分程序如下:\r\n   #include<stdio.h>\r\n    #include<math.h> \r\n   int main() \r\n  { \r\n      double x1, y1, x2, y2, dist;    \r\n      scanf("%lf%lf%lf%lf", &x1, &y1, &x2, &y2);                                                  \r\n      printf("%.2f\n", dist);\r\n        return 0;\r\n   }', '填空题', 'dist= sqrt( (x1-x2)*(x1-x2) + (y1-y2)*(y1-y2) );；', 'Wt', 0, NULL, NULL),
	(42, 23, '编程:输入两个整数 a 和 b ,求其中较大的一个的值,并存储到变量 max 中。部分程序如下:\r\n    #include <stdio.h>\r\n    int main(void) \r\n    {\r\n     int a, b, max;\r\n     scanf("%d%d", &a, &b);\r\n     max = a;            \r\n     if (        )          \r\n          max = b;            \r\n     printf("max = %d", max);\r\n     return 0;\r\n}', '填空题', 'b > max；', 'Wt', 0, NULL, NULL),
	(43, 105, 'C语言程序在书写上只能是一条语句写一行。', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(44, 17, '内存单元的地址与内存单元中的数据是两个完全相同的概念。', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(45, 19, 'double型变量在内存中占的字节数比int型变量在内存中占的字节数多。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(46, 17, 'C语言格式化标准输入函数scanf()的参数表中要使用变量的地址值。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(47, 22, '表达式语句和表达式没有什么区别。', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(48, 105, 'C语言程序中可以有多个函数,但只能有一个主函数。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(49, 17, '设整型变量x的值是10,则表达式2<x<5的值是(  )。\r\nA、 不确定\r\nB、 1\r\nC、 0\r\nD、 表达式非法', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(50, 27, '在while(!a)中,其中!a与表达式(  )等价。\r\nA、 a==0 \r\nB、  a==1 \r\nC、 a!=1 \r\nD、 a!=0', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(51, 23, '如果int a=3,b=4,则条件表达式“a<b?a:b”的值是(  )。\r\nA、 3\r\nB、 4\r\nC、 0\r\nD、 1', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(52, 26, '下面关于if与switch比较的叙述中不正确的是(  )。\r\nA、 switch执行效率高,if效率低 \r\nB、 switch只能是基于一个整型值进行分支选择 \r\nC、 使用if的分支,都可以通过switch实现 \r\nD、 使用switch的分支,都可以通过if实现', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(53, 23, '为避免if_else语句二义性,规定else总是与(  ) 组成配对关系。\r\nA、 缩排位置相同的if\r\nB、 在其之前未配对的if\r\nC、 在其之前最近的未配对的if \r\nD、 同一行上的if', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(54, 22, '判断整数a即能被3整除又能被5整除的合法表达式为___________________。', '填空题', 'a%3==0&&a%5==0;!(a%3)&&!(a%5);!(a%3||a%5);a%15==0；', 'Wt', 0, NULL, NULL),
	(55, 23, '在if语句的三种形式中,如果要想在满足条件时执行一组(多个)语句,则必须把这一组语句用{}括起来组成一个复合语句。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(56, 26, '在switch语句中,每一个的case常量表达式的值可以相同。', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(57, 22, '逻辑表达式的值只能为1或0。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(58, 23, '读下列程序,写出程序的运行结果\r\n#include<stdio.h>\r\nint main()\r\n{\r\n       int a=2,b=3,c;\r\n       c=a;\r\n       if(a>b)\r\n              c=1;\r\n       else if(a==b)\r\n              c=0;\r\n       else \r\n              c=-1;\r\n       printf("%d\n",c);\r\n       return 0;\r\n}\r\n输出:', '单选题', '-1', 'Wt', 0, NULL, NULL),
	(59, 22, '读下列程序,写出程序的运行结果。\r\n2.\r\n#include <stdio.h>\r\nint main()\r\n{\r\n    int x, y, z;\r\n       x = y = z = -1;\r\n       ++x && ++y || ++z;\r\n       printf ("x=%d y=%d z=%d\n", x, y, z);\r\n       x = y = z = -1;\r\n       ++x || y++ && z;\r\n       printf ("x=%d y=%d z=%d\n", x, y, z);\r\n       return 0;\r\n}\r\n输出:', '填空题', 'x=0 y=-1 z=0\r\nx=0 y=0 z=-1', 'Wt', 0, NULL, NULL),
	(60, 30, '退出一个循环语句(不终止函数的执行)的有效措施是(  )。\r\nA、 用break语句 \r\nB、 用continue语句 \r\nC、 用return语句 \r\nD、 用exit', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(61, 28, 'C语言中while和do_while循环的主要区别是(  )。\r\nA、 do_while的循环体至少无条件执行一次 \r\nB、  while的循环控制条件比do_while的循环控制条件严格 \r\nC、 do_while允许从外部转到循环体内 \r\nD、 do_while的循环体不能是复合语句', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(62, 29, 'continue语句只能用在__________结构中。', '单选题', '循环；', 'Wt', 0, NULL, NULL),
	(63, 30, '对n个数进行排序,最多需要进行__________趟冒泡排序。', '填空题', 'n-1；', 'Wt', 0, NULL, NULL),
	(64, 23, '编程:求n个数的和。首先输入一个整数n,然后输入n个整数,求它们的和。部分程序如下:\r\n    #include<stdio.h>\r\n    int main(void)\r\n    {\r\n        int number, sum;\r\n        int i, n;  \r\n        sum = 0; \r\n        scanf("%d", &n);\r\n        for(i = 1; i <= n; i++) \r\n       {\r\n            scanf("%d", &number);                        \r\n        }\r\n       printf("%d\n", sum);\r\n       return 0;\r\n    }', '填空题', 'sum = sum + number;；', 'Wt', 0, NULL, NULL),
	(65, 28, '编程:求数列1-1/3+1/5-1/7+1/9…的前n项和。结果保留两位小数。部分程序如下:\r\n#include <stdio.h>\r\n    int main(void)\r\n    {\r\n        int i, n, deno;\r\n        double sum, flag;\r\n        scanf("%d\n", &n);\r\n        sum = 0;  deno = 1; flag = 1.0;\r\n        for(i = 1; i <= n; i++)\r\n        {\r\n                             \r\n           deno = deno+2;  \r\n           flag = -flag;    \r\n        }\r\n        printf("%.2f\n", sum);\r\n        return 0;       \r\n}', '填空题', 'sum = sum + flag/deno;；', 'Wt', 0, NULL, NULL),
	(66, 28, '编程:求两个整数的和。要求输入包含多组数据,每组数据包含两个整数a和b,对每组数据输出a+b的结果。当a和b同时为0时表述输入结束。部分程序如下:\r\n    #include <stdio.h>\r\n    int main(void)\r\n    { \r\n           int a, b;\r\n           while(                            )\r\n             printf("%d\n", a + b);\r\n       return 0;\r\n   }', '填空题', 'scanf("%d %d", &a, &b), (a != 0 || b != 0；', 'Wt', 0, NULL, NULL),
	(67, 28, '编程:输出阶乘表。输入一个整数n(n<=20),输出1-n的阶乘表。部分程序如下:\r\n    #include <stdio.h>\r\n   int main(void)\r\n    { int i, n;\r\n       double fact;\r\n        printf("input n: \n");\r\n        scanf ("%d", &n) ;\r\n        for (fact=1, i = 1; i <= n; i++ )     \r\n          { printf ( "%d  %.0f \n", i, fact );  }\r\n        return 0;\r\n    }', '填空题', 'fact = fact * i ;；', 'Wt', 0, NULL, NULL),
	(68, 31, '编程:输出所有的“水仙花数”,所谓“水仙花数”是指一个3位数,其各位数字立方和等于该数本身。部分程序如下:\r\n    #include<stdio.h>\r\n    int main()\r\n    {\r\n           int i,j,k,n;\r\n           for (n=100;n<1000;n++)\r\n           {i=n/100;\r\n                  j=n/10-i*10;\r\n                 k=n%10;\r\n                  if (               )\r\n                         printf("%d ",n);\r\n       }\r\n      printf("\n");\r\n      return 0;\r\n   }', '填空题', 'n==i*i*i + j*j*j + k*k*k；', 'Wt', 0, NULL, NULL),
	(69, 30, 'continue不是结束本次循环,而是终止整个循环的执行。', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(70, 28, 'C语言的三种循环不可以互相嵌套。', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(71, 30, '在多层循环中,一个break语句只向外跳一层。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(72, 28, '读下列程序,写出程序的运行结果。\r\n#include<stdio.h>\r\nint main()\r\n{\r\n       int n=10;\r\n       while (n>7)\r\n       {\r\n              n--;\r\n                printf("%d\n",n);\r\n   }\r\n       return 0;\r\n}\r\n输出:', '多选题', '9\r\n8\r\n7', 'Wt', 0, NULL, NULL),
	(73, 30, '#include<stdio.h>\r\nint main()\r\n{\r\n       int a,b;\r\n       for(a=1,b=1;a<=100;a++)\r\n       { \r\n              if(b>=20)   \r\n                     break;\r\n              if(b%3==1)\r\n              { \r\n                     b+=3;       \r\n                     continue; \r\n              }\r\n              b-=5;\r\n       }\r\n       printf("%d\n",a);\r\n       return 0;\r\n}\r\n输出:', '填空题', '8', 'Wt', 0, NULL, NULL),
	(74, 28, '读下列程序,写出程序的运行结果。\r\n#include<stdio.h>\r\nint main()\r\n{\r\n       int n=0,fact=1,sum=0;\r\n       do\r\n       {\r\n              n++;\r\n              fact=fact*n;\r\n              sum+=fact;\r\n       } while (n<4);\r\n       printf("%d\n",sum);\r\n       return 0;\r\n}\r\n输出:', '填空题', '33', 'Wt', 0, NULL, NULL),
	(75, 22, '读下列程序,写出程序的运行结果。\r\n#include<stdio.h>\r\nint main()\r\n{ int x=2, y=3, m, n;\r\n       m = x++*5;\r\n       n = ++y*5;\r\n       printf ("%d,%d,%d,%d\n", x, y, m, n);\r\n       return 0;\r\n}\r\n输出:', '填空题', '3,4,10,20', 'Wt', 0, NULL, NULL),
	(76, 29, '读下列程序,写出程序的运行结果。\r\n#include<stdio.h>\r\nint main()\r\n{\r\n       int  j , k , p, s;\r\n       s=0;\r\n       for (j=1; j<=3; j++)\r\n       {\r\n              p=1;\r\n        for(k=1; k<=j; k++)\r\n                     p=p*k;\r\n              s=s+p;\r\n       }\r\n       printf("s=%d\n",s); \r\n       return 0;\r\n}\r\n输出:', '填空题', 's=9', 'Wt', 0, NULL, NULL),
	(77, 105, '(  )是构成C语言程序的基本单位。\r\nA、 函数\r\nB、 过程 \r\nC、 子程序\r\nD、 子例程', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(78, 17, '在C语言中,函数的数据类型是指(  )。\r\nA、 函数返回值的数据类型 \r\nB、 函数形参的数据类型 \r\nC、 调用该函数时实参的数据类型 \r\nD、 任意指定的数据类型', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(79, 33, '如果某一函数直接或间接地调用自身,这样的调用称为__________。', '填空题', '递归调用;递归函数;递归\r\n；', 'Wt', 0, NULL, NULL),
	(80, 33, '所有的C函数都必须在被__________时才能执行其函数体,从而完成函数的功能。', '填空题', '调用\r\n；', 'Wt', 0, NULL, NULL),
	(81, 35, '外部变量是指在__________定义的变量。', '填空题', '函数外部\r\n；', 'Wt', 0, NULL, NULL),
	(82, 34, '编程:求组合数。组合数的公式如图所示:\r\n 部分程序如下:\r\nl       #include <stdio.h>\r\nl       int fact( int n)\r\nl       {\r\nl           int i;\r\nl           int result = 1;\r\nl           for(i = 2; i <= n; i++)\r\nl                               \r\nl           return result;\r\nl       }\r\nl       int main(void)\r\nl       {\r\nl           int m, n, p;    \r\nl           scanf("%d%d", &m, &n);\r\nl                                               \r\nl           printf("p=%d\n", p);\r\nl           return 0;\r\nl       }', '填空题', 'result *= i; \r\n；\r\np = fact(m) / (fact(n) * fact(m - n));\r\n；', 'Wt', 0, NULL, NULL),
	(83, 34, '函数的实参传递到形参有两种方式:值传递和地址传递。             (   )', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(84, 35, '函数形参的存储单元是动态分配的。                              (   )', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(85, 33, '如果函数定义出现在函数调用之前,可以不必加函数原型声明。       (   )', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(86, 33, '函数的实参可以是常量、变量或表达式。                           (   )', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(87, 36, '读下列程序,写出程序的运行结果。\r\n#include <stdio.h>\r\nvoid Func(void);\r\nint main()\r\n{\r\n         int i;\r\n         for (i=0; i<5; i++)\r\n         {\r\n                   Func();\r\n         }\r\n}\r\nvoid Func(void)\r\n{static int a = 1;\r\n         int b = 2, c;\r\n         c = a + b;\r\n         a++;\r\n         b++;\r\n         printf("%d\n", c);\r\n}\r\n输出:', '填空题', '3\r\n4\r\n5\r\n6\r\n7', 'Wt', 0, NULL, NULL),
	(88, 36, '读下列程序,写出程序的运行结果。\r\n#include <stdio.h>\r\nvoid fun(int x, int y);\r\nint a=5, b=8;\r\nint main( )\r\n{  int a=15;\r\n     fun(a, b);         \r\n        printf("a=%d, b=%d\n", a, b);\r\n}\r\nvoid fun(int x, int y)\r\n{ int temp;\r\n       if(a>b)\r\n         {\r\n     temp=a;\r\n     x=y;\r\n     y=temp;\r\n         }}\r\n输出:', '填空题', 'a=15, b=8', 'Wt', 0, NULL, NULL),
	(89, 36, '读下列程序,写出程序的运行结果。\r\n#include <stdio.h>\r\ndouble  fact(int n);\r\nint main()\r\n{   int n;\r\n    scanf ("%d", &n);\r\n    printf ("%.0f\n", fact (n) );\r\n    return 0;\r\n}\r\ndouble  fact(int n) \r\n{  double result;\r\n    if (n==1 || n == 0)    \r\n        result = 1;\r\n    else \r\n        result = n * fact(n-1);  \r\n    return result;\r\n}\r\n输入:\r\n5\r\n输出:', '填空题', '120', 'Wt', 0, NULL, NULL),
	(90, 39, '以下能对一维数组a进行初始化的语句是(  )。\r\nA、 int a[5]=(0,1,2,3,4) \r\nB、  int a(5)={ } \r\nC、  int a[3]={0,1,2} \r\nD、 int a{5}={10*1}', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(91, 39, '已知int a[10],则对a数组元素的正确引用是(  )。\r\nA、 a[10] \r\nB、  a[3.5] \r\nC、 a(5) \r\nD、 a[0]', '单选题', 'D', 'Wt', 0, NULL, NULL),
	(92, 39, 'C语言数组的下标总是从______开始,不可以为负数;构成数组各个元素具有相同的________。', '填空题', '0\r\n；\r\n数据类型;类型\r\n；', 'Wt', 0, NULL, NULL),
	(93, 39, '数组中的每一个元素都属于同一数据类型,数组中的每一个元素都是由___________和______来唯一确定。', '填空题', '数组名；\r\n下标；', 'Wt', 0, NULL, NULL),
	(94, 29, '编程:输入一个正整数n (1<n≤50),输出fibonacci数列的前n项:1 1 2 3 5……部分程序如下:\r\nl       #include <stdio.h>\r\nl       #define N 50\r\nl       int main()\r\nl       {\r\nl           int n,  i,  a[N] = {1, 1}; \r\nl           scanf("%d",  &n);  \r\nl           for(i = 2; i < n; i++)\r\nl                                                 \r\nl                for(i = 0;  i < n; i++)\r\nl                          printf("%d ", a[i]);\r\nl           printf("\n");\r\nl           return 0;\r\nl       }', '填空题', 'a[i] = a[i-1] + a[i-2];\r\n；', 'Wt', 0, NULL, NULL),
	(95, 39, '在对数组全部元素赋初值时,不可以省略行数,但能省略列数。        (   )', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(96, 40, '在C语言中,能逐个地使用下标变量,也能一次引用整个数组。        (   )', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(97, 43, '在C语言中,以(  )作为字符串结束标志。\r\nA、  ‘\n’ \r\nB、 ‘ ‘ \r\nC、 ‘0’ \r\nD、 ‘\0’', '单选题', 'D', 'Wt', 0, NULL, NULL),
	(98, 44, '下列数据中,属于字符串常量的是(  )。\r\nA、 “a” \r\nB、  {ABC}  \r\nC、 ‘abc\0’ \r\nD、 ‘a’', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(99, 46, '已知char x[ ]=”hello”,y[ ]={‘h’,’e’,’a’,’b’,’e’};则关于两个数组长度的正确描述是(  )。\r\nA、 相同 \r\nB、 x大于y \r\nC、  x小于y \r\nD、 以上答案都不对', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(100, 45, '用字符串方式赋值比用字符逐个赋值要多占一个字节,用于存放字符串结束标志’\0’。', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(101, 51, '字符串在内存中的起始地址成为字符串的指针,可以定义一个字符指针变量指向一个字符串。                                              (   )', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(102, 43, '、判断字符串s1是否大于字符串s2，应该使用（  ）\r\n \r\nA、 if(strcmp(s1，s2)<0)\r\n \r\nB、 if(s1>s2)\r\n \r\nC、 if(strcmp(s2，s1)<0)\r\n \r\nD、 \r\nif(strcmp(s1，s2))', '判断题', 'ABCDEF1234', 'Wt', 0, NULL, NULL),
	(103, 42, '若有说明：int a[ ][3]={{1,2,3},{4,5},{6,7}}，则数组a第一维的大小为（  ）。\r\nA、 2 \r\nB、 3 \r\nC、 4 \r\nD、 无确定值', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(104, 33, '凡在函数中未指定存储类别的局部变量，其默认的存储类别为static。     （ ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(105, 50, '一个数组是由连续的一块内存单元组成的，指针变量就是这块连续内存单元的首地址。   （ ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(106, 39, '数组名表示数组在内存的', '填空题', '起始地址；首地址\r\n；', 'Wt', 0, NULL, NULL),
	(107, 39, '若定义x[5]，则数组名x的含义是_____________________________。', '填空题', '数组的起始地址；数组的首地址\r\n；', 'Wt', 0, NULL, NULL),
	(108, 42, '定义二维数组时，数组名后要有两个下标，其中，第一个下标的含义是              ，第二个下标的含义是                   。', '填空题', '所占行数；行；行数\r\n；\r\n所占列数；列；列数\r\n；', 'Wt', 0, NULL, NULL),
	(109, 49, '在C语言中，表示静态存储类别的关键字是（  ）。\r\nA、  auto\r\nB、 register\r\nC、 static\r\nD、 extern', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(110, 49, '未指定存储类别的变量，其隐含的存储类别是（  ）。\r\nA、 auto\r\nB、 register\r\nC、 static\r\nD、 extern', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(111, 42, '读下列程序，写出程序的运行结果。\r\n#include <stdio.h>\r\nint main()\r\n{\r\nint x[3][3]={0,1,2, 0,1,2, 0,1,2};\r\nint i,j,t=1;\r\nfor(i=0;i<3;i++)\r\nfor(j=i;j<=i;j++)\r\nprintf("%d\n",t=t+x[i][x[j][j]]);\r\nreturn 0;\r\n}', '填空题', '1\r\n2\r\n4', 'Wt', 0, NULL, NULL),
	(112, 41, '编程：输入一个正整数n (1<n≤50)，输出fibonacci数列的前n项：1 1 2 3 5……部分程序如下：\r\n#include <stdio.h>\r\n#define N 50\r\nint main()\r\n {\r\n     int n,  i,  a[N] = {1, 1};\r\n   scanf("%d",  &n);  \r\n     for(i = 2; i < n; i++)\r\n                                           \r\n  for(i = 0;  i < n; i++)\r\n   printf("%d ", a[i]);\r\n     printf("\n");\r\n    return 0;\r\n }', '填空题', 'a[i] = a[i-1] + a[i-2];a[i]=a[i-2]+a[i-1]；', 'Wt', 0, NULL, NULL),
	(113, 46, '编程：输入正整数n（0 < n <= 10），然后输入n个字符串，输出字典序最大的字符串。部分程序如下：\r\n#include<stdio.h>\r\n#include<string.h>\r\n#define N 40\r\n \r\n int main(void)\r\n {\r\n  int i,n;\r\n  char max[N] = "";\r\n  char str[N];\r\n  scanf("%d", &n);\r\n  getchar();\r\n  for(i = 1; i <= n; i++)\r\n  {\r\n   gets(str);\r\n   if( strcmp(str, max) > 0 )\r\n                                                \r\n  }\r\n  puts(max);\r\n  return 0;\r\n }', '填空题', 'strcpy(max, str);\r\n \r\n；', 'Wt', 0, NULL, NULL),
	(114, 52, '指向结构体的指针可以作函数参数，实现传址调用。                 （   ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(115, 49, '可以用一个指针变量指向一个函数，然后通过该指针变量调用此函数。 （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(116, 51, '指针变量可以存放指针（地址）、数值和字符。                       （   ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(117, 49, '一个变量的地址称为该变量的指针。                              （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(118, 51, '指针变量也是一个变量，只不过该变量中存储的是_________，如果一个变量存储另一个对象的地址，则称该变量_____________。', '填空题', '另一个对象的内存地址\r\n \r\n；\r\n指向这个对象\r\n \r\n；', 'Wt', 0, NULL, NULL),
	(119, 51, '语句int *p；说明了（  ）。\r\nA、 p是指向一维数组的指针\r\n \r\nB、 p是指向函数的指针，该函数返回一个int类型的数据\r\n \r\nC、 p是指向int型数据的指针\r\n \r\nD、 p是函数名，该函数返回一指向int型数据的指针', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(120, 51, '下列不正确的定义是（  ）。\r\n \r\nA、 int *p=&i,i;\r\n \r\nB、 int *p,i;\r\n \r\nC、 int i,*p=&I;\r\n \r\nD、 int i,*p', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(121, 53, '若有说明语句“int a[5],*p=a;”则对数组元素的正确引用是（  ）。\r\n \r\nA、 a[p]\r\n \r\nB、 p[a]\r\n \r\nC、 *(p+2)\r\n \r\nD、 p+2', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(122, 53, '设有定义：int x[10],*p=x, i;若要为数组x读入数据，以下选项正确的是（  ）。\r\nA、 for(i=0;i<10;i++) scanf("%d",p+i);\r\n \r\nB、 for(i=0;i<10;i++) scanf("%d",*p+i);\r\n \r\nC、 for(i=0;i<10;i++) scanf("%d",*(p+i));\r\n \r\nD、 for(i=0;i<10;i++) scanf("%d",x[i]);', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(123, 53, '读下列程序，写出程序的运行结果。\r\n# include <stdio.h>\r\nint main ()\r\n{  \r\n    int a[5]={3, 2, 5, 4, 8};\r\n    int  *p, *q;\r\n    p = &a[0];\r\n    q = &a[4];\r\nfor( ; q >= p; q--)\r\n       printf ("%d ", *q);\r\nprintf ("\n");\r\nreturn 0;\r\n}\r\n输出：', '计算题', '8 4 5 2 3', 'Wt', 0, NULL, NULL),
	(124, 53, '读下列程序，写出程序的运行结果。\r\n#include <stdio.h>\r\nvoid swap( int *pa, int *pb)\r\n{\r\n    int t;\r\nt = *pa;\r\n *pa = *pb;  \r\n*pb=t;\r\n}\r\nint main()\r\n{\r\nint a = 3, b = 5;\r\nswap( &a, &b );\r\nprintf("%d %d\n",a,b);\r\nreturn 0;\r\n}\r\n输出：', '计算题', '5 3', 'Wt', 0, NULL, NULL),
	(125, 53, '读下列程序，写出程序的运行结果。\r\n#include <stdio.h>\r\nint main()\r\n{\r\nint i;\r\n    int a[10],*p=a;\r\n    for(i=0;i<10;i++)\r\n       *p++=2*i;\r\n    for(i=0;i<10;i++)\r\nprintf("%4d",a[i]);\r\nprintf("\n");\r\nreturn 0;\r\n}\r\n输出：', '计算题', '0   2   4   6   8  10 12 14  16  18', 'Wt', 0, NULL, NULL),
	(126, 57, '共用体变量可以作结构体的成员，结构体变量也可以作共用体的成员。 （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(127, 57, '结构体变量可以作数组元素。                                    （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(128, 59, '指向结构体变量的指针可以作函数参数，实现传址调用。             （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(129, 57, '结构体成员的类型必须是基本数据类型。                          （   ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(130, 57, '以下正确的说法是（  ）。\r\n \r\nA、 结构体类型变量不能初始化。\r\n \r\nB、 结构体类型变量为外部变量或静态变量时能初始化。\r\n \r\nC、 结构体数组不能初始化\r\n \r\nD、 可以用赋值语句将一组常量赋给一个结构体变量', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(131, 57, '结构体类型变量在程序执行期间，（  ）。\r\n \r\nA、 所有成员一直驻留在内存中。\r\n \r\nB、 只有一个成员驻留在内存中。\r\n \r\nC、 部分成员驻留在内存中。\r\n \r\nD、 没有成员驻留在内存中。', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(132, 57, '设有以下语句\r\nstruct stu\r\n{\r\n   int a;\r\n   float b;\r\n}stutype;\r\n则下面不正确的叙述是（  ）。\r\n \r\nA、 struct是结构体类型的关键字\r\n \r\nB、 struct stu是用户自定义的结构体类型\r\n \r\nC、 stutype是用户定义的结构体类型名\r\n \r\nD、 a和b都是结构体成员名', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(133, 58, '下列说法正确的是（  ）。\r\n \r\nA、 对于一个具体的结构体，它的成员可以根据自己的需要随时更改。\r\n \r\nB、 结构体与数组一样，其每个成员的数据类型都相同。\r\n \r\nC、 结构体的每个成员的数据类型必须是基本数据类型。\r\n \r\nD、 以上描述都不正确。', '单选题', 'D', 'Wt', 0, NULL, NULL),
	(134, 57, '下列说法正确的是（  ）。\r\n \r\nA、 结构体变量说明时，系统按照结构体定义时所需空间的大小实际分配存储空间。\r\n \r\nB、 结构体变量说明时，系统按照各成员项中占用空间最大的成员项分配存储空间。\r\n \r\nC、 结构体变量说明时，系统并不给结构体分配存储空间\r\n \r\nD、 以上描述都不正确。', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(135, 57, '下列说法正确的是（  ）。\r\n \r\nA、 结构体变量说可以作为一个整体进行其值的输入输出。\r\n \r\nB、 结构体成员项不可以是结构体。\r\n \r\nC、 结构体成员项可以是结构体或其他任何C语言的数据类型。\r\n \r\nD、 结构体变量和结构体是相同的概念。', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(136, 58, '若有以下说明语句：\r\nstruct student\r\n{\r\nit num;\r\ncar name[];\r\nfloat score;\r\n}stu;\r\n则下面的叙述不正确的是（  ）。\r\n \r\nA、 struct是结构体类型的关键字。\r\n \r\nB、 struct student是用户定义的结构体类型。\r\n \r\nC、 num和score都是结构体成员名。\r\n \r\nD、 stu是用户定义的结构体类型名。', '单选题', 'D', 'Wt', 0, NULL, NULL),
	(137, 59, '以下对结构变量stu1中成员age的非法引用是（  ）。\r\nstruct student\r\n{\r\nint age;\r\nint num;\r\n}stu1,*p;\r\np=&stu1;\r\n \r\nA、 stu1.age\r\n \r\nB、 student.age \r\n \r\nC、 p->age\r\n \r\nD、 (*p).age', '单选题', 'B', 'Wt', 0, NULL, NULL),
	(138, 59, '编程：编写程序，建立同学通讯录。通讯录中包括同学的姓名和电话号码。部分程序如下：\r\n #include <stdio.h>\r\n #define NUM 3\r\n struct mem\r\n {\r\nchar name[20];\r\n char phone[11];\r\n }；\r\n void main()\r\n {\r\n    struct men man[NUM];\r\n int i;\r\n for(i=0;i<NUM;i++)\r\n {\r\n     printf(“Input name:\n”);\r\n                                                                     \r\n     printf(“Input phone:\n”);\r\n                                                 \r\n }\r\n printf(“name		phone\n\n”);\r\nfor(i=0;i<NUM;i++)\r\n      printf(“%s			%s\n”,____________________);\r\n}', '填空题', 'gets(man[i].name)； \r\ngets(man[i].phone)；\r\nman[i].name,man[i].phone；', 'Wt', 0, NULL, NULL),
	(139, 69, '文件指针和位置指针都是随着文件的读写操作在不断改变。          （   ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(140, 71, '随机操作只适用于文本文件。                                    （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(141, 71, '随机操作只适用于二进制文件。                                  （   ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(142, 69, '以“r”方式打开一个文件时，文件指针指向文件首。                   （   ）', '判断题', '正确', 'Wt', 0, NULL, NULL),
	(143, 70, 'C语言程序只能有一个文件。                                     （   ）', '判断题', '错误', 'Wt', 0, NULL, NULL),
	(144, 69, '文件是指____________________________。', '填空题', '存储在外部介质上数据的集合；', 'Wt', 0, NULL, NULL),
	(145, 69, '根据数据的组织形式，C语言将文件分为______和________。', '填空题', 'ASCII文件；\r\n二进制文件；', 'Wt', 0, NULL, NULL),
	(146, 70, '现要求以读写方式打开一个文本文件stu，写出语句_______', '填空题', 'FILE *fp；\r\nfp=fopen(“stu”,”r+”);；', 'Wt', 0, NULL, NULL),
	(147, 69, '现要求将上题中打开的文件关闭掉，写出语句____________.', '填空题', 'fclose(fp);；', 'Wt', 0, NULL, NULL),
	(148, 69, '若执行fopen()函数时发生错误，则函数的返回值是 _____', '填空题', 'NULL；', 'Wt', 0, NULL, NULL),
	(149, 69, '若fp已正确定义并指向某个文件，当未遇到该文件结束标志时函数feof(fp)的值为（  ）。\r\nA、 0 \r\nB、 1 \r\nC、 -1 \r\nD、 一个非0值', '单选题', 'A', 'Wt', 0, NULL, NULL),
	(150, 70, 'fread(buf,64,2,fp)的功能是（  ）。 \r\nA、 从fp指向的文件中，读出整数64，并存放在buf中。 \r\nB、 从fp指向的文件中，读出整数64和2，并存放在buf中。 \r\nC、 从fp指向的文件中，读出整数64个字节的字符，读两次，并存放在buf地址中。 \r\nD、 从fp指向的文件中，读出整数64个字节的字符，并存放在buf中。', '单选题', 'C', 'Wt', 0, NULL, NULL),
	(151, 70, '编程：要求在程序执行前创建文件D:file.txt，文档的内容为“I am a student.”,在屏幕中显示该文件的内容。部分程序如下：\r\n #include <stdio.h>\r\n void main()\r\n { FILE *fp;\r\n  char ch;\r\n  fp=fopen("d:\\file.txt","r");\r\n  ch=fgetc(fp);  \r\n  while(ch!=EOF)\r\n{ putchar(ch);                 \r\n  }\r\n  fclose(fp);\r\n }', '填空题', 'ch=fgetc(fp);', 'Wt', 0, NULL, NULL),
	(152, 70, '编程：对D:file1.txt文件追加一个字符串。部分程序如下：\r\n #include <stdio.h>\r\n main()\r\n { FILE *fp;\r\n   char ch,st[20];\r\n   if((fp=fopen("D:\\file1.txt","a"))==NULL)\r\n   { printf("不能打开文件");\r\n    getch();\r\n     exit（1）;\r\n }\r\n   printf("输入字符串:\n");\r\n   scanf("%s",st);                    \r\n   fclose(fp);\r\n }', '填空题', 'fputs(st,fp);', 'Wt', 0, NULL, NULL),
	(153, 70, '编程：将数字66以字符的形式写到磁盘文件中。部分程序如下：\r\n #include <stdio.h>\r\n void main()\r\n { FILE *fp;\r\n  int i=66;\r\n  if((fp=fopen("d:\\C\\file2.txt","w"))==NULL)\r\n  { printf("不能打开文件");\r\n   getch();\r\n   exit（1）;\r\n }                \r\n  fclose(fp);\r\n}', '填空题', 'fprintf(fp,"%c",i);', 'Wt', 0, NULL, NULL),
	(154, 29, '用穷举法找出1~100的质数并显示出来。分别使用while，do-while，for循环语句实现', '应用题', '', 'Wt', 0, NULL, NULL),
	(155, 29, '在程序中定义一个整型变量，赋予1~100的值。要求用户猜这个数，比较两个数的大小，把结果提示给用户，直到猜对为止。分别使用while，do-while语句实现', '应用题', '', 'Wt', 0, NULL, NULL),
	(156, 29, '输出九九乘法表', '应用题', '', 'Wt', 0, NULL, NULL),
	(157, 30, '编写函数求两个整数的最大公约数和最小公倍数', '应用题', '', 'Wt', 0, NULL, NULL),
	(158, 34, '用递归方法编写函数，输出Fibonacci数列前10项', '应用题', '', 'Wt', 0, NULL, NULL),
	(159, 36, '编写两个名为sumOfSquare的重载函数，分别求两个整数的平方和及两实数的平方和', '应用题', '', 'Wt', 0, NULL, NULL),
	(160, 33, '定义并实现一个矩形类，有长、宽两个属性，由成员函数计算矩形的面积', '应用题', '', 'Wt', 0, NULL, NULL),
	(161, 36, '定义一个circle类，有数据成员radius（半径），成员函数getArea（），计算圆的面积，构造一个Circle的对象进行测试', '应用题', '', 'Wt', 0, NULL, NULL),
	(162, 36, '建立类 cylinder, cylinder 的构造函数被传递了两个 double 值，分别表示圆柱体的半径和高度。用类 cylinder 计算圆柱体的体积，并存储在一个 double 变量中。在类 cylinder 中包含一个成员函数 vol，用来显示每个 cylinder 对象的体积', '应用题', '', 'Wt', 0, NULL, NULL),
	(163, 36, '定义Boat与Car两个类，二者都有weight属性，定义二者的一个友元函数getTotalWeight（），计算二者的体积和。', '应用题', '', 'Wt', 0, NULL, NULL),
	(164, 37, '什么叫做作用域？有哪些类型的作用域？', '应用题', '', 'Wt', 0, NULL, NULL),
	(165, 105, '什么叫做可见性？可见性的一般规则是什么？', '应用题', '', 'Wt', 0, NULL, NULL),
	(166, 19, '什么叫静态数据成员？它有何特点？', '应用题', '', 'Wt', 0, NULL, NULL),
	(167, 33, '什么叫静态函数成员？它有何特点？', '应用题', '', 'Wt', 0, NULL, NULL),
	(168, 59, '构建一个类book，其中包含两个私有数据成员qu和price，将qu初始化为1~5，将price初始化为qu的10倍，建立一个有5个元素的数组对象。显示每个数组元素的qu*price的值。', '应用题', '', 'Wt', 0, NULL, NULL),
	(169, 29, '编写一个程序，已有若干学生的数据，包括学号、姓名、成绩，要求输出这些学生的数据并计算出学生人数和平均成绩（要求将学生人数和总成绩用静态数据成员表示）', '应用题', '', 'Wt', 0, NULL, NULL),
	(170, 34, '编写函数void reverse（string &s），用递归算法使字符串S倒序。提示： substr有2种用法： 假设：string s = “0123456789”;   string sub1 = s.substr(5); //只有一个数字5表示从下标为5开始一直到结尾：sub1 = “56789”   string sub2 = s.substr(5, 3); //从下标为5开始截取长度为3位：sub2 = “567”  ', '应用题', '', 'Wt', 0, NULL, NULL);
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
/*!40000 ALTER TABLE `questiontype` DISABLE KEYS */;
INSERT INTO `questiontype` (`id`, `questiontypename`, `gmt_create`, `gmt_modified`) VALUES
	(1, '单选题', '2020-07-12 10:10:03', '2020-07-12 10:30:10'),
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.section 的数据：~98 rows (大约)
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` (`id`, `chapterid`, `sectionname`, `number`, `gmt_create`, `gmt_modified`) VALUES
	(11, 11, '数据结构研究的内容', 1, NULL, NULL),
	(12, 11, '基本概念和术语', 2, NULL, NULL),
	(13, 11, '抽象数据类型的表示与实现', 3, NULL, NULL),
	(14, 12, '线性表的定义和特点', 1, NULL, NULL),
	(15, 12, '线性表的类型定义', 2, NULL, NULL),
	(16, 31, '简单的', 4, NULL, NULL),
	(17, 32, '如何将数据存入计算机', 1, NULL, NULL),
	(18, 32, '如何将数据存入计算机', 1, NULL, NULL),
	(19, 32, '其他数据表示', 2, NULL, NULL),
	(20, 32, '数据的输入与输出', 3, NULL, NULL),
	(21, 32, '数据的运算', 4, NULL, NULL),
	(22, 13, '逻辑类型与关系运算', 1, NULL, NULL),
	(23, 13, '流程控制语句之if', 2, NULL, NULL),
	(24, 13, '逻辑运算符与字符类型', 3, NULL, NULL),
	(25, 13, '流程图、伪代码和代码缩进', 4, NULL, NULL),
	(26, 13, 'switch语句', 5, NULL, NULL),
	(27, 14, '循环的基本原理', 1, NULL, NULL),
	(28, 14, '循环语句', 2, NULL, NULL),
	(29, 14, '几种循环语句的比较', 3, NULL, NULL),
	(30, 14, '控制流程的跳转语句', 4, NULL, NULL),
	(31, 14, '类型溢出问题', 5, NULL, NULL),
	(32, 15, '函数概述', 1, NULL, NULL),
	(33, 15, '函数的定义和调用', 2, NULL, NULL),
	(34, 15, '函数的嵌套调用和递归调用', 3, NULL, NULL),
	(35, 15, '变量的作用域和存储类型', 4, NULL, NULL),
	(36, 15, '内部函数与外部函数', 5, NULL, NULL),
	(37, 15, '函数的设计原则', 6, NULL, NULL),
	(38, 16, '为什么使用数组', 1, NULL, NULL),
	(39, 16, '一维数组的定义和引用', 2, NULL, NULL),
	(40, 16, '数组作为函数参数', 3, NULL, NULL),
	(41, 16, '数组的排序和查找', 4, NULL, NULL),
	(42, 16, '二维数组', 5, NULL, NULL),
	(43, 17, '什么是字符串', 1, NULL, NULL),
	(44, 17, '字符串存储', 2, NULL, NULL),
	(45, 17, '字符串的输入和输出', 3, NULL, NULL),
	(46, 17, '字符数组', 4, NULL, NULL),
	(47, 17, '字符串常用函数', 5, NULL, NULL),
	(48, 17, '字符串的简单应用', 6, NULL, NULL),
	(49, 18, '变量的存储地址', 1, NULL, NULL),
	(50, 18, '指针的基础知识', 2, NULL, NULL),
	(51, 18, '指针作为参数', 3, NULL, NULL),
	(52, 18, '指针作为参数', 3, NULL, NULL),
	(53, 18, '指针和一位数组', 4, NULL, NULL),
	(54, 18, '指针和二维数组', 5, NULL, NULL),
	(55, 18, '指针和字符串', 6, NULL, NULL),
	(56, 18, '指针的高级应用', 7, NULL, NULL),
	(57, 19, '结构体基本知识', 1, NULL, NULL),
	(58, 19, '结构体数组', 2, NULL, NULL),
	(59, 19, '结构体指针', 3, NULL, NULL),
	(60, 19, '共同体基本知识', 4, NULL, NULL),
	(61, 19, '枚举类型基本知识', 5, NULL, NULL),
	(62, 19, '结构的应用--单链表', 6, NULL, NULL),
	(63, 19, '用单链表解决问题---约瑟夫环问题', 7, NULL, NULL),
	(64, 20, '预处理的工作原理', 1, NULL, NULL),
	(65, 20, '预处理指令', 2, NULL, NULL),
	(66, 20, '#define预处理指令', 3, NULL, NULL),
	(67, 20, '文件包含', 4, NULL, NULL),
	(68, 20, '文件编译', 5, NULL, NULL),
	(69, 21, '文件的打开与关闭', 1, NULL, NULL),
	(70, 21, '顺序文件的读写', 2, NULL, NULL),
	(71, 21, '随机文件的读写', 3, NULL, NULL),
	(72, 22, 'PHP简介', 1, NULL, NULL),
	(73, 22, '开发环境搭建', 2, NULL, NULL),
	(74, 22, 'MySQL的介绍与使用', 3, NULL, NULL),
	(75, 22, '项目部署', 4, NULL, NULL),
	(76, 23, '【案例1】显示服务器信息', 1, NULL, NULL),
	(77, 23, '【案例2】商品价格计算', 2, NULL, NULL),
	(78, 23, '【案例3】判断学生成绩等级', 3, NULL, NULL),
	(79, 23, '【案例4】判断是否为闰年', 4, NULL, NULL),
	(80, 23, '【案例5】打印金字塔', 5, NULL, NULL),
	(81, 23, '【案例6】九九乘法表', 6, NULL, NULL),
	(82, 23, '【案例7】PHP获取文件后缀', 7, NULL, NULL),
	(83, 23, '【案例8】订货单显示', 8, NULL, NULL),
	(84, 23, '【案例10】网页布局', 9, NULL, NULL),
	(85, 24, '【案例11】展示员工信息', 1, NULL, NULL),
	(86, 24, '【案例12】员工信息排序', 2, NULL, NULL),
	(87, 24, '【案例13】员工信息搜索', 3, NULL, NULL),
	(88, 24, '【案例14】分页显示信息', 4, NULL, NULL),
	(89, 24, '【案例15】添加与修改信息', 5, NULL, NULL),
	(90, 25, '【案例16】用户注册', 4, NULL, NULL),
	(91, 25, '【案例17】用户信息编辑', 2, NULL, NULL),
	(92, 25, '【案例18】表单与安全验证', 3, NULL, NULL),
	(93, 25, '【案例19】保存浏览历史', 4, NULL, NULL),
	(94, 25, '【案例20】用户登录', 5, NULL, NULL),
	(95, 25, '【案例21】保存登录状态', 6, NULL, NULL),
	(96, 26, '【案例22】用户头像上传', 1, NULL, NULL),
	(97, 26, '【案例23】生成缩略图', 2, NULL, NULL),
	(98, 26, '【案例24】图片添加水印', 3, NULL, NULL),
	(99, 26, '【案例25】验证码生成与验证', 4, NULL, NULL),
	(100, 26, '【案例26】文件管理器', 5, NULL, NULL),
	(101, 26, '在线网盘', 6, NULL, NULL),
	(102, 27, '【案例28】体验类与对象', 1, NULL, NULL),
	(103, 27, '【案例29】文件上传类', 2, NULL, NULL),
	(104, 31, 'C语言的发展', 2, NULL, NULL),
	(105, 31, 'C程序初识', 3, NULL, NULL),
	(106, 31, '简单的C语言程序', 4, NULL, NULL),
	(107, 31, '简单的', 4, NULL, NULL),
	(108, 31, '程序设计语言', 1, NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.teacher 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` (`id`, `name`, `username`, `password`, `email`, `gmt_create`, `gmt_modified`) VALUES
	(1, '管理员', 'admin', '123456', 'lsb003@163.com', '2020-03-12 06:28:41', '2020-07-15 07:33:54'),
	(2, '张建国', '101', '123', 'zjg0001@163.com', '2020-06-10 09:30:54', '2020-07-10 09:31:01'),
	(3, '吴美娜', '102', '456', 'wmn002@163.com', '2020-05-24 10:27:48', '2020-07-11 19:32:07');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;

-- 导出  表 paper.teacher_course 结构
CREATE TABLE IF NOT EXISTS `teacher_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `couseid` int(11) NOT NULL COMMENT '课程id号',
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '教师用户名',
  `gmt_create` datetime DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- 正在导出表  paper.teacher_course 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `teacher_course` DISABLE KEYS */;
/*!40000 ALTER TABLE `teacher_course` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
