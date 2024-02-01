<?php
/*
Template Name: О компании - шаблон
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">О компании</h1>

    <section class="hero hero--about">
        <img src="<?php echo get_template_directory_uri() ?>/src/img/bg-about.webp" width="1920" height="673"
            alt="hero">
        <div class="container relative">
            <h2>Если Вам нужен надежный партнер — это к нам!</h2>
        </div>
    </section>

    <section class="page-content py-8 sm:py-16 md:py-32">
        <div class="container">
            <h2 class="text-2xl font-bold mb-8"><span class="text-blue">[ </span>ООО «КОМПАС-СП»<span class="text-blue">
                    ]</span></h2>

            <?php the_content(); ?>
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