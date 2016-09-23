<?php
class Admin
{
    public function sort_link($MainPage) {

		$parent = '0';

		foreach ($MainPage[0] as $item){
			if($item['parent']==$parent){
			 	$myrow[]=$item['link'];
			}
		}

		foreach ($MainPage[0] as $item){
			foreach ($myrow as $key=>$parent){
				if($item['parent']==$parent){
					$position=$key+1;
					array_splice($myrow, $position, 0, $item['link']);
				}
			}
		}

		foreach ($myrow as $link){
				foreach ($MainPage[0]as $item){
				if($item['link']==$link){
					$explorer[]=$item;
				}
			}
		}
		return $explorer;
	}

	public function get_edit_explorer($MainPage, $id){
		$ExpArr['idd']=$id;
			foreach ($MainPage[0] as $item){
				if($item['id']==$id){
					if($item['content']!='null'){
						 $ExpArr['content']=$item['content'];
						 $ExpArr['link']=$item['link'];
						 $ExpArr['title']=$item['title'];
						 $ExpArr['parent']=$item['parent'];
						 $ExpArr['publish']=$item['publish'];
						 $ExpArr['header']=$item['header_menu'];
						 $ExpArr['level']=$item['level'];
					} else{
						 $ExpArr['content']=" ";
						 $ExpArr['link']=$item['link'];
						 $ExpArr['title']=$item['title'];
						 $ExpArr['parent']=$item['parent'];
						 $ExpArr['publish']=$item['publish'];
						 $ExpArr['header']=$item['header_menu'];
						 $ExpArr['level']='1';
					}
				}
			}
		$ExpJson=json_encode($ExpArr);
		return $ExpJson;
	}

	public function get_admin_add($dateArray,$content,$host,$user,$pass,$db){
		$ok='404';
		$ExpArr=$pieces = explode(",", $dateArray);
		$name=$ExpArr[0];
		if($name=='rewiev'){
			$link=$ExpArr[1];
			$content=$ExpArr[2];
			$public='1';
			$username = $link;
			$url='https://vk.com/' . $username;
			$StrlenContent=strlen($content);
			$StrlenName=strlen($link);
			if($StrlenName!=0 and $StrlenContent!=0 ){
				$getHtml = @file_get_contents($url);
				if ($getHtml!='') {
					$html = file_get_html($url);
					$ava = $html->find('img');
					$name = $html->find('title');
					$ExpArr['img'] = $ava[0]->src;
					$ExpArr['name'] = $name[0]->innertext;
					$ExpArr['content'] = $content;
					$ok='200';
					
					$table='sl_reviews';
					$insert="INSERT INTO sl_reviews SET 	 link = '$link', content = '$content', publik = '$public'";
					$update="UPDATE sl_reviews SET content = '$content', publik = '$public' WHERE link = '$link' ";

				} else{
					$ExpArr['i']='Странцы не существует!';
					$ExpJson = json_encode($ExpArr);
					return $ExpJson;
				}
			} else{
				$ExpArr['i']='Добавьте комментарий или ID!';
				$ExpJson = json_encode($ExpArr);
				return $ExpJson;

			}
		}

		if($name=='pushContent'){
			
			//       var array_rew=['pushContent',typeSend,pubPosition,headerMenu,link,title,parent];
			
			$link=$ExpArr[4];
			$title=$ExpArr[5];
			$parent=$ExpArr[6];
			$level='1';			
			$icon='0';
			
			if($ExpArr[2]=='false'){
				$publish='0';
			} else{
				$publish='1';
			}

			if($ExpArr[3]=='false'){
				$header='0';
			} else{
				$header='1';
			}
			$ok='200';
			$table='sl_first';
			if($ExpArr[1]!='edit'){
				$insert="INSERT INTO sl_first SET title = '$title', link = '$link', content = '$content', publish = '$public', header_menu = '$header', parent = '$parent', level='$level', icon_page='0'";
				$update="";
			} else{
				$insert="INSERT INTO sl_first SET title = '$title', link = '$link', content = '$content', publish = '$public', header_menu = '$header', parent = '$parent', level='$level', icon_page='$icon'";
				$update="UPDATE sl_first SET title = '$title', content = '$content', publish = '$public', header_menu = '$header', parent = '$parent', level='$level', icon_page='$icon' WHERE link = '$link' ";
			}
		}
		
		$ExpArr['i']=$ExpArr[1];
		
		$links = new mysqli($host,$user,$pass,$db);
		$links->query("set names utf8");
		
		$sql= "SELECT count(link) FROM $table WHERE link = '$link'";
		$result = $links->query($sql);
		$row[]=$result->fetch_array();
		$ExpArr['row']=$row[0][0];
		
		$page= new \Page();
		$MainPage=$page->get_all();
		
		foreach($MainPage[0] as $key){			
			if($key['parent']==$link){
				$icon=1;
			}
			
			if($key['link']==$parent){			
				$level=$key['level']+1;	
			}			
		}		
		if($ok=='200'){
			if($row[0][0]==0) {
			$res = $insert;
			} else{
				$res =$update;				
			}

			If (mysqli_query($links, $res))
			{	
				
				$ExpArr['ok']=$ok;
			}
			else{

				$ExpArr['i']= 'Ошибка при добавлении строки -. Описание ошибки:'.mysqli_error($links);
			}
		}
		$ExpJson = json_encode($ExpArr);
		return $ExpJson;

	}
}
