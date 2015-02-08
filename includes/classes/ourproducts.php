<?php
require_once("table.php");
class Ourproducts extends Table{
    protected $data = array(
        'id' =>0,
        'piclink'=>"",
        'text'=>"",
        'textlink'=>""
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
        $piclink2 = $productarray['piclink2'];
        $link2 = $productarray['link2'];
        $text2 = $productarray['text2'];
        $piclink3 = $productarray['piclink3'];
        $link3 = $productarray['link3'];
        $text3 = $productarray['text3'];
        $piclink4 = $productarray['piclink4'];
        $link4 = $productarray['link4'];
        $text4 = $productarray['text4'];

        $query = "INSERT INTO ourproducts (id,piclink,text,textlink)
        VALUES (1,'$piclink1','$text1','$link1'),(2,'$piclink2','$text2','$link2'),
               (3,'$piclink3','$text3','$link3'),(4,'$piclink4','$text4','$link4') ON DUPLICATE KEY UPDATE
        piclink=VALUES(piclink),text=VALUES(text),textlink=VALUES(textlink)";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }
}