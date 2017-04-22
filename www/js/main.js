/**
 * Функция добавления товара в корзину
 * @param integer itemId ID продукта
 * @return в случае успеха обновляются данные корзины на странице
 */
function addToCart(itemId)
{
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addtocart/" + itemId + "/",
        dataType: 'json',
        success: function(data) {
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    });
}

/**
 * Удаление товара из корзины
 * @param integer itemId ID продукта
 * @return в случае успеха обновляются данные корзины на странице
 */
function removeFromCart(itemId)
{
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/removefromcart/" + itemId + "/",
        dataType: 'json',
        success: function(data) {
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }
        }
    });
}

/**
 * Подсчет суммы выбранного товара
 * @param integer itemId ID продукта
 */
function conversionPrice(itemId)
{
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;
    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}