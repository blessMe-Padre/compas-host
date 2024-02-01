<?php
/*
Template Name: Отзывы- шаблон
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Как купить</h1>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><span class="text-xs " href="#">Отзывы</span></li>
            </ul>
        </div>
    </div>

    <section class="py-10 md:py-20">
        <div class="container">
            <h2 class="text-lg sm:text-2xl md:text-4xl font-bold uppercase mb-8 sm:mb-16">Отзывы</h2>

            <?php the_content(); ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>