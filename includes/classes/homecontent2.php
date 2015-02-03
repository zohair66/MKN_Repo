<?php
require_once("table.php");
class homecontent2 extends Table{
    protected $data = array(
        "id"=> 0,
        "bullet"=>"",
        "link"=>""
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
        $link2 = $posthome2['link2'];
        $bullet2 = $posthome2['bullet2'];
        $link3 = $posthome2['link3'];
        $bullet3 = $posthome2['bullet3'];
        $link4 = $posthome2['link4'];
        $bullet4 = $posthome2['bullet4'];
        $link5 = $posthome2['link5'];
        $bullet5 = $posthome2['bullet5'];
        $link6 = $posthome2['link6'];
        $bullet6 = $posthome2['bullet6'];

        $query = "INSERT INTO homecontent2 (id,bullet,link)
        VALUES (1,'$bullet1','$link1'),(2,'$bullet2','$link2'),(3,'$bullet3','$link3'),
        (4,'$bullet4','$link4'),(5,'$bullet5','$link5'),(6,'$bullet6','$link6') ON DUPLICATE KEY UPDATE
        bullet=VALUES(bullet),link=VALUES(link)";
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