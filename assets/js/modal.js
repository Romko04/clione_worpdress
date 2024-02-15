const input = document.querySelector("#phone");
const button = document.querySelector(".button--submit");

// Отримання всіх кнопок з класом '.single--button' і '.cart--button'
const buttons = document.querySelectorAll('.single--button');

const singlePopup = document.querySelector('.popup--single-product');
const cartPopup = document.querySelector('.cart--form');


const productName = singlePopup.querySelector('.single__title');
const productPrice = singlePopup.querySelector('.price');
const shortDescription = singlePopup.querySelector('.popup__content-info > p');
const fullDescription = singlePopup.querySelector('.single__full-description');
const mainImage = singlePopup.querySelector('.popup__main-photo img');
const thumbnailsContainer = singlePopup.querySelector('.popup__thumbnails');

const mainPhoto = document.querySelector('.popup__main-photo img');
const thumbnails = document.querySelectorAll('.popup__thumbnail img');

// here, the index maps to the error code returned from getValidationError - see readme
const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];


const iti = window.intlTelInput(input, {
    initialCountry: "ua",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // just for formatting/placeholders etc
});




let openPopupsCount = 0; // Лічильник відкритих попапів

// Функція для відкриття попапу
function openPopup(form) {
    const body = document.querySelector('body');
    const unlockPopup = true; // Потрібно перевірити, чому вам треба ця змінна, і можливо змінити її значення відповідно до ваших потреб

    if (unlockPopup) {
        body.classList.add('body--lock');
        form.classList.add('active');
        openPopupsCount++; // Збільшуємо лічильник відкритих попапів
    }
}

// Функція для закриття попапу
function closePopup(form) {
    const body = document.querySelector('body');

    form.classList.remove('active');
    openPopupsCount--; // Зменшуємо лічильник відкритих попапів
    if (openPopupsCount === 0) {
        body.classList.remove('body--lock'); // Відкриваємо скрол, якщо всі попапи закриті
    }
}

// Обробник кліків
window.addEventListener('click', (e) => {
    if (e.target.closest('.single--button')) {
        e.target.classList.add('loaded')
        const productId = e.target.getAttribute('data-id');
        getInfoProduct(productId, e.target);
    }
    if (e.target.closest('.cart--button')) {
        e.target.classList.add('loaded')
        const productId = e.target.getAttribute('data-id');
        addToCart(productId, e.target)
    }

    if (!e.target.closest('.popup__content') || e.target.closest('.popup__close')) {
        const popup = e.target.closest('.popup--form');
        if (popup) {
            e.preventDefault();
            closePopup(popup); // Закриття попапу при кліку поза попапом або на кнопці закриття
        }
    }
});






// Отримуємо всі елементи .product__quantity
// const quantityElements = document.querySelectorAll('.product__quantity');

// Додаємо обробник подій для кожного .product__quantity
// quantityElements.forEach(quantityElement => {
//     const minusBtn = quantityElement.querySelector('.minus');
//     const plusBtn = quantityElement.querySelector('.plus');
//     const input = quantityElement.querySelector('.quantity__input');

//     minusBtn.addEventListener('click', (e) => {
//         e.preventDefault();
//         let value = parseInt(input.value);
//         value = isNaN(value) ? 0 : value;
//         value = Math.max(value - 1, 0);
//         input.value = value;
//         if (value === 0) {
//             // Якщо кількість стане 0 або від'ємною, видаляємо продукт
//             deleteProduct(e, quantityElement);
//         }
//     });

//     plusBtn.addEventListener('click', (e) => {
//         e.preventDefault();
//         let value = parseInt(input.value);
//         value = isNaN(value) ? 0 : value;
//         input.value = value + 1;
//     });
// });





// Функція для заповнення інформацією про товар
function fillProductInfo(data) {
    productName.textContent = data.name;
    productPrice.textContent = '$' + data.price;
    shortDescription.textContent = data.short_description;
    fullDescription.innerHTML = data.description
    mainImage.setAttribute('src', data.main_image);

    // Очистка контейнера з мініатюрами
    thumbnailsContainer.innerHTML = '';

    // Заповнення додаткових зображень
    data.additional_images.forEach(imageUrl => {
        const thumbnail = document.createElement('div');

        thumbnail.addEventListener('click', function () {
            const thumbnailSrc = imageUrl;
            mainPhoto.setAttribute('src', thumbnailSrc);
        });

        thumbnail.classList.add('popup__thumbnail');
        const img = document.createElement('img');
        img.setAttribute('src', imageUrl);
        thumbnail.appendChild(img);
        thumbnailsContainer.appendChild(thumbnail);
    });

    // Додавання класу active
    openPopup(singlePopup)
}



// Функція для отримання інформації про товар
function getInfoProduct(productId, btn) {
    fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'action=get_product_info&product_id=' + productId
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Помилка AJAX-запиту: ' + response.status);
            }
            return response.json(); // Перетворення в JSON
        })
        .then(data => {
            btn.classList.remove('loaded')
            fillProductInfo(data.data);
        })
        .catch(error => {
            console.error('Помилка:', error);
        });
}


//Добавляємо товар в корзину, та виводимо товари в попап
function addToCart(productId, btn) {
    fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'action=add_to_cart&product_id=' + productId
    })
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Помилка AJAX-запиту: ' + response.status);
            }
            return response.text();
        })
        .then(function (data) {
            var productsContainer = document.querySelector('.products');
            // Вставляємо отриманий HTML-код у .products
            productsContainer.innerHTML = data;
            btn.classList.remove('loaded')
            openPopup(cartPopup)
        })
        .catch(function (error) {
            console.error(error);
        });
}