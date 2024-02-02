<?php
/*
Template Name: Страница поиска - шаблон
*/
?>
<?php
get_header();
?>
<main>
    <div class="container">
        <section class="inner-page-main mt-40">

            <div class="flex mb-5">
                <h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative search-title">
                    Результаты поиска для:
                    <?php echo get_search_query(); ?>
                </h1>
            </div>

            <ul class="search-list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <li class="search-item new-item">
                            <div>
                                <div class="py-4 px-7">
                                    <?php
                                    // Получаем изображения продукта
                                    $photos = get_field('product_img');
                                    if ($photos) {
                                        // Если изображения есть, выводим первое из них
                                        $first_photo = reset($photos); // Получаем первое изображение
                                        echo '<img class="object-cover" src="' . esc_url($first_photo['url']) . '" alt="">';
                                    } else {
                                        // Если изображений нет, выводим сообщение
                                        echo 'Изображение не найдено.';
                                    }
                                    ?>
                                </div>
                                <p class="text-xs sm:text-lg text-gray pb-3">
                                    <?php the_title(); // Выводим заголовок поста ?>
                                </p>
                            </div>
                            <a class="flex items-center justify-between gap-3 new-item-link"
                                href="<?php the_permalink(); // Ссылка на полный пост ?>">
                                <span class="text-lg uppercase font-medium">ЗАКАЗАТЬ</span>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>По вашему запросу ничего не найдено.</p>
                <?php endif; ?>
            </ul>
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
        </section>
    </div>
</main>
<?php
get_footer();
?>