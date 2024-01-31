<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Спецодежда во Владивостоке">
    <title>Спецодежда во Владивостоке</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>
    <div class="h-screen grid grid-rows-[auto_1fr_auto]">
        <header class="z-10 w-full md-28 transition-colors">
            <div class="container">

                <div class=" gap-5 items-center justify-between flex mb-5 pt-2">
                    <div>
                        <img class="w-[150px] sm:w-full" loading="lazy"
                            src="<?php echo get_template_directory_uri() ?>/src/img/logo.png" width="490" height="117"
                            alt="лого">
                    </div>
                    <form action="#" class="header-search-form hidden md:flex">
                        <button>
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/icon-search.svg"
                                height="22" width="22" alt="search">
                        </button>
                        <input type="text" placeholder="Поиск">
                    </form>

                    <div class="flex flex-col sm:gap-2">
                        <div class="flex flex-wrap items-center justify-between sm:items-end sm:gap-2 md:justify-end">
                            <div class="flex items-center justify-center gap-2">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/icon-phone.svg"
                                    width="22" height="22" alt="phone">
                                <a class="text-[8px] sm:text-base md:text-2xl font-medium text-dark-blue"
                                    href="tel:+84232641409">8 (423) 264-14-09</a>
                            </div>
                            <div class="flex items-center justify-center gap-2">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/icon-point.svg"
                                    width="6" height="6" alt="point">
                                <a class="text-[8px] sm:text-base md:text-2xl font-medium text-dark-blue"
                                    href="tel:+84232641635">8 (423) 264-16-35</a>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center justify-end sm:justify-center md:justify-end sm:gap-2">
                            <div class="flex items-center gap-3">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/icon-pin.svg"
                                    width="22" height="22" alt="pin">
                                <p class="text-[8px] sm:text-base">г. Владивосток, ул. Фадеева, 45 а</p>
                            </div>
                            <p class="text-[8px] sm:text-base">пн-пт 9:00 - 17:00</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-5 relative">
                    <button class="btn-close-menu hidden sm:flex">
                        <svg viewBox="0 0 64 48">
                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                        </svg>
                        <span>Каталог</span>
                    </button>
                    <button class="btn-close-menu sm:hidden">
                        <svg viewBox="0 0 64 48">
                            <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                            <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                            <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                        </svg>
                        <span>Меню</span>
                    </button>

                    <nav class="header-nav">
                        <ul>
                            <li>
                                <a class="text-dark-blue font-medium transition-colors hover:text-blue" href="#">О
                                    компании</a>
                            </li>
                            <li>
                                <a class="text-dark-blue font-medium transition-colors hover:text-blue"
                                    href="#">Партнеры</a>
                            </li>
                            <li>
                                <a class="text-dark-blue font-medium transition-colors hover:text-blue"
                                    href="#">Отзывы</a>
                            </li>
                            <li>
                                <a class="text-dark-blue font-medium transition-colors hover:text-blue" href="#">Как
                                    купить</a>
                            </li>
                            <li>
                                <a class="text-dark-blue font-medium transition-colors hover:text-blue"
                                    href="#">Полезное</a>
                            </li>
                            <li>
                                <a class="text-dark-blue font-medium transition-colors hover:text-blue"
                                    href="#">Контакты</a>
                            </li>
                        </ul>
                        <div class="header-form-mobile-wrapper">
                            <form action="#">
                                <button>
                                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/icon-search.svg"
                                        height="22" width="22" alt="search">
                                </button>
                                <input class="w-full" type="text" placeholder="Поиск">
                            </form>
                        </div>
                    </nav>

                    <div class="flex flex-col items-start justify-between pt-20 overflow-hidden">
                        <div class="mobile-menu">
                            <ul>
                                <li><a href="#">О нас</a>
                                </li>
                                <li><a href="#">Одежда</a>
                                </li>
                                <li><a href="#">Головные уборы 1</a>
                                </li>
                                <li><a href="#">Головные уборы 2</a>
                                </li>
                                <li><a href="#">Головные уборы3 </a>
                                </li>
                                <li><a href="#">Головные уборы 4</a>
                                </li>
                                <li><a href="#">Головные уборы 5</a>
                                </li>
                                <li><a href="#">Головные уборы 6</a>
                                </li>
                                <li><a href="#">Головные уборы 7</a>
                                </li>
                                <li><a href="#">Головные уборы 8</a>
                                </li>
                                <li><a href="#">Головные уборы 9</a>
                                </li>
                                <li><a href="#">Головные уборы 10</a>
                                </li>
                                <li><a href="#">Головные уборы 11</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>