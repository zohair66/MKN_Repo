<?php
require_once("includes/includes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<title>ماکان</title>
<link href="css/aboutus.css" rel="stylesheet" />
<script src="js/home.js"></script>
    <?php
    if (isset($_SERVER['HTTP_REFERER'])){
    $get_referer = $_SERVER['HTTP_REFERER'];
    ?>
    <script>
        firstpage = 1;
        linksite = '<?php echo $get_referer?>';

        var pattern1 = /makan1\.php/;
        var pattern2 = /services\.php/;
        var pattern3 = /ourproducts\.php/;
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
    <img src="img/Makan logo.png" alt="logo" title="دفتر طراحی و  پیاده سازی سایت  های اینترنتی ماکان"/>
</a>
</div>  
<div id="wrapper">
<div id="menuthispage">
<div id="main">
<div id="home" class="menu" onmouseenter="select1()" onmouseleave="out1()"><a href="home.php" id="subhome" class="submenu"></a><p class="text">خانه</p></div>
<div id="aboutus" class="menu"  ><a href="#" id="subaboutus" class="submenu"></a><p class="text">درباره ما</p></div>
    <div id="service" class="menu" onmouseenter="select3()" onmouseleave="out3()"><a href="services.php" id="subservice" class="submenu"></a>

        <p class="text">خدمات ما</p></div>
    <div id="products" class="menu" onmouseenter="select4()" onmouseleave="out4()"><a href="ourproducts.php" id="subproducts"
                                                                class="submenu"></a>

        <p class="text">تعرفه ها</p></div>
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

    <?php
        $aboutus1 = aboutus1::getAllaboutus1();
        $aboutus2 = aboutus2::getAllaboutus2();
    ?>
<div id="content">

<div id="aboutuscontent1" class="aboutuscontent">
    <div class="aboutuscontenttitle"><?php echo $aboutus1[0]->title ?></div>
    <div id="aboutuscontent1pictrue" class="aboutuscontent1"><img src="<?php echo $aboutus1[0]->picturelink ?>"/></div>
    <div id="aboutuscontent1text" class="aboutuscontent1"><?php echo $aboutus1[0]->textcontent ?></div>
</div>
<div id="aboutuscontent2" class="aboutuscontent">
    <div class="aboutuscontenttitle"><?php echo $aboutus2[0]->title ?></div>
    <div>
        <div class="aboutusconten2"><img src="<?php echo $aboutus2[0]->piclink1 ?>"  onclick="image1()"/></div>
        <div class="aboutusconten2"><img src="<?php echo $aboutus2[0]->piclink2 ?>" onclick="image2()"/></div>
        <div class="aboutusconten2"><img src="<?php echo $aboutus2[0]->piclink3 ?>" onclick="image3()"/></div>
        <div class="aboutusconten2"><img src="<?php echo $aboutus2[0]->piclink4 ?>" onclick="image4()"/></div>
        <div class="aboutusconten2"><img src="<?php echo $aboutus2[0]->piclink5 ?>" onclick="image5()"/></div>
        <div class="aboutusconten2"><img src="<?php echo $aboutus2[0]->piclink6 ?>" onclick="image6()"/></div>
    </div>
</div>

</div>

</div>
<p  class="footer" id="footername">تمام حقوق مادی و معنوی این سایت متعلق به دفتر خدمات طراحی وب سایت ماکان است</p>
<p class="footer" id="footeraddress"><br />آدرس:اصفهان خیابان میرداماد بعد از چهارراه زاهد طبقه فوقانی دفتر اسناد رسمی 410 </p>
<p class="footer" id="footertelefon">تلفن:32352016-031 تلفکس:32362237-031</p>
<div id="black1" class="black" onclick="hiddenimage1()" ></div>
<div  id="picture1" class="picture"><img src="img/airanslp_A.jpg"/> </div>
<div  id="picture2" class="picture"><img src="img/mycomlife_A.jpg"/> </div>
<div  id="picture3" class="picture"><img src="img/loknatesf_A.jpg"/> </div>
<div  id="picture4" class="picture"><img src="img/kianaonline_A.jpg"/> </div>

</body>
<script>
    function image1(){
        document.getElementById('picture1').style.visibility = 'visible';
        document.getElementById('black1').style.visibility = 'visible';
        document.getElementById('black1').style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    }
    function image2(){
        document.getElementById('picture2').style.visibility = 'visible';
        document.getElementById('black1').style.visibility = 'visible';
        document.getElementById('black1').style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    }
    function image3(){
        document.getElementById('picture3').style.visibility = 'visible';
        document.getElementById('black1').style.visibility = 'visible';
        document.getElementById('black1').style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    }
    function image4(){
        document.getElementById('picture4').style.visibility = 'visible';
        document.getElementById('black1').style.visibility = 'visible';
        document.getElementById('black1').style.backgroundColor = "rgba(0, 0, 0, 0.8)";
    }
    function hiddenimage1(){
        document.getElementById('picture1').style.visibility = 'hidden';
        document.getElementById('picture2').style.visibility = 'hidden';
        document.getElementById('picture3').style.visibility = 'hidden';
        document.getElementById('picture4').style.visibility = 'hidden';
        document.getElementById('black1').style.backgroundColor = "rgba(0, 0, 0, 0.0)";
        document.getElementById('black1').style.visibility = 'hidden';
    }
</script>
</html>
