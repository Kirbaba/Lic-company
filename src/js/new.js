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
});
