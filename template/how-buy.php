<?php
/*
Template Name: Как купить- шаблон
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="visually-hidden">Как купить</h1>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><span class="text-xs " href="#">Как купить </span></li>
            </ul>
        </div>
    </div>

    <section class="py-10 md:py-20">
        <div class="container">

            <h2 class="text-lg sm:text-2xl md:text-4xl font-bold uppercase mb-8 sm:mb-16">Представленный на
                данном
                сайте товар Вы
                сможете приобрести:</h2>

            <div class="grid sm:grid-cols-2 gap-8 mb-8 sm:mb-16">
                <div>
                    <div class="flex items-center gap-4 mb-7">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/buy-card.svg" width="65"
                            height="65" alt="card">
                        <h3 class="uppercase font-semibold">по безналичному расчету</h3>
                    </div>
                    <p>Реализация по безналичному расчету производится в офисе компании по адресу
                        г. Владивосток,
                        ул. Фадеева 45а</p>
                    <div class="mb-7">
                        <span>тел\факс</span>
                        <a href="tel:+2641409"> 264-14-09</a>
                        <a href="tel:+2641635">264-16-35</a>
                    </div>
                    <p class="font-medium mb-4 uppercase">КАК ПРОИСХОДИТ ПОКУПКА</p>
                    <ul class="pl-5 list-disc mb-7">
                        <li>Вы делаете заявку</li>
                        <li>Вам выставляется счет, по которому товар резервируется на 10 дней</li>
                        <li>Переводите необходимую сумму на расчетный счет компании</li>
                        <li>Приезжаете к нам в офис</li>
                        <li>Оформляете все необходимые документы</li>
                        <li>Получаете товар</li>
                    </ul>
                    <p><strong>ВНИМАНИЕ!</strong> Реализация по безналичному договору производится только после
                        подписания ДОГОВОРА ПОСТАВКИ! Наличие доверенности на право получения
                        <strong>ОБЯЗАТЕЛЬНО!</strong>
                    </p>
                </div>
                <div>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=131.955814%2C43.100740&mode=whatshere&whatshere%5Bpoint%5D=131.955814%2C43.100740&whatshere%5Bzoom%5D=17&z=17"
                        width="100%" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-8 mb-7">
                <div>
                    <div class="flex items-center gap-4 mb-7">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/buy-cash.svg" width="65"
                            height="65" alt="card">
                        <h3 class="uppercase font-semibold">за наличный расчет</h3>
                    </div>
                    <p class="mb-5">Реализация за наличный расчет, с предоставлением всехсопутствующих
                        документов
                        (копия чека\накладная), производится у нашего дилера ИП Шелякин В.А</p>
                    <p>Магазин «КОМПАС», г. Владивосток, проспект Красного Знамени, 91</p>
                    <div class="mb-7">
                        <span class="font-medium">тел\факс</span>
                        <a class="font-medium" href="tel:+2641409"> 264-14-09</a>,
                        <a class="font-medium" href="tel:+2641635">264-16-35</a>
                    </div>

                </div>
                <div>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=131.914725%2C43.126558&mode=search&oid=1019129971&ol=biz&z=17"
                        width="100%" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>