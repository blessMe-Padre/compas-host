export const initHiddenInput = () => {
    const title = document.querySelector('.card__descriptions h2');
    const input = document.getElementById('hidden-input');
    input.value = title.innerText;
}