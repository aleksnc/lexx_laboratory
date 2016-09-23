<?php


class Database{
    public $db;

    public function __construct($host,$user,$pass,$db){
        $mysqli = new mysqli($host,$user,$pass,$db);
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL:";
        }

        return $this->db;
    }

    public function get_all_db($host,$user,$pass,$db){
        $mysqli = new mysqli($host,$user,$pass,$db);
        //$sql= "SELECT title,link FROM sl_first WHERE parent='0'";
        $sql= "SELECT * FROM sl_first";
        $result = $mysqli->query("set names utf8");
        $result = $mysqli->query($sql);
        $count = mysqli_num_rows($result);
        if(!$result){
            echo 'FALSE';
            return FALSE;
        } else{
            for( $i=0; $i<$count ;$i++){
                $row[]=$result->fetch_array();
            }
        }
        return $row;

    }
	
	    public function get_review_db($host,$user,$pass,$db){
            $mysqli = new mysqli($host,$user,$pass,$db);
            $sql= "SELECT * FROM sl_reviews";
            $mysqli->query("set names utf8");
            $result = $mysqli->query($sql);
            $count = mysqli_num_rows($result);
                if(!$result){
                    echo 'FALSE';
                    return FALSE;
                } else{
                    for( $i=0; $i<$count ;$i++){
                        $row[]=$result->fetch_array();
                    }
                }
            return $row;
    }


    
}