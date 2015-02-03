<?php
require_once('table.php');
class news extends Table{
    protected $data = array(
        "id" =>0,
        "piclink"=>"",
        "content"=>""
    );

    public static function getAllNews(){
        $conn = self::connect();
        $query = "SELECT * FROM news";
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
}