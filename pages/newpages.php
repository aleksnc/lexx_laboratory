<?php


if($realParth=='pages'){
	$Classdisplay="di_none";
	$PageParth ='';
	$Pagename='Страницы';
} else{
	$Classdisplay='';
	$PageParth ='<span class="slesh"> / </span><a class="line-path__name" href="/admin/newpages">Создать страницу</a>';
	$Pagename='Создать страницу';
}
?>

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
            <ul class="leftBlock__section">
                <li class=" ico-earth"><a href="/admin/editexplorer">Проводник</a></li>
            </ul>
            <ul class="leftBlock__section leftBlock__section--select">
                <li class="ico-blog-o  leftBlock__section--btn select"><a href="/admin/pages">Страницы</a></li>
                <li id="NewPage" data-id="new" class="ico-news  leftBlock__section--li"><a href="/admin/editexplorer?id=new"  >Создать страницу</a></li>
            </ul>
			<ul class="leftBlock__section ">
                <li class="ico-comments leftBlock__section--btn "><a href="/admin/reviews">Отзывы</a></li>
                <li class="ico-news new-rewiew "><a href="/admin/newreviews">Создать отзыв</a></li>
            </ul>
			<ul class="leftBlock__section">
				<li class="ico-camera">Загрузить фото</li>
			</ul>
        </div>
    </div>
    <div class="rightBlock__wrapper">
        <div class="rightBlock">
            <div class="line-path"><a class="line-path__icon" href="#"><svg class="glyph stroked home"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-home"></use></svg></a>
			<span class="slesh"> / </span><a class="line-path__name" href="/admin/pages">Страницы</a><?php echo $PageParth; ?></div>
            <div class="explorer">
               <div class="explorer__title"><?php echo $Pagename; ?></div>			
			    <div class="explorer__block" style="flex-wrap: wrap;">
					<div class="explorer__edit">
						<div class="explorer__edit-check" style="display:none;">
							<input type="text" class="explorer__edit-title" value=" ">Название
							<input type="text" class="explorer__edit-link" value=" ">Ссылка
							<select class="explorer__edit-parent"> 
							</select> родитель
							<input class="explorer__edit-publish" type="checkbox"> Опубликовать
							<input class="explorer__edit-headermenu" type="checkbox"> Главное меню
							
							<div class="explorer__edit-text">
							
							</div>
							<a href="#" id="ExplEditSend" class="explorer__edit-btn">Отправить</a>
						</div>
					</div>
					<div class="explorer__rewiews rewiews__edit">
						<?php foreach ($MainPage[0] as $item): ?>					
							<div class="user_rewiew">
								<span  style="display: inline-block; width: 200px; margin: 5px 15px;"><?php echo $item['title']; ?></span>
								<span class="ad_content_rewiew" ><?php echo $item['content']; ?></span>
								<?php if($item['publish']=='1') :?>
									<input class='publish_page' data-id="<?php echo $item['id']; ?>" type="checkbox" checked/> Опубликовать
								<?php endif; ?>
									<a href="/admin/editexplorer?id=<?php echo $item['id']; ?>" >Редактировать </a> 
									<input class='delete_page' data-id="<?php echo $item['id']; ?>" type="button"  value="Удалить"/> 
								<hr/>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-footer__wrapper">
    <div class="page-footer"></div>
</div>
<script src="/js/tinymce/tinymce.min.js"></script>
<script src="/js/admin.js"></script>
</body>

