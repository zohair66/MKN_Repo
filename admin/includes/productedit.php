<?php
if(isset($_POST['piclink1'])){
    $servicearray['piclink1'] = $_POST['piclink1'];
    $servicearray['link1'] = $_POST['link1'];
    $servicearray['text1'] = $_POST['content1'];
    $servicearray['moretext1'] = $_POST['moretext1'];
    $servicearray['piclink2'] = $_POST['piclink2'];
    $servicearray['link2'] = $_POST['link2'];
    $servicearray['text2'] = $_POST['content2'];
    $servicearray['moretext2'] = $_POST['moretext2'];
    $servicearray['piclink3'] = $_POST['piclink3'];
    $servicearray['link3'] = $_POST['link3'];
    $servicearray['text3'] = $_POST['content3'];
    $servicearray['moretext3'] = $_POST['moretext3'];
    $servicearray['piclink4'] = $_POST['piclink4'];
    $servicearray['link4'] = $_POST['link4'];
    $servicearray['text4'] = $_POST['content4'];
    $servicearray['moretext4'] = $_POST['moretext4'];
    if(Ourproducts::Updateproducts($servicearray))
        Users::DisplayWar("بروز رسانی با موفقیت صورت گرفت");
}
$products = Ourproducts::getAllProducts();
?>

<div class="centerpanel">
    <div class="centerpanelheader">ویرایش تعرفه ها</div>
    <form method="post">
        <?php
        foreach($products as $product){
            ?>
            <table>
                <b><tr>آیتم شماره  <?php echo $product->id ?></tr></b>
                <tr>
                    <td width="100">
                        لینک عکس :
                    </td>
                    <td>
                        <input size="100" type="text" name="piclink<?php echo $product->id ?>" value="<?php echo $product->piclink ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        لینک متن :
                    </td>
                    <td>
                        <input size="100" type="text" name="link<?php echo $product->id ?>" value="<?php echo $product->textlink ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="100">
                        متن :
                    </td>
                    <td>
                        <textarea style="height:500px;width:711px;text-align: justify;padding: 10px" name="content<?php echo $product->id ?>"><?php echo $product->text ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td width="200">
                        ادامه مطلب :
                    </td>
                    <td>
                        <textarea style="height:500px;width:711px;text-align: justify;direction:rtl;padding: 10px"  type="text" name="moretext<?php echo $product->id ?>" ><?php echo $product->moretext ?></textarea>
                    </td>
                </tr>
            </table>
<!--            <script src="ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('area<?php /*echo $product->id */?>', {language: 'fa'});
            </script>-->
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