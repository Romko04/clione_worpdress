document.addEventListener("DOMContentLoaded", (event) => {

    const menuBody = document.querySelector('.menu__body');
    const header = document.querySelector('header')

    const singleButton = document.querySelector('.goods__single--button')

    const isMobileOrTablet = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

    if (!isMobileOrTablet) {
        // Отримуємо всі елементи меню з підменюшками
        let menuItems = document.querySelectorAll(".menu-item-has-children");

        // Проходимося по кожному елементу меню
        menuItems.forEach(function (menuItem) {
            let subMenu = menuItem.querySelector(".sub-menu");
            let timeout;

            // Функція для показу підменю
            function showSubMenu() {
                clearTimeout(timeout);
                subMenu.classList.add("active");
            }

            // Функція для приховування підменю
            function hideSubMenu() {
                timeout = setTimeout(function () {
                    subMenu.classList.remove("active");
                }, 300); // Затримка перед закриттям підменю (в мілісекундах)
            }

            // Додаємо обробники подій для кожного елементу меню
            menuItem.addEventListener("mouseenter", showSubMenu);
            menuItem.addEventListener("mouseleave", hideSubMenu);

            subMenu.addEventListener("mouseenter", showSubMenu);
            subMenu.addEventListener("mouseleave", function (event) {
                // Перевіряємо, чи курсор покинув підменю і не повертається на батьківський елемент меню
                if (!menuItem.contains(event.relatedTarget) && event.relatedTarget !== menuItem) {
                    hideSubMenu();
                }
            });
        });

    }

    window.addEventListener('scroll', () => {
        if (window.scrollY > header.offsetHeight) {
            document.body.style.marginTop = header.offsetHeight + 'px'
            header.classList.add('fixed')
        } else {
            header.classList.remove('fixed')
            document.body.removeAttribute('style')

        }
    })





    // Анімація для горизонтальних бігучих строк
    const tickerItems = document.querySelectorAll('.ticker-animation');

    function updateOpacity() {
        tickerItems.forEach((item, index) => {
            const containerRect = item.parentElement.getBoundingClientRect();
            const itemRect = item.getBoundingClientRect();
            const distanceFromLeft = itemRect.left - containerRect.left;

            // Обчислюємо відсоток прогресу по шляху
            const progress = distanceFromLeft / containerRect.width;

            // Використовуємо квадратичну функцію для плавної зміни прозорості
            let opacity = 1 - Math.pow(progress, 2);
            opacity = Math.max(opacity, 0.1);

            // Задаємо плавний перехід прозорості
            item.style.transition = 'opacity 0.5s ease-in-out';
            item.style.opacity = opacity;
        });
    }
    updateOpacity();


    const verticalTextSpans = document.querySelectorAll('.vertical-text > span');

    // Викликаємо функцію один раз при завантаженні сторінки, щоб ініціалізувати прозорість
    if (verticalTextSpans) updateOpacityVertical()

    // Анімація для вертикальних бігучих строк
    function updateOpacityVertical() {

        verticalTextSpans.forEach((item, index) => {
            const containerRect = item.parentElement.getBoundingClientRect();
            const itemRect = item.getBoundingClientRect();
            const distanceFromTop = itemRect.top - containerRect.top;
            const containerHeight = containerRect.bottom - containerRect.top;

            // Обчислюємо відсоток прогресу по шляху
            const progress = 1 - (distanceFromTop / containerHeight);

            // Використовуємо квадратичну функцію для плавної зміни прозорості
            let opacity = 1 - Math.pow(progress, 2);
            opacity = Math.max(opacity, 0.1);

            // Задаємо плавний перехід прозорості
            item.style.opacity = opacity;
        });
    }




    // Event listeners
    document.addEventListener('click', (e) => {
        if (e.target.closest('.header__burger') || e.target.closest('.header__menu-cancel')) {
            e.preventDefault()
            toggleMenu()
        }
        //new
        if (e.target.closest('.plamine__about-list__item')) {
            let wrapper = e.target.closest('.plamine__about-list__item')
            let accordion = wrapper.querySelector('.plamine__about-list__item-text');
            wrapper.classList.toggle('active')
            if (accordion.style.maxHeight) {
                accordion.style.maxHeight = null;
            } else {
                accordion.style.maxHeight = accordion.scrollHeight + 'px';
            }
        }

        if (e.target.closest('.accordeon__wrapper')) {
            let wrapper = e.target.closest('.accordeon__wrapper')
            let accordion = wrapper.querySelector('.accordion');
            wrapper.classList.toggle('active');

            let panel = accordion.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + 'px';
            }
        }
        if (isMobileOrTablet) {
            if (e.target.classList.contains('menu-item-has-children')) {
                const list = e.target.closest('.menu-item-has-children')
                list.classList.toggle('active');
                let nextElement = e.target.querySelector('.sub-menu')
                if (nextElement) {
                    if (list.classList.contains('active')) {
                        nextElement.style.padding = '2rem 3rem';
                        nextElement.style.marginTop = '2rem';
                        let totalHeight = nextElement.scrollHeight + 60
                        nextElement.style.maxHeight = (totalHeight / 10) + 'rem';
                    } else {
                        nextElement.style.padding = '0';
                        nextElement.style.marginTop = '0';
                        nextElement.style.maxHeight = '0';
                    }
                    nextElement.classList.toggle('active');
                }
            }
        }

        if (e.target.closest('.plus--page')) {
            const input = e.target.closest('.plus--page').previousElementSibling
            updateQuantity(input, +1)
        }
        
        if (e.target.closest('.minus--page')) {
            const input = e.target.closest('.minus--page').nextElementSibling
            if (input.value == 1) {
                return
            }
            updateQuantity(input, -1)
        }

    })

    function updateQuantity(input, value) {
        input.value = input.value = parseInt(input.value) + value;
        singleButton.setAttribute('data-quantity', input.value);
    }



    function toggleMenu() {
        const btn = document.querySelector('.header__burger');
        menuBody.classList.toggle('active');
        btn.classList.toggle('active');
        btn.classList.contains('active') ? document.body.classList.add('body--lock') : document.body.classList.remove('body--lock')
    }


});
