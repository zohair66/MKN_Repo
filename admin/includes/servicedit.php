<?php
if(isset($_POST['piclink1'])){
    $servicearray['piclink1'] = $_POST['piclink1'];
    $servicearray['link1'] = $_POST['link1'];
    $servicearray['text1'] = $_POST['content1'];
    $servicearray['piclink2'] = $_POST['piclink2'];
    $servicearray['link2'] = $_POST['link2'];
    $servicearray['text2'] = $_POST['content2'];
    $servicearray['piclink3'] = $_POST['piclink3'];
    $servicearray['link3'] = $_POST['link3'];
    $servicearray['text3'] = $_POST['content3'];
    $servicearray['piclink4'] = $_POST['piclink4'];
    $servicearray['link4'] = $_POST['link4'];
    $servicearray['text4'] = $_POST['content4'];
    if(Services::Updateservices($servicearray))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}
$services = Services::getAllServiceRecordes();
?>

<div class="centerpanel">
    <div class="centerpanelheader">ویرایش خدمات ما</div>
    <form method="post">
        <?php
        foreach($services as $service){
            ?>
            <table>
                <b><tr>آیتم شماره  <?php echo $service->id ?></tr></b>
                <tr>
                    <td width="100">
                        لینک عکس :
                    </td>
                    <td>
                        <input size="100" type="text" name="piclink<?php echo $service->id ?>" value="<?php echo $service->piclink ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
لینک متن :
                    </td>
                    <td>
                        <input size="100" type="text" name="link<?php echo $service->id ?>" value="<?php echo $service->sublink ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        متن :
                    </td>
                    <td>
                        <textarea name="content<?php echo $service->id ?>" id="area<?php echo $service->id ?>"><?php echo $service->text ?></textarea>
                    </td>
                </tr>
            </table>
            <script src="ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('area<?php echo $service->id ?>', {language: 'fa'});
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