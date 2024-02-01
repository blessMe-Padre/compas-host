<?php
get_header();
?>

<main>
    <h1 class="visually-hidden">Каталог товаров</h1>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><a class="text-xs text-light-gray" href="#">Каталог ></a></li>
                <li><span class="text-xs " href="#">Летняя спецодежда </span></li>
            </ul>
        </div>
        <div class="catalog__wrapper py-10 relative">
            <!-- sidebar -->
            <button class="catalog-menu-button">
                <span>Категории</span>
                <img src="./src/img/arrow-up.svg" alt="свернуть">
            </button>
            <div class="catalog-form__sidebar">
                <nav class="catalog-menu">
                    <ul class="menu">
                        <li>
                            <a href="#">Новинки</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Костюмы</a>
                                </li>
                                <li>
                                    <a href="#">Халаты</a>
                                </li>
                                <li>
                                    <a href="#">Фартуки</a>
                                </li>
                                <li>
                                    <a href="#">Головные уборы</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Одежда</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Костюмы зимние</a>
                                </li>
                                <li>
                                    <a href="#">Куртки зимние</a>
                                </li>
                                <li>
                                    <a href="#">Меховая одежда</a>
                                </li>
                                <li>
                                    <a href="#">Полукомбинезоны</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Одежда</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Костюмы зимние</a>
                                </li>
                                <li>
                                    <a href="#">Куртки зимние</a>
                                </li>
                                <li>
                                    <a href="#">Меховая одежда</a>
                                </li>
                                <li>
                                    <a href="#">Полукомбинезоны</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">Одежда</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Костюмы зимние</a>
                                </li>
                                <li>
                                    <a href="#">Куртки зимние</a>
                                </li>
                                <li>
                                    <a href="#">Меховая одежда</a>
                                </li>
                                <li>
                                    <a href="#">Полукомбинезоны</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <ul class="catalog__content">
                <!-- content -->
                <?php
                // проверяем есть ли посты в глобальном запросе - переменная $wp_query
                if (have_posts()) {
                    // перебираем все имеющиеся посты и выводим их
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
                            <a class="flex items-center justify-between gap-3 catalog__content-link" href="">
                                <span class="text-base sm:text-lg uppercase font-medium">ЗАКАЗАТЬ</span>
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/arrow-right.svg" width="19"
                                    height="21" alt="заказать">
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>

                <div class="navigation">
                    <div class="next-posts">
                        <?php next_posts_link(); ?>
                    </div>
                    <div class="prev-posts">
                        <?php previous_posts_link(); ?>
                    </div>
                </div>

                <?php
                }
                // постов нет
                else {
                    echo "<h2>Записей нет.</h2>";
                }
                ?>
            </ul>
        </div>

    </div>




</main>

<?php get_footer(); ?>