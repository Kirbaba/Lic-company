jQuery(document).ready(function(){
    if(document.getElementById('addPrice')) {
        document.getElementById("addPrice").onkeypress = function (event) {
            event = event || window.event;
            if (event.charCode && (event.charCode < 48 || event.charCode > 57))// проверка на event.charCode - чтобы пользователь мог нажать backspace, enter, стрелочку назад...
                return false;
        };
    }
});