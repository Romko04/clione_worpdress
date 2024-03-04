const input = document.querySelector("#phone");
const button = document.querySelector(".button--submit");
const cartCount = document.querySelectorAll('.cart__count > span')
const totalProducts = document.querySelector('.cart__form > .count')

const cartOverlay = document.querySelector('.cart-overlay');

// Отримання всіх кнопок з класом '.single--button' і '.cart--button'
const buttons = document.querySelectorAll('.single--button');

const singlePopup = document.querySelector('.popup--single-product');
const cartPopup = document.querySelector('.cart--form');

const singlePopupContent = document.querySelector('.popup__content--single');


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
const menu = document.querySelector('.menu__body')

// Функція для закриття попапу
function closePopup(form) {
    const body = document.querySelector('body');

    form.classList.remove('active');
    if (menu.classList.contains('active')) {
        openPopupsCount--;
        return
    }
     // Зменшуємо лічильник відкритих попапів
     openPopupsCount--;
    if (openPopupsCount === 0) {
        body.classList.remove('body--lock'); // Відкриваємо скрол, якщо всі попапи закриті
    }
}

// Обробник кліків
window.addEventListener('click', (e) => {
    if (e.target.closest('.single--button')) {
        e.preventDefault()

        e.target.classList.add('loaded')
        const productId = e.target.getAttribute('data-id');
        getInfoProduct(productId, e.target);
    }
    if (e.target.closest('.cart--button')) {
        e.preventDefault();
        e.target.classList.add('loaded');
        const productId = e.target.getAttribute('data-id');
        const quantity = e.target.getAttribute('data-quantity'); // Отримання значення кількості з атрибуту data-quantity
        addToCart(productId, quantity, e.target);
    }
    if (e.target.closest('.cart')) {
        e.preventDefault()

        openPopup(cartPopup)
    }

    if (e.target.closest('.product__delete')) {
        e.preventDefault()

        const closeIcon = e.target.closest('.product__delete')
        const element = e.target.closest('.product__item')
        const productKey = closeIcon.getAttribute('data-key');
        if (productKey) {
            removeFromCart(productKey, element)
        }
    }
    const plusIcon = e.target.closest('.plus');
    const minusIcon = e.target.closest('.minus');
    const productItem = e.target.closest('.product__item');
    if (plusIcon) {
        e.preventDefault()
        let productTotal = productItem.querySelector('.product__total');
        const element = plusIcon.previousElementSibling;
        const productKey = plusIcon.getAttribute('data-key');
        if (productKey) {
            updateQuantityCartItem(productKey, element, true, productTotal);
        }
    }

    if (minusIcon) {
        e.preventDefault()
        let productTotal = productItem.querySelector('.product__total');
        const element = minusIcon.nextElementSibling;
        const productKey = minusIcon.getAttribute('data-key');
        if (productKey) {
            const inputValue = parseInt(element.value);
            // Перевіряємо, чи значення інпута не дорівнює 1
            inputValue === 1 ? removeFromCart(productKey, productItem) : updateQuantityCartItem(productKey, element, false, productTotal);
        }
    }



    if (!e.target.closest('.popup__content') || e.target.closest('.popup__close')) {
        const popup = e.target.closest('.popup--form');
        if (popup) {
            closePopup(popup); // Закриття попапу при кліку поза попапом або на кнопці закриття
        }
    }
    const mainPhoto = document.querySelector('.popup__main-photo img');
    const thumbnails = document.querySelectorAll('.popup__thumbnail img');

    if (thumbnails.length > 0) {
        thumbnails.forEach(thumbnail => {
            if (thumbnail.contains(e.target)) {
                const thumbnailSrc = thumbnail.getAttribute('src');
                mainPhoto.setAttribute('src', thumbnailSrc);
            }
        });
    }
    ;
});





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
            singlePopupContent.innerHTML = data.data.html_content
            openPopup(singlePopup)
        })
        .catch(error => {
            console.error('Помилка:', error);
        });
}


//Добавляємо товар в корзину, та виводимо товари в попап
function addToCart(productId, quantity, btn) {
    var formData = new FormData();
    formData.append('action', 'add_to_cart');
    formData.append('product_id', productId);
    if(quantity) {
        formData.append('quantity', quantity);
    }

    fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: formData
    })
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Помилка AJAX-запиту: ' + response.status);
            }
            return response.json();
        })
        .then(function (data) {
            var productsContainer = document.querySelector('.products');
            updateTotalProducts(data.totalProducts);
            productsContainer.innerHTML = data.cart_content_html;
            quantity? updateCartCount(+quantity) : updateCartCount(+1)
            btn.classList.remove('loaded');
            openPopup(cartPopup);
            updateCartInputHidden();
            updateSubmitButton();
        })
        .catch(function (error) {
            console.error(error);
        });
}



// Функція для видалення товару з кошика
function removeFromCart(productkey, productElement) {
    cartOverlay.classList.add('active');
    fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'remove_from_cart',
            product_key: productkey,
        }),
    })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Network response was not ok.');
            }
        })
        .then(data => {
            if (data.success) {
                updateTotalProducts(data.data.totalProducts)
                updateCartCount(-data.data.quantity)
                productElement.remove()
                updateCartInputHidden()
                updateSubmitButton()
            }
        })
        .catch(error => {
            // Обробка помилки
            console.error('Error removing product from cart:', error);
        })
        .finally(() => {
            // Приховати плашку недоступності корзини після завершення запиту
            cartOverlay.classList.remove('active');
        });
}



function updateQuantityCartItem(productkey, productElement, quantity, subtotal) {
    cartOverlay.classList.add('active');
    const quantityChange = quantity ? 1 : -1;
    fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            action: 'update_cart',
            product_key: productkey,
            quantity_change: quantity
        }),
    })
        .then(function (response) {
            if (!response.ok) {
                throw new Error('Помилка AJAX-запиту: ' + response.status);
            }
            return response.json(); // Змінено метод для парсингу JSON
        })
        .then(function (data) {
            // Перевірка наявності ключа success у відповіді
            if (data.success) {
                // Оновлення кількості товарів у корзині
                updateTotalProducts(data.totalProducts)
                subtotal.innerHTML = data.subTotal
                updateCartCount(quantityChange)
                productElement.value = parseInt(productElement.value) + quantityChange
                updateCartInputHidden()
                updateSubmitButton()
                // Тут можна додати інші дії в разі успішної відповіді, якщо потрібно
            } else {
                throw new Error('Помилка оновлення кількості товару в корзині.');
            }
        })
        .catch(function (error) {
            console.error(error);
            // Тут можна додати код для обробки помилок
        }
        )
        .finally(() => {
            // Приховати плашку недоступності корзини після завершення запиту
            cartOverlay.classList.remove('active');
        })

}


function updateTotalProducts(html) {
    totalProducts.innerHTML = html
}


function updateCartCount(symbol) {
    cartCount.forEach(item=>{
        item.innerHTML = parseInt(item.textContent) + symbol;
    })
}




function updateCartInputHidden() {
    let products = document.querySelectorAll('.product__item');
    let cartInfoString = '';
    products.forEach(item => {
        let productName = item.querySelector('.product__title').textContent.trim();
        let productPrice = item.querySelector('.product__info-left span').textContent.trim();
        let productQuantity = item.querySelector('.quantity__input').value;
        let productId = item.getAttribute('data-id'); // assuming the plus button has the product key as data-key attribute
        let productTotal = item.querySelector('.product__total .woocommerce-Price-amount')?.textContent.trim();
    
        let cartItemString = `Товар: *${productName}*, айді товару: ${productId}, ціна: ${productPrice}, загальна ціна: ${productTotal}, кількість: ${productQuantity}\n\n`;
    
        cartInfoString += cartItemString;
    });

    const check = document.querySelector('.check')
    let productsTotal = document.querySelector('.count .woocommerce-Price-amount')?.textContent.trim();
    check.value = productsTotal
    document.getElementById('cart_info').value = cartInfoString;
}

updateCartInputHidden()
document.addEventListener('wpcf7mailsent', function(event) {
    if ('83' == event.detail.contactFormId) { // Замініть 'your-form-id' на ID вашої форми CF7
        clearCart()
    }
}, false);

function clearCart() {
    cartOverlay.classList.add('active');
    fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'clear_cart',
        }),
    })
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Network response was not ok.');
            }
        })
        .then(data => {
            if (data.success) {
                
                let productItems = document.querySelectorAll('.product__item');
                productItems.forEach(function(item) {
                    item.remove();
                });
                let productsTotal = document.querySelector('.count .woocommerce-Price-amount');
                updateCartCount(-data.data.total)
                productsTotal.remove()
                updateSubmitButton()
            }
        })
        .catch(error => {
            // Обробка помилки
            console.error('Error clearing cart:', error);
        })
        .finally(() => {
            // Приховати плашку недоступності корзини після завершення запиту
            cartOverlay.classList.remove('active');
        });
}

function updateSubmitButton() {
    let productItems = document.querySelectorAll('.product__item');
    const submitButton = document.querySelector('#cart .button--submit');
    
    if (productItems.length < 1) {
        submitButton.setAttribute('disabled', 'disabled');
    } else {
        submitButton.removeAttribute('disabled');
    }
}

// Викликаємо функцію для першої перевірки при завантаженні сторінки
updateSubmitButton();


