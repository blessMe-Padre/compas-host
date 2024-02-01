<?php
/*
Template Name: Главная страница
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Спецодежда во Владивостоке</h1>

    <section class="hero">
        <img src="<?php echo get_template_directory_uri() ?>/src/img/hero.webp" width="1920" height="673" alt="hero">
        <div class="container relative">
            <h2>Спецодежда во&nbsp;Владивостоке</h2>
        </div>
    </section>

    <section class="catalog">
        <div class="container">
            <h2 class="h2-title mb-8">Каталог</h2>
            <ul class="catalog__list">

                <?php
                $args = array(
                    'parent' => 0 // Получаем только родительские категории
                );
                $categories = get_categories($args); // Получаем список категорий
                foreach ($categories as $category) { // Перебираем каждую категорию
                    $category_link = get_category_link($category->term_id); // Получаем ссылку на категорию
                    $category_name = $category->name; // Получаем название категории
                    ?>

                    <li class="catalog__item">
                        <a href="<?php echo esc_url($category_link); ?>">
                            <div class="catalog__img">
                                <!-- Здесь можно добавить изображение для категории, если оно есть -->
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product.png" width="230"
                                    height="260" alt="image">
                            </div>
                            <div class="catalog__item-wrapper">
                                <span>[</span>
                                <p class="text-sm sm:text-lg">
                                    <?php echo esc_html($category_name); ?>
                                </p>
                                <span>]</span>
                            </div>
                        </a>
                    </li>

                    <?php
                }
                ?>

            </ul>
        </div>
    </section>

    <section class="new">
        <div class="container">
            <div class="flex items-center justify-between gap-6 mb-8">
                <h2 class="h2-title">новинки</h2>
                <div class="swiper-button-wrapper bg-blue-2">
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="w-0 min-w-[100%]">
                <div class="new-swiper swiper">
                    <div class="swiper-wrapper">

                        <?php
                        $my_posts = get_posts(
                            array(
                                'numberposts' => -1,
                                'category' => 122,
                                'orderby' => 'title',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            )
                        );

                        foreach ($my_posts as $post) {
                            setup_postdata($post);
                            ?>

                            <div class="swiper-slide new-item">
                                <div>
                                    <div class="py-4 px-7">
                                        <?php
                                        $photos = get_field('product_img');
                                        if ($photos) {
                                            $first_photo = reset($photos); // Получаем первое изображение
                                            echo '<img class="object-cover" src="' . esc_url($first_photo['url']) . '" alt="">';
                                        } else {
                                            echo 'No photos found.';
                                        }
                                        ?>
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/src/img/new.png" width="480"
                                            height="600" alt="новинка"> -->
                                    </div>
                                    <p class="text-xs sm:text-lg text-gray pb-3">
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                                <a class="flex items-center justify-between gap-3 new-item-link"
                                    href="<?php the_permalink(); ?>">
                                    <span class="text-lg uppercase font-medium">ЗАКАЗАТЬ</span>
                                </a>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="contact py-8 sm:py-16">
        <div class="contact__wrapper">
            <div class="bg-dark-blue text-white p-5 sm:p-10">
                <h2 class="text-2xl sm:text-7xl font-bold mb-7">Контакты</h2>
                <div class="flex gap-2 text-lg sm:text-2xl mb-5">
                    <span class="text-blue-2">[</span>
                    <p class="uppercase font-bold">Адрес</p>
                    <span class="text-blue-2">]</span>
                </div>
                <p class="text-lg sm:text-2xl">г. Владивосток, ул. Фадеева, 45 а</p>
                <p class="text-lg sm:text-2xl mb-7">пн-пт 9:00 - 17:00</p>

                <div class="flex gap-2 text-lg sm:text-2xl mb-5">
                    <span class="text-blue-2">[</span>
                    <p class="uppercase font-bold">телефон</p>
                    <span class="text-blue-2">]</span>
                </div>
                <div class="mb-8">
                    <a class="link text-lg sm:text-2xl block" href="tel:+74232641409">8 (423) 264-14-09</a>
                    <a class="link text-lg sm:text-2xl block" href="tel:+74232641635">8 (423) 264-16-35</a>
                </div>

                <div class="flex gap-2 text-lg sm:text-2xl mb-5">
                    <span class="text-blue-2">[</span>
                    <p class="uppercase font-bold">электронная почта</p>
                    <span class="text-blue-2">]</span>
                </div>
                <a class="link text-lg sm:text-2xl" href="mailto:mail@compass25.ru">mail@compass25.ru</a>

            </div>
            <div class="contact__map">
                <div style="position:relative;overflow:hidden;">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=131.914725%2C43.126558&mode=search&oid=1019129971&ol=biz&z=17"
                        width="100%" height="100%" frameborder="1" style="position:relative;"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>