<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <script type="text/javascript" src="https://livejs.com/live.js"></script>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="nav">
        <div class="container--nav">
            <div class="nav__box">
                <a href="<?php echo site_url(); ?>" class="nav__logo"><img
                        src="<?php echo get_theme_file_uri('assets/src/img/logo.png') ?>" alt=""
                        class="nav__logo__img"></a>
                <a href="https://www.facebook.com/groups/495928944763025/" target="_blank">
                    <i class="fa-brands fa-facebook icon-social"></i></a>
                <!-- <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'headerMenuLocation'
                    )
                );
                ?> -->
                <div class="menu-header-menu-container">
                    <div class="menu-header-menu">
                        <ul class="menu">
                            <div class="dropdown">
                                <li class="menu-item"><a href="javascript:void(0);">Дестинации</a>
                                </li>
                                <div class="dropdown__content">
                                    <?php wp_list_categories(
                                        array(
                                            'title_li' => '',
                                            'child_of' => 10,
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <div class="dropdown">
                                <li class="menu-item"><a href="<?php echo site_url('/blog'); ?>">Избрани пътешествия</a>
                                </li>
                                <div class="dropdown__content">
                                    <?php wp_list_categories(
                                        array(
                                            'title_li' => '',
                                            'child_of' => 11,
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <li class="menu-item"><a href="<?php echo site_url('/avtopark'); ?>">Автобусен транспорт</a>
                            </li>
                            <li class="menu-item"><a href="<?php echo site_url('/za-nas'); ?>">За нас</a></li>
                        </ul>
                    </div>
                </div>

                <div class="menu-header-menu-container sidebar">
                    <div class="menu-header-menu">
                        <span class="icon icon-x">&times;</span>
                        <ul class="sidebar-menu-list">
                            <div class="dropdown dropdown-responsive">
                                <li class="menu-item sidebar-li"><a href="javascript:void(0);">Дестинации</a>
                                </li>
                                <div class="dropdown__content-responsive">
                                    <?php wp_list_categories(
                                        array(
                                            'title_li' => '',
                                            'child_of' => 10,
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <div class="dropdown dropdown-responsive-2">
                                <li class="menu-item sidebar-li"><a href="javascript:void(0)">Избрани
                                        пътешествия</a>
                                </li>
                                <div class="dropdown__content-responsive-2">
                                    <?php wp_list_categories(
                                        array(
                                            'title_li' => '',
                                            'child_of' => 11,
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <li class="menu-item sidebar-li"><a href="<?php echo site_url('/avtopark'); ?>">Автобусен
                                    транспорт</a>
                            </li>
                            <li class="menu-item sidebar-li"><a href="<?php echo site_url('/za-nas'); ?>">За нас</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hamburger-menu hidden-cross">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>