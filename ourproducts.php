﻿<?php
require_once("includes/includes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<title>ماکان</title>
<link href="css/ourproducts.css" rel="stylesheet" />
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
        var pattern4 = /home\.php/;
        var pattern5 = /contactus\.php/;
        var pattern6 = /news\.php/;

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
<img src="img/Makan logo.png" alt="logo" title="دفتر طراحی و  پیاده سازی سایت  های اینترنتی ماکان" />
</a>
</div>  
<div id="wrapper">
<div id="menuthispage">
<div id="main">
<div id="home" class="menu" onmouseenter="select1()" onmouseleave="out1()"><a href="home.php" id="subhome" class="submenu"></a><p class="text">خانه</p></div>
    <div id="aboutus" class="menu" onmouseenter="select2()" onmouseleave="out2()"><a href="aboutus.php" id="subaboutus" class="submenu"></a>

        <p class="text">درباره ما</p></div>
    <div id="service" class="menu" onmouseenter="select3()" onmouseleave="out3()"><a href="services.php" id="subservice" class="submenu"></a>

        <p class="text">خدمات ما</p></div>
<div id="products" class="menu" onmouseenter="select4()" onmouseleave="out4()"><a href="#" id="subproducts"class="submenu"></a><p class="text">تعرفه ها</p></div>
    <div id="blog" class="menu" onmouseenter="select5()" onmouseleave="out5()"><a href="news.php" id="subblog" class="submenu"></a>

        <p class="text">آخرین اخبار</p></div>
    <div id="mail" class="menu" onmouseenter="select6()" onmouseleave="out6()"><a href="contactus.php" id="submail" class="submenu"></a>

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
<div id="content">

    <div id="ourprodutstitle">
        تعرفه ها
    </div>



    <div id="ourproductscontent">

        <?php
        $products = Ourproducts::getAllProducts();
        $product_nums = (Ourproducts::getAllProducts()) ? count(Ourproducts::getAllProducts()) : 0;
        if ($product_nums>0){
            foreach($products as $product) {
                ?>
                <div class="pictureandtext">
                    <div class="picture"><img src="<?php echo "$product->piclink" ?>"/></div>
                    <div class="ourproductstext"><a href="<?php echo "$product->textlink" ?>"><?php echo "$product->text" ?></a></div>
                </div>
            <?php
            }
        }else{
            echo "هیچ گونه نمونه کاری وجود ندارد";
        }
        ?>

    </div>
</div>
</div>
<p  class="footer" id="footername">تمام حقوق مادی و معنوی این سایت متعلق به دفتر خدمات طراحی وب سایت ماکان است</p>
<p class="footer" id="footeraddress"><br />آدرس:اصفهان خیابان میرداماد بعد از چهارراه زاهد طبقه فوقانی دفتر اسناد رسمی 410 </p>
<p class="footer" id="footertelefon">تلفن:32352016-031 تلفکس:32362237-031</p>
</body>
</html>
