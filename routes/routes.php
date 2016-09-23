<?php
    $app->get('/admin(/:link)', function($link=null){
        if($link==null){
            $page= new \Page();
            $MainPage=$page->get_all();
			$MainPage['getAttr']=$_GET['id'];
            echo $page->get_body($MainPage,'editexplorer');
        } else{
            $page= new \Page();
            $MainPage=$page->get_all();
			$MainPage['getAttr']=$_GET['id'];
            echo $page->get_body($MainPage,$link); 
        }
    });

    $app->get('/(:link)', function($link=null){

        if($link==null){
            $page= new \Page();
            $MainPage=$page->get_all();
            echo $page->get_body($MainPage,'main');
        } else{
            $page= new \Page();
            $MainPage=$page->get_all();
            echo $page->get_one($MainPage,'other',$link);
        }
    });


    $app->post('/admin(/:link)', function($link=null) {

		if($link==null || $link=='editexplorer' || $link=='newpages' ) {
            $id = $_POST['name'];
            $page = new \Page();
            $MainPage = $page->get_all();
            $ClassExplorer = new \Admin();
            echo $ClassExplorer->get_edit_explorer($MainPage, $id);
        } else{
            $dateArray=$_POST['dateArray'];
            $content=$_POST['content'];
            $ClassUpdate =new \Admin();
            echo $ClassUpdate->get_admin_add($dateArray,$content,HOST,USER,PASS,DB);

        }
    });

?>