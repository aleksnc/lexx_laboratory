<?php

if($realParth=='reviews'){
	$Classdisplay="di_none";
	$PageParth ='';
	$Pagename='Отзывы';
} else{
	$Classdisplay='';
	$PageParth ='<span class="slesh"> / </span><a class="line-path__name" href="/admin/newreviews">Создать отзыв</a>';
	$Pagename='Создать отзыв';
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
                <li class="select ico-earth"><a href="/admin/editexplorer">Проводник</a></li>
            </ul>
            <ul class="leftBlock__section">
                <li class="ico-blog-o"><a href="/admin/pages">Страницы</a></li>
                <li class="ico-news"><a href="/admin/newpages">Создать страницу</a></li>
            </ul>
            <ul class="leftBlock__section leftBlock__section--select">
                <li class="ico-comments leftBlock__section--btn select"><a href="/admin/reviews">Отзывы</a></li>
                <li class="ico-news new-rewiew leftBlock__section--li"><a href="/admin/newreviews">Создать отзыв</a></li>
            </ul>
			<ul class="leftBlock__section">
				<li class="ico-camera">Загрузить фото</li>
			</ul>
        </div>
    </div>
    <div class="rightBlock__wrapper">
        <div class="rightBlock">
            <div class="line-path"><a class="line-path__icon" href="#"><svg class="glyph stroked home"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-home"></use></svg></a>
			<span class="slesh"> / </span><a class="line-path__name" href="/admin/reviews">Отзывы</a><?php echo $PageParth; ?></div>
            <div class="explorer">
               <div class="explorer__title"><?php echo $Pagename; ?></div>
               <div class="explorer__block  <?php echo $Classdisplay; ?>">
				   <div class="explorer__rewiews">
						<input type="text" class="explorer__rewiews-avatar" placeholder="id из ВК например aleksnc"> Загрузить ссылку
						<textarea placeholder="Отзыв" class="explorer__rewiews-rewiew"></textarea>
						<a id="RewiewsPush" href="#" class="btn btn-send">отправить</a>
					   	<span class="Sendsuccess" style="display: none"></span>
				   </div> 
				   <div class="explorer__rewiews">
						   <img class="re_ava" src=''><br>
						   <p class="re_name" ></p>
						   <p class="re_content"></p>
					</div>
			    </div> 				
			    <div class="explorer__block">
					<div class="explorer__rewiews rewiews__edit">
						<?php foreach ($result as $item): ?>
							<?php	
								$username = $item['link']; 
								$html = file_get_html('https://vk.com/' . $username);
								$name=$html->find('title');								
							?>						
							<div class="user_rewiew">
								<span  style="display: inline-block; width: 200px; margin: 5px 15px;"><a  href="https://vk.com/<?php echo $username; ?>"><?php echo $name[0]->innertext ?></a></span>
								<span class="ad_content_rewiew" ><?php echo $item['content']; ?></span>
								<?php if($item['publik']=='1') :?>
									<input type="checkbox" checked/> Опубликовать;
								<?php endif; ?>
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

