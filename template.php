<?php
/*
Template Name: template
*/
?>

<?php get_header(); ?>
    <main class="main">
        <div class="page__top">
            <div class="page__container-page">
                <div class="page__breadcrumbs">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>
                </div>
                <h1 class="page__title--h1"><?php the_field('title_template'); ?></h1>
            </div>
        </div>
        <main class="page__main">
            <div class="hero-template">
                <img
                        src="<?php the_field('img_block_one_template'); ?>" class="hero-template__img"
                        alt="about img"
                />
                <div class="hero-template__container hero-template__body">
                    <h4 class="hero-template__title"><?php the_field('title_block_one_template'); ?></h4>
                    <p class="hero-template__description">
                        <?php the_field('text_block_one_template'); ?>
                    </p>
                    <a href="<?php the_field('link_block_one_template'); ?>"
                       class="calc-btn__s template_button"><?php the_field('button_block_one_template'); ?></a>
                </div>
            </div>
            <div class="page__container-page">
                <div class="page__block">
                    <h1 class="page__title--h1"><?php the_field('title_block_two_template'); ?></h1>
                    <h2 class="page__title--h2">
                        <?php the_field('subtitle_block_two_template'); ?>
                    </h2>

                    <?php

                    // проверяем есть ли в повторителе данные
                    if (have_rows('repeat_block_two_template')):

                        // перебираем данные
                        while (have_rows('repeat_block_two_template')) : the_row(); ?>
                            <p class="page__description">
                                <?php the_sub_field('text_block_two_template'); ?>
                            </p>
                        <?php endwhile;
                    else :
                    endif;
                    ?>

                </div>
                <div class="page__block">
                    <h3 class="page__title--h3">
                        <?php the_field('title_block_three_template'); ?>
                    </h3>
                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('repeat_block_three_template')):
                        // перебираем данные
                        while (have_rows('repeat_block_three_template')) : the_row(); ?>
                            <p class="page__description">
                                <?php the_sub_field('text_block_three_template'); ?>
                            </p>
                        <?php endwhile;
                    else :
                    endif;
                    ?>

                </div>
                <div class="page__block">
                    <h4 class="page__title--h4"><?php the_field('title_ten_block_template'); ?></h4>

                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('repeat_block_four_template')):
                        // перебираем данные
                        while (have_rows('repeat_block_four_template')) : the_row(); ?>
                            <p class="page__description--bold">
                                <?php the_sub_field('text_block_four_template'); ?>
                            </p>
                        <?php endwhile;
                    else :
                    endif;
                    ?>

                </div>
                <div class="page__columns">

                    <h5 class="page__title--h5"><?php the_field('title_block_five_template'); ?></h5>
                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('repeat_creating_columns_five_blocks_template')):
                        // перебираем данные
                        while (have_rows('repeat_creating_columns_five_blocks_template')) : the_row(); ?>
                            <div class="page__columns-inner">
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('repeat_column_five_block_template')):
                                    // перебираем данные
                                    while (have_rows('repeat_column_five_block_template')) : the_row(); ?>
                                        <div class="page__columns-item">
                                            <p class="page__description--bold">
                                                <?php the_sub_field('subtitle_block_five_template'); ?>
                                            </p>
                                            <p class="page__description">
                                                <?php the_sub_field('text_block_five_template'); ?>
                                            </p>
                                        </div>
                                    <?php endwhile;
                                else :
                                endif;
                                ?>


                            </div>

                        <?php endwhile;

                    else :

                    endif;

                    ?>
                </div>
                <div class="page__tables">
                    <h4 class="page__title--h4"><?php the_field('table_title'); ?></h4>
                    <table class="page__table">
                        <?php the_field('table'); ?>
                    </table>
                </div>
                <div class="page__divider">
                    <h5 class="page__title--h5"><?php the_field('title_seven_block_template'); ?></h5>
                </div>
                <div class="page__comment">
                    <h4 class="page__title--h4"><?php the_field('title_comment_block_template'); ?></h4>
                    <div class="page__comment-item">
                        <div class="page__comment-icon">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                            >
                                <path
                                        d="M11.1 5.22675H1.5V14.8267H6.3V19.6267H11.1V5.22675Z"
                                        stroke="#912302"
                                        stroke-width="2"
                                />
                                <path
                                        d="M22.5 5.22675H12.9V14.8267H17.7V19.6267H22.5V5.22675Z"
                                        stroke="#912302"
                                        stroke-width="2"
                                />
                            </svg>
                        </div>
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('repeater_comment_template')):
                            // перебираем данные
                            while (have_rows('repeater_comment_template')) : the_row(); ?>
                                <p class="page__comment-content">
                                    <?php the_sub_field('comment_template'); ?>
                                </p>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>

                <div class="page__lists">
                    <?php

                    // проверяем есть ли в повторителе данные
                    if (have_rows('Creating_block_for_bulleted_list')):

                        // перебираем данные
                        while (have_rows('Creating_block_for_bulleted_list')) : the_row(); ?>
                            <div class="page__lists-marked">
                                <h4 class="page__title--h4"><?php the_field('title_nine_block_mark'); ?></h4>
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('repeater_marked_template')):
                                    // перебираем данные
                                    while (have_rows('repeater_marked_template')) : the_row(); ?>
                                        <ul class="page__lists-marked-list">
                                            <li class="page__lists-marked-item">
                                                <div class="page__lists-marked-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         viewBox="0 0 16 16" fill="none">
                                                        <path d="M15 3.71094L5.66667 12.289L1 7.99997" stroke="#1E434C"
                                                              stroke-width="2" stroke-linecap="round"/>
                                                    </svg>
                                                </div>
                                                <div class="page__lists-marked-item-top">
                                                    <div class="page__lists-marked-content">
                                                        <?php the_sub_field('subtitle_nine_block_mark'); ?>
                                                    </div>
                                                    <p class="page__description">
                                                        <?php the_sub_field('text_nine_block_mark'); ?>
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                            </div>

                        <?php endwhile;

                    else :

                    endif;

                    ?>
                    <?php

                    // проверяем есть ли в повторителе данные
                    if (have_rows('Creating_block_for_numbered_list')):

                        // перебираем данные
                        while (have_rows('Creating_block_for_numbered_list')) : the_row(); ?>
                            <div class="page__lists-numbered">
                                <h4 class="page__title--h4"><?php the_field('title_nine_block_numbering'); ?></h4>
                                <ul class="page__lists-numbered-list">
                                    <?php
                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('repeater_numbering_template')):

                                        // перебираем данные
                                        while (have_rows('repeater_numbering_template')) : the_row(); ?>

                                            <li class="page__lists-numbered-item">
                                                <div class="page__list-numbered-content">
                                                    <?php the_sub_field('subtitle_nine_block_numbering'); ?>
                                                </div>
                                                <p class="page__description">
                                                    <?php the_sub_field('text_nine_block_numbering'); ?>
                                                </p>
                                            </li>


                                        <?php endwhile;
                                    else :
                                    endif;
                                    ?>
                                </ul>
                            </div>

                        <?php endwhile;

                    else :

                    endif;

                    ?>


                </div>


                <div class="page__steps">
                    <h4 class="page__title--h4"><?php the_field('title_ten_block_template'); ?></h4>
                    <div class="steps__body-page">
                        <?php

                        // проверяем есть ли в повторителе данные
                        if (have_rows('repeater_ten_block_template')):

                            // перебираем данные
                            while (have_rows('repeater_ten_block_template')) : the_row(); ?>

                                <div class="steps__item-page item-steps__page">
                                    <div class="item-steps__top">
                                        <img
                                                src="<?php the_sub_field('img_ten_block_template'); ?>"
                                                class="item-steps__img"
                                                alt="step preview"
                                        />
                                        <span class="item-steps__step"><?php the_sub_field('span_ten_block_template'); ?></span>
                                    </div>
                                    <p class="item-steps__content item-steps__content--black">
                                        <?php the_sub_field('text_ten_block_template'); ?>
                                    </p>
                                </div>


                            <?php endwhile;

                        else :

                        endif;

                        ?>
                    </div>
                </div>
                <div class="page__info">
                    <h4 class="page__title--h4"><?php the_field('title_eleventh_block_template'); ?></h4>
                    <div class="page__info-inner">
                        <div class="page__info-img">
                            <img src="<?php the_field('img_eleventh_block_template'); ?>" alt=img/>
                        </div>
                        <div class="page__info-content">
                            <h4 class="page__title--h4"><?php the_field('subtitle_eleventh_block_template'); ?></h4>
                            <?php

                            // проверяем есть ли в повторителе данные
                            if (have_rows('repeater_eleventh_block_template')):

                                // перебираем данные
                                while (have_rows('repeater_eleventh_block_template')) : the_row(); ?>
                                    <div class="page__info-descr">
                                        <p class="page__description--bold">
                                            <?php the_sub_field('subtitle_eleventh_block_template_dedicated'); ?>
                                        </p>
                                        <p class="page__description">
                                            <?php the_sub_field('text_eleventh_block_template'); ?>
                                        </p>
                                    </div>
                                <?php endwhile;
                            else :
                            endif;
                            ?>
                            <ul class="page__lists-marked-list">
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('repeater_eleventh_block_template_mark')):
                                    // перебираем данные
                                    while (have_rows('repeater_eleventh_block_template_mark')) : the_row(); ?>

                                        <li class="page__lists-marked-item">
                                            <div class="page__lists-marked-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none">
                                                    <path d="M15 3.71094L5.66667 12.289L1 7.99997" stroke="#1E434C"
                                                          stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div class="page__lists-marked-item-top">
                                                <div class="page__lists-marked-content">
                                                    <?php the_sub_field('subtitle_eleventh_block_template_mark'); ?>
                                                </div>
                                                <p class="page__description">
                                                    <?php the_sub_field('text_eleventh_block_template_mark'); ?>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="page__info">
                    <h4 class="page__title--h4"><?php the_field('title_twelfth_block_template'); ?></h4>
                    <div class="page__info-inner page__info-inner--reverse">
                        <div class="page__info-img">
                            <img src="<?php the_field('img_twelfth_block_template'); ?>"/>
                        </div>
                        <div class="page__info-content">
                            <h4 class="page__title--h4"><?php the_field('subtitle_twelfth_block_template'); ?></h4>
                            <?php

                            // проверяем есть ли в повторителе данные
                            if (have_rows('repeater_twelfth_block_template')):

                                // перебираем данные
                                while (have_rows('repeater_twelfth_block_template')) : the_row(); ?>
                                    <div class="page__info-descr">
                                        <p class="page__description--bold">
                                            <?php the_sub_field('subtitle_twelfth_block_template_dedicated'); ?>
                                        </p>
                                        <p class="page__description">
                                            <?php the_sub_field('text_twelfth_block_template'); ?>
                                        </p>
                                    </div>
                                <?php endwhile;
                            else :
                            endif;
                            ?>

                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('repeater_twelfth_block_template_mark')):

                                // перебираем данные
                                while (have_rows('repeater_twelfth_block_template_mark')) : the_row(); ?>
                                    <ul class="page__lists-marked-list">
                                        <li class="page__lists-marked-item">
                                            <div class="page__lists-marked-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16" fill="none">
                                                    <path d="M15 3.71094L5.66667 12.289L1 7.99997" stroke="#1E434C"
                                                          stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                            <div class="page__lists-marked-item-top">
                                                <div class="page__lists-marked-content">
                                                    <?php the_sub_field('subtitle_twelfth_block_template_mark'); ?>
                                                </div>
                                                <p class="page__description">
                                                    <?php the_sub_field('text_twelfth_block_template_mark'); ?>
                                                </p>
                                            </div>
                                        </li>

                                    </ul>
                                <?php endwhile;
                            else :
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="page__wide-img">
                    <h4 class="page__title--h4"><?php the_field('title_thirteenth_block_template'); ?></h4>
                    <img src="<?php the_field('img_thirteenth_block_template'); ?>" alt="img"/>
                </div>
                <div class="page__two-img">
                    <h4 class="page__title--h4"><?php the_field('title_fourteenth_block_template'); ?></h4>
                    <div class="page__two-inner">
                        <img src="<?php the_field('left_img_block_fourteenth'); ?>" alt="img"/>
                        <img src="<?php the_field('right_img_block_fourteenth'); ?>" alt="img"/>
                    </div>
                </div>
                <div class="page__slider">
                    <h4 class="page__title--h4"><?php the_field('title_fifteenth_block_template'); ?></h4>
                    <div class="page__slider-swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('creating_slide')):
                                // перебираем данные
                                while (have_rows('creating_slide')) : the_row(); ?>
                                    <div class="swiper-slide">
                                        <div class="page__slider-image">
                                            <img src=" <?php the_sub_field('img_slide'); ?>" alt="img"/>
                                        </div>
                                        <p class="page__description">
                                            <?php the_sub_field('text_slide'); ?>
                                        </p>
                                    </div>
                                <?php endwhile;
                            else :
                            endif;
                            ?>

                        </div>
                        <div class="swiper-button-next">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/arrow-right-black.svg"
                                 alt="arrow right"/>
                        </div>
                        <div class="swiper-button-prev">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icons/arrow-left-black.svg"
                                 alt="arrow left"/>
                        </div>
                    </div>
                </div>
                <div class="page__share">
                    <h4 class="page__title--h4"> <?php the_field('title_sixteenth_block_template'); ?></h4>
                    <div class="page__share-inner">
                        <?php

                        // проверяем есть ли в повторителе данные
                        if (have_rows('Creation_social_networks_template')):

                            // перебираем данные
                            while (have_rows('Creation_social_networks_template')) : the_row(); ?>
                                <a href="  <?php the_sub_field('Social_link_networks_template'); ?>"
                                   class="page__share-item">
                                    <div class="page__share-item-icon">
                                        <img src="<?php the_sub_field('Social_image_networks_template'); ?>"
                                             alt="facebook"/>
                                    </div>
                                    <div class="page__share-item-title">  <?php the_sub_field('Name_social_networks_template'); ?></div>
                                </a>

                            <?php endwhile;

                        else :

                        endif;

                        ?>


                    </div>
                </div>
                <div class="page__questions">
                    <h4 class="page__title--h4"><?php the_field('title_seventeenth_block_template'); ?></h4>
                    <div class="question-block__inner">
                        <div class="question-block__spollers">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('Creating_question_and_answer')):

                                // перебираем данные
                                while (have_rows('Creating_question_and_answer')) : the_row(); ?>
                                    <div class="question-block__item question-block__item--transparent">
                                        <div class="question-block__question">
                                            <?php the_sub_field('Last_block_question'); ?>
                                            <img
                                                    src="<?php echo get_template_directory_uri() ?>/img/icons/gray-chevron-bottom.svg"
                                                    alt="chevron bottom"
                                            />
                                        </div>
                                        <div class="question-block__body">
                                            <?php the_sub_field('Last_block_response'); ?>
                                        </div>
                                    </div>

                                <?php endwhile;
                            else :
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </main>
<?php get_footer( 'something' ); ?>