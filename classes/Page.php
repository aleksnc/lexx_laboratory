<?php

class Page
{
    public $text;

    public function get_all() {
        
        $result[] = \Database::get_all_db(HOST,USER,PASS,DB);
		$result[] = \Database::get_review_db(HOST,USER,PASS,DB);
		return $result;
    }

    public function get_one($MainPage, $file, $link){
        ob_start();
        include 'pages/'.$file.'.php';
        return ob_get_clean();
    }

    public function get_body($MainPage, $file){
		$name=$file;
		if($name=="reviews" ){
			$name="newreviews";
			 $realParth=$file;
		}
		
		if($name=="pages" ){
			$name="newpages";
			 $realParth=$file;
		}
		if($name=="newreviews" ){
			$result = \Database::get_review_db(HOST,USER,PASS,DB);
		}
        ob_start();
        include 'pages/'.$name.'.php';
        return ob_get_clean($realParth, $result);
    }
    
}