<?php
/*
Template Name: Каталог - шаблон
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Каталог товаров</h1>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><span class="text-xs " href="#">Каталог</span></li>
            </ul>
        </div>
        <div class="py-10 relative">
            <!-- content -->
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
        <!-- /container -->
    </div>




</main>

<?php get_footer(); ?>