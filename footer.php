<footer class="py-12 bg-dark-blue text-white">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <img class="mb-5" src="<?php echo get_template_directory_uri() ?>/src/img/logo-footer.png" width="226"
                    height="65" alt="logo">
                <div>
                    <p class="font-medium">Компания "Компас-СП" </p>
                    <p>Все права защищены</p>
                </div>
                <a class="font-light underline mt-32 hidden lg:block link" href="/policy" target="_blank"
                    rel="noopener noreferrer">Политика
                    конфиденциальности</a>
            </div>

            <div class="footer__section">
                <h3 class="font-bold uppercase mb-5">каталог</h3>
                <div class="footer__list footer__list--columns">
                    <?php wp_nav_menu([
                        'theme_location' => 'catalog-footer',
                        'container' => '',
                        'menu_class' => '',
                        'menu_id' => ''
                    ]);
                    ?>
                </div>
            </div>

            <div class="footer__section-2">
                <h3 class="font-bold uppercase mb-5">клиентам</h3>
                <div class="footer__list">
                    <?php wp_nav_menu([
                        'theme_location' => 'footer-menu',
                        'container' => '',
                        'menu_class' => '',
                        'menu_id' => ''
                    ]);
                    ?>
                </div>
            </div>

            <div class="footer__section-3">
                <h3 class="font-bold uppercase mb-5">Контакты</h3>
                <ul class="footer__list-contact">
                    <li class="footer__item footer__item--1">
                        <a class="link" href="tel:+84232641409">8 (423) 264-14-09</a>
                        <a class="link" href="tel:+84232641635">8 (423) 264-16-35</a>
                    </li>
                    <li class="footer__item footer__item--2">
                        <p>г. Владивосток, ул. Фадеева, 45 а</p>
                        <p>пн-пт 9:00 - 17:00</p>
                    </li>
                    <li class=" footer__item footer__item--3"><a class="link"
                            href="mailto:mail@compass25.ru">mail@compass25.ru</a></li>

                </ul>
            </div>

            <a class="font-light underline lg:hidden footer__policy link" href="/policy" target="_blank"
                rel="noopener noreferrer">Политика
                конфиденциальности</a>
        </div>
    </div>
</footer>
</div>
<div class="scroll-top">
    <img src="<?php echo get_template_directory_uri() ?>/src/img/up-arrow.svg" alt="стрелка вверх">
</div>
<?php wp_footer(); ?>

<script type="module" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
</body>

</html>