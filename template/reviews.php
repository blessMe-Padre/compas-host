<?php
/*
Template Name: Отзывы- шаблон
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Отзывы</h1>
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
            <div class="flex items-center justify-between mb-8 sm:mb-16">
                <h2 class="text-lg sm:text-2xl md:text-4xl font-bold uppercase">Отзывы</h2>
                <a class="popup-link text-lg font-semibold text-blue" href="#popup">
                    [ оставить отзыв ]
                </a>
            </div>

            <?php the_content(); ?>

        </div>
    </section>

    <section id="popup" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path d="M4 1.45508L19.9099 17.365" stroke="#22253C" />
                        <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#22253C" />
                    </svg>
                </button>
                <h2 class="text-start text-main-black z-10 font-normal md:text-4xl text-xl uppercase pb-10 ">
                    Оставить отзыв</h2>

                <div class="form-wrapper">
                    <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>