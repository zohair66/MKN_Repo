<?php
require_once('table.php');
class news extends Table{
    protected $data = array(
        "id" =>0,
        "subtitle"=>"",
        "subcontent"=>"",
        "piclink"=>"",
        "content"=>""
    );

    public static function getAllNews(){
        $conn = self::connect();
        $query = "SELECT * FROM homecontent3";
        $result = $conn -> query($query);
        if($result === false){
            echo("Query failed: ".$conn->error."<br />\n$query");
            return false;
        }
        if($result->num_rows){
            $news=array();
            foreach($result->fetch_all(MYSQL_ASSOC) as $new){
                $news[] = new news($new);
            }
            $ret = $news;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function UpdateNews($news){
        $ret = true;
        $conn = self::connect();
        $subtitle1 = $news['subtitle1'];
        $subcontent1 = $news['subcontent1'];
        $piclink1 = $news['piclink1'];
        $content1 = $news['content1'];
        $subtitle2 = $news['subtitle2'];
        $subcontent2 = $news['subcontent2'];
        $piclink2 = $news['piclink2'];
        $content2 = $news['content2'];
        $subtitle3 = $news['subtitle3'];
        $subcontent3 = $news['subcontent3'];
        $piclink3 = $news['piclink3'];
        $content3 = $news['content3'];
        $subtitle4 = $news['subtitle4'];
        $subcontent4 = $news['subcontent4'];
        $piclink4 = $news['piclink4'];
        $content4 = $news['content4'];

        $query = "INSERT INTO homecontent3 (id,subtitle,subcontent,piclink,content)
        VALUES (1,'$subtitle1','$subcontent1','$piclink1','$content1'),
        (2,'$subtitle2','$subcontent2','$piclink2','$content2'),
        (3,'$subtitle3','$subcontent3','$piclink3','$content3'),
        (4,'$subtitle4','$subcontent4','$piclink4','$content4') ON DUPLICATE KEY UPDATE
        subtitle=VALUES(subtitle),subcontent=VALUES(subcontent),piclink=VALUES(piclink),
        content=VALUES(content)";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }
}