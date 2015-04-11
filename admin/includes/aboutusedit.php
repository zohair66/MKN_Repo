<?php
if(isset($_POST['title1'])){
    $aboutus1array['title'] = $_POST['title1'];
    $aboutus1array['picturelink'] = $_POST['piclink1'];
    $aboutus1array['textcontent'] = $_POST['content1'];
    if(aboutus1::UpdateAboutus1($aboutus1array))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}elseif(isset($_POST['title2'])){
    $aboutus2array['title'] = $_POST['title2'];
    $aboutus2array['piclink1'] = $_POST['piclink21'];
    $aboutus2array['piclink2'] = $_POST['piclink22'];
    $aboutus2array['piclink3'] = $_POST['piclink23'];
    $aboutus2array['piclink4'] = $_POST['piclink24'];
    $aboutus2array['piclink5'] = $_POST['piclink25'];
    $aboutus2array['piclink6'] = $_POST['piclink26'];
    if(aboutus2::UpdateAboutus2($aboutus2array))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}

$aboutus1s = aboutus1::getAllaboutus1();
$aboutus2s = aboutus2::getAllaboutus2();
?>
<div class="centerpanel">
    <div class="centerpanelheader">ویرایش درباره ما (ستون اول)</div>
    <form method="post">
        <table>
            <tr>
                <td width="100">
                    عنوان :
                </td>
                <td>
                    <input size="100" type="text" name="title1" value="<?php echo $aboutus1s[0]->title ?>" />
                </td>
            </tr>
            <tr>
                <td width="100">
                    لینک عکس :
                </td>
                <td>
                    <input size="100" type="text" name="piclink1" value="<?php echo $aboutus1s[0]->picturelink ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content1" id="area"><?php echo $aboutus1s[0]->textcontent ?></textarea>
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

    <div class="centerpanelheader">ویرایش درباره ما (ستون دوم)</div>
    <form method="post">
    <table>
        <tr>
            <td width="100">
                عنوان :
            </td>
            <td>
                <input size="100" type="text" name="title2" value="<?php echo $aboutus2s[0]->title ?>" />
            </td>
        </tr>
        <tr>
            <td width="100">
                لینک عکس اول :
            </td>
            <td>
                <input size="100" type="text" name="piclink21" value="<?php echo $aboutus2s[0]->piclink1 ?>" />
            </td>
        </tr>
        <tr>
            <td width="100">
                لینک عکس دوم :
            </td>
            <td>
                <input size="100" type="text" name="piclink22" value="<?php echo $aboutus2s[0]->piclink2 ?>" />
            </td>
        </tr>
        <tr>
            <td width="100">
                لینک عکس سوم :
            </td>
            <td>
                <input size="100" type="text" name="piclink23" value="<?php echo $aboutus2s[0]->piclink3 ?>" />
            </td>
        </tr>
        <tr>
            <td width="100">
                لینک عکس چهارم :
            </td>
            <td>
                <input size="100" type="text" name="piclink24" value="<?php echo $aboutus2s[0]->piclink4 ?>" />
            </td>
        </tr>
        <tr>
            <td width="100">
                لینک عکس پنجم :
            </td>
            <td>
                <input size="100" type="text" name="piclink25" value="<?php echo $aboutus2s[0]->piclink5 ?>" />
            </td>
        </tr>
        <tr>
            <td width="100">
                لینک عکس ششم :
            </td>
            <td>
                <input size="100" type="text" name="piclink26" value="<?php echo $aboutus2s[0]->piclink6 ?>" />
            </td>
        </tr>
        </br></br>
        <tr>
            <td colspan="4">
                <input  type="submit" value="ذخیره" />
            </td>
        </tr>
    </table>
    </form>

    </br></br>
</div>