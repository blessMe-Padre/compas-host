<?php
/*
Template Name: Полезное- шаблон
*/
?>
<?php get_header(); ?>

<main>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><span class="text-xs " href="#">Полезное </span></li>
            </ul>
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-7xl uppercase font-bold">Полезное</h1>

        <div class="grid sm:grid-cols-2 gap-8 mb-20 sm:mb-40">
            <a class="flex flex-col sm:flex-row items-center justify-between gap-5 py-3 px-4 sm:px-9 bg-light-gray-2"
                href="#">
                <p class="text-base sm:text-2xl font-bold">
                    <span class="text-blue">[</span>
                    Таблицы размеров обуви
                    <span class="text-blue">]</span>
                </p>
                <img src="<?php echo get_template_directory_uri() ?>/src/img/usefull-1.png" width="198" height="198"
                    alt="image">
            </a>
            <a class="flex flex-col sm:flex-row items-center justify-between gap-5 py-3 px-4 sm:px-9 bg-light-gray-2"
                href="#">
                <p class="text-base sm:text-2xl font-bold">
                    <span class="text-blue">[</span>
                    Таблица по уходу за одеждой
                    <span class="text-blue">]</span>
                </p>
                <img src="<?php echo get_template_directory_uri() ?>/src/img/usefull-2.png" width="198" height="198"
                    alt="image">
            </a>

        </div>
    </div>

</main>

<?php get_footer(); ?>