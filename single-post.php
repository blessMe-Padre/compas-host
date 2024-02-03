<?php
/*
Template Name: Товар - шаблон
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Карточка товара</h1>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><a class="text-xs text-light-gray" href="/category">Каталог ></a></li>
                <li><span class="text-xs " href="#"><?php the_title();?></span></li>
            </ul>
        </div>

        <div class="card">
            <div class="card__wrapper">

                <div class="card__sliders w-0 min-w-[100%]">
                    <div class="swiper slider__slider w-0 min-w-[100%]">
                        <div class="swiper-wrapper gallery-wrapper">
                            <?php
                            $photos = get_field('product_img');
                            if ($photos) {
                                foreach ($photos as $photo) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a href="' . esc_url($photo['url']) . '">';
                                    echo '<img class="object-cover" src="' . esc_url($photo['url']) . '" alt="">';
                                    echo '</a>';
                                    echo '</div>';
                                }
                            } else {
                                echo 'No photos found.';
                            }
                            ?>
                        </div>

                    </div>

                    <div class="swiper slider__thumb">
                        <div class="swiper-wrapper">
                            <?php
                            $photos = get_field('product_img');
                            if ($photos) {
                                foreach ($photos as $photo) {
                                    echo '<div class="swiper-slide">';
                                    echo '<img class="" src="' . esc_url($photo['url']) . '" alt="">';
                                    echo '</div>';
                                }
                            } else {
                                echo 'No photos found.';
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="card__descriptions">
                    <h2 class="text-sm sm:text-2xl uppercase font-bold mb-7">
                        <?php the_title(); ?>
                    </h2>

                    <ul class="card__descriptions-list">
                        <li>
                            <div class="card__descriptions-item"><strong>Цвет</strong></div>
                            <span class="card__descriptions-item text-gray">Серый с красным</span>
                        </li>
                        <li>
                            <div class="card__descriptions-item"><strong>Размер</strong></div>
                            <span class="card__descriptions-item text-gray">с 44-46 по 120–124 (170-176,
                                182-188)</span>
                        </li>
                        <li>
                            <div class="card__descriptions-item"><strong>Ткань</strong></div>
                            <span class="card__descriptions-item text-gray">смесовая Твил 240г/м2, 65% Пэ, 35%
                                Х/б, ВО</span>
                        </li>
                        <li>
                            <div class="card__descriptions-item"><strong>Защитные свойства</strong></div>
                            <span class="card__descriptions-item text-gray">Ми, З</span>
                        </li>
                    </ul>

                    <div class="mb-7">
                        <h3><strong>Описание</strong></h3>
                        <?php the_content(); ?>
                    </div>

                    <a class="flex items-center justify-start gap-3 popup-link link" href="#popup">
                        <span class="text-lg uppercase font-medium">ЗАКАЗАТЬ</span>
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/arrow-right.svg" width="19"
                            height="21" alt="заказать">
                    </a>

                </div>
            </div>
        </div>

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
                        ОФОРМИТЬ ЗАКАЗ</h2>
                    <div>
                        <p class="text-base">Оставьте свои данные и мы
                            свяжемся с вами в ближайшее время</p>
                    </div>
                    <div class="form-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="4f96066" title="Оформить заказ"]');?>
                        <!-- <form action="#" id="form" class="form validate-form flex-col">
                            <input type="hidden" value="<?php the_title();?>">

                            <div class="form__item">
                                <input id="formName" type="text" name="name" class="form__input _req w-full"
                                    placeholder="Ваше имя">
                            </div>

                            <div class="form__item">
                                <input id="formPhone" type="tel" name="phone" class="form__input _req w-full"
                                    placeholder="+7 999 999 99 99">
                            </div>

                            <div class="form__item">
                                <input id="formEmail" type="email" name="email" class="form__input _req w-full"
                                    placeholder="Адрес электронной почты">
                            </div>

                            <button type="submit"
                                class="form__button button py-2 my-5 flex justify-start w-full gap-2 link">
                                <span class="text-lg text-blue-2 uppercase font-semibold">[</span>
                                <span class="text-lg text-blue-2 uppercase font-semibold">отправить
                                    заявку</span>
                                <span class="text-lg text-blue-2 uppercase font-semibold">]</span>
                            </button>
                        </form> -->
                    </div>
                    <p class="form-section__descriptions w-full">Нажимая кнопку “отправить заявку” вы даёте
                        согласие на <a class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку
                            персональных
                            данных</a></p>
                </div>
            </div>
        </section>
</main>

<?php get_footer(); ?>