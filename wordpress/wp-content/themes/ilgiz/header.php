<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
	<title><?php the_title(); ?></title>
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:700|Montserrat:400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
	<header class="header">

<div class="navbar">
    <div class="container">
        <div class="navbar-wrap">

            <div class="navbar__logo">
                <strong class="logo__text">Ильгиз Гимранов</strong>
                <span class="logo__description">Официальный интернет-магазин</span>
                <span class="description__mobile">репродукций</span>
            </div>
            <!-- /.navbar__logo -->
        
            <ul class="navbar__menu">
                <li class="menu__item">
                    <a href="#">Каталог</a>
                </li>
                <li class="menu__item">
                    <a href="#">Контакты</a>
                </li>
                <li class="menu__item">
                    <button class="menu__call">
                        Связаться с нами
                        <img src="<?php echo get_template_directory_uri().'/img/wa-logo.svg'; ?>" alt="" class="menu__call-img">
                    </button>
                </li>
            </ul>
            <!-- /.navbar__menu -->

            <button class="navbar__button">
                <span class="navbar__button-line"></span>
                <span class="navbar__button-line"></span>
                <span class="navbar__button-line"></span>
            </button>
            <!-- /.navbar__button -->

        </div>
        <!-- /.navbar-wrap -->
    </div>
    <!-- /.container -->
</div>
<!-- /.navbar -->