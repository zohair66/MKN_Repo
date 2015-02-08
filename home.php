<?php
require_once("includes/includes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<title>ماکان</title>
<script  src="js/jquery-1.10.2.js"></script>
<link href="css/home.css" rel="stylesheet" />
<script src="js/home.js"></script>
    <?php
    if (isset($_SERVER['HTTP_REFERER'])){
        $get_referer = $_SERVER['HTTP_REFERER'];
    ?>
    <script>
        firstpage = 1;
        linksite = '<?php echo $get_referer?>';

        var pattern1 = /makan1\.php/;
        var pattern2 = /aboutus\.php/;
        var pattern3 = /services\.php/;
        var pattern4 = /ourproducts\.php/;
        var pattern5 = /news\.php/;
        var pattern6 = /contactus\.php/;

        if (pattern1.test(linksite)) {
            firstpage = 1;
        }
        else if (pattern2.test(linksite)) {
            firstpage = 0;
        }
        else if (pattern3.test(linksite)) {
            firstpage = 0;
        }
        else if (pattern4.test(linksite)) {
            firstpage = 0;
        }
        else if (pattern5.test(linksite)) {
            firstpage = 0;
        }
        else if (pattern6.test(linksite)) {
            firstpage = 0;
        }
        <?php
        }
        ?>


    </script>

</head>
<body onload="bodycontentload()">

<div id="logocontainer">
<a href="makan1.php">
    <img src="img/Makan logo.png" alt="logo" title="دفتر طراحی و  پیاده سازی سایت  های اینترنتی ماکان"/>
</a>
</div>  
<div id="wrapper">
<div id="menuthispage">
<div id="main">
<div id="home" class="menu" onmouseenter="select1()"><a href="#" id="subhome" class="submenu"></a><p class="text">خانه</p></div>
    <div id="aboutus" class="menu" onmouseenter="select2()"><a href="aboutus.php" id="subaboutus" class="submenu"></a>

        <p class="text">درباره ما</p></div>
    <div id="service" class="menu" onmouseenter="select3()"><a href="services.php" id="subservice" class="submenu"></a>

        <p class="text">خدمات ما</p></div>
    <div id="products" class="menu" onmouseenter="select4()"><a href="ourproducts.php" id="subproducts"
                                                                class="submenu"></a>

        <p class="text">نمونه کارها</p></div>
    <div id="blog" class="menu" onmouseenter="select5()"><a href="news.php" id="subblog" class="submenu"></a>

        <p class="text">آخرین اخبار</p></div>
    <div id="mail" class="menu" onmouseenter="select6()"><a href="contactus.php" id="submail" class="submenu"></a>

        <p class="text">ارتباط با ما</p></div>
</div>

</div>
    <div id="beforepagemain">
        <div id="homebefor" class="menu"></div>
        <div id="aboutusbefor" class="menu"></div>
        <div id="servicebefor" class="menu"></div>
        <div id="productsbefor" class="menu"></div>
        <div id="blogbefor" class="menu"></div>
        <div id="mailbefor" class="menu"></div>
    </div>
    <?php
        $homecontents = homecontents::getAllHomeContents();
        $homecontent1 = homecontent1::getAllHomeContent1();
    ?>
<div id="content">
<div id="homecontent1" class="homecontent">
<p id="homecontent1title" class="homecontenttitle"><?php echo $homecontents[0]->title ?></p>
<div id="homecontent1picture" class="homecontent1">
    <img src="<?php echo $homecontent1[0]->picturelink  ?>">
</div>
<div id="homecontent1text" class="homecontent1"><?php echo $homecontent1[0]->content ?></div>
<a href="<?php echo $homecontents[0]->link ?>" id="homecontent1more" class="homecontentmore">اطلاعات بیشتر</a>

</div>
<div id="homecontent2" class="homecontent">

    <p id="homecontent2title" class="homecontenttitle"><?php echo $homecontents[1]->title ?></p>
    <div id="homecontent2table">

        <?php
        $homecontent2 = homecontent2::getAllHomeContent2();
        ?>

        <ul>
            <?php
            foreach($homecontent2 as $bullet){?>
                <li><a href="<?php echo $bullet->link ?>"><?php echo $bullet->bullet ?></a></li>
            <?php
            }
            ?>
        </ul>

    </div>
    <a href="<?php echo $homecontents[1]->link ?>" id="homecontent2more" class="homecontentmore">اطلاعات بیشتر</a>


</div>


    <?php
        $homecontent3 = homecontent3::getAllHomeContent3();
    ?>

<div id="homecontent3" class="homecontent">

    <p id="homecontent3title" class="homecontenttitle"><?php echo $homecontents[2]->title ?></p>

    <?php
        foreach($homecontent3 as $news){?>
            <div class="homecontent3">
                <p class="homecontent3title"><?php echo $news->subtitle ?></p>
                <p class="homecontent3text"><?php echo $news->subcontent ?></p>
            </div>
    <?php
    }
?>

    <a href="<?php echo $homecontents[2]->link ?>" id="homecontent3more" class="homecontentmore">اطلاعات بیشتر</a>




</div>

    <?php
        $homecontent4 = homecontent4::getAllHomeContent4();
    ?>

<div id="homecontent4" class="homecontent">

    <p id="homecontent4title" class="homecontenttitle"><?php echo $homecontents[3]->title ?></p>
    <div id="homecontent4txet">
        <?php echo $homecontent4[0]->content ?>
    </div>

    <a href="<?php echo $homecontents[3]->link ?>" id="homecontent4more" class="homecontentmore">اطلاعات بیشتر</a>

</div>
</div>
</div>
<p  class="footer" id="footername">تمام حققوق مادی و معنوی این سایت متعلق به دفتر خدمات طراحی وب سایت ماکان است</p>
<p class="footer" id="footeraddress"><br />آدرس:اصفهان خیابان میرداماد بعد از چهارراه زاهد طبقه فوقانی دفتر اسناد رسمی 410 </p>
<p class="footer" id="footertelefon">تلفن:32352016-031 تلفکس:32362237-031</p>
</body>
</html>
