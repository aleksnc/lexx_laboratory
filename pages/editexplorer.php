<?php 
	if( isset($MainPage['getAttr'])){
		if($MainPage['getAttr'] != 'new'){
			$type='edit';
		} else {
			$type='new';
		}
	}else {
		$type='edit';
	}
?>

	
<!DOCTYPE html>
<html lang="ru">
      <meta charset="UTF-8">

	  
<?php
print_r($id);
$ClassExplorer= new \Admin();
$sort_link=$ClassExplorer->sort_link($MainPage);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/styleadmin.css">
    <link rel="stylesheet" href="/css/temp_style.css">
    <script src="/js/jquery-1.10.1.min.js"></script>	
</head>
<body><svg id="glyphs-sheet" xmlns="http://www.w3.org/2000/svg" style="display:none;"><defs><symbol id="stroked-home" class="glyph-svg stroked" viewBox="0 0 43.447 43.448">
            <g class="line" fill="none" stroke="#000" stroke-width="2" stroke-miterlimit="10">
                <path d="M42.723 23.448l-21-22-21 22"></path>
                <path d="M5.723 18.448v24h11v-16h10v16h11v-24"></path>
            </g>
        </symbol></defs></svg>
<div class="page-header__wrapper">
    <div class="page-header"></div>
</div>
<div class="allContent__wrapper">
    <div class="leftBlock__wrapper">
        <div class="leftBlock">
            <div class="leftBlock__title"> моя навигация</div>
            <ul class="leftBlock__section leftBlock__section--select">
                <li class="select ico-earth leftBlock__section--btn select"><a href="/admin/editexplorer">Проводник</a></li>
            </ul>
            <ul class="leftBlock__section">
                <li class="ico-blog-o"><a href="/admin/pages">Страницы</li>
                <li class="ico-news"><a href="/admin/newpages">Создать страницу</li>
            </ul>
            <ul class="leftBlock__section">
                <li class="ico-comments"><a href="/admin/reviews">Отзывы</a></li>
                <li class="ico-news new-rewiew"><a href="/admin/newreviews">Создать отзыв</a></li>
            </ul>
			<ul class="leftBlock__section">
				<li class="ico-camera">Загрузить фото</li>
			</ul>
        </div>
    </div>
    <div class="rightBlock__wrapper">
        <div class="rightBlock">
            <div class="line-path"><a class="line-path__icon" href="#"><svg class="glyph stroked home"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-home"></use></svg></a><span class="slesh"> /</span><a class="line-path__name" href="#"> Проводник</a></div>
            <div class="explorer">
                <div class="explorer__title">Проводник</div>
                <div class="explorer__block">
                    <div class="explorer__path-wrapper">
                        <ul class="explorer__path">
                    <li class="explorer__path-list explorer__path-main ico-earth" data-link="header" data-lv="0"><a href="#">Главная</a></li>
                    <?php foreach ($sort_link as $item): ?>

                        <?php if($item['icon_page']==0){

                            $styleIcon ="ico-word";
                         } else{
                            $styleIcon ="ico-blog";
                        } ?>
                        <li class="explorer__path-list <?php echo $styleIcon; ?> " data-parent="<?php echo $item['link']; ?>" data-id="<?php echo $item['id']; ?>" data-lv="<?php echo $item['level']; ?>"><a href="#"><?php echo $item['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="explorer__edit">
				<div class="explorer__edit-check" style="display:none;">
					<input type="text" class="explorer__edit-title">Название
					<input type="text" class="explorer__edit-link" >Ссылка
					<select class="explorer__edit-parent"> 
					</select> родитель
					<input class="explorer__edit-publish" type="checkbox"> Опубликовать
					<input class="explorer__edit-headermenu" type="checkbox"> Главное меню
					
					<div class="explorer__edit-text">
					
					</div>
					<a href="#" id="ExplEditSend" data-type="<?php echo $type; ?>" class="explorer__edit-btn">Отправить</a>
					<span class="Sendsuccess" style="display: none"></span>
				</div>
            </div>
        </div>
</div>
</div>
</div>
</div>
<div class="page-footer__wrapper">
    <div class="page-footer"></div>
</div>

<script src="/js/tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="/js/admin.js"></script>
<script>
    <?php if( isset($MainPage['getAttr'])):?>

    $('.explorer__path-list').each(function () {
        var P_title = $(this).html();
        var Sel_val = $(this).data('parent');

        $('.explorer__edit-parent').append('<option val="' + Sel_val + '">' + P_title + '</option>');
    });

    <?php if($MainPage['getAttr'] != 'new'): ?>
    <?php foreach ($MainPage[0] as $item): ?>
    <?php if($item['id'] == $MainPage['getAttr']):?>

    <?php if($item['header_menu'] == '1') :?>
    $('.explorer__edit-headermenu').attr("checked", "checked");
    <?php endif ?>

    <?php if($item['publish'] == '1') :?>
    $('.explorer__edit-publish').attr("checked", "checked");
    <?php endif ?>

    $('.explorer__edit-text').append('<textarea name="editor1" class="editor" id="editor1" rows="10" cols="80" ><?php echo $item['content']; ?></textarea>');

    $(".explorer__edit-parent option[value='<?php echo $item['parent']?>']").prop('selected', true);
    <?php endif ?>
    <?php endforeach; ?>
    $('.explorer__edit-check').css('display', 'block');
    		tinymce.init({
		  selector: '#editor1',
		  height: 500,
		  plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
    <?php endif ?>

    <?php if($MainPage['getAttr'] == 'new'): ?>
    $('.explorer__edit-check').css('display', 'block');
    $('.explorer__edit-text').append('<textarea name="editor1" class="editor" id="editor1" rows="10" cols="80" ><p></p></textarea>');
		tinymce.init({
		  selector: '#editor1',
		  height: 500,
		  plugins: [
			'advlist autolink lists link image charmap print preview anchor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
    <?php endif ?>
    <?php endif ?>

</script>
</body>
</html>