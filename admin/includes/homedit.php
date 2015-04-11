<?php
if(isset($_POST['piclink'])){
    $postArray['piclink'] = $_POST['piclink'];
    $postArray['content'] = $_POST['content'];
    $postArray['maincontent'] = $_POST['maincontent'];
    if (homecontent1::UpdateHomecontent1($postArray))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}elseif(isset($_POST['link1'])){
    $posthome2['link1'] = $_POST['link1'];
    $posthome2['bullet1'] = $_POST['bullet1'];
    $posthome2['content1'] = $_POST['bulletcontent1'];
    $posthome2['link2'] = $_POST['link2'];
    $posthome2['bullet2'] = $_POST['bullet2'];
    $posthome2['content2'] = $_POST['bulletcontent2'];
    $posthome2['link3'] = $_POST['link3'];
    $posthome2['bullet3'] = $_POST['bullet3'];
    $posthome2['content3'] = $_POST['bulletcontent3'];
    $posthome2['link4'] = $_POST['link4'];
    $posthome2['bullet4'] = $_POST['bullet4'];
    $posthome2['content4'] = $_POST['bulletcontent4'];
    $posthome2['link5'] = $_POST['link5'];
    $posthome2['bullet5'] = $_POST['bullet5'];
    $posthome2['content5'] = $_POST['bulletcontent5'];
    $posthome2['link6'] = $_POST['link6'];
    $posthome2['bullet6'] = $_POST['bullet6'];
    $posthome2['content6'] = $_POST['bulletcontent6'];

    if (homecontent2::UpdateHomecontent2($posthome2))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}elseif(isset($_POST['subnews1'])){
    $posthome3['subtitle1'] = $_POST['subnews1'];
    $posthome3['subcontent1'] = $_POST['subcontnews1'];
    $posthome3['subtitle2'] = $_POST['subnews2'];
    $posthome3['subcontent2'] = $_POST['subcontnews2'];
    $posthome3['subtitle3'] = $_POST['subnews3'];
    $posthome3['subcontent3'] = $_POST['subcontnews3'];
    $posthome3['subtitle4'] = $_POST['subnews4'];
    $posthome3['subcontent4'] = $_POST['subcontnews4'];
    if (homecontent3::UpdateHomecontent3($posthome3))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}elseif(isset($_POST['teamcontent'])){
    $posthome4['content'] = $_POST['teamcontent'];
    $posthome4['morecontent'] = $_POST['morecontent'];
    if (homecontent4::UpdateHomecontent4($posthome4))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}
$homecontent1 = homecontent1::getAllHomeContent1();
$homecontents2 = homecontent2::getAllHomeContent2();
$homecontents3 = homecontent3::getAllHomeContent3();
$homecontent4 = homecontent4::getAllHomeContent4();
?>
<div class="centerpanel">
    <div class="centerpanelheader">ویرایش خانه (ستون اول)</div>
    <form method="post">
        <table>
            <tr>
                <td width="100">
            لینک عکس :
                </td>
                <td>
                    <input size="100" type="text" name="piclink" value="<?php echo $homecontent1[0]->picturelink ?>" />
                </td>
            </tr>
            <tr>
                <td width="100">
                    متن خلاصه :
                </td>
                <td colspan="2">
                    <textarea name="content" style="height:500px;width:711px;text-align: justify;padding: 10px "><?php echo $homecontent1[0]->content ?></textarea>
                </td>
            </tr>
            </br>
            <tr>
                <td width="100">
                    متن اصلی :
                </td>
                <td colspan="2">
                    <textarea name="maincontent" style="height:500px;width:711px;text-align: justify;padding: 10px " ><?php echo $homecontent1[0]->maincontent ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input  type="submit" value="ذخیره" />
                </td>
            </tr>
        </table>
    </form>
<!--    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('area', {language: 'fa'});
        CKEDITOR.replace('area12', {language: 'fa'});
    </script>-->

    </br></br>

    <div class="centerpanelheader">ویرایش خانه (ستون دوم)</div>
    <form method="post">
            <?php
                foreach($homecontents2 as $homecontent2){
                    ?>
                <table>
                <tr>آیتم شماره  <?php echo $homecontent2->id ?></tr>
                 <tr>
                <td width="100">
                    لینک :
                </td>
                <td>
                    <input size="100" type="text" name="link<?php echo $homecontent2->id ?>" value="<?php echo $homecontent2->link ?>" />
                </td>
                </tr>
            <tr>
                <td width="100">
                    عنوان :
                </td>
                <td>
                    <input size="100" type="text" name="bullet<?php echo $homecontent2->id ?>" value="<?php echo $homecontent2->bullet ?>" />
                </td>
            </tr>
                    <tr>
                        <td width="100">
                            متن توضیحات :
                        </td>
                        <td colspan="2">
                            <textarea style="height:500px;width:711px;text-align: justify;padding: 10px " name="bulletcontent<?php echo $homecontent2->id ?>"><?php echo $homecontent2->content ?></textarea>
                        </td>
                    </tr>
            </table>
            <!--<script src="ckeditor/ckeditor.js"></script>
            <script>
                 CKEDITOR.replace('areahome2_<?php /*echo $homecontent2->id */?>', {language: 'fa'});
            </script>-->
            <?php
                }
            ?>
        </br>
        <tr>
            <td colspan="4">
                <input  type="submit" value="ذخیره" />
            </td>
        </tr>
    </form>

    </br></br>

    <div class="centerpanelheader">ویرایش خانه (ستون سوم)</div>
    <p style="font-weight: 600;color: brown;margin-bottom: 5px">برای تغییر خلاصه خبرها با استفاده از ادیتور پیشرفته به صفحه اخبار مراجعه شود</p>
    <form method="post">
        <?php
        foreach($homecontents3 as $homecontent3){
            ?>
            <table>
                <tr>آیتم شماره  <?php echo $homecontent3->id ?></tr>
                <tr>
                    <td width="100">
                        عنوان :
                    </td>
                    <td>
                        <input size="100" type="text" name="subnews<?php echo $homecontent3->id ?>" value="<?php echo $homecontent3->subtitle ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        خلاصه خبر :
                    </td>
                    <td>
                        <input size="100" type="text" name="subcontnews<?php echo $homecontent3->id ?>" value="<?php echo $homecontent3->subcontent ?>" />
                    </td>
                </tr>
            </table>
        <?php
        }
        ?>
        </br>
        <tr>
            <td colspan="4">
                <input  type="submit" value="ذخیره" />
            </td>
        </tr>
    </form>

    </br></br>

    <div class="centerpanelheader">ویرایش خانه (ستون چهارم)</div>
    <form method="post">
            <table>
                <tr>
                    <td colspan="2">
                        تغییر متن تیم فنی ما
                    </td>
                    <td colspan="2">
                        <textarea name="teamcontent" id="area2"><?php echo $homecontent4[0]->content ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        تغییر متن تیم فنی ما
                    </td>
                    <td colspan="2">
                        <textarea name="morecontent" id="area3"><?php echo $homecontent4[0]->morecontent ?></textarea>
                    </td>
                </tr>
            </table>
        </br>
        <tr>
            <td colspan="4">
                <input  type="submit" value="ذخیره" />
            </td>
        </tr>
    </form>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('area2', {language: 'fa'});
        CKEDITOR.replace('area3', {language: 'fa'});
    </script>

    </br></br>


</div>