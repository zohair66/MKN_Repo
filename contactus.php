<?php
require_once("includes/includes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>ماکان</title>
    <script src="js/jquery-1.10.2.js"></script>
    <link href="css/contactus.css" rel="stylesheet"/>
    <script src="js/contactus.js"></script>
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
        var pattern6 = /home\.php/;

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
        <img src="img/logo.png" alt="logo" title="دفتر طراحی و  پیاده سازی سایت  های اینترنتی ماکان"/>
    </a>
</div>
<div id="wrapper">
    <div id="menuthispage">
        <div id="main">
            <div id="home" class="menu" onmouseenter="select1()"><a href="home.php" id="subhome" class="submenu"></a>

                <p class="text">خانه</p></div>
            <div id="aboutus" class="menu" onmouseenter="select2()"><a href="aboutus.php" id="subaboutus"
                                                                       class="submenu"></a>

                <p class="text">درباره ما</p></div>
            <div id="service" class="menu" onmouseenter="select3()"><a href="services.php" id="subservice"
                                                                       class="submenu"></a>

                <p class="text">خدمات ما</p></div>
            <div id="products" class="menu" onmouseenter="select4()"><a href="ourproducts.php" id="subproducts"
                                                                        class="submenu"></a>

                <p class="text">نمونه کارها</p></div>
            <div id="blog" class="menu" onmouseenter="select5()"><a href="news.php" id="subblog" class="submenu"></a>

                <p class="text">آخرین اخبار</p></div>
            <div id="mail" class="menu" onmouseenter="select6()"><a href="#" id="submail" class="submenu"></a>

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
    <?php
    $homecontents = homecontents::getAllHomeContents();
    $homecontent1 = homecontent1::getAllHomeContent1();
    ?>
    <div id="content">
        <div class="contactuscontent">
            <div class="contentheaders"> محل دفتر بر روی نقشه</div>
            <div class="contenttext">
                <figure class="g_map">
                    <iframe
                        src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </figure>
            </div>
        </div>
        <div class="contactuscontent">
            <div class="contentheaders"></div>
            <div class="contenttext">اصفهان خیابان طیب خیابان میرداماد بعد از چهار راه زاهد طبقه فوقانی دفتر اسناد رسمی
                410
            </div>
        </div>
        <div class="contactuscontent">
            <div class="contentheaders">تماس با ما</div>
            <div class="contenttext">
                <div id="form">
                    <form action="makan1.html" method="get" enctype="text/plain" onsubmit="return validate();">

                        <table>
                            <tr>
                                <td>نام و نام خانوادگی
                                </td>
                                <td>
                                    <input type="text" name="text1" id="text1" oninvalid="Invalidname(this);"
                                           oninput="Invalidname(this);"
                                           placeholder="فارسی" required="required"/><span id="namespan"
                                                                                          style="color: red"></span>
                                </td>
                            </tr>

                            <tr>
                                <td>شماره تماس (موبایل)
                                </td>
                                <td>
                                    <input type="text" name="text2" id="text2" oninvalid="Invalidtel(this);"
                                           oninput="Invalidtel(this);"
                                           placeholder="09130000000" required="required"/><span id="telspan"
                                                                                                style="color: red"></span>
                                </td>
                            </tr>

                            <tr>
                                <td>ایمیل
                                </td>
                                <td>
                                    <input type="email" name="email" id="email" placeholder="example@gmail.com"
                                           oninvalid="Invalidmail(this);"
                                           oninput="Invalidmail(this);" required="required"/><span id="emailspan"
                                                                                                   style="color: red"></span>
                                </td>
                            </tr>

                            <tr>
                                <td>شخص حقیق یا حقوقی
                                </td>
                                <td>
                                    <select name="s1">
                                        <option value="1">حقیقی</option>
                                        <option value="2">حقوقی</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>آیا مایل به دریافت ایمیل هستید؟
                                </td>
                                <td>
                                    <input type="checkbox" name="checkbox" checked="checked"/>
                                </td>
                            </tr>

                            <tr>
                                <td>خلاصه ای از سایت مورد نظر
                                </td>
                                <td>
                                    <textarea name="textarea" maxlength="30"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="send" value="ارسال"/>
                                    <input type="reset" name="reset " value="نوسازی"/>
                                </td>
                            </tr>
                        </table>

                    </form>

        </div>
            </div>
        </div>



    </div>
</div>
<p class="footer" id="footername">تمام حققوق مادی و معنوی این سایت متعلق به دفتر خدمات طراحی وب سایت ماکان است</p>

<p class="footer" id="footeraddress"><br/>آدرس:اصفهان خیابان میرداماد بعد از چهارراه زاهد طبقه فوقانی دفتر اسناد رسمی
    410 </p>

<p class="footer" id="footertelefon">تلفن:32352016-031 تلفکس:32362237-031</p>
</body>
</html>
