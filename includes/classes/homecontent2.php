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

    public static function UpdateHomecontent2($postArray){
        $ret = true;
        $conn = self::connect();
        $piclink = $postArray['piclink'];
        $content = $postArray['content'];
        $query = "UPDATE homecontent1 SET content = '$content' , picturelink = '$piclink' ";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

}