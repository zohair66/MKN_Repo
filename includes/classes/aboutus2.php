<?php
require_once('table.php');
class aboutus2 extends Table{
    protected $data = array(
        "id" =>0,
        "title"=>"",
        "piclink1"=>"",
        "piclink2"=>"",
        "piclink3"=>"",
        "piclink4"=>""
    );

    public static function getAllaboutus2(){
        $conn = self::connect();
        $query = "SELECT * FROM aboutus2";
        $result = $conn -> query($query);
        if($result === false){
            echo("Query failed: ".$conn->error."<br />\n$query");
            return false;
        }
        if($result->num_rows){
            $aboutuses=array();
            foreach($result->fetch_all(MYSQL_ASSOC) as $row){
                $aboutuses[] = new aboutus2($row);
            }
            $ret = $aboutuses;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function UpdateAboutus2($about2array){
        $ret = true;
        $conn = self::connect();
        $title = $about2array['title'];
        $piclink1 = $about2array['piclink1'];
        $piclink2 = $about2array['piclink2'];
        $piclink3 = $about2array['piclink3'];
        $piclink4 = $about2array['piclink4'];
        $query = "UPDATE aboutus2 SET title = '$title' , piclink1 = '$piclink1' ,
              piclink2 = '$piclink2' , piclink3 = '$piclink3' , piclink4 = '$piclink4' ";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }
}