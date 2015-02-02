<?php
require_once("table.php");
class homecontent1 extends Table{
    protected $data = array(
        "id"=> 0,
        "content"=>"",
        "picturelink"=>""
    );

    public static function getAllHomeContent1() {
        $conn = self::connect();
        $query = "SELECT * FROM homecontent1";
        $result = $conn->query($query);
        if($result->num_rows){
            $homecontent1= array();
            foreach($result->fetch_all(MYSQLI_ASSOC) as $row) {
                $homecontent1[] = new homecontent1($row);
            }
            $ret = $homecontent1;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function UpdateHomecontent1($postArray){
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