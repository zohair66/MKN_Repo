CREATE DATABASE  IF NOT EXISTS `makan` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci */;
USE `makan`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: makan
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `aboutus1`
--

DROP TABLE IF EXISTS `aboutus1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutus1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `picturelink` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `textcontent` text COLLATE utf8_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutus1`
--

LOCK TABLES `aboutus1` WRITE;
/*!40000 ALTER TABLE `aboutus1` DISABLE KEYS */;
INSERT INTO `aboutus1` VALUES (1,'درباره فعالیت های شرکت','img/About us pic.png','دفتر خدمات فناوری و طراحی وب سایت ها و پرتال های اینترنتی ماکان، پس از سال ها تجربه مهندسین آن در قالب پروژه های مختلف، در تابستان 93 تاسیس گردیده است. در حال حاضر در این دفتر دانش طراحی وب سایت نظیر طراحی ظاهر وب سایت، طراحی پایگاه داده، طراحی نرم افزار مدیریت محتوا، خدمات سئو، برنامه نویسی SQL، برنامه نویسی جاوااسکریپت، PHP، ASP.NET، برنامه نویسی پوسته های واکنش گرا، طراحی پوسته های سیستم های مدیریت محتوا نظیر وردپرس، جوملا، پرستاشاپ و انجمن سازهایی نظیر وی بولتین و مای بی بی و ... در حال اجرا و پیاده سازی می باشد. تیم مهندسی ماکان در دپارتمان های مختلفی نظیر دپارتمان برنامه نویسی و طراحی پوسته، دپارتمان برنامه نویسی نرم افزار، دپارتمان گرافیک و ... سازماندهی شده و مشغول فعالیت می باشند.&nbsp;با توجه به نیاز روز افزون جامعه ما به دانش فنی و تخصصی در حوزه فناوری اطلاعات، امید است دفتر مهندسی ماکان سهمی هرچند کوچک در این امر خطیر داشته باشد.\r\n');
/*!40000 ALTER TABLE `aboutus1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aboutus2`
--

DROP TABLE IF EXISTS `aboutus2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutus2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `piclink1` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `piclink2` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `piclink3` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `piclink4` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `piclink5` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `piclink6` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutus2`
--

LOCK TABLES `aboutus2` WRITE;
/*!40000 ALTER TABLE `aboutus2` DISABLE KEYS */;
INSERT INTO `aboutus2` VALUES (1,'نمونه کارها','img/airanslp_T.jpg','img/mycomlife_T.jpg','img/loknatesf_T.jpg','img/kianaonline_T.jpg',NULL,NULL);
/*!40000 ALTER TABLE `aboutus2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `adminID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `Lname` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'محمد','مشایخی','zohair','0a09b1d63341c622851a50e02d48e19c','m.mashayekhi66@gmail.com'),(2,'محمد','شیخ صراف','msarraf','d8c3e2b07bb5ce59dae74986738ba9b3','a.noghaie@yahoo.com'),(3,'علی','نقبایی','ali','e10adc3949ba59abbe56e057f20f883e','m.sheikhsarraf@gmail.com'),(5,'پیمان','سینی','63143b65c08954aba4763ed55365f39f','123456','peyman.sheikh@yahoo.com');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forms` (
  `idforms` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `phoneNum` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `haghhogh` tinyint(4) NOT NULL,
  `receivemail` bit(1) NOT NULL,
  `description` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`idforms`),
  KEY `haghhogh_idx` (`haghhogh`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms`
--

LOCK TABLES `forms` WRITE;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
INSERT INTO `forms` VALUES (1,'asd','324214','as@asd',1,'','adsasd'),(3,'ali','09132154785','m.masdad@asd.asd',1,'','tozih'),(4,'شسییشس شسی','09123589478','adsad@asd.sadas',1,'','asdsadad'),(5,'محمد شسی','09132196989','asd@asd.asd',1,'','asdad');
/*!40000 ALTER TABLE `forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forms_haghhogh`
--

DROP TABLE IF EXISTS `forms_haghhogh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forms_haghhogh` (
  `haghID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `haghname` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`haghID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms_haghhogh`
--

LOCK TABLES `forms_haghhogh` WRITE;
/*!40000 ALTER TABLE `forms_haghhogh` DISABLE KEYS */;
INSERT INTO `forms_haghhogh` VALUES (1,'حقیقی'),(2,'حقوقی');
/*!40000 ALTER TABLE `forms_haghhogh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecontent1`
--

DROP TABLE IF EXISTS `homecontent1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecontent1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_persian_ci,
  `picturelink` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `maincontent` text COLLATE utf8_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecontent1`
--

LOCK TABLES `homecontent1` WRITE;
/*!40000 ALTER TABLE `homecontent1` DISABLE KEYS */;
INSERT INTO `homecontent1` VALUES (1,'<p>گروه مهندسان ماکان فناورر برای هر یک از زمینه های کاری از جمله شرکت ها و موسسات آموزشی، سایت هایاطلاع رسانی کالا ویا خدمات، اقدام به آماده سازی و طراحی پرتال های اینترنتی با کمترین هزینه می نماید. به دلیل گستردگی فضای مجازی، مشخص است که فقط بهترین و با کیفیت ترین کارها توانایی رقابت و باقی ماندن در این حوزه را دارند، لذا در مجموعه ماکان سعی بر ارائه خدمت با بهترین کیفیت است.</p>\r\n','img/Homecontent1picture.jpg','امروزه دنیای مجازی در معرفی کالا و یا خدمات نقش بسزایی دارد. فناوری اطلاعات در زمینه های بسیاری ازجمله اطلاع رسانی، آموزش، خدمات رسانی و فروش کاربرد دارد. استفاده از این قابلیت می تواند به ارتقای کسب و کار به ویژه در دنیای امروز کمک کند. علاوه بر این، اقبال عمومی به استفاده از فناوری اطلاعات در عرصه های مختلف رو به افزایش است و این امکانات به رقابت پذیری مشاغل نیز کمک می کند. از این رو گروه مهندسان فناوری ماکان برای هر یک از زمینه های کاری از جمله شرکت ها و موسسات آموزشی، سایت های اطلاع رسانی کالا و یا خدمات، بسته به نیاز به آماده سازی و طراحی پرتال های اینترنتی با کمترین هزینه اقدام نموده اند. به دلیل گستردگی فضای مجازی، مشخص است که فقط بهترین و با کیفیت ترین کارها توانایی رقابت و باقی ماندن در این حوزه را دارند، لذا در مجموعه ماکان سعی بر ارائه خدمت با بهترین کیفیت است.مشخصه دیگر فضای مجازی و علوم مربوط به فناوری اطلاعات، تغییرات گسترده در مدت زمانی اندک است. این امر باعث از رده خارج شدن سایت هایی خواهد شد که بر این موج تغییرات سوار نیستند. یکی از مهمترین ویژگی های گروه ماکان استفاده از جدیدترین امکانات و اطلاع رسانی به مشتریان جهت نصب و راهاندازی افزونه های جدید است. مساله دیگری که در راه اندازی و نگهداری از سایتها بسیار اهمیت دارد پشتیبانی و به روز بودن مطالب است. این امر به مهمترین مشکل بسیاری از سایتهای طراحی شده تا کنون تبدیل شده است. برای رفع این مشکل در مجموعه ماکان، تیم مخصوص و متعهدی جهت به روز نگه داشتن اطلاعات فعالیت میکنند. شاخص بودن سایت در موتورهای جستجو از دیگر مواردی است که مهندسان گروه ماکان برای افزایش سطح دسترسی به سایتهای طراحی شده مورد توجه قرار میدهند. بهره گیری از نیروهای متعهد و اولویت دادن به کیفیت کارها، مهمترین دغدغه مجموعه ماکان است.\r\n');
/*!40000 ALTER TABLE `homecontent1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecontent2`
--

DROP TABLE IF EXISTS `homecontent2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecontent2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bullet` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `link` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `content` text COLLATE utf8_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecontent2`
--

LOCK TABLES `homecontent2` WRITE;
/*!40000 ALTER TABLE `homecontent2` DISABLE KEYS */;
INSERT INTO `homecontent2` VALUES (1,'طراحی وب سایت  های  شرکتی','#','شرکت­ها و سازمان­ها با داشتن یک سایت حرفه­ای می­توانند رزومه شرکت ، کالاها ، محصولات یا خدمات خود را بدون داشتن محدودیت مکانی و زمانی، معرفی نمایند. اگر طراحی سایت شرکت با توجه به استانداردها انجام شود، شرکت یا سازمان در یک بازه زمانی کوتاه به هدف خود از بازاریابی اینترنتی خواهد رسید. در طراحی سایت­های شرکتی مهمترین نکته، هدف شرکت در استفاده از وبسایت مورد نظر است. غالبا شرکت ­ها با توجه به لزوم به روز نگه داشتن اطلاعات خود از وب سایت­های پویا استفاده می­کنند. همچنین با در نظر گرفتن شرایط کار خواسته شده، می­توان از سیستم­های مدیریت محتوا، قالب و نرم افزارهای اختصاصی نیز بهره برد. در این گونه سایت­ها می­توان قسمتی از سایت را به معرفی شرکت­ و بخش های مختلف آن اختصاص داد. انجام این امر باعث می شود کاربران و مشتریان اعتماد بیشتری نسبت به وجود شرکت در دنیای واقعی نمایند و باعث بهینه شدن این ویژگی مهم برای شرکت ها، مخصوصا شرکت های تجاری شود. تمام موارد فوق برای طراحی یک سایت شرکتی بنا به درخواست مشتری در نظر گرفته شده و در نهایت بسته به میزان زمان و هزینه لازم برای طراحی، بهترین گزینه به وی پیشنهاد داده می­شود. نداشتن محدودیت در اختصاصی بودن یا نبودن طراحی، بهره بردن از تجربه کافی در طراحی و حضور گرافیست­ها و برنامه نویسان مجرب و سئو کاران حرفه­ای در طراحی سایت، از جمله تفاوت های اصلی تاسیس یک سایت شرکتی خوب با یک سایت متوسط می­باشد. گروه ماکان با بهره­گیری از دانش روز و تجربه کافی در این زمینه در صدد است تا سایت­های شرکتی را در هر زمینه کاری متناسب با نوع فعالیتشان، به شیوه­ای منحصر به فرد و کارآمد طراحی کند. بالا بودن رنکینگ سایت در موتورهای جست و جو، به کاربردن قالبی متناسب با نوع خواسته شرکت، نحوه تقسیم بندی اطلاعات و پرهیز از به کار بردن آرایه­های گرافیکی یکنواخت و خسته کننده و ... همگی از مواردی است که توسط متخصصین طراحی و گرافیست­های این گروه در نظر گرفته می­شود تا بهترین کیفیت را در حصول شما به موفقیت ارائه نماید. '),(2,'طراحی وب سایت های فروشگاهی','#','امروزه حرکت و پیشرفت در مسیر تکنولوژی به صورت چشمگیری سریع است و هر روز توسعه و رقابت در عرصه فن­آوری و اینترنت جدی­تر از قبل می­شود، دنیای تجارت نیز در این زمینه عقب نمانده و همسو با سایرین رشد کرده است تا جایی که در بسیاری موارد نیاز بازارهای اقتصادی، باعث سرعت داده شدن به این پیشرفت بوده است. در این میان تولید کنندگان و مصرف کنندگان می­بایست خود را با این جریان تطبیق داده و همگام با تکنولوژی حرکت کنند. مشتریان و متقاضیان کالاها، به دلیل اشتغال فراوان و فرصت کم ، ترافیک زیاد ، آسانی بیشتر و حتی داشتن انتخاب­های بیشتر در فرصت کمتر، ترجیح می­دهند کالای خود را از طریق اینترنت جستجو و در صورت امکان از همان طریق نیز خرید نمایند. به همین دلیل طراحی فروشگاه اینترنتی برای صاحبان مشاغل و عرضه کنندگان کالا، یکی از مهمترین ترین مسائل در عرصه تجارت است. این افراد باید با طراحی فروشگاه­های اینترنتی و به روز نگه داشتن آن، سهم خود را از بازار در این زمینه کنترل کنند و این محیط نسبتا جدید برای رقابت را از دست ندهند. صاحبان مشاغل باید این نکته را در نظر داشته باشند که سایت های فروشگاهی، مشابه یک شعبه 24 ساعته در هفت روز هفته است که می­تواند بهترین مکمل برای توسعه کار آن­ها باشد. قابلیت پرداخت آنلاین، داشتن توضیحات و تصاویر کامل برای محصول، نمایش محصولات مشابه، دسته بندی کامل و طبقه بندی بودن محصولات فروشگاه مجازی، امکان مقایسه ی فیلدهای مختلف محصولات، امکان جست و جوی پیشرفته در دسته بندی­های مختلف، قابلیت ارتباط با واحدهای فروش و ... از ویژگی­های مهم یک سایت فروشگاهی است و باید در طراحی به آن­ها توجه شود. در  گروه فنی ماکان سعی بر آن است تا هدف اصلی سایت­های فروشگاهی که همان جذب جامعه مصرف کننده است، به سادگی تحقق یابد. به کار بردن سئوی قوی، استفاده از قالب­های جذاب و مورد نظر قرار دادن تمام موارد ذکر شده در بالا، گروه ماکان را به یکی از منحصر به فرد ترین متخصصان طراحی اینگونه سایت­ها بدل کرده است.\r\n'),(3,'طراحی وب سایت های اطلاع رسانی ','#','یک وب سایت اطلاع رسانی همان وظیفه­ای را در دنیای مجازی دارد که یک کاتالوگ در دنیای واقعی. برای اینکه یک مجموعه بتواند خدمات و تولیدات خود را  به جامعه معرفی کند، نیازمند داشتن یک بروشور با محتوای کامل و مفید و از نظر ظاهری جذاب است. در سایت­های اطلاع رسانی با توجه به امکانات بسیار زیادی که در اختیار طراحان و گرافیست­ها قرار دارد، می­توان به مراتب زیباتر  کارآمدتر از تبلیغات محیطی به معرفی آن ارگان پرداخت. بهره بردن از تصاویر، متن، انیمیشن، صوت و حتی فیلم­های کوتاه در پایگاه­های اطلاع رسانی، آن­ها را از دیگر روش­ها متمایز می­کند. توجه به این نکته که امکان تولید، نگهداری و همچنین به روز رسانی در سایت­ها بسیار ساده­تر و کم هزینه­تر و البته جامع­تر از سایر روش­هاست، گویای این مطلب است که استفاده از این ابزار اطلاع رسانی، گامی موثر و بلند در رسیدن به اهداف پیش روی صاحبان امر است. گروه ماکان فن­آور در مورد نوع طراحی، توجه به نوع قالب سایت و البته چگونگی طراحی، با بررسی­های  بسیار دقیق و همچنین توجه به این مورد که نداشتن محدودیت زمانی و مکانی در استفاده از خدمات سایت­های اطلاع رسانی­، بهینه بودن سایت از نظر کار در موتورهای جست و جو، به روز بودن نوع اطلاع رسانی سایت و یکنواخت و زننده نبودن محیط پایگاه از نظر گرافیکی، سبب ایجاد مناسب­ترین و با کیفیت­ترین نوع اطلاع رسانی خواهد شد، متقاضیان این نوع خدمات را به بهترین شکل راهنمایی و همراهی خواهد کرد. \r\n'),(4,'بهینه سازی برای موتورهای جستجو','http://makan-tech.ir','سئو به مفهوم بهینه سازی برای عنکبوت ها و موتورهای جستجوگر فضای مجازی می باشد. به عبارت دیگر سایت هایی که دارای سئوی قوی هستند، از لحاظ موتورهای جستجو رتبه بالاتری گرفته و در نتایج جستجوی کاربران پیشتاز می باشند. همه مسائل مهم طراحی یک وب سایت نظیر طراحی پوسته ظاهری، برنامه نویسی سیستم مدیریت محتوا و... در صورتی خروجی موفقی خواهند داشت که از لحاظ موتورهای جستجوگر در فضای مجازی، بهینه باشند. مشکلاتی نظیر استفاده نابجا از تگ ها و کدهای html مشکلاتی هستند که طراح وب سایت می تواند آنها را مد نظر قرار داده و کمترین خطا را داشته باشد. از طرف دیگر در رتبه بندی وب سایت ها علاوه بر تکنیک های طراحی و کدنویسی پرتال، بایستی به محتوا و اصالت آن نیز توجه بسیاری نمود. وب سایتی که از لحاظ کدنویسی سئوی قوی داشته باشد ولی محتویات آن تنها کپی برداری از وب سایتهای دیگر باشد، به هیچ عنوان رتبه مناسبی نخواهد گرفت. به همین منظور تیم مهندسین ماکان علاوه بر آشنایی با آخرین تکنیک های سئو، قادر به طراحی و پیاده سازی سایت هایی با تطابق بالا با استانداردهای موتورهای جستجو می باشند. ضمن اینکه تمامی موارد مورد نیاز برای کسب یک رتبه بالا در فضای مجازی از لحاظ موتورهای جستجوگر معروف، توسط متخصصین ما به مشتریان محترم آموزش داده خواهد شد. \r\n'),(5,'','',''),(6,'','','');
/*!40000 ALTER TABLE `homecontent2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecontent3`
--

DROP TABLE IF EXISTS `homecontent3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecontent3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `subcontent` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `piclink` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecontent3`
--

LOCK TABLES `homecontent3` WRITE;
/*!40000 ALTER TABLE `homecontent3` DISABLE KEYS */;
INSERT INTO `homecontent3` VALUES (1,'خبر 1','متن خلاصه خبر 111111111','#','متن خبر 1'),(2,'خبر 222222','متن خلاصه خبر 2','#','متن خبر 2'),(3,'خبر 3','متن خلاصه خبر 3','#','متن خبر 3'),(4,'خبر 4444444','متن خلاصه خبر 4','#','متن خبر 4');
/*!40000 ALTER TABLE `homecontent3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecontent4`
--

DROP TABLE IF EXISTS `homecontent4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecontent4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_persian_ci,
  `morecontent` text COLLATE utf8_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecontent4`
--

LOCK TABLES `homecontent4` WRITE;
/*!40000 ALTER TABLE `homecontent4` DISABLE KEYS */;
INSERT INTO `homecontent4` VALUES (1,'<p>دفتر مهندسی ماکان شامل دپارتمان های مختلف می باشد که با وظایف کاملاً مشخص نظیر طراح و کد نویس html ، CSS ، javascript و برنامه نویس PHP ، برنامه نویس ASP.NET ، برنامه نویس SQL، طراح پوسته های واکنش گرا، برنامه نویس سیستم های مدیریت محتوا، برنامه نویس C# و گرافیست کاملاً منظم و هماهنگ سازماندهی شده اند.</p>\r\n','دفتر مهندسی ماکان شامل دپارتمان های مختلف می باشد که با وظایف کاملاً مشخص نظیر طراح و کد نویس html ، CSS ، javascript و برنامه نویس PHP ، برنامه نویس ASP.NET ، برنامه نویس SQL، طراح پوسته های واکنش گرا، برنامه نویس سیستم های مدیریت محتوا، برنامه نویس C# و گرافیست کاملاً منظم و هماهنگ سازماندهی شده اند. برنامه ریزی صحیح و تقسیم کامل وظایف در بخشهای مختلف، باعث می شود تا روند انجام یک پروژه دقیق تر، صحیح تر و سریع تر صورت گیرد. همچنین تمامی پرسنل ماکان آشنایی کامل با سیستم ها و نرم افزارهای کنترل پروژه دارند که باعث می شود تا نظارت بر عملکرد مهندسین دقیق تر و کارآمدتر گردد. کلیه تغییرات در سورس پروژه توسط تمامی مهندسین، به صورت آنی توسط مدیر پروژه رصد و ثبت می شود و کلیه مراحل به صورت کاملاً هوشمند صورت می گیرد. هماهنگی مهندسین ما در کارهای گروهی منجر به خروجی های موفق در تمامی پروژه ها شده است.&nbsp;\r\n');
/*!40000 ALTER TABLE `homecontent4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homecontents`
--

DROP TABLE IF EXISTS `homecontents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homecontents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homecontents`
--

LOCK TABLES `homecontents` WRITE;
/*!40000 ALTER TABLE `homecontents` DISABLE KEYS */;
INSERT INTO `homecontents` VALUES (1,'خوش آمدید','http://www.makan-tech.ir'),(2,'توانایی های ما','http://www.makan-tech.ir/ican'),(3,'آخرین اخبار','./news.php'),(4,'تیم فنی ما','http://www.makan-tech.ir/techteam');
/*!40000 ALTER TABLE `homecontents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_menu`
--

DROP TABLE IF EXISTS `main_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_menu` (
  `menuID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `num_submenu` tinyint(4) NOT NULL,
  PRIMARY KEY (`menuID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_menu`
--

LOCK TABLES `main_menu` WRITE;
/*!40000 ALTER TABLE `main_menu` DISABLE KEYS */;
INSERT INTO `main_menu` VALUES (1,'خانه',0),(2,'پشتیبانی',2),(3,'تماس با ما',3);
/*!40000 ALTER TABLE `main_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `piclink` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'#','خبررر 1'),(2,'#','خبر 2'),(3,'#','خببببر 3'),(4,'#','خخخخخبر 4');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ourproducts`
--

DROP TABLE IF EXISTS `ourproducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ourproducts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `piclink` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `textlink` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `moretext` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ourproducts`
--

LOCK TABLES `ourproducts` WRITE;
/*!40000 ALTER TABLE `ourproducts` DISABLE KEYS */;
INSERT INTO `ourproducts` VALUES (1,'#','کدنویسی تخصصی وب سایت ها و پرتال ها','#','دفتر مهندسی ماکان با استفاده از تخصص و دانش تیم فنی خود، کدنویسی تخصصی وب سایت ها را از صفر تا 100 انجام داده و به بهترین شکل، نیازمندیها و موارد مد نظر مشتری را پیاده سازی می نماید. در این فرآیند در ابتدا دپارتمان طراحی پوسته و ظاهر سایت، با استفاده از طرح اولیه هماهنگ شده با مشتری، مراحل طراحی و کدنویسی ظاهر اصلی وب سایت را انجام می دهد. در گام بعدی ماژول ها و امکانات جانبی سایت یا پرتال مورد نظر طراحی و برنامه نویسی شده و در بخش مناسبی در سایت قرار داده می شوند. در صورت نیاز مشتری به افزودن سیستم مدیریت محتوا، تیم تخصصی برنامه نویسی سمت سرور شروع به فعالیت کرده و از مدیریت محتوای ماکان برای سایت مورد نظر استفاده می کند. در صورت نیاز مشتری، تیم مذکور می تواند در کمترین زمان اقدام به طراحی سیستم مدیریت محتوای سفارشی برای مدیریت بهتر سایت مورد نظر نمایند. در نهایت پس از اتمام طراحی پوسته ظاهری و سامانه مدیریت محتوا، عملیات بهینه سازی سایت برای موتورهای جستجوگر انجام می شود. در مراحل فوق علوم مختلفی نظیر برنامه نویسی html، CSS ، Javascript، Jquery ، Ajax ، PHP ، ASP.net و... به کار گرفته می شود. در تمامی مراحل مذکور، تیم فنی گرافیک ماکان نیز به صورت مداوم با تمامی گروه ها تعامل داشته و اقدام به طراحی محتوای گرافیکی مورد نیاز وب سایت می نمایند. \r\n'),(2,'#','طراحی وب سایت های پویا','#','مهندسین ما در طراحی سایت های پویا تجربه بسیار بالایی دارند و با استفاده از سیستم های مدیریت محتوای روز دنیا، اقدام به طراحی و پیاده سازی سایت ها و پرتال های اینترنتی شما می نمایند. می توان گفت در این زمینه، مهمترین کار طراحی و برنامه نویسی پوسته ظاهری وب سایت می باشد که در صورتی که مناسب نیاز مشتری باشد، رضایت فراوان وی را در پی دارد. در بخش برنامه نویسی سمت مرورگر، متخصصین ما وارد شده و ضمن طراحی یک پوسته مناسب این گام مهم طراحی را به خوبی برمی دارند.\r\nمراحل پیاده سازی سیستم های مدیریت محتوا تنها به پوسته ظاهری آنها خاتمه نمی گردد. دانش شناخت کامل استفاده از سامانه مذکور و هسته اصلی آن، شناخت ماژول های مختلف جهت عملی کردن نیازها و خواسته های مشتری، و توانایی سفارشی کردن آنها، همه و همه موارد مهمی هستند که لازمه یک طراحی با کیفیت بالا می باشد. تیم فنی ماکان با اجرایی کردن تمامی موارد مذکور به مشتریان این اطمینان را می دهد که از خروجی نهایی بیشترین رضایت ممکن را داشته باشند. کمااینکه مشتریان قبلی ما نیز اینگونه بوده اند. '),(3,'#','انواع بسته ها و ماژول های جانبی','#','هر دو روش طراحی مبتنی بر کدنویسی صفر تا 100 و طراحی وب سایت های پویا، نیازمند ماژولها و بسته های جانبی مطابق با انتظارات مشتری می باشد. در ادامه برخی از این موارد به اختصار بیان می گردند. <br/> <br/> \r\n\r\n- بهینه سازی تضمینی وب سایت با استفاده از مهارت های سئو و استاندارهای روز موتورهای جستجوگر وب <br/> \r\n- طراحی و پیاده سازی خبرنامه های پیشرفته به همراه سیستم بازاریابی حرفه ای از طریق ایمیل <br/>\r\n- طراحی سامانه اختصاصی مشتریان برای ارائه خدمات مورد نظر  <br/> \r\n- طراحی انواع فرم های مورد نیاز (نظرسنجی، ثبت سفارش فروش کالا و خدمات، قرعه کشی محصولات، تماس و ...) با قابلیت های متنوع و حرفه ای <br/>\r\n- طراحی انواع اسلایدرهای پیشرفته و انواع گالری تصاویر حرفه ای  <br/>\r\n- طراحی سیستم گفتگوی آنلاین به منظور ارتباط با مشتریان و ... <br/> \r\n- اتصال به درگاه های مختلف بانکی کشور برای تبادلات مالی آنلاین (فروش اینترنتی کالا و خدمات و...) <br/>\r\n- طراحی، پیاده سازی و اتصال انواع سامانه های پیامکی به منظور تبلیغات و بازاریابی <br/>\r\n- طراحی تقویم اداری برای درج فعالیتها <br/>\r\n- طراحی و پیاده سازی انواع تالارهای گفتگو با امکانات و قابلیت های متنوع و پیشرفته <br/>\r\n- طراحی انواع سیستم های آمارگیری با ویژگیهای متنوع <br/> \r\n- و ده ها بسته و ماژول متنوع دیگر \r\n<br/><br/> \r\n\r\n\r\n'),(4,'#','طراحی برنامه های تحت وب','#','طراحی و کدنویسی نرم افزارهای مورد نیاز مشتری بر روی پلتفرم های کامپیوتر (ویندوز و...) و تلفن همراه (اندروید، IOS و...) و اتصال آنها به پایگاه داده مورد نظر در فضای وب یکی از خدمات مهم دفتر فنی مهندسی ماکان می باشد. برای نمونه شما می توانید پایگاه داده سیستم فروشگاهی خود بر روی کامپیوتر شخصی را به پایگاه داده فروشگاه آنلاین خود متصل نمایید و مثلاً اعمالی نظیر کنترل موجودی و ... را به صورت همزمان مدیریت کنید. \r\n\r\n');
/*!40000 ALTER TABLE `ourproducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `piclink` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `sublink` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `morecontent` text COLLATE utf8_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'img/page3_pic1.png','<p><span style=\"font-size:18px\"><span style=\"color:rgb(0, 0, 0)\">&nbsp; &nbsp; &nbsp; &nbsp;طراحی وب سایت ایستا</span> &nbsp; <span style=\"color:rgb(255, 255, 255)\">&nbsp; </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#dff1ff\">&nbsp; در این گونه سایت ها همانطور که از نامشان پیداست، طبق درخواست، طراحی اولیه صورت می&shy;گیرد و برای اعمال تغییرات احتمالی بعدی روی آن به یک طراح نیمه حرفه ای نیاز است. برنامه نویسی این نوع وب سایت ها با استفاده از کدهای <span dir=\"LTR\">HTML</span> و <span dir=\"LTR\">CSS</span> و <span dir=\"LTR\">Java Script</span> صورت می&shy;گیرد</span><span style=\"color:dff1ff#\">.</span></span></p>\r\n','#','<p style=\"text-align:justify\"><span style=\"color:#dff1ff\"><span style=\"font-size:18px\">از مزایای سایت&shy;های ثابت، علاوه بر کاهش حجم کدها که باعث خوانایی بشتر صفحات وب سایت توسط موتورهای جستجو می&shy;شود، کاهش زمان بارگذاری و بهتر شدن وضعیت آنها از لحاظ امتیاز دهی یا همان &quot;رنکینگ&quot; را نیز می&shy;توان نام برد. عدم امکان تغییر در آن&shy;ها توسط افراد عادی، افزایش امنیت و ثابت بودن از نظر گرافیکی و ظاهری را تضمین می&shy;کند چرا که همه چیز ثابت است (از جمله متون و اندازه تصاویر) و همچنین همه عناصر مکان مشخص و ثابتی دارند. ولی از طرفی نیز عدم امکان ایجاد تغییرات توسط افراد عادی امکان بروز رسانی را از صاحب آن سلب می&shy;کند، بنابر این وب سایت های ثابت (<span dir=\"LTR\">Static</span>) برای افراد، شرکت ها و سازمان هایی مناسب است که در طول یک سال حداکثر یک یا دو بار نیاز به تغییرات جزئی در محتوای سایت دارند. سایت های ثابت با صرف نظر از بروزرسانی های متوالی، قیمت طراحی پایین تری را نیز نسبت به سایر انواع وب سایت ها دارند.</span></span></p>\r\n'),(2,'img/page3_pic2.png','<p><span style=\"font-size:18px\"><span style=\"color:rgb(0, 0, 0)\">&nbsp; &nbsp; &nbsp; &nbsp;طراحی وب سایت پویا</span> &nbsp; &nbsp; <span style=\"color:rgb(255, 255, 255)\">&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#dff1ff\"><span style=\"font-size:18px\"><span dir=\"RTL\">در وب سایت&shy;های پویا همانند وب سایت&shy;های ایستا طراحی اولیه بر اساس درخواست داده شده صورت می&shy;گیرد، با این تفاوت که محتوای سایت های داینامیک بعد از طراحی توسط افراد عادی که دسترسی به سیستم مدیریت محتوای وب سایت را داشته باشند قابل تغییر است.</span></span></span></p>\r\n','#','<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:rgb(223, 241, 255)\">&nbsp;برنامه نویسی وب سایت های پویا می تواند براساس نیاز متفاوت باشد اما عمدتا از زبان های <span dir=\"LTR\">ASP </span>، <span dir=\"LTR\">ASP.Net</span> و <span dir=\"LTR\">Php</span> استفاده می&zwnj;شود و از زبانهای کمکی <span dir=\"LTR\">CSS</span> و <span dir=\"LTR\">Silver light</span> و یا <span dir=\"LTR\">Ajax</span> برای ایجاد قابلیت های ویژه نیز بهره گرفته می شود.در وب سایت&shy;های پویا طرح اولیه سایت توسط طراح ایجاد می&zwnj;شود و سپس محتوا توسط مدیران سایت تغییر می&zwnj;کند. مانند کمدی که اسکلت آن توسط طراح ساخته شده است و قفسه بندی آن توسط افراد دیگری مطابق میل خودشان تکمیل می گردد. مهمترین مزیت سایت های پویا نداشتن محدودیت در افزودن، حذف و یا ایجاد تغییر جزئی در مطالب، تصاویر و صفحات است، همچنین اعمال این تغییرات به سادگی و توسط خود فرد قابل انجام است. <span dir=\"RTL\">از آنجایی که &nbsp;در سایت های پویا از زبان های برنامه نویسی پیشرفته استفاده می&zwnj;شود، می&shy;توان از امکانات زیاد موجود برای آن&shy;ها مانند ایجاد صفحات داینامیک، فرم ها و جستجوهای پیچیده و ... استفاده کرد. اما لازم به ذکر است به کار گرفتن زیاد از کدها سبب کند شدن بارگذاری سایت ها و کم شدن امتیاز آن در موتورهای جستجو می شود.&nbsp;</span>در نهایت استفاده از این گونه وب سایت&shy;ها برای افراد، شرکت ها و سازمان هایی توصیه می&shy;شود که نیاز به تغییر درمحتوای سایت به صورت نسبتا مداوم دارند.</span></span></p>\r\n'),(3,'img/page3_pic3.png','<p><span style=\"font-size:18px\"><span style=\"color:rgb(0, 0, 0)\">&nbsp; &nbsp; &nbsp; &nbsp;طراحی انواع پرتال های اینترنتی</span> &nbsp; &nbsp;</span> &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\">&nbsp;<span style=\"color:#dff1ff\"> &nbsp; به مجموعه چند سایت پویا که برای رسیدن به هدفی خاص در کنار هم قرار گرفته&shy; اند، پرتال می&shy; گویند. به عنوان مثال پرتال خبری می تواند از چند سایت داینامیک تشکیل شده باشد که هر یک امکانات خاصی چون عضو گیری، انتشار اخبار، انتشار تصاویر، نظر سنجی و ... را در اختیار مدیران آن قرار دهد.&nbsp;تمام ویژگی&zwnj;های یک سایت پویا می تواند در یک پرتال نیز صدق کند.</span></span></p>\r\n','#','<p style=\"text-align:justify\"><span style=\"color:#dff1ff\"><span style=\"font-size:18px\">پرتال&zwnj;ها غالبا برای سازمان&shy;ها، گروه&shy;ها و شرکت&shy;ها خریداری می&shy;شود. لازم به ذکر است، با توجه به ضرورت به روز بودن اطلاعات این گونه پرتال&shy;ها و همچنین زیاد بودن حجم کار، به روز رسانی بخش&shy;های مختلف آن توسط یک فرد بسیار مشکل خواهد بود (مگر آنکه به چشم یک کار حداقل پاره وقت به آن نگاه شود).</span></span></p>\r\n'),(4,'img/page3_pic4.png','<p><span style=\"font-size:18px\"><span style=\"color:rgb(0, 0, 0)\">&nbsp; &nbsp; &nbsp; &nbsp;طراحی و پیاده سازی سیستم های مدیریت محتوا</span> &nbsp; &nbsp; <span style=\"color:rgb(255, 255, 255)\">&nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#dff1ff\"><span style=\"font-size:18px\">سیستم مدیریت محتوا که در عمل به <span dir=\"LTR\">CMS</span> <span dir=\"LTR\">(Content Management System)</span> مشهور است، در پرتال&shy;ها یا سایت&shy;های پویا به کار گرفته می&shy;شود که برای مصارف خاص توسط طراحان حرفه ای و یا شرکت&shy;های طراحی حرفه ای ایجاد می&shy;شود. تمام مزایا و معایب مربوط به سایت&shy;های پویا در مورد سایت&shy;های مجهز به سیستم مدیریت محتوا صدق می کند.</span></span></p>\r\n','#','<p style=\"text-align:justify\"><span style=\"color:#dff1ff\"><span style=\"font-size:18px\">سایت&shy; های پویا و پرتال&shy;ها نیز مجهز به سیستم مدیریت محتوا هستند اما آنچه که در <span dir=\"LTR\">CMS&zwnj;</span>ها متفاوت است، طراحی سیستم&shy;های مدیریت محتوای آن&shy;ها برای مصارف خاص است.&nbsp;از مزایای سیستم&shy;های مدیریت محتوا نسبت به سایر سایت های پویا می&shy;توان به آماده بودن و جامع بودن آنها اشاره کرد، به همین دلیل زمان لازم برای راه اندازی آن&shy;ها نسبتا کمتر است.&nbsp;طراحی سایت های <span dir=\"LTR\">CMS</span> مانند یک خط تولید محصول است و از آنجا که طراح باید نمونه&zwnj;های محدودی را به صورت انبوه تولید کند سعی در رعایت تمام اصول امنیتی، گرافیکی، موارد مربوط به رنکینگ و امتیاز موتورهای جستجو و سایر موارد موثر می کند، به همین دلیل هزینه ایجاد آن&shy;ها به نسبت سایت&shy;های پویا کمی بیشتر است. با توجه به مزیت&shy;های این گونه وب سایت&shy;ها تمامی افراد، سازمان&shy;ها و شرکت&shy;هایی که شرایط داشتن سایت&shy;های پویا را دارند می&shy;توانند سیستم&zwnj;های مدیریت محتوای مخصوص به کار خود را از طراح درخواست نمایند.</span></span></p>\r\n');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submenu1`
--

DROP TABLE IF EXISTS `submenu1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submenu1` (
  `idsubmenu1` tinyint(4) NOT NULL AUTO_INCREMENT,
  `sub1Name` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `sub2menu` tinyint(4) NOT NULL,
  PRIMARY KEY (`idsubmenu1`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submenu1`
--

LOCK TABLES `submenu1` WRITE;
/*!40000 ALTER TABLE `submenu1` DISABLE KEYS */;
INSERT INTO `submenu1` VALUES (1,'پشتیبانی آنلاین',2),(2,'پشتیبانی آفلاین',1),(3,'تماس 1',0),(4,'تماس 2',0),(5,'تماس 3',1);
/*!40000 ALTER TABLE `submenu1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submenu2`
--

DROP TABLE IF EXISTS `submenu2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submenu2` (
  `idsubmenu2` int(11) NOT NULL AUTO_INCREMENT,
  `sub2Name` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`idsubmenu2`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submenu2`
--

LOCK TABLES `submenu2` WRITE;
/*!40000 ALTER TABLE `submenu2` DISABLE KEYS */;
INSERT INTO `submenu2` VALUES (1,'آن 1'),(2,'آن 2'),(3,'آف 1'),(4,'تماس 3 یک');
/*!40000 ALTER TABLE `submenu2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `fname` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `activated` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `securitycode` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mohammad66','1234566','m.mashayekhi66@gmail.com','محمد','مشایخی','1','ef04300c0e4ffdbff410a043bafb6e94');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-13 18:38:37
