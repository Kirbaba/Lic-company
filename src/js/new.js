$(document).ready(function(){
    $('#sendQuestion').on('click', function(){
        var name = $('.writetous__box--inp--name').val();
        var email = $('.writetous__box--inp--email').val();
        var text = $('.writetous__box--text').val();
        $.ajax({
            url: myajax.act, //url, к которому обращаемся
            type: "POST",
            data: "action=sendQ&name=" + name, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function (data) {
                console.log(data);
            }
        });
        return false;
    });
});

$(function(){
    alert('123-123--it still work');
});