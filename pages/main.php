<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
    <title>Лэкс СПБ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/temp_style.css">
    <script src="/js/jquery-1.10.1.min.js"></script>
  </head>
  <body>
    <div class="page-header__wrapper">
      <div class="page-header">
        <nav class="main-nav">
          <ul class="main-nav__list">
			<?php if(isset($MainPage[0])) :?>
				<?php foreach ($MainPage[0] as $item): ?>
					<?php if($item['header_menu']=='1') :?>
						 <li class="main-nav__link"><a class="menu" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endif; ?>
          </ul><span class="main-nav__burger" id="main-nav__burger" onclick="burgerToggl()"></span>
        </nav>
        <div class="main-logo__wrapper">
          <a class="main-logo">ЛЭКС<span class="main-logo__two-color">  СПб</span>
            <span class="main-logo__slogan"> Ваш верный друг</span>
          </a>
        </div>
        <div class="page-header__contacts"><a href="tel:+78121234567">+7 (812) 123-45-67</a>М. Владимирская, ул. Правды дом 1</div>
      </div>
      <h1 class="page-header__title">БУХГАЛТЕРСКИЕ И ЮРИДИЧЕСКИЕ УСЛУГИ</h1>
      <div class="page-header__timetable-wrapper">
        <div class="page-header__timetable">
          <section class="our-advantages__wrapper">
            <ul class="our-advantages">
              <li class="our-advantages__list"><span class="our-advantages__list-title">  Опытные сотрудники</span><span class="our-advantages__list-description">
                  Все сотрудники имеют большой стаж работы, профильное образование
                   и постоянно повышают квалификацию</span></li>
              <li class="our-advantages__list our-advantages__list--personal"><span class="our-advantages__list-title"> Индивидуальный поход</span><span class="our-advantages__list-description">
                  Все сотрудники имеют большой стаж работы, профильное образование
                   и постоянно повышают квалификацию</span></li>
              <li class="our-advantages__list our-advantages__list--money"><span class="our-advantages__list-title"> Гибкое ценообразование</span><span class="our-advantages__list-description">Вы платите только за оказанные услуги.</span></li>
            </ul>
          </section>
          <section class="application-form">
            <div class="application-form__title">Бесплатная консультация</div>
            <label class="application-form__label"><span class="star">Имя</span>
              <input class="application-form__input" type="text"><span class="star">Телефон</span>
              <input class="application-form__input" type="text"><span class="star">Тема</span>
              <select class="application-form__input">
                <option>3 НДФЛ</option>
                <option>Налогообложение</option>
                <option>Бухгалтерский учет</option>
              </select><a class="application-form__btn" href="javascript:void(0);">Записаться</a>
            </label>
          </section>
        </div>
      </div>
    </div>
	<!--ФИГУРЫ-->
	<div class="information-figures__wrapper">
      <section class="information-figures">
        <ul class="information-figures__list">
          <li class="information-figures__list-item"><span class="information-figures__list-figures">7</span><span class="information-figures__list-information">лет на рынке</span></li>
          <li class="information-figures__list-item information-figures__list-item--company"><span class="information-figures__list-figures">30</span><span class="information-figures__list-information">компаний</span></li>
          <li class="information-figures__list-item information-figures__list-item--users"><span class="information-figures__list-figures">5000+</span><span class="information-figures__list-information">клиентов</span></li>
          <li class="information-figures__list-item information-figures__list-item--like"><span class="information-figures__list-figures">16</span><span class="information-figures__list-information">дипломов</span></li>
        </ul>
      </section>
    </div>
	<!--УСЛУГИ-->
	    <div class="our-services__wrapper">
      <section class="our-services">
        <h1 class="our-services__title">НАШИ УСЛУГИ</h1>
        <div class="services">
          <div class="services__service">
            <div class="services__service-img" style="background-image: url('../img/4.jpg')"></div><span class="services__service-title">Регистрация ООО и ИП</span><a class="services__service-btn" href="#">Перейти</a>
          </div>
          <div class="services__service">
            <div class="services__service-img" style="background-image: url('../img/4.jpg')"></div><span class="services__service-title">3 НДФЛ</span><a class="services__service-btn" href="#">Перейти</a>
          </div>
          <div class="services__service">
            <div class="services__service-img" style="background-image: url('../img/4.jpg')"></div><span class="services__service-title">Бухгалтерское обслуживание</span><a class="services__service-btn" href="#">Перейти</a>
          </div>
          <div class="services__service">
            <div class="services__service-img" style="background-image: url('../img/4.jpg')"></div><span class="services__service-title">Разовые услуги</span><a class="services__service-btn" href="#">Перейти</a>
          </div>
          <div class="services__service services__service--50">
            <div class="services__service-img" style="background-image: url('../img/4.jpg')"></div><span class="services__service-title">Разовые услуги</span><a class="services__service-btn" href="#">Перейти</a>
          </div>
          <div class="services__service services__service--50">
            <div class="services__service-img" style="background-image: url('../img/4.jpg')"></div><span class="services__service-title">Разовые услуги</span><a class="services__service-btn" href="#">Перейти</a>
          </div>
        </div>
      </section>
    </div>
	<!-- АКЦИЯ -->
	 <div class="action__wrapper">
      <div class="action">
        <h1 class="action__title">АКЦИЯ</h1>
        <div class="countdown-action__wrapper">
          <div class="countdown-action">
            <div class="countdown-action__title">ОСТАВЬТЕ ЗАЯВКУ</div>
            <div class="countdown-action__description">и получите уникальное предложение для вашего бизнеса, которое увеличит его оборот в 2 раза!</div>
            <div class="countdown-action__togo">До конца акции осталось:</div>
            <div class="countdown-action__countdown">
              <div class="countdown"></div>
            </div>
          </div>
        </div>
        <section class="application-form">
          <div class="application-form__title">Бесплатная консультация</div>
          <label class="application-form__label"><span class="star">Имя</span>
            <input class="application-form__input" type="text"><span class="star">E-mail</span>
            <input class="application-form__input" type="text"><span class="star">Телефон</span>
            <input class="application-form__input" type="text"><a class="application-form__btn" href="javascript:void(0);">Записаться</a>
          </label>
        </section>
      </div>
    </div>
	<!--Тарифы Бух-->
	    <div class="our-rates__wrapper">
      <div class="our-rates">
        <div class="our-rates__title">ТАРИФЫ БУХГАЛТЕРСКОГО ОБСЛУЖИВАНИЯ</div>
        <div class="our-rates__description">Лучшее соотношение цены и качества</div>
        <section class="our-rates__rates">
          <article class="our-rates__rate">
            <div class="our-rates__rate-title our-rates__rate-title--one">Экономный</div>
            <ul class="our-rates__list">
              <li>4000 рублей</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
            </ul><a class="our-rates__btn" href="javascript:void(0);">Отправить заявку!</a>
          </article>
          <article class="our-rates__rate">
            <div class="our-rates__rate-title our-rates__rate-title--two">Стандарт</div>
            <ul class="our-rates__list">
              <li>4000 рублей</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
            </ul><a class="our-rates__btn our-rates__btn--two" href="javascript:void(0);">Отправить заявку!</a>
          </article>
          <article class="our-rates__rate">
            <div class="our-rates__rate-title our-rates__rate-title--three">Бизнес</div>
            <ul class="our-rates__list">
              <li>4000 рублей</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
            </ul><a class="our-rates__btn our-rates__btn--three" href="javascript:void(0);">Отправить заявку!</a>
          </article>
          <article class="our-rates__rate">
            <div class="our-rates__rate-title our-rates__rate-title--four"> Конструктор</div>
            <ul class="our-rates__list">
              <li>4000 рублей</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
              <li>Быстро и качественно</li>
            </ul><a class="our-rates__btn" href="javascript:void(0);">Отправить заявку!</a>
          </article>
        </section>
      </div>
    </div>
	<!--КАК МЫ РАБОТАЕМ-->
	 <div class="how-we-work__wrapper">
      <div class="how-we-work">
        <div class="how-we-work__title">КАК МЫ РАБОТАЕМ</div>
        <div class="how-we-work__description">Шаг за шагом</div>
        <div class="how-we-work__steps">
          <div class="how-we-work__step">
            <div class="how-we-work__step-title">Звонок</div>
            <div class="how-we-work__step-description">Вы звоните нам, и мы грамотно консультируем вас по вашему вопросу.</div>
          </div>
          <div class="how-we-work__step">
            <div class="how-we-work__step-title">Заказ</div>
            <div class="how-we-work__step-description">Ознакомившись с нашим прайсом и получив консультацию, вы оформляете заказ.</div>
          </div>
          <div class="how-we-work__step">
            <div class="how-we-work__step-title">Договор</div>
            <div class="how-we-work__step-description">Мы заключаем договор, в котором прописаны условия и обязанности обеих сторон.</div>
          </div>
          <div class="how-we-work__step">
            <div class="how-we-work__step-title">Внедрение</div>
            <div class="how-we-work__step-description">Наши квалифицированные специалисты внедряют в ваше предприятие заказанные вами решение.</div>
          </div>
        </div>
      </div>
    </div>
	<!--Преимущества-->
	<div class="your-benefit__wrapper">
      <div class="your-benefit">
        <ul class="your-benefit__list">
          <li><span class="your-benefit__title">Что вы получаете, обратившись к нам:</span></li>
          <li><span class="your-benefit__list-title">Качественное обслуживание</span><span class="your-benefit__list-content">Внедрили европейские снандарты обслуживания клиентов.</span></li>
          <li><span class="your-benefit__list-title">Внимание к деталям</span><span class="your-benefit__list-content">Внедрили европейские снандарты обслуживания клиентов.</span></li>
          <li><span class="your-benefit__list-title">Качественное обслуживание</span><span class="your-benefit__list-content">Внедрили европейские снандарты обслуживания клиентов.</span></li>
          <li><span class="your-benefit__list-title">Качественное обслуживание</span><span class="your-benefit__list-content">Внедрили европейские снандарты обслуживания клиентов.</span></li>
        </ul>
      </div>
    </div>
	<!--КОМАНДА-->
	    <div class="team__wrapper">
      <div class="team">
        <div class="team__title">НАША КОМАНДА</div>
        <div class="team__description">Профессионалы своего дела</div>
        <div class="team__workers">
          <div class="team__workman"><img class="team__workman-img" src="img/e.jpg">
            <div class="team__workman-info"><span class="team__workman-name">Татьяна Дяченко</span><span class="team__workman-post">Генеральный директор</span><span class="team__workman-about">
                Более 20 лет опыта продаж в интернете, владелец собственного прибыльного
                 бизнеса. Тренирует более 200 человек в год, кототорые создали или вывели свой бизнес на новый уровен</span></div>
          </div>
          <div class="team__workman"><img class="team__workman-img" src="img/e.jpg">
            <div class="team__workman-info"><span class="team__workman-name">Татьяна Дяченко</span><span class="team__workman-post">Генеральный директор</span><span class="team__workman-about">
                Более 20 лет опыта продаж в интернете, владелец собственного прибыльного
                 бизнеса. Тренирует более 200 человек в год, кототорые создали или вывели свой бизнес на новый уровен</span></div>
          </div>
        </div>
      </div>
    </div>
	<!--ОТЗЫВЫ -->
	<div class="reviews__wrapper">
      <div class="reviews">
        <div class="reviews__title">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</div>
        <div class="reviews__carusel">
		<?php if(isset($MainPage[1])) :?>
				<?php foreach ($MainPage[1] as $item): ?>
					<?php if($item['publik']=='1') :?>
						<?php	
								$username = $item['link']; 
								$html = file_get_html('https://vk.com/' . $username);
								$ava=$html->find('img');
								$name=$html->find('title');		
						?>		
					  <div class="div">
						<div class="reviews__review">
						  <p class="reviews__review-content">
							<?php echo $item['content']; ?>
						  </p>
						  <div class="reviews__review-user">
						<!--	<div class="reviews__review-img" style="background-image: url('img/pika.png')"></div> -->
						<img class="reviews__review-img" src="<?php echo $ava[0]->src; ?>"/>
							<div class="reviews__review-name"><a  href="https://vk.com/<?php echo $username; ?>"><?php echo $name[0]->innertext ?></a></div>
							<div class="reviews__review-occupation">повар</div>
						  </div>
						</div>
					  </div>
					<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
        </div>
      </div>
    </div>
	
	<div class="questions__wrapper">
      <div class="questions">
        <div class="questions__title">Остались вопросы?</div>
        <div class="questions__description">Позвоните по телефону +7 (812) 93-117-94 или оставьте заявку:</div><a class="questions__btn" href="javascript:void(0);">Получить выгодное предложение</a>
      </div>
    </div>
    <div class="maps__wrapper">
      <div class="maps">
        <div class="maps__title">Наш адрес</div>
        <div class="maps__description">Санкт-Петербург, ул. Правды д.1/11</div>
      </div>
      <div class="maps__ya">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=vjk1mbw-GYTRTJYErV2r8-agADH03ggL&amp;amp;width=100%&amp;amp;height=400&amp;amp;lang=ru_RU&amp;amp;sourceType=constructor&amp;amp;scroll=true"></script>
      </div>
    </div>
	
	<!--FOOTER-->
    <div class="page-footer__wrapper">
      <div class="page-footer">
        <div class="main-logo__wrapper">
          <div class="main-logo">ЛЭКС<span class="main-logo__two-color">  СПб</span>
            <div class="main-logo__slogan"> Ваш верный друг</div>
          </div>
        </div><a class="page-footer__social-link" href="">мы в вконтакте</a>
        <div class="page-footer__schedule"></div>
        <div class="page-footer__contacts"><span>М. Владимирская, ул. Правды дом 1</span><a href="tel:+78121234567">+7 (812) 123-45-67</a><a href="tel:+78121234567">+7 (812) 123-45-67</a></div>
      </div>
    </div>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/myscript.js"></script>
  </body>
</html>
</body>
</html>