<?php
require_once("table.php");
class Ourproducts extends Table{
    protected $data = array(
        'id' =>0,
        'piclink'=>"",
        'text'=>"",
        'textlink'=>"",
        'moretext'=>""
    );

    public static function getAllProducts(){
        $conn = self::connect();
        $query = "SELECT * FROM ourproducts";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            return false;
        }elseif($result->num_rows){
            $products = array();
            foreach($result->fetch_all(MYSQLI_ASSOC) as $product){
                $products[] = new Ourproducts($product);
            }
            $ret = $products;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function Updateproducts($productarray){
        $ret = true;
        $conn = self::connect();
        $piclink1 = $productarray['piclink1'];
        $link1 = $productarray['link1'];
        $text1 = $productarray['text1'];
        $moretext1 = $productarray['moretext1'];
        $piclink2 = $productarray['piclink2'];
        $link2 = $productarray['link2'];
        $text2 = $productarray['text2'];
        $moretext2 = $productarray['moretext2'];
        $piclink3 = $productarray['piclink3'];
        $link3 = $productarray['link3'];
        $text3 = $productarray['text3'];
        $moretext3 = $productarray['moretext3'];
        $piclink4 = $productarray['piclink4'];
        $link4 = $productarray['link4'];
        $text4 = $productarray['text4'];
        $moretext4 = $productarray['moretext4'];

        $query = "INSERT INTO ourproducts (id,piclink,text,textlink,moretext)
        VALUES (1,'$piclink1','$text1','$link1','$moretext1'),
               (2,'$piclink2','$text2','$link2','$moretext2'),
               (3,'$piclink3','$text3','$link3','$moretext3'),
               (4,'$piclink4','$text4','$link4','$moretext4') ON DUPLICATE KEY UPDATE
        piclink=VALUES(piclink),text=VALUES(text),textlink=VALUES(textlink),moretext=VALUES(moretext)";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }
}