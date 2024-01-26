import './bootstrap';
import 'flowbite';

const menu = document.getElementById('dropdown-menu');

window.dropDownMenu = function () {
    document.getElementById('dropdown-menu').classList.toggle('hidden');
}

menu.addEventListener('click', function (e) {
    e.preventDefault();

    if (e.target) {
        if (!menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
        }
    }
})



