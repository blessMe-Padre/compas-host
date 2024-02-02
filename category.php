<?php
get_header();
?>

<main>
    <h1 class="visually-hidden">Каталог товаров</h1>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><a class="text-xs text-light-gray" href="/category">Каталог ></a></li>
                <li><span class="text-xs " href="#">
                        <?php single_cat_title(); ?>
                    </span></li>
            </ul>
        </div>
        <div class="catalog__wrapper py-10 relative">
            <!-- sidebar -->

            <button class="catalog-menu-button">
                <span>категории</span>
                <img src="<?php echo get_template_directory_uri() ?>/src/img/arrow-up.svg" alt="">
            </button>

            <div class="catalog-form__sidebar">
                <nav class="catalog-menu">
                    <?php wp_nav_menu([
                        'theme_location' => 'side-bar-menu',
                        'container' => '',
                        'menu_class' => 'menu',
                        'menu_id' => ''
                    ]);
                    ?>
                </nav>

            </div>

            <ul class="catalog__content">
                <!-- content -->
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <li class="catalog__content-item" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                            <div>
                                <div class="py-4 px-7">
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/new.png" width="480"
                                        height="600" alt="новинка">
                                </div>
                                <p class="text-xs sm:text-lg text-gray pb-3">
                                    <?php the_title(); ?>
                                </p>
                            </div>
                            <a class="flex items-center justify-between gap-3 catalog__content-link"
                                href="<?php the_permalink(); ?>">
                                <span class="text-base sm:text-lg uppercase font-medium">ЗАКАЗАТЬ</span>
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/arrow-right.svg" width="19"
                                    height="21" alt="заказать">
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>

            </div>
            <div class="navigation">
                <?php
                global $wp_query;

                $big = 999999999; // нужно большое число
                $current = max(1, get_query_var('paged'));

                echo paginate_links(
                    array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => $current,
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '←',
                        'next_text' => '→',
                    )
                );
                ?>
            </div>
            <?php
                }
                // постов нет
                else {
                    echo "<h2>Товаров не найдено.</h2>";
                }
                ?>
        <!-- /container -->
    </div>




</main>

<?php get_footer(); ?>