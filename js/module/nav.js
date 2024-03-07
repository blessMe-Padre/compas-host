export const initNav = () => {
    const body = document.querySelector('body');
    // Меню
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileMenuCatalog = document.querySelector('.mobile-menu-catalog');
    const menuButtons = document.querySelector('.btn-close-menu');
    const menuButtons2 = document.querySelector('.btn-close-menu-2');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');


    menuButtons.addEventListener('click', e => {
        menuButtons.classList.toggle('active');
        mobileMenuCatalog.classList.toggle('is-active');
        // body.classList.toggle('lock');
    });

    menuButtons2.addEventListener('click', e => {
        menuButtons2.classList.toggle('active');
        mobileMenu.classList.toggle('is-active');
        // body.classList.toggle('lock');
    });

    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            // menuButtons.classList.remove('active');
            mobileMenu.classList.remove('is-active');
            // body.classList.remove('lock');
        });
    });
}