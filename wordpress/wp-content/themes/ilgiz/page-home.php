<?php
/*
Template Name: Home
*/
?>
<?php
get_header();
?>
	<div class="hero">
			<div class="container">
				<h1 class="hero__title">
                <?php the_field('main-title'); ?>
				</h1>
				<!-- /.hero__title -->
				<div class="hero__links">
					<a href="#">Почта</a>
					<a href="#">WhatsApp</a>
					<a href="#">Telegram</a>
				</div>
				<!-- /.hero__links -->
			</div>
			<!-- /.container --> 
		</div>
		<!-- /.hero -->

	</header>
	<!-- /header -->

<!-- advantages -->
<section class="advantages">
	<div class="container">
		<h2 class="advantages__title">
        <?php the_field('advantages'); ?>
		</h2>
		<!-- /.advantages__title -->
		<p class="advantages__descr">
        <?php the_field('advantages-text'); ?>
		</p>
		<!-- /.advantages__descr -->
        <?php 
            $adv1 = get_field ('advantages-img');
            $adv2 = get_field ('advantages-img_2');
            $adv3 = get_field ('advantages-img_3');
            $adv4 = get_field ('advantages-img_4');
            
        ?>
        <div class="advantages__block">
			<div class="advantages__item">
				<img src="<?php echo $adv1['img1']; ?>" alt="" class="advantages__item-img">
				<img src="<?php echo $adv1['img2']; ?>" alt="" class="advantages__item-imghover">
				<p class="advantages__item-text">
                <?php echo $adv1['desc']; ?>
				</p>
				<!-- /.advantages__item-text -->
			</div>
			<!-- /.advantages__item -->
			<div class="advantages__item">
                <img src="<?php echo $adv2['img1']; ?>" alt="" class="advantages__item-img">
				<img src="<?php echo $adv2['img2']; ?>" alt="" class="advantages__item-imghover">
				<p class="advantages__item-text">
                <?php echo $adv2['desc']; ?>
				</p>
				<!-- /.advantages__item-text -->
			</div>
			<!-- /.advantages__item -->
			<div class="advantages__item">
                <img src="<?php echo $adv3['img1']; ?>" alt="" class="advantages__item-img">
				<img src="<?php echo $adv3['img2']; ?>" alt="" class="advantages__item-imghover">
				<p class="advantages__item-text">
                <?php echo $adv3['desc']; ?>
				</p>
				<!-- /.advantages__item-text -->
			</div>
			<!-- /.advantages__item -->
			<div class="advantages__item">
                <img src="<?php echo $adv4['img1']; ?>" alt="" class="advantages__item-img">
				<img src="<?php echo $adv4['img2']; ?>" alt="" class="advantages__item-imghover">
				<p class="advantages__item-text">
                <?php echo $adv4['desc']; ?>
				</p>
				<!-- /.advantages__item-text -->
			</div>
			<!-- /.advantages__item -->
		</div>
		<!-- /.advantages__block -->

	</div>
	<!-- /.container -->
</section>
<!-- /advantages -->

<!-- picture -->
<section class="picture">
	
</section>
<!-- /picture -->

<!-- catalog -->
<section class="catalog main">
	<div class="container">
		<h2 class="title">
			Каталог репродукций
		</h2>
		<!-- /.title -->
		<div class="catalog-wrap">
			<div class="grid-sizer"></div>
				
				<!-- /.catalog__block -->
                <?php
                    $args = array(
                    'numberposts' => -1, // если -1 то выводит все
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'gallery', // тип поста
                    'suppress_filters' => true,
                    );

                    $posts = get_posts($args);

                    foreach ($posts as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="catalog__block" data-price="<?php the_field('price'); ?>" >
					<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="" class="catalog__block-img">
					<p class="catalog__block-title">
						<?php the_title(); ?>
					</p>
					<p class="catalog__block-text">
						<?php the_field('tech'); ?>, <?php the_field('size'); ?>
					</p>
				</div>
                    <?php
                    }
                    wp_reset_postdata(); // сброс
                ?>
		</div>
		<!-- /.catalog-wrap -->
		<button class="show-more">Показать еще</button>

	</div>
	<!-- /.container -->
</section>
<!-- /catalog -->

<!-- feedback -->
<section class="feedback main">
	<img src="<?php echo get_template_directory_uri().'/img/brush-right.png'; ?>" alt="" class="brush-right">
	<div class="container">
		<h2 class="title">
			Трудно выбрать? <br>
			Мы поможем!
		</h2>
		<div class="form-wrap">
			<form action="" class="bigform">
				<div class="form__group">
					<label for="" class="form__label">ФИО</label>
					<input type="text" placeholder="Гайфулин Альберт Альбертович" class="form__input">
				</div>
				<!-- /.form__group -->
				<div class="form__group">
					<label for="" class="form__label">Номер телефона</label>
					<input type="text" placeholder="+38 (066) 474 22 81" class="form__input">
				</div>
				<!-- /.form__group -->
				<div class="form__group">
					<label for="" class="form__label">Почта</label>
					<input type="text" placeholder="tanezd2106@gmail.com" class="form__input">
				</div>
				<!-- /.form__group -->
				<div class="form__group">
					<label for="" class="form__label">Ваш вопрос</label>
					<textarea name="text" placeholder="Напишите что-нибудь" class="form__text"></textarea>
				</div>
				<!-- /.form__group -->
				<div class="form__group">
					<input type="submit" class="btn-offer" value="Заказать">
				</div>
				<!-- /.form__group -->
				
			</form>
			<!-- /.bigform -->
		</div>
		<!-- /.form-wrap -->
	</div>
	<!-- /.container -->
	<img src="<?php echo get_template_directory_uri().'/img/brush-left.png'; ?>" alt="" class="brush-left">
</section>
<!-- /.feedback -->

<!-- slider -->
<section class="slider main">
	<h2 class="title">Репродукции в интерьере</h2>

	<div class="slider-wrap">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="<?php echo get_template_directory_uri().'/img/slider1.jpg'; ?>" alt="">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri().'/img/slider1.jpg'; ?>" alt="">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri().'/img/slider1.jpg'; ?>" alt="">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri().'/img/slider1.jpg'; ?>" alt="">
			</div>
		</div>
	</div>
	<!-- /.slider-wrap -->
	
</section>
<!-- /.slider -->

<!-- about -->
<section class="about">
	<div class="container">
		<div class="about-wrap">
			<h2 class="about__mobile-title">
				“В хрущёвках Гимранова есть что-то человеческое, слишком человеческое”
			</h2>
			<div class="about__photo">
				<img src="<?php echo get_template_directory_uri().'/img/gimranov-photo.jpg'; ?>" alt="">
			</div>
			<!-- /.about__photo -->
			<div class="about__content">
				<h2 class="about__content-title">
					<span>“</span>В хрущёвках Гимранова есть что-то человеческое, слишком человеческое ”
				</h2>
					<p class="about__content-name">
						А. Д. Боровский
					</p>
					<p class="about__content-descr">
						зав. Отдела новейших течений Государственного Русского
						Музея, Санкт-Петербург
					</p>
					<p class="about__content-text">
						Ильгиз Гимранов — художник, чьё имя уже стало известным российским арт-брендом
						<br><br>
						Родился в 1960 г. в Казани.
						<br><br>
						1978-1986 работал в мастерской художника Ильдара Ханова (мозаика, скульптура, монументальная живопись)
						<br><br>
						В 1987 году стал основателем и арт-директором  первой негосударственной художественной галереи в Казани «АРСЕНАЛ», ставшей центром притяжения «неофициального» искусства со всего Татарстана.
						<br><br>
						С 1992 свободный художник.  Является участником многочисленных выставок и  арт-проектов в России и за рубежом.
						Музея, Санкт-Петербург
					</p>
					<div class="about__btn">
						<div class="about__btn-icon">
							<img src="<?php echo get_template_directory_uri().'/img/triangle.svg'; ?>" alt="">
						</div>
						<!-- /.about__btn-icon -->				
						<a href="#" class="about__btn-text">Смотреть видео с Ильгизом</a>
					</div>
					<!-- /about__btn -->
			</div>
			<!-- /.about__content -->
		</div>
		<!-- /.about-wrap -->
	</div>
	<!-- /.container -->
</section>
<!-- /about -->

<section class="offer main">
	<div class="container">
		<h2 class="title">Как заказать?</h2>
		<div class="offer-block">
			<div class="offer__steps">
				<div class="step">
					<div class="step__number">
						<span>1</span>
					</div>
					<!-- /.step__number -->
					<p class="step__text">
						Выберите репродукцию
					</p>
				</div>
				<!-- /.step -->
				<div class="step">
					<div class="step__number">
						<span>2</span>
					</div>
					<!-- /.step__number -->
					<p class="step__text">
						Напишите нам
					</p>
				</div>
				<!-- /.step -->
				<div class="step">
					<div class="step__number">
						<span>3</span>
					</div>
					<!-- /.step__number -->
					<p class="step__text">
						Укажите адрес
					</p>
				</div>
				<!-- /.step -->
				<div class="step">
					<div class="step__number">
						<span>4</span>
					</div>
					<!-- /.step__number -->
					<p class="step__text">
						Оплатите заказ
					</p>
				</div>
				<!-- /.step -->
				<div class="step">
					<div class="step__number">
						<span>5</span>
					</div>
					<!-- /.step__number -->
					<p class="step__text">
						Получите картину
					</p>
				</div>
				<!-- /.step -->
			</div>
			<!-- /.offer__steps -->
			<div class="offer__delivery">
				<h3 class="offer__delivery-title">
					Условия доставки
				</h3>
				<div class="offer__delivery-row">
					<img src="<?php echo get_template_directory_uri().'/img/car.svg'; ?>" alt="" class="offer-car">
					<p>Доставка по всему миру</p>
				</div>
				<!-- /.offer__delivery-row -->
				<div class="offer__delivery-row">
					<img src="<?php echo get_template_directory_uri().'/img/man.svg'; ?>" alt="" class="offer-man">
					<p>Курьерская доставка "до двери"</p>
				</div>
				<!-- /.offer__delivery-row -->
				<p class="offer__delivery-text">
					Доставка по России осуществляется логистическими компаниями. Стоимость доставки рассчитывается по тарифам логистических компаний и оплачивается покупателем отдельно. GAIFULIN GALLERY гарантирует упаковку картин, обеспечивающую их целостность и сохранность.
					<br><br>
					Самовывоз из офиса GAIFULIN GALLERY.
					<br><br>
					Подарочная упаковка оплачивается отдельно.
				</p>
			</div>
			<!-- /.offer__delivery -->
		</div>
		<!-- /.offer-block -->
	</div>
	<!-- /.container -->
</section>
<!-- /.offer -->

<section class="contacts">
	<div class="container">
		<div class="contacts-wrap">
			<div class="contacts__blocks">
				<h2 class="title">Контакты</h2>
				<div class="contacts__block">
					<p class="contacts__block-title">Телефон</p>
					<!-- /.contacts__block-title -->
					<a href="tel:+380664742281">+38 (066) 474 22 81</a>
				</div>
				<!-- /.contacts__block -->
				<div class="contacts__block">
					<p class="contacts__block-title">Адрес</p>
					<!-- /.contacts__block-title -->
					<p class="contacts__block-adress">г. Москва, 1-й Басманный пер., д. 3, стр. 1</p>
				</div>
				<!-- /.contacts__block -->
				<div class="contacts__block">
					<p class="contacts__block-title">Почта</p>
					<!-- /.contacts__block-title -->
					<a href="mailto:stasmihaylov228@gmail.com">stasmihaylov228@gmail.com</a>
				</div>
				<!-- /.contacts__block -->
				<div class="hero__links">
					<a href="#">Почта</a>
					<a href="#">WhatsApp</a>
					<a href="#">Telegram</a>
				</div>
				<!-- /.hero__links -->
			</div>
			<!-- /.contacts__block -->
			<div class="contacts__form">
				<img src="<?php echo get_template_directory_uri().'/img/brush-right.png'; ?>" alt="" class="brush-right">
				<h3 class="contacts__form-title">Свяжитесь с нами</h3>
				<form action="" class="bigform">
					<div class="form__group">
						<label for="" class="form__label">ФИО</label>
						<input type="text" placeholder="Гайфулин Альберт Альбертович" class="form__input">
					</div>
					<!-- /.form__group -->
					<div class="form__group">
						<label for="" class="form__label">Номер телефона</label>
						<input type="text" placeholder="+38 (066) 474 22 81" class="form__input">
					</div>
					<!-- /.form__group -->
					<div class="form__group">
						<label for="" class="form__label">Почта</label>
						<input type="text" placeholder="tanezd2106@gmail.com" class="form__input">
					</div>
					<!-- /.form__group -->
					<div class="form__group">
						<label for="" class="form__label">Ваш вопрос</label>
						<textarea name="text" placeholder="Напишите что-нибудь" class="form__text"></textarea>
					</div>
					<!-- /.form__group -->
					<div class="form__group">
						<input type="submit" class="btn-offer" value="Написать">
					</div>
					<!-- /.form__group -->
					
				</form>
				<!-- /.bigform -->
			</div>
			<!-- /.contacts__form -->
		</div>
		<!-- /.contacts-wrap -->
<?php
get_footer();
?>