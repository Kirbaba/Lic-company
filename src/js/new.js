$(document).ready(function(){
    $('#sendQuestion').on('click', function(){
        var name = $('.writetous__box--inp--name').val();
        var email = $('.writetous__box--inp--email').val();
        var text = $('.writetous__box--text').val();
        $.ajax({
            url: myajax.act, //url, к которому обращаемся
            type: "POST",
            data: "action=sendQ&name=" + name + "&email=" + email + "&text=" + text,
            success: function (data) {
                console.log(data);
            }
        });
        return false;
    });

    $('#askQuestion').on('click', function(){
        var ask = $(this).prev().val();
        $.ajax({
            url: myajax.act, //url, к которому обращаемся
            type: "POST",
            data: "action=askQ&ask=" + ask,
            success: function (data) {
                location.reload();
            }
        });
        return false;
    });

    $('.plus').on('click', function(){
        var count = parseInt($(this).parent().prev().children().text(), 10);
        $(this).parent().prev().children().text(count + 1);
        return false;
    });

    $('.minus').on('click', function(){
        var count = parseInt($(this).parent().prev().children().text(), 10);
        if(count != 1){
            $(this).parent().prev().children().text(count - 1);
        }
        return false;
    });

    $('.add_to_basket').on('click', function(){
        var postId = $(this).attr('post_id');
        var count = parseInt($('#count_' + postId).text(), 10);
        var price = parseInt($('#price_' + postId).text(), 10);
        var title = $('#title_' + postId).text();
        var basketPrice = parseInt($('#basket_price').text(), 10);
        $.ajax({
            url: myajax.act, //url, к которому обращаемся
            type: "POST",
            data: "action=add_to_basket&post=" + postId + "&count=" + count + "&price=" + price + "&title=" + title,
            success: function (data) {
                $('#basket_price').text(basketPrice + count * price);
                console.log(data);
            }
        });
        return false;
    });

    $('#del_from_basket').on('click', function(){
        var post = $(this).attr('post_id');
        $.ajax({
            url: myajax.act, //url, к которому обращаемся
            type: "POST",
            data: "action=del_from_basket&post=" + post ,
            success: function (data) {
                location.reload();
            }
        });
        return false;
    });
});
