<?php
/*
Template Name: Контакты- шаблон
*/
?>
<?php get_header(); ?>

<main>
    <div class="container">
        <div class="breadcrums py-7">
            <ul class="flex gap-3">
                <li><a class="text-xs text-light-gray" href="/">Главная ></a></li>
                <li><span class="text-xs " href="#">Контакты </span></li>
            </ul>
        </div>
        <h1 class="text-3xl sm:text-5xl md:text-7xl uppercase font-bold mb-7">Контакты</h1>
        <p class="uppercase text-lg sm:text-2xl font-bold mb-7">Отдел оптовых продаж:</p>

        <div class="max-w-3xl mb-7">

            <div class=" grid-cols-[320px_200px_1fr] py-1 px-2 bg-blue-2 text-white mb-5 hidden sm:grid">
                <p>Имя</p>
                <p>Телефон</p>
                <p>Email</p>
            </div>

            <div class="grid sm:grid-cols-[320px_200px_1fr] text-lg text-gray justify-between mb-5">
                <div class="bg-blue-2 text-white p-2 sm:bg-white sm:text-main-black">Авилова Инна Андреевна
                </div>
                <div>
                    <a class="block" href="tel:+79644308012">+7-964-430-80-12</a>
                    <a class="block" href="tel:+79146557590">+7-914-655-75-90</a>
                </div>
                <div>
                    <a class="block" href="mailto:avilovaia@compass25.ru">avilovaia@compass25.ru</a>
                    <a class="block" href="mailto:inna0884@mail.ru">inna0884@mail.ru</a>
                </div>
            </div>

            <div class="grid sm:grid-cols-[320px_200px_1fr] text-lg text-gray justify-between">
                <div class="bg-blue-2 text-white p-2 sm:bg-white sm:text-main-black">Варфоломеева Зоя Львовна
                </div>
                <div>
                    <a class="block" href="tel:2729775">272-97-75</a>
                    <a class="block" href="tel:+79147029775">+7 914 702 97 75</a>
                </div>
                <div>
                    <a class="block" href="mailto:varflomeevazl@compass25.ru">varflomeevazl@compass25.ru</a>
                    <a class="block" href="mailto:vzl2015@mail.ru">vzl2015@mail.ru</a>
                </div>
            </div>
        </div>
        <p class="uppercase text-lg sm:text-2xl font-bold mb-7">Адреса:</p>

        <div class="grid sm:grid-cols-2 gap-8 py-10">
            <div>
                <p class="mb-5 font-semibold">г. Владивосток, ул. Фадеева 45А (офис-склад)</p>
                <p class="font-semibold">Телефон</p>
                <a class="mb-5" href="tel:+84232641409">8 (4232) 64-14-09</a>

                <p class="font-semibold">Телефон\Факс</p>
                <a class="mb-4" href="tel:+84232641635">8 (4232) 64-16-35</a>
                <p class="mb-16">На этом адресе реализация товаров производится ТОЛЬКО по безналичному расчету
                </p>
                <div>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=131.955814%2C43.100740&mode=whatshere&whatshere%5Bpoint%5D=131.955814%2C43.100740&whatshere%5Bzoom%5D=17&z=17"
                        width="100%" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe>
                </div>
            </div>
            <div>
                <p class="mb-5 font-semibold">г. Владивосток, проспект Красного Знамени, 91, Магазин «Компас»
                </p>
                <p class="font-semibold">Телефон</p>
                <a class="mb-5" href="tel:+74232446090">8 (4232) 44-60-90</a>

                <p class="font-semibold">Email</p>
                <a class="mb-4" href="mailto:mail@compass25.ru">mail@compass25.ru</a>
                <p class="mb-10">Реализация товаров производится за НАЛИЧНЫЙ(КАРТОЙ) расчет, а также по
                    безналичному расчету с юридическими лицами.</p>
                <div>
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?ll=131.914725%2C43.126558&mode=search&oid=1019129971&ol=biz&z=17"
                        width="100%" height="400" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>