<?php
if(isset($_POST['piclink'])){
    $postArray['piclink'] = $_POST['piclink'];
    $postArray['content'] = $_POST['content'];
    if (homecontent1::UpdateHomecontent1($postArray))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}elseif(isset($_POST['link1'])){
    $posthome2['link1'] = $_POST['link1'];
    $posthome2['bullet1'] = $_POST['bullet1'];
    $posthome2['link2'] = $_POST['link2'];
    $posthome2['bullet2'] = $_POST['bullet2'];
    $posthome2['link3'] = $_POST['link3'];
    $posthome2['bullet3'] = $_POST['bullet3'];
    $posthome2['link4'] = $_POST['link4'];
    $posthome2['bullet4'] = $_POST['bullet4'];
    $posthome2['link5'] = $_POST['link5'];
    $posthome2['bullet5'] = $_POST['bullet5'];
    $posthome2['link6'] = $_POST['link6'];
    $posthome2['bullet6'] = $_POST['bullet6'];
    if (homecontent2::UpdateHomecontent2($posthome2))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}
$homecontent1 = homecontent1::getAllHomeContent1();
$homecontents2 = homecontent2::getAllHomeContent2();
$homecontent3 = homecontent3::getAllHomeContent3();
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
                <td colspan="2">
                    <textarea name="content" id="area"><?php echo $homecontent1[0]->content ?></textarea>
                </td>
            </tr>
            </br>
            <tr>
                <td colspan="4">
                    <input  type="submit" value="ذخیره" />
                </td>
            </tr>
        </table>
    </form>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('area', {language: 'fa'});
    </script>

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


</div>