﻿<?php
require_once("includes/includes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<title>ماکان</title>
<link href="css/services.css" rel="stylesheet" />
<script src="js/services.js"></script>
    <?php
    if (isset($_SERVER['HTTP_REFERER'])){
    $get_referer = $_SERVER['HTTP_REFERER'];
    ?>
    <script>
        firstpage = 1;
        linksite = '<?php echo $get_referer?>';

        var pattern1 = /makan1\.php/;
        var pattern2 = /aboutus\.php/;
        var pattern3 = /home\.php/;
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
<img src="img/logo.png" alt="logo" title="دفتر طراحی و  پیاده سازی سایت  های اینترنتی ماکان" />
</a>
</div>  
<div id="wrapper">
<div id="menuthispage">
<div id="main">
<div id="home" class="menu" onmouseenter="select1()"><a href="home.php" id="subhome" class="submenu"></a><p class="text">خانه</p></div>
    <div id="aboutus" class="menu" onmouseenter="select2()"><a href="aboutus.php" id="subaboutus" class="submenu"></a>

        <p class="text">درباره ما</p></div>
<div id="service" class="menu" onmouseenter="select3()"><a href="#" id="subservice"  class="submenu"></a><p class="text">خدمات ما</p></div>
    <div id="products" class="menu" onmouseenter="select4()"><a href="ourproducts.php" id="subproducts"
                                                                class="submenu"></a>

        <p class="text">نمونه کارها</p></div>
    <div id="blog" class="menu" onmouseenter="select5()"><a href="news.php" id="subblog" class="submenu"></a>

        <p class="text">آخرین اخبار</p></div>
    <div id="mail" class="menu" onmouseenter="select6()"><a href="contactus.php" id="submail" class="submenu"></a>

        <p class="text">ارتباط با ما</p></div>
</div>
<div id="beforepagemain">
<div id="homebefor" class="menu"></div>
<div id="aboutusbefor" class="menu"></div>
<div id="servicebefor" class="menu"></div>
<div id="productsbefor" class="menu"></div>
<div id="blogbefor" class="menu"></div>
<div id="mailbefor" class="menu"></div>
</div>
</div>

<div id="content">

    <?php
    $Services = Services::getAllServiceRecordes();
    $service_nums = (Services::getAllServiceRecordes()) ? count(Services::getAllServiceRecordes()) : 0;
    if($service_nums>0) {
        foreach ($Services as $service) {
            ?>
            <div class="servicescontent">
            <img  src="<?php echo $service->piclink ?>" class="servisespicture"/>
            <a href="<?php echo $service->sublink ?>" class="sservicesreadmore" >اطلاعات بیشتر</a>
            <p class="servicestext"><?php echo $service->text ?></p></div>
        <?php
        }
    }else{
        echo "هیچ گونه خدماتی در جدول وارد نشده است";
    }
    ?>


<!--<div id="servicescontent1" class="servicescontent">-->
<!--    <img  src="img/page3_pic1.png" class="servisespicture"/>-->
<!--    <a href="#" class="sservicesreadmore" >اطلاعات بیشتر</a>-->
<!--    <p class="servicestext">daftar tarahi website makan</p>-->
<!---->
<!--</div>-->
<!--<div id="servicescontent2" class="servicescontent">-->
<!--    <img  src="img/page3_pic2.png" class="servisespicture"/>-->
<!--    <a href="#" class="sservicesreadmore">اطلاعات بیشتر</a>-->
<!--    <p class="servicestext">daftar tarahi website makan</p>-->
<!--</div>-->
<!---->
<!---->
<!--<div id="servicescontent3" class="servicescontent">-->
<!--    <img  src="img/page3_pic3.png" class="servisespicture"/>-->
<!--    <a href="#" class="sservicesreadmore">اطلاعات بیشتر</a>-->
<!--    <p class="servicestext">daftar tarahi website makan</p>-->
<!--</div>-->
<!--<div id="servicescontent4" class="servicescontent">-->
<!--    <img  src="img/page3_pic4.png" class="servisespicture"/>-->
<!--    <a href="#" class="sservicesreadmore">اطلاعات بیشتر</a>-->
<!--    <p class="servicestext">daftar tarahi website makan</p>-->
<!--</div>-->

</div>
</div>
<p  class="footer" id="footername">تمام حققوق مادی و معنوی این سایت متعلق به دفتر خدمات طراحی وب سایت ماکان است</p>
<p class="footer" id="footeraddress"><br />آدرس:اصفهان خیابان میرداماد بعد از چهارراه زاهد طبقه فوقانی دفتر اسناد رسمی 410 </p>
<p class="footer" id="footertelefon">تلفن:32352016-031 تلفکس:32362237-031</p>
</body>
</html>
