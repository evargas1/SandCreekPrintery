<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

    <head>
        <title>CopyPress &#8211; Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <?php wp_head(); ?>

    </head>

    <body class="home page custom-background body_tag scheme_default body_style_wide blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-18 header_position_default menu_style_top no_layout">
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <!-- Header -->
                <header class="top_panel top_panel_custom top_panel_custom_18 without_bg_image scheme_default">
                    <!-- Top panel -->
                    <div class="top_panel_container sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_delimiter sc_layouts_row_fixed">
                        <div class="sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                            <!-- Logo -->
                            <div class="sc_content sc_content_default sc_float_left sc_align_left">
                                <div class="sc_content_container">
                                    <div class="sc_layouts_item">
                                        <a href="<?php echo get_home_url();  ?>" class="sc_layouts_logo sc_layouts_logo_default">
                                            <img class="logo_image" src="<?php echo get_template_directory_uri() . '/images/Sand Creek Logo.png'; ?>" />
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Logo -->
                            <!-- Menu -->
                            <div class="sc_layouts_item">
                                <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_slide_line hide_on_mobile" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
                                    <ul id="menu-main-menu" class="sc_layouts_menu_nav">
                                        <!-- Menu item : Home -->
                                        <li class="menu-item current-menu-ancestor current-menu-parent">
                                            <a href="<?php echo get_home_url();  ?>">
                                                <span>Home</span>
                                            </a>
                                        </li>
                                        <!-- /Menu item : Home -->
                                        <!-- Menu item : Gallery -->
                                        <li class="menu-item current-menu-ancestor current-menu-parent">
                                            <a href="<?php echo site_url('/gallery') ?>">
                                                <span>Gallery</span>
                                            </a>
                                        </li>
                                        <!-- /Menu item : Gallery -->
                                        <!-- Menu item : Services -->
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Services</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <!-- Menu item : Service1 -->
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">
                                                        <span>Service 1</span>
                                                    </a>
                                                </li>
                                                <!-- /Menu item : Service1 -->
                                                <!-- Menu item : Service2 -->
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">
                                                        <span>Service 2</span>
                                                    </a>
                                                </li>
                                                <!-- /Menu item : Service2 -->
                                                <!-- Menu item : Service3 -->
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">
                                                        <span>Service3</span>
                                                    </a>
                                                <!-- /Menu item : Service2 -->
                                            </ul>
                                        </li>
                                        <!-- /Menu item : Services -->
                                        <!-- Menu item : About -->
                                        <li class="menu-item">
                                            <a href="<?php echo site_url('/about') ?>">
                                                <span>About</span>
                                            </a>
                                        </li>
                                        <!-- /Menu item : About -->
                                        <!-- Menu item : Contacts -->
                                        <li class="menu-item">
                                            <a href="<?php echo site_url('/contacts') ?>">
                                                <span>Contacts</span>
                                            </a>
                                        </li>
                                        <!-- Menu item : Contacts -->
                                    </ul>
                                </nav>
                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu">Menu</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Menu -->
                            <!-- E-mail -->
                            <div class="sc_layouts_item contacts">
                                <div class="sc_layouts_iconed_text">
                                    <a href="mailto:info@sandcreekprintery.com" class="sc_layouts_item_link sc_layouts_iconed_text_link">
                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-mail-empty"></span>
                                        <span class="sc_layouts_item_details sc_layouts_iconed_text_details">
                                            <span class="sc_layouts_item_details_line2 sc_layouts_iconed_text_line2">info@sandcreekprintery.com</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Top panel -->
                </header>
                <!-- /Header -->
                <!-- Menu mobile -->
                <div class="menu_mobile_overlay"></div>
                <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
                    <div class="menu_mobile_inner">
                        <a class="menu_mobile_close icon-cancel"></a>
                        <nav class="menu_mobile_nav_area">
                            <ul id="menu_mobile-main-menu" class="">
                                <!-- Menu item : Home -->
                                <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                                    <a href="index.html">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <!-- /Menu item : Home -->
                                <!-- Menu item : Gallery -->
                                <li class="menu-item current-menu-ancestor current-menu-parent">
                                        <a href="<?php echo site_url('/gallery') ?>">
                                            <span>Gallery</span>
                                        </a>
                                        </li>
                                        <!-- /Menu item : Gallery -->
                                <!-- Menu item : Services -->
                                <li class="menu-item">
                                    <a href="#">
                                        <span>Services</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <!-- Menu item : Services1 -->
                                        <li class="menu-item">
                                            <a href="#">
                                                <span>Services 1</span>
                                            </a>
                                        </li>
                                        <!-- /Menu item : Services1 -->
                                        <!-- Menu item : Services2 -->
                                        <li class="menu-item">
                                            <a href="#">
                                                <span>Services 2</span>
                                            </a>
                                        </li>
                                        <!-- /Menu item : Services2 -->
                                        <!-- Menu item : Services3 -->
                                        <li class="menu-item">
                                            <a href="#">
                                                <span>Services 3</span>
                                            </a>
                                        </li>
                                        <!-- /Menu item : Services3 -->
                                    </ul>
                                </li>
                                <!-- /Menu item : Services -->
                                <!-- Menu item : About -->
                                <li class="menu-item">
                                    <a href="about-style-2.html">
                                        <span>About</span>
                                    </a>
                                </li>
                                <!-- /Menu item : About -->
                                <!-- Menu item : Contacts -->
                                <li class="menu-item">
                                    <a href="contacts.html">
                                        <span>Contacts</span>
                                    </a>
                                </li>
                                <!-- /Menu item : Contacts -->
                            </ul>
                        </nav>
                        <!-- Search -->
                        <div class="search_wrap search_style_normal search_mobile">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="#">
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                    <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->
                        <!-- Socials -->
                        <div class="socials_mobile">
                            <span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_twitter">
                                    <span class="trx_addons_icon-twitter"></span>
                                </a>
                            </span><span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_facebook">
                                    <span class="trx_addons_icon-facebook"></span>
                                </a>
                            </span><span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_gplus">
                                    <span class="trx_addons_icon-gplus"></span>
                                </a>
                            </span><span class="social_item">
                                <a href="#" target="_blank" class="social_icons social_tumblr">
                                    <span class="trx_addons_icon-tumblr"></span>
                                </a>
                            </span>
                        </div>
                        <!-- /Socials -->
                    </div>
                </div>
                <!-- /Menu mobile -->


