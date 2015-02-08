<?php
if(isset($_POST['subtitle1'])){
    $newsarray['subtitle1'] = $_POST['subtitle1'];
    $newsarray['subcontent1'] = $_POST['subcontent1'];
    $newsarray['piclink1'] = $_POST['piclink1'];
    $newsarray['content1'] = $_POST['content1'];
    $newsarray['subtitle2'] = $_POST['subtitle2'];
    $newsarray['subcontent2'] = $_POST['subcontent2'];
    $newsarray['piclink2'] = $_POST['piclink2'];
    $newsarray['content2'] = $_POST['content2'];
    $newsarray['subtitle3'] = $_POST['subtitle3'];
    $newsarray['subcontent3'] = $_POST['subcontent3'];
    $newsarray['piclink3'] = $_POST['piclink3'];
    $newsarray['content3'] = $_POST['content3'];
    $newsarray['subtitle4'] = $_POST['subtitle4'];
    $newsarray['subcontent4'] = $_POST['subcontent4'];
    $newsarray['piclink4'] = $_POST['piclink4'];
    $newsarray['content4'] = $_POST['content4'];
    if(news::UpdateNews($newsarray))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}
$news = news::getAllNews();
?>

<div class="centerpanel">
    <div class="centerpanelheader">ویرایش آخرین اخبار</div>
    <form method="post">
        <?php
        foreach($news as $new){
            ?>
            <table>
                <b><tr>آیتم شماره  <?php echo $new->id ?></tr></b>
                <tr>
                    <td width="100">
                        عنوان :
                    </td>
                    <td>
                        <input size="100" type="text" name="subtitle<?php echo $new->id ?>" value="<?php echo $new->subtitle ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        متن خلاصه :
                    </td>
                    <td>
                        <textarea name="subcontent<?php echo $new->id ?>" id="areas<?php echo $new->id ?>"><?php echo $new->subcontent ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        لینک عکس :
                    </td>
                    <td>
                        <input size="100" type="text" name="piclink<?php echo $new->id ?>" value="<?php echo $new->piclink ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        متن :
                    </td>
                    <td>
                        <textarea name="content<?php echo $new->id ?>" id="area<?php echo $new->id ?>"><?php echo $new->content ?></textarea>
                    </td>
                </tr>
            </table>
            <script src="ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('areas<?php echo $new->id ?>', {language: 'fa'});
                CKEDITOR.replace('area<?php echo $new->id ?>', {language: 'fa'});
            </script>
            </br>
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