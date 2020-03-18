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
		  <?php the_field( 'main-title' ); ?>
      </h1>
      <!-- /.hero__title -->
      <div class="hero__links">
        <a href="mailto:<?php the_field( 'email' ); ?>">Почта</a>
        <a href="<?php the_field( 'whatsapp' ); ?>" target="_blank">WhatsApp</a>
        <a href="<?php the_field( 'telegram' ); ?>">Telegram</a>
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
		  <?php the_field( 'advantages' ); ?>
      </h2>
      <!-- /.advantages__title -->
      <p class="advantages__descr">
		  <?php the_field( 'advantages-text' ); ?>
      </p>
      <!-- /.advantages__descr -->
		<?php
		$adv1 = get_field( 'advantages-img' );
		$adv2 = get_field( 'advantages-img_2' );
		$adv3 = get_field( 'advantages-img_3' );
		$adv4 = get_field( 'advantages-img_4' );

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
  <section class="catalog main" id="catalog">
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
			  'numberposts'      => - 1, // если -1 то выводит все
			  'orderby'          => 'date',
			  'order'            => 'DESC',
			  'post_type'        => 'gallery', // тип поста
			  'suppress_filters' => true,
		  );

		  $posts = get_posts( $args );
		  foreach ( $posts as $post ) {
			  setup_postdata( $post );
			  ?>
            <div class="catalog__block" data-price="<?php the_field( 'price' ); ?>">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt=""
                   class="catalog__block-img">
              <p class="catalog__block-title">
				  <?php the_title(); ?>
              </p>
              <p class="catalog__block-text">
                <span class="catalog__block--tech"><?php the_field( 'tech' ); ?></span>, <span class="catalog__block--size"><?php the_field( 'size' ); ?></span>
              </p>
            </div>
			  <?php
		  }
		  wp_reset_postdata(); // сброс
		  ?>
      </div>
      <!-- /.catalog-wrap -->
<!--      <button class="show-more">Показать еще</button>-->

    </div>
    <!-- /.container -->
  </section>
  <!-- /catalog -->

  <!-- feedback -->
  <section class="feedback main">
    <img src="<?php echo get_template_directory_uri() . '/img/brush-right.png'; ?>" alt="" class="brush-right">
    <div class="container">
      <h2 class="title">
        Трудно выбрать? <br>
        Мы поможем!
      </h2>
      <div class="form-wrap">
        <form id="first-form" class="bigform">
          <div class="form__group">
            <label for="" class="form__label">ФИО</label>
            <input type="text" name="name" placeholder="Укажите ваше имя" class="form__input">
          </div>
          <!-- /.form__group -->
          <div class="form__group">
            <label for="" class="form__label">Номер телефона</label>
            <input type="text" name="tel" placeholder="+7(ххх)ххх-хх-хх" class="form__input">
          </div>
          <!-- /.form__group -->
          <div class="form__group">
            <label for="" class="form__label">Почта</label>
            <input type="text" name="tel" placeholder="Укажите вашу почту" class="form__input">
          </div>
          <!-- /.form__group -->
          <div class="form__group">
            <label for="" class="form__label">Ваш вопрос</label>
            <textarea name="comment" placeholder="Напишите какая картина вам понравилась" class="form__text"></textarea>
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
    <img src="<?php echo get_template_directory_uri() . '/img/brush-left.png'; ?>" alt="" class="brush-left">
  </section>
  <!-- /.feedback -->

  <!-- slider -->
  <section class="slider main">
    <h2 class="title">Репродукции в интерьере</h2>

    <div class="slider-wrap">
      <div class="owl-carousel owl-theme">
		  <?php
		  $args = array(
			  'numberposts'      => - 1, // если -1 то выводит все
			  'orderby'          => 'date',
			  'order'            => 'DESC',
			  'post_type'        => 'slider', // тип поста
			  'suppress_filters' => true,
		  );

		  $posts = get_posts( $args );

		  foreach ( $posts as $post ) {
			  setup_postdata( $post );
			  ?>
            <div class="item">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
            </div>
			  <?php
		  }
		  wp_reset_postdata(); // сброс
		  ?>
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

			<?php $photo = get_field( 'photo' ); ?>

          <img src="<?php echo $photo; ?>" alt="">

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
            В 1987 году стал основателем и арт-директором первой негосударственной художественной галереи в Казани
            «АРСЕНАЛ», ставшей центром притяжения «неофициального» искусства со всего Татарстана.
            <br><br>
            С 1992 свободный художник. Является участником многочисленных выставок и арт-проектов в России и за рубежом.
            Музея, Санкт-Петербург
          </p>
          <div class="about__btn">
            <div class="about__btn-icon">
              <img src="<?php echo get_template_directory_uri() . '/img/triangle.svg'; ?>" alt="">
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
            <img src="<?php echo get_template_directory_uri() . '/img/car.svg'; ?>" alt="" class="offer-car">
            <p>Доставка по всему миру</p>
          </div>
          <!-- /.offer__delivery-row -->
          <div class="offer__delivery-row">
            <img src="<?php echo get_template_directory_uri() . '/img/man.svg'; ?>" alt="" class="offer-man">
            <p>Курьерская доставка "до двери"</p>
          </div>
          <!-- /.offer__delivery-row -->
          <p class="offer__delivery-text">
			  <?php the_field( 'offer' ); ?>
          </p>
        </div>
        <!-- /.offer__delivery -->
      </div>
      <!-- /.offer-block -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.offer -->

  <section class="contacts" id="contacts">
  <div class="container">
  <div class="contacts-wrap">
    <div class="contacts__blocks">
      <h2 class="title">Контакты</h2>
      <div class="contacts__block">
        <p class="contacts__block-title">Телефон</p>
        <!-- /.contacts__block-title -->
        <a href="tel:<?php the_field( 'tel' ) ?>"><?php the_field( 'tel' ) ?></a>
      </div>
      <!-- /.contacts__block -->
      <div class="contacts__block">
        <p class="contacts__block-title">Почта</p>
        <!-- /.contacts__block-title -->
        <a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a>
      </div>
      <!-- /.contacts__block -->
      <div class="hero__links">
        <a href="mailto:<?php the_field( 'email' ); ?>">Почта</a>
        <a href="<?php the_field( 'whatsapp' ); ?>" target="_blank">WhatsApp</a>
        <a href="<?php the_field( 'telegram' ); ?>">Telegram</a>
      </div>
      <!-- /.hero__links -->
    </div>
    <!-- /.contacts__block -->
    <div class="contacts__form">
      <img src="<?php echo get_template_directory_uri() . '/img/brush-right.png'; ?>" alt="" class="brush-right">
      <h3 class="contacts__form-title">Свяжитесь с нами</h3>
      <form id="form-2" class="bigform">
        <div class="form__group">
          <label for="" class="form__label">ФИО</label>
          <input type="text" name="name" placeholder="Укажите ваше имя" class="form__input">
        </div>
        <!-- /.form__group -->
        <div class="form__group">
          <label for="" class="form__label">Номер телефона</label>
          <input type="text" name="tel" placeholder="+7(ххх)ххх-хх-хх" class="form__input">
        </div>
        <!-- /.form__group -->
        <div class="form__group">
          <label for="" class="form__label">Почта</label>
          <input type="text" name="email" placeholder="Укажите вашу почту" class="form__input">
        </div>
        <!-- /.form__group -->
        <div class="form__group">
          <label for="" class="form__label">Ваш вопрос</label>
          <textarea name="comment" placeholder="напишите какая картина вам понравилась" class="form__text"></textarea>
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

  <!-- MODAL  -->

  <div class="overlay">
    <div class="modal">
      <div class="modal-close"></div>
      <div class="modal-img">

      </div>
      <div class="modal-content">
        <div class="modal-text">
          <h2>Прогулки по млечному пути</h2>
          <p>Техника: <span class="modal-tech"></span>
            <br>
            Размер: <span class="modal-size"></span> • Цена: <span class="modal-price"></span>
          </p>
        </div>

        <form class="modal-form" id="form-modal">
          <label for="name">ФИО</label>
          <input type="text" name="name" id="name" placeholder="Укажите ваше имя">
          <label for="tel">Номер телефона</label>
          <input type="tel" name="tel" id="tel" placeholder="+7(ххх)ххх-хх-хх">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Укажите вашу почту">
          <label for="coment">Коментарий</label>
          <textarea name="comment" id="comment" placeholder="Ваш комментарий"></textarea>
          <input class="modal-btn" type="submit" value="Написать">
        </form>
      </div>
    </div>
  </div>

  <!-- end-MODAL  -->

  <div class="modal-alert">
    <div class="modal-alert__body">
      <div class="modal-alert__close"></div>
      <div class="modal-alert__text">Спасибо за вашу заявку <br> С вами свяжутся в ближайшее время!</div>
    </div>
  </div>

  <div class="modal-wrapper-video">
    <div class="modal-video">
      <div class="modal-video__close"></div>
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field( 'video-btn' ); ?>"
              frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen id="video-modal"></iframe>
    </div>
  </div>
<?php
get_footer();
?>