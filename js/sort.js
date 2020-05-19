const products = document.querySelectorAll('.mango_person_product');

const fromInput = document.querySelector(".range");
fromInput.addEventListener('change', changedPriceHandler);

const toInput = 2000;

/** Обработчик события на изменения полей ввода. */
function changedPriceHandler() {
    const fromPrice = fromInput.value;
    const toPrice = toInput;

    if (fromPrice !== 0) {
        showProductsWithBothPrices();
}
}

/** Показывает продукты с обеими диапазонами. */
function showProductsWithBothPrices() {
    const fromPrice = Number(fromInput.value);
    const toPrice = Number(toInput);
    products.forEach(function(product) {
        const productPrice = Number(product.querySelector('.item__price').textContent.trim());
        if (productPrice >= fromPrice && productPrice <= toPrice) {
            showProduct(product);
        } else {
            hideProduct(product);
        }
    });
}

/** @param {HTMLDivElement} product */
function hideProduct(product) {
    product.style.display = 'none';
}

/** @param {HTMLDivElement} product */
function showProduct(product) {
    product.style.display = 'block';
}
