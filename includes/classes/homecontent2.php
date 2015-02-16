<?php
require_once("table.php");
class homecontent2 extends Table{
    protected $data = array(
        "id"=> 0,
        "bullet"=>"",
        "link"=>"",
        "content"=>""
    );

    public static function getAllHomeContent2() {
        $conn = self::connect();
        $query = "SELECT * FROM homecontent2";
        $result = $conn->query($query);
        if($result->num_rows){
            $homecontent2= array();
            foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
                $homecontent2[] = new homecontent2($row);
            }
            $ret = $homecontent2;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function UpdateHomecontent2($posthome2){
        $ret = true;
        $conn = self::connect();
        $link1 = $posthome2['link1'];
        $bullet1 = $posthome2['bullet1'];
        $content1 = $posthome2['content1'];
        $link2 = $posthome2['link2'];
        $bullet2 = $posthome2['bullet2'];
        $content2 = $posthome2['content2'];
        $link3 = $posthome2['link3'];
        $bullet3 = $posthome2['bullet3'];
        $content3 = $posthome2['content3'];
        $link4 = $posthome2['link4'];
        $bullet4 = $posthome2['bullet4'];
        $content4 = $posthome2['content4'];
        $link5 = $posthome2['link5'];
        $bullet5 = $posthome2['bullet5'];
        $content5 = $posthome2['content5'];
        $link6 = $posthome2['link6'];
        $bullet6 = $posthome2['bullet6'];
        $content6 = $posthome2['content6'];

        $query = "INSERT INTO homecontent2 (id,bullet,link,content)
        VALUES (1,'$bullet1','$link1','$content1'),(2,'$bullet2','$link2','$content2'),(3,'$bullet3','$link3','$content3'),
        (4,'$bullet4','$link4','$content4'),(5,'$bullet5','$link5','$content5'),(6,'$bullet6','$link6','$content6') ON DUPLICATE KEY UPDATE
        bullet=VALUES(bullet),link=VALUES(link),content=VALUES(content)";
//      $query = "UPDATE homecontent1 SET content = '$content' , picturelink = '$piclink' ";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

}