<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
                
                <!-- Page content wrap -->
                <div class="page_content_wrap scheme_default">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item_single page">
                            <div class="post_content">
                                <!-- Removed slider - adding static black wave -->
                                <div class="banner-text">
                                    <h2><?php echo get_post_meta(16, 'title', true);?></h2>
                                    <p><?php echo get_post_meta(16, 'small_text_under_title', true);?></p>
                                    <h4>Dream ~ Collaborate ~ Print</h4>
                                </div>
                                <div class="homepage-banner">
                                    <div class="wave">

                                    </div>
                                </div>
                                <!-- End of black wave -->
                                
                                <!-- We Print - overlap with banner -->
                                <div class="copypress-custom-bg-6">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="brands">


                                            <!-- trx_addons_columns_wrap - class is responsible for putting 2 in a row - added new class called format-inline -->
                                            <!-- what we do -->
                                            <div class="respon-4">
                                                <div class="first-col">
                                                    <a href="">
                                                        <div class="card">
                                                            
                                                            <h3><?php echo get_post_meta(16, 'what_we_do_text1', true);?></h3>
                                                            
                                                            <img src="<?php echo get_post_meta(16, 'what_we_do_img1', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="card">
                                                            <h3><?php echo get_post_meta(16, 'what_we_do_text2', true);?></h3>
                                                            
                                                            <img src="<?php echo get_post_meta(16, 'what_we_do_img2', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="card">
                                                            <h3><?php echo get_post_meta(16, 'what_we_do_text3', true);?></h3>
                                                            <img src="<?php echo get_post_meta(16, 'what_we_do_img3', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="card">
                                                            <h3><?php echo get_post_meta(16, 'what_we_do_text4', true);?></h3>
                                                            <img src="<?php echo get_post_meta(16, 'what_we_do_img4', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                                
                                            </div>


                                            
                                        </div>
                                        <div class="empty_space height_4em"></div>
                                    </div>
                                </div>
                                <!-- End of We Print -->

                                <!-- We work with a variety of industries -->
                                <div class="copypress-custom-bg-6">
                                <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="brands">
                                            <h3 class="we-work-with">We Work With a Variety of Industries</h3>
                                            <!-- trx_addons_columns_wrap - class is responsible for putting 2 in a row - added new class called format-inline -->
                                            <div class="respon-4-sqaure">
                                                <div class="first-col-sqaure">
                                                    <a href="">
                                                        <div class="card-sqaure">
                                                            <h3><?php echo get_post_meta(16, 'we_work_with_text1', true);?></h3>
                                                            <img src="<?php echo get_post_meta(16, 'we_work_with_img1', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="card-sqaure">
                                                            <h3><?php echo get_post_meta(16, 'we_work_with_text2', true);?></h3>
                                                            <img src="<?php echo get_post_meta(16, 'we_work_with_img2', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="card-sqaure">
                                                            <h3><?php echo get_post_meta(16, 'we_work_with_text3', true);?></h3>
                                                            <img src="<?php echo get_post_meta(16, 'we_work_with_img3', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                    <a href="">
                                                        <div class="card-sqaure">
                                                            <h3><?php echo get_post_meta(41, 'we_work_with_text4', true);?></h3>
                                                            <img src="<?php echo get_post_meta(41, 'we_work_with_img4', true);?>" alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="empty_space height_4em"></div>
                                    </div>
                                </div>
                                <!-- End of we work with a variety of industries -->


                                <!-- Concept to print -->
                                <div class="copypress-custom-bg-3">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        
                                        <div class="trx_addons_columns_wrap">
                                            <div class="trx_addons_column-1_2 trx_addons_column_specific sc_layouts_column_icons_position_left">
                                                <div class="empty_space height_3em"></div>
                                                <div class="sc_title sc_title_default">
                                                    <h6 class="sc_item_subtitle sc_title_subtitle sc_align_default sc_item_title_style_default">we handle everything</h6>
                                                    <h2 class="sc_item_title sc_title_title sc_align_default sc_item_title_style_default"><?php echo get_post_meta(16, 'second_main_title', true);?></h2>
                                                </div>
                                                <div class="empty_space height_2em"></div>
                                                <p><?php echo get_post_meta(16, 'paragraph', true);?></p>
                                                <div class="empty_space height_2_9em"></div>
                                                <div class="sc_item_button sc_button_wrap">
                                                    <a href="<?php echo get_permalink(10) ?>" class="sc_button sc_button_pink sc_button_size_normal sc_button_icon_left">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">Request a Quote</span>
                                                        </span>
                                                    </a>
                                                    <a href="<?php echo get_permalink(10) ?>" class="sc_button sc_button_pink sc_button_size_normal sc_button_icon_left">
                                                        <span class="sc_button_text">
                                                            <span class="sc_button_title">Free Samples</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div><div class="trx_addons_column-1_2 trx_addons_column_specific sc_layouts_column_icons_position_left">
                                            <div class="empty_space height_4em"></div>
                                            <img id="concept-to-print-image" src="<?php echo get_post_meta(16, 'second_main_title_img', true);?>" />
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- /Welcome section -->
                                
                                
                                <!-- Services Info -->
                                <div class="sc_layouts_column_icons_position_left">
                                    <div class="sc_services sc_services_hover" data-slides-per-view="3" data-slides-min-width="200">
                                        <div class="sc_services_columns sc_item_columns sc_item_columns_3 trx_addons_columns_wrap">
                                            <div class="trx_addons_column-1_3 ">
                                                <div class="sc_services_item with_content with_image">
                                                    <div class="sc_services_item_content copypress-service-1">
                                                        <div class="sc_services_item_content_inner">
                                                            <h3 class="sc_services_item_title">
                                                                <a href="<?php echo get_permalink(10) ?>"><?php echo get_post_meta(16, 'our_printers1', true);?></a>
                                                            </h3>
                                                            <div class="sc_services_item_text">
                                                                <p><?php echo get_post_meta(16, 'paragraph_for_printers1', true);?></p>
                                                            </div>
                                                            <div class="sc_services_item_link sc_item_button">
                                                                <a class="sc_button_white sc_button_hover_slide_left" href="<?php echo get_permalink(10) ?>">More info</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="trx_addons_column-1_3 ">
                                            <div class="sc_services_item with_content with_image">
                                                <div class="sc_services_item_content copypress-service-2">
                                                    <div class="sc_services_item_content_inner">
                                                        <h3 class="sc_services_item_title">
                                                            <a href="<?php echo get_permalink(10) ?>"><?php echo get_post_meta(16, 'our_printers2', true);?></a>
                                                        </h3>
                                                        <div class="sc_services_item_text">
                                                            <p><?php echo get_post_meta(16, 'paragraph_for_printers2', true);?></p>
                                                        </div>
                                                        <div class="sc_services_item_link sc_item_button">
                                                            <a class="sc_button_white sc_button_hover_slide_left" href="<?php echo get_permalink(10) ?>">More info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="trx_addons_column-1_3 ">
                                            <div class="sc_services_item with_content with_image">
                                                <div class="sc_services_item_content copypress-service-1">
                                                    <div class="sc_services_item_content_inner">
                                                        <h3 class="sc_services_item_title">
                                                            <a href="<?php echo get_permalink(10) ?>"><?php echo get_post_meta(16, 'our_printers3', true);?></a>
                                                        </h3>
                                                        <div class="sc_services_item_text">
                                                            <p><?php echo get_post_meta(16, 'paragraph_for_printers3', true);?></p>
                                                        </div>
                                                        <div class="sc_services_item_link sc_item_button">
                                                            <a class="sc_button_white sc_button_hover_slide_left" href="<?php echo get_permalink(10) ?>">More info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Services Info -->
                                
                                <!-- Testimonials -->
                                <div class="copypress-custom-bg-5-test">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="empty_space height_5_2em"></div>
                                        <div class="trx_addons_columns_wrap">
                                            <div class="trx_addons_column-1_2 sc_layouts_column_icons_position_left">
                                                <div class="empty_space height_4em"></div>
                                                <div class="sc_testimonials sc_testimonials_default swiper-slider-container slider_swiper slider_noresize slider_nocontrols slider_nopagination" data-slides-min-width="150">
                                                    <h2 class="sc_item_title sc_testimonials_title sc_align_left sc_item_title_style_default">Testimonials</h2>
                                                    <div class="sc_testimonials_slider sc_item_slider slides swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="sc_testimonials_item">
                                                                <div class="sc_testimonials_item_content">
                                                                    <p><?php echo get_post_meta(16, 'paragraph_for_testimonals1', true);?></p>
                                                                </div>
                                                                <div class="sc_testimonials_item_author">
                                                                   
                                                                    <div class="sc_testimonials_item_author_data">
                                                                        <h4 class="sc_testimonials_item_author_title"><?php echo get_post_meta(16, 'first_and_last_name1', true);?></h4>
                                                                        <div class="sc_testimonials_item_author_subtitle"><?php echo get_post_meta(16, 'company1', true);?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="sc_testimonials_item">
                                                                <div class="sc_testimonials_item_content">
                                                                    <p><?php echo get_post_meta(16, 'paragraph_for_testimonals2', true);?></p>
                                                                </div>
                                                                <div class="sc_testimonials_item_author">
                                                                    
                                                                    <div class="sc_testimonials_item_author_data">
                                                                        <h4 class="sc_testimonials_item_author_title"><?php echo get_post_meta(16, 'first_and_last_name2', true);?></h4>
                                                                        <div class="sc_testimonials_item_author_subtitle"><?php echo get_post_meta(16, 'company2', true);?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="sc_testimonials_item">
                                                                <div class="sc_testimonials_item_content">
                                                                    <p><?php echo get_post_meta(16, 'paragraph_for_testimonals3', true);?></p>
                                                                </div>
                                                                <div class="sc_testimonials_item_author">
                                                                    
                                                                    <div class="sc_testimonials_item_author_data">
                                                                        <h4 class="sc_testimonials_item_author_title"><?php echo get_post_meta(16, 'first_and_last_name3', true);?></h4>
                                                                        <div class="sc_testimonials_item_author_subtitle"><?php echo get_post_meta(16, 'company3', true);?></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="trx_addons_column-1_2 sc_layouts_column_icons_position_left">
                                            <div class="empty_space height_4em"></div>
                                            <figure>
                                                <img src="<?php echo get_template_directory_uri() . '/images/unboxing.jpg'; ?>" alt="" />
                                            </figure>
                                        </div>
                                        </div>
                                        <div class="empty_space height_10_5em"></div>
                                    </div>
                                </div>
                                <!-- /Testimonials -->
                                
                               
                                <!-- Blogger / Instagram Stream -->
                                <!-- <div class="copypress-custom-bg-1">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="trx_addons_columns_wrap">
                                            <div class="trx_addons_column-1_2 trx_addons_column_specific sc_layouts_column_icons_position_left">
                                                <div class="empty_space height_9_2em"></div>
                                                <div class="sc_blogger sc_blogger_plain" data-slides-min-width="150">
                                                    <h2 class="sc_item_title sc_blogger_title sc_align_default sc_item_title_style_default">Fresh blog post</h2>
                                                    <div class="sc_blogger_content sc_item_content">
                                                        <div class="sc_blogger_item post_format_standard post has-post-thumbnail">
                                                            <div class="sc_blogger_item_content">
                                                                <div class="sc_blogger_item_date">
                                                                    <span class="day">05</span>
                                                                    <span class="month">Dec</span>
                                                                </div>
                                                                <div class="sc_blogger_item_info">
                                                                    <div class="post_meta">
                                                                        <span class="post_meta_item post_categories">
                                                                            <a href="#">Lifestyle</a>
                                                                        </span>
                                                                        <span class="post_meta_item post_date">
                                                                            <a href="#">05.12.2016</a>
                                                                        </span>
                                                                    </div>
                                                                    <h5 class="sc_blogger_item_title">
                                                                        <a href="post-single.html">Catalogs: the Best Way to Present Product Information</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sc_blogger_item post_format_standard post">
                                                            <div class="sc_blogger_item_content">
                                                                <div class="sc_blogger_item_date">
                                                                    <span class="day">27</span>
                                                                    <span class="month">Nov</span>
                                                                </div>
                                                                <div class="sc_blogger_item_info">
                                                                    <div class="post_meta">
                                                                        <span class="post_meta_item post_categories">
                                                                            <a href="#">Lifestyle</a>
                                                                        </span>
                                                                        <span class="post_meta_item post_date">
                                                                            <a href="#">27.11.2016</a>
                                                                        </span>
                                                                    </div>
                                                                    <h5 class="sc_blogger_item_title">
                                                                        <a href="post-single.html">10 Ingenious Newspaper Designs</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sc_blogger_item post_format_standard post">
                                                            <div class="sc_blogger_item_content">
                                                                <div class="sc_blogger_item_date">
                                                                    <span class="day">18</span>
                                                                    <span class="month">Nov</span>
                                                                </div>
                                                                <div class="sc_blogger_item_info">
                                                                    <div class="post_meta">
                                                                        <span class="post_meta_item post_categories">
                                                                            <a href="#">3D Technology</a>
                                                                        </span>
                                                                        <span class="post_meta_item post_date">
                                                                            <a href="#">18.11.2016</a>
                                                                        </span>
                                                                    </div>
                                                                    <h5 class="sc_blogger_item_title">
                                                                        <a href="post-single.html">5 Great Magazines to Give for Christmas</a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="trx_addons_column-1_2 trx_addons_column_specific sc_layouts_column_icons_position_left">
                                                <div class="empty_space height_9_2em"></div>
                                                <aside class="widget widget_weblizar_twitter">
                                                    <h5 class="widget_title">Instagram Stream</h5>
                                                    <div class="copypress-twitter-block">
                                                        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/TrxDoe" data-theme="light" data-lang="" data-link-color=""></a>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>
                                        <div class="empty_space height_9_2em"></div>
                                    </div>
                                </div> -->
                                <!-- /Blogger / Instagram Stream -->
                                <!-- Our Contacts -->
                                <div class="copypress-custom-bg-2">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="empty_space height_9_4em"></div>
                                        <div id="sc_form_3" class="sc_form sc_form_detailed simple sc_align_default">
                                            <div class="trx_addons_columns_wrap">
                                                <div class="trx_addons_column-1_2">
                                                    <div class="sc_form_info">
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Our Contacts</h2>
                                                        <div class="sc_form_info_item sc_form_info_item_address">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Our Office</span>
                                                                <span class="sc_form_info_data">
                                                                    <span>91 Westside Dr, Asheville, NC 28806</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="sc_form_info_item sc_form_info_item_phone">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Phone</span>
                                                                <span class="sc_form_info_data">
                                                                    <span>828-252-9867</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="sc_form_info_item sc_form_info_item_email">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Email Address</span>
                                                                <span class="sc_form_info_data">
                                                                    <a href="mailto:info@sandcreekprintery.com">info@sandcreekprintery.com</a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><div class="trx_addons_column-1_2">
                                                <form class="sc_form_form " >
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Request Quote</h2>
                                                        <?php echo do_shortcode('[wpforms id="106"]');?>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="empty_space height_9_4em"></div>
                                    </div>
                                </div>
                                <!-- /Our Contacts -->
                               
                            </div>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page content wrap -->

    <?php get_footer(); ?>
<?php

?>