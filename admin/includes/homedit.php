<?php


$homecontent1 = homecontent1::getAllHomeContent1();
$homecontent2 = homecontent2::getAllHomeContent2();
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
                    <input type="text" name="title" value="<?php echo $homecontent1[0]->picturelink ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content" id="area"><?php echo $homecontent1[0]->content ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="ذخیره" />
                </td>
            </tr>
        </table>
    </form>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('area', {language: 'fa'});
    </script>