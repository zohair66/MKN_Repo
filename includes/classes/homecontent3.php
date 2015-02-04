<?php
require_once("table.php");
class homecontent3 extends Table{
    protected $data = array(
        "id" =>0,
        "subtitle"=>"",
        "subcontent"=>"",
        "piclink"=>"",
        "content"=>""
    );

    public static function getAllHomeContent3() {
        $conn = self::connect();
        $query = "SELECT * FROM homecontent3";
        $result = $conn->query($query);
        if($result->num_rows){
            $homecontent3= array();
            foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
                $homecontent3[] = new homecontent3($row);
            }
            $ret = $homecontent3;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function UpdateHomecontent3($posthome3){
        $ret = true;
        $conn = self::connect();
        $subtitle1 = $posthome3['subtitle1'];
        $subcontent1 = $posthome3['subcontent1'];
        $subtitle2 = $posthome3['subtitle2'];
        $subcontent2 = $posthome3['subcontent2'];
        $subtitle3 = $posthome3['subtitle3'];
        $subcontent3 = $posthome3['subcontent3'];
        $subtitle4 = $posthome3['subtitle4'];
        $subcontent4 = $posthome3['subcontent4'];

        $query = "INSERT INTO homecontent3 (id,subtitle,subcontent)
        VALUES (1,'$subtitle1','$subcontent1'),(2,'$subtitle2','$subcontent2'),(3,'$subtitle3','$subcontent3'),
        (4,'$subtitle4','$subcontent4') ON DUPLICATE KEY UPDATE
        subtitle=VALUES(subtitle),subcontent=VALUES(subcontent)";
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