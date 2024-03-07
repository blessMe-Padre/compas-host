<?php
/*
Template Name: Каталог - шаблон страницы 
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
                $current_category_id = isset($_GET['parent_cat']) ? intval($_GET['parent_cat']) : 0; // Получаем ID текущей категории из GET-параметра
                
                $args = array(
                    'parent' => $current_category_id, // Используем текущий ID категории как parent для отображения дочерних категорий
                    'hide_empty' => true, // Скрываем пустые категории
                );

                $categories = get_categories($args); // Получаем список категорий (дочерних или родительских, в зависимости от текущей категории)
                
                foreach ($categories as $category) {
                    $category_link = get_category_link($category->term_id); // Получаем ссылку на категорию
                    $category_name = $category->name; // Получаем название категории
                
                    // Проверяем, есть ли у категории дочерние элементы
                    $child_args = array(
                        'parent' => $category->term_id,
                        'hide_empty' => true,
                    );
                    $child_categories = get_categories($child_args);

                    // Если у категории есть дочерние категории, изменяем ссылку для открытия в catalog.php с параметром
                    if (!empty($child_categories)) {
                        $category_link = add_query_arg('parent_cat', $category->term_id, get_permalink(get_page_by_path('catalog')));
                    }
                    ?>

                    <li class="catalog__item">
                        <a href="<?php echo esc_url($category_link); ?>">
                            <div class="catalog__img">
                                <!-- Место для изображения категории, если оно есть -->
                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/product.png" width="230"
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