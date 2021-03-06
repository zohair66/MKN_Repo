<?php
require_once("table.php");
class Services extends Table{
    protected $data = array(
      'id'=>0,
      'piclink'=>"",
      'text'=>"",
      'sublink'=>"",
      'morecontent'=>""
    );

    public static function getAllServiceRecordes(){
        $conn = self::connect();
        $query = "SELECT * FROM services";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            return false;
        }elseif($result->num_rows){
            $services = array();
            foreach($result->fetch_all(MYSQLI_ASSOC) as $service){
                $services[] = new Services($service);
            }
            $ret = $services;
        }else{
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }

    public static function Updateservices($servicearray){
        $ret = true;
        $conn = self::connect();
        $piclink1 = $servicearray['piclink1'];
        $link1 = $servicearray['link1'];
        $text1 = $servicearray['text1'];
        $morecontent1 = $servicearray['morecontent1'];
        $piclink2 = $servicearray['piclink2'];
        $link2 = $servicearray['link2'];
        $text2 = $servicearray['text2'];
        $morecontent2 = $servicearray['morecontent2'];
        $piclink3 = $servicearray['piclink3'];
        $link3 = $servicearray['link3'];
        $text3 = $servicearray['text3'];
        $morecontent3 = $servicearray['morecontent3'];
        $piclink4 = $servicearray['piclink4'];
        $link4 = $servicearray['link4'];
        $text4 = $servicearray['text4'];
        $morecontent4 = $servicearray['morecontent4'];

        $query = "INSERT INTO services (id,piclink,text,sublink,morecontent)
        VALUES (1,'$piclink1','$text1','$link1','$morecontent1'),
               (2,'$piclink2','$text2','$link2','$morecontent2'),
               (3,'$piclink3','$text3','$link3','$morecontent3'),
               (4,'$piclink4','$text4','$link4','$morecontent4') ON DUPLICATE KEY UPDATE
        piclink=VALUES(piclink),text=VALUES(text),sublink=VALUES(sublink)
        ,morecontent=VALUES(morecontent) ";
        $result = $conn->query($query);
        if ($result === false) {
            echo("Query failed: " . $conn->error . "<br />\n$query");
            $ret = false;
        }
        self::disconnect($conn);
        return $ret;
    }
}
