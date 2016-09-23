
<?php
$ClassExplorer= new \Admin();
$sort_link=$ClassExplorer->sort_link($MainPage[0]);
?>
    <head>
        <title>admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <li class="select ico-earth"><a href="/admin/editexplorer">Проводник</a></li>
                </ul>
                <ul class="leftBlock__section">
					<li class="ico-blog-o"><a href="/admin/pages">Страницы</li>
					<li class="ico-news"><a href="/admin/newpages">Создать страницу</li>
                </ul>
                <ul class="leftBlock__section">
                    <li class="ico-comments">Отзывы</li>
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
                    <div class="explorer__title">Admin</div>
              <!--      <div class="explorer__block">
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
            </div> -->
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
</html>