var cart = {}; //корзина



function init(){
//    вычитываем файл goods.json
    $.getJSON("goods.json", goodsOut);
}

function goodsOut(data){
    //вывод на страницу

    console.log(data);
    var out = "";
    for (var key in data) {
        out +='<div class="cart">';
        out +=`<p class="name">${data[key].name}</p>`;
        out +=`<img src="image/${data[key].img}" alt="">`;
        out +=`<div class="cost">${data[key].cost} руб</div>`;
        out += `<div class="medcost">${data[key].mcost} мк</div>`;
        out += `<div class="descr">${data[key].description}</div>`;
        out +=`<button class="add-to-cart" data-id="${key}">Заказать</button>`;
        out +='</div>';

    }
    $('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart);
}

function addToCart() {
//    добавляем товар в корзину
    var id = $(this).attr('data-id');
    console.log(id);
    if (cart[id]==undefined){
        cart[id] = 1;
    }
    else {
        cart[id]++;
    }
    showMiniCart();
    saveCart();

}

function showMiniCart(){
    var out = "";
    for (var key in cart) {
        out += key +' - '+ cart[key]+' шт.'+'<br>';
    }
    $('.mini-cart').html(out);
}

function saveCart() {
    localStorage.setItem('cart',JSON.stringify(cart));
}

function loadCart() {
    //проверка есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(function (){
    init();
    loadCart();
});